<?php

namespace App;

use App\Entity\Client\Company\Company;
use App\Entity\User\Position;
use App\Entity\User\Transaction\Timesheet;
use App\Entity\User\Transaction\Wage;
use App\Entity\User\WorkersStatistick;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

/**
 * @property int $id
 * @property int $daily_rate
 * @property string $name
 * @property string $last_name
 * @property string $avatar
 * @property string $phone
 * @property bool $phone_verified
 * @property bool $phone_auth
 * @property string $email
 * @property string $provider
 * @property string $status
 * @property double $balance
 * @property string $password
 * @property string $verify_token
 * @property string $phone_verify_token
 * @property Carbon $phone_verify_token_expire
 * @property string $role
 */
class User extends Authenticatable
{


    use Notifiable;
    public const STATUS_WAIT = 'wait';
    public const STATUS_ACTIVE = 'active';
    public const ROLE_USER = 'worker';
    public const ROLE_OWNER = 'owner';
    public const ROLE_OWNER_REGION = 'owner_region';
    public const ROLE_MANAGER = 'manager';
    public const ROLE_MANAGER_REGION = 'manager_region';
    public const ROLE_TECHNOLOGIST = 'technologist';
    public const ROLE_TECHNOLOGIST_REGION = 'technologist_region';
    public const ROLE_LABORATORY = 'laboratory';

    protected $fillable = [
        'name', 'email', 'password','status','role', 'phone','position_id','daily_rate','visa','employed'

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function roleList(): array
    {
        return [
            self::ROLE_USER => 'worker',
            self::ROLE_OWNER => 'owner',
            self::ROLE_OWNER_REGION => 'owner_region',
            self::ROLE_MANAGER => 'manager',
            self::ROLE_MANAGER_REGION => 'manager_region',
            self::ROLE_TECHNOLOGIST => 'technologist',
            self::ROLE_TECHNOLOGIST_REGION => 'technologist_region',
            self::ROLE_LABORATORY => 'laboratory',

        ];

    }

    public static function register(string $name, string $email, string $password): self
    {
        return static ::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'verify_token' => Str::uuid(),
            'status' => self::STATUS_WAIT,
            'role' => self::ROLE_USER,
        ]);
    }

    public static function new($name, $email): self
    {
        return static ::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt(Str::random()),
            'status' => self::STATUS_ACTIVE,
            'role' => self::ROLE_USER,
        ]);
    }

    public function isWait():bool
    {
        return $this->status === self::STATUS_WAIT;
    }

    public function isActive():bool
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    public function verify(): void
    {
        if(!$this->isWait()){
            flash('Користувач уже верифікований')->important();
        }
        $this->update([
            'verify_token' => null,
            'status' => self::STATUS_ACTIVE,
        ]);

    }
    public function username(): string
    {
        return $this->name;
    }
    public function changeRole($role): void
    {
        if (!\in_array($role, [self::ROLE_USER,self::ROLE_MANAGER,
            self::ROLE_MANAGER_REGION, self::ROLE_OWNER,
            self::ROLE_OWNER_REGION, self::ROLE_LABORATORY,
            self::ROLE_TECHNOLOGIST, self::ROLE_TECHNOLOGIST_REGION ],
        true)){
            throw new \DomainException('Доступ вже наданий.');
        }
        $this->update(['role' => $role]);
    }
    public function isOwner(){
        return $this->role === self::ROLE_OWNER;
    }
    public function isOwnerRegion(){
        return $this->role === self::ROLE_OWNER_REGION;
    }
    public function isManagerRegion(){
        return $this->role === self::ROLE_MANAGER_REGION;
    }
    public function isManager(){
        return $this->role === self::ROLE_MANAGER;
    }
    public function isTechnologistRegion(){
        return  $this->role === self::ROLE_TECHNOLOGIST_REGION;
    }
    public function isTechnologist(){
        return $this->role === self::ROLE_TECHNOLOGIST;
    }
    public function isLaboratory(){
        return $this->role === self::ROLE_LABORATORY;
    }
    public function isUser(){
        return $this->role === self::ROLE_USER;
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    public function wage()
    {
        return $this->belongsTo(Wage::class, 'user_id', 'id');
    }
    public function monthsStatistick(){

    }
        //офіційно працевлаштований
    public function employed(){
        if ($this->employed == 1){
            return true;
        }
        else{
            return false;
        }

    }
    //має денну ставку
    public function dailyRate(){
        if ($this->daily_rate != 0){
            return true;
        }
        else{
            return false;
        }

    }
    public function total($wagesFine,$wagesWage, $wagesPremium, $wagesAdvance, $number_of_days){
        if($this->dailyRate()){
            $total = $number_of_days * $this->daily_rate;
            return $total;
        }else{
            $total = ($wagesWage + $wagesPremium + $wagesAdvance) - $wagesFine;
            return $total;
        }
    }
    public function wages($wagesFine,$wagesWage, $wagesPremium, $wagesAdvance){
        $wages = ($wagesWage + $wagesPremium + $wagesAdvance) - $wagesFine;
            return $wages;
    }

    public function updateMonthsStatistick($months, $year){
        $monthsStatistick = WorkersStatistick::where('months',$months)->where('year',$year)->where('user_id',$this->id)->first();
//        Аванс
        $wagesAdvance = Wage::where('months',$months)->where('year',$year)->where('user_id',$this->id)->where('type', 1)->sum('sum');
//        Премія
        $wagesPremium = Wage::where('months',$months)->where('year',$year)->where('user_id',$this->id)->where('type', 3)->sum('sum');
//        Зарплата
        $wagesWage = Wage::where('months',$months)->where('year',$year)->where('user_id',$this->id)->where('type', 2)->sum('sum');
//        Штраф
        $wagesFine = Wage::where('months',$months)->where('year',$year)->where('user_id',$this->id)->where('income_expense', 2)->sum('sum');
        $number_of_days = Timesheet::where('months',$months)->where('year',$year)->where('user_id',$this->id)->sum('count_day');
        $total = $this->total($wagesFine,$wagesWage, $wagesPremium, $wagesAdvance, $number_of_days);
        $wages = $this->wages($wagesFine,$wagesWage, $wagesPremium, $wagesAdvance);
        $residual = $total - $wages;
        if (isset($monthsStatistick)){
            $monthsStatistick->update([
                'user_id' =>$this->id,
                'months'=>$months,
                'year'=>$year,
                'number_of_days'=> $number_of_days,
                'premium'=> $wagesPremium,
                'fine'=> $wagesFine,
                'wage'=> $wages,
                'accrued_with_taxes'=>0,
                'received_on_the_card'=>0,
                'total'=> $total,
                'residual'=> $residual,
            ]);
        }else{
            $monthsStatistick = WorkersStatistick::create([
                'user_id' =>$this->id,
                'months'=>$months,
                'year'=>$year,
                'number_of_days'=>$number_of_days,
                'premium'=> $wagesPremium,
                'fine'=> $wagesFine,
                'wage'=> $wages,
                'accrued_with_taxes'=>0,
                'received_on_the_card'=>0,
                'total'=> $total,
                'residual'=> $residual,
            ]);
        }
    }
}


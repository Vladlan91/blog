<?php


namespace App\UseCases\Workers;


use App\Entity\User\Transaction\Wage;
use App\Entity\User\WorkersStatistick;
use App\User;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;


class WorkersService
{
    public $data;
    public $countDays;
    private $year;

    public function __construct(){
        $this->data = Carbon::now();
        $this->countDays = $this->data->daysInMonth;
        $this->year = $this->data->year;
    }

    public function getWorkersMonths($user){
        $workers_months = WorkersStatistick::where('user_id',$user->id)->where('year',$this->year)->orderBy('months')->get();
        return $workers_months;
    }

    public function getWorkerMonths_One($user){
        $workers_months_one = WorkersStatistick::where('user_id',$user->id)->where('year',$this->year)->where('months', $this->data->month)->first();
        if(isset($workers_months_one)){
            return $workers_months_one;
        }else{
            return new WorkersStatistick;
        }
    }

    public function getWorkersMonthsMax($user){
        $workers_months_max = WorkersStatistick::where('user_id',$user->id)->where('year',2021)->orderBy('months')->max('total');
        return $workers_months_max;
    }

    public function getWorkersMonthsMin($user){
        $workers_months_min = WorkersStatistick::where('user_id',$user->id)->where('year',2021)->orderBy('months')->min('total');
        return $workers_months_min;
    }

    public function getWorkersMonthsAvg($user){
        $workers_months_avg = WorkersStatistick::where('user_id',$user->id)->where('year',2021)->orderBy('months')->avg('total');
        return $workers_months_avg;
    }

    public function update($request, $user){
        DB::transaction( function () use ($request, $user){
            if($request->has('employed')){
                $user->update([
                    'employed' => 1,
                ]);
            }else{
                $user->update([
                    'employed' => null,
                ]);
            }
            $user->update([
                'name' => $request['name'],
                'position_id' => $request['position'],
                'daily_rate' => $request['daily_rate'],
                'visa' => $request['visa'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'role' => $request['role'],
            ]);
            if ($request->get('password') !== null){
                $user->password = bcrypt($request['password']);
                $user->saveOrFail();
            }
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                if(isset($user->avatar)){
                    unlink(public_path($user->avatar));
                }
                $filename = $image->getClientOriginalName();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('user/' . $filename));
                $user->avatar = 'user/' . $filename;
                $user->saveOrFail();
            }

        });
        return $user;
    }

    public function store($request) : User{
        return DB::transaction( function () use ($request){
            $user = User::create([
                'name' => $request['name'],
                'position_id' => $request['position'],
                'daily_rate' => $request['daily_rate'],
                'visa' => $request['visa'],
                'phone' => $request['phone'],
                'email' => $request['email'],
                'role' => $request['role'],
                'password' => bcrypt($request['password']),
            ]);
            if($request->has('employed')){
                $user->update([
                    'employed' => 1,
                ]);
            }else{
                $user->update([
                    'employed' => null,
                ]);
            }
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $filename = $image->getClientOriginalName();
                $image_resize = Image::make($image->getRealPath());
                $image_resize->resize(300, 300);
                $image_resize->save(public_path('user/' . $filename));
                $user->avatar = 'user/' . $filename;
                $user->saveOrFail();
            }
            return $user;
        });

    }

    public function wageSum(User $user){
        $wages = Wage::forUser($user)->orderByDesc('id')->where('year', $this->data->year)->where('months', $this->data->month)->where('income_expense',1)->sum('sum');
        if($wages != 0){
            return $wages;
        }else{
            return 0;
        }
    }

    public function fineSum(User $user){
        $fine = Wage::forUser($user)->orderByDesc('id')->where('year', $this->data->year)->where('months', $this->data->month)->where('income_expense',2)->sum('sum');
        if($fine != 0){
            return $fine;
        }else{
            return 0;
        }
    }

}

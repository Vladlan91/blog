<?php


namespace App\Entity\User\Transaction;



use App\User;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

/**
 * @property int $id
 * @property int $user_id
 * @property int $months
 * @property int $count_day
 * @property int $year
 * @property int $type
 * @property int $type_transaction
 * @property int $income_expense
 * @property int $sum
 * @property int $created_user_id
 * @property string $reason_fine
 * @property Carbon $update_at
 * @property Carbon $created_at

 * @property User $user
 * @method Builder forUser(User $user)
 */
class Wage extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'transaction_wage';

    protected $fillable = ['user_id','months','count_day','year','type','type_transaction','income_expense','sum','created_user_id','reason_fine'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function scopeForUser(Builder $query, User $user)
    {
        return $query->where('user_id', $user->id);
    }

}

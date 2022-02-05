<?php


namespace App\Entity\User\Transaction;


use App\Entity\Floor\Portfolio;
use App\User;

class Timesheet extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'transaction_timesheet';

    protected $fillable = ['user_id','portfolio_id','months','year','type','created_user_id','reason_fine','count_day'];

    public static function typeList(): array
    {
        return [
            self::STATUS_MAIN => 'main',
            self::STATUS_MORE => 'more',
            self::STATUS_DEFECT => 'defect',
            self::STATUS_OTHER => 'other',
        ];

    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id', 'id');
    }
    public function hasPortfolio(){
        if( $this->portfolio_id !== null){
            return true;
        }else{
            return false;
        }
    }
}

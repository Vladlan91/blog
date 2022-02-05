<?php


namespace App\Entity\User;


use App\Entity\User\Transaction\Wage;
use App\User;

class WorkersStatistick extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'users_workers_months';

    protected $fillable = ['user_id','months','year','number_of_days','premium','fine','wage','accrued_with_taxes','received_on_the_card','total','residual'];

}

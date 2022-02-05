<?php


namespace App\Entity\User;


class Position extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'users_position';

    protected $fillable = ['position_uk','position_ru'];
}

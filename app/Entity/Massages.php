<?php


namespace App\Entity;

/**
 * Class Massages
 * @package App\Entity
 * @property string $phone
 * @property string $name
 * @property string $email
 * @property string $massages


 */
class Massages extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'massages';

    protected $fillable = ['phone','name','email','massages'];
}

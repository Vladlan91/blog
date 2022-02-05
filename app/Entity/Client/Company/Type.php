<?php


namespace App\Entity\Client\Company;


class Type extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'type';

    protected $fillable = ['name', 'description'];


    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}

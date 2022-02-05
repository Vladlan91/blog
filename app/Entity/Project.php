<?php


namespace App\Entity;


class Project extends \Illuminate\Database\Eloquent\Model
{
    public $table = "project";

    protected $fillable = [
        'slag','view'
    ];

    public  $timestamps = false;
}

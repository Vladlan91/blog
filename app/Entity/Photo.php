<?php


namespace App\Entity;


class Photo extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'portfoli_foto';

    public $timestamps = false;

    protected $fillable = ['portfolio_id','file','type'];

    public static function typeList(): array
    {
        return [
            self::VIDEO => 'video',
            self::PHOTO => 'photo',

        ];

    }
}

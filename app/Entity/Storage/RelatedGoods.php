<?php


namespace App\Entity\Storage;


class RelatedGoods extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'related_goods';

    protected $fillable = ['one_material_id','two_material_id'];
}

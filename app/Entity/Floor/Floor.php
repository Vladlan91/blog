<?php


namespace App\Entity\Floor;



/**
 * Class Region
 * @package App\Entity
 * @property int $id
 * @property string $name
 * @property string $name_ru
 * @property int $slug
 * @property int $price
 *
 */
class Floor extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'floor';

}

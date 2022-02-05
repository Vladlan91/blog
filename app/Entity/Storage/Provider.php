<?php


namespace App\Entity\Storage;


/**
 * Class Region
 * @package App\Entity
 * @property string|null $name_company
 * @property int|null $usreou
 * @property string $email
 * @property int $phone

 */

class Provider extends \Illuminate\Database\Eloquent\Model
{

    protected $table = 'provider';

    protected $fillable = ['name_company','usreou','email','phone','avatar'];

}

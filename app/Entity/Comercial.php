<?php


namespace App\Entity;


use App\Entity\Floor\Floor;
use App\Entity\Floor\Portfolio;
use App\User;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

/**
 * Class Region
 * @package App\Entity
 * @property int $region_id
 * @property string $address
 * @property int $top_object
 * @property int $square
 * @property int $square2
 * @property int $price
 * @property int $price2
 * @property int|null $user_id
 * @property string|null $baseboard
 * @property string|null $damfer
 * @property string|null $light
 * @property string|null $rosette
 * @property string|null $toilet
 * @property int $floor_type
 * @property int $floor_quality
 * @property string|null $name_company
 * @property int|null $usreou
 * @property string $email
 * @property int $phone
 * @property int $floor_id
 * @property int $prodject_id

 */

class Comercial extends Model
{
    public $price_1;
    protected $table = 'comercial';

    protected $fillable = ['region_id','prodject_id','address','floor_id','user_id','top_object','square','square2','price','price2','baseboard','damfer','light','rosette','toilet','floor_type','floor_quality','name_company','usreou','email','phone'];

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class, 'floor_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function project()
    {
        return $this->belongsTo(Portfolio::class, 'prodject_id', 'id');
    }

    public function getFloorPrice($id){
        $floor = Floor::where('id',$id)->first();
        $price_1 = $floor->price;
        return $price_1;
    }
    public function hasManager(){
        if ($this->user_id !== 0){
            return true;
        }else{
            return false;
        }
    }



}

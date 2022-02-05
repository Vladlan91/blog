<?php


namespace App\Entity\Storage\Transaction;


use App\Entity\Floor\Portfolio;
use App\Entity\Storage\Category;
use App\Entity\Storage\Material;
use App\Entity\Storage\Provider;
use App\User;
use Illuminate\Database\Eloquent\Builder;

/**
 * @property int $material_id
 * @property int $portfolio_id
 * @property int $provider_id
 * @property int $score_id
 * @property int $months
 * @property int $year
 * @property int $count
 * @property int $sum
 * @method Builder forCategory(Category $category)
 */

class MaterialTransaction extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'transaction_material';
    protected $fillable = ['material_id','portfolio_id','provider_id','score_id','months','year','count','sum','created_user_id'];

    public function isWriteOff(){
       if($this->score_id !== null){
           return true;
       } else{
           return false;
       }
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id', 'id');
    }

    public function provider(){
        return $this->belongsTo(Provider::class, 'provider_id', 'id');
    }

    public function portfolio(){
        return $this->belongsTo(Portfolio::class, 'portfolio_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_user_id', 'id');
    }
    public function isProvider(){
        if($this->provider_id !== null){
            return true;
        }else{
            return false;
        }

    }

    public function scopeForCategory(Builder $query, Category $category)
    {

        $ids = [$category->id];
        $childrenIds = $ids;
        while ($childrenIds = Material::where(['category_id' => $childrenIds])->pluck('id')->toArray()){
            $ids = array_merge($ids, $childrenIds);
        }
        return $query->whereIn('material_id', $ids);
    }
    public function getSum($id, $count){
        $material = Material::where('id', $id)->first();
        if ($material->sum > 0){
            $sum = $material->sum/$material->count * $count;
            return $sum;
        }else{
            return 0;
        }
    }
}


<?php


namespace App\Entity;


use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

/**
 * Class Region
 * @package App\Entity
 * @property int $id
 * @property string $name
 * @property string $name_ru
 * @property string $town
 * @property string $town_ru
 * @property string $slug
 * * @property int|null $sort
 * @property int|null $parent_id
 *
 * @property Region $parent
 * @property Region $children
 * @method Builder roots()
 */
class Region extends Model
{
    public $table = "region";

    protected $fillable = ['name','name_ru','slag','parent_id','town_ru','town'];

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(static::class, 'parent_id','id');
    }
    public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(static::class,'parent_id','id');
    }
    public function hasChildren($regionId): bool
    {
        $category = Region::where('parent_id', $regionId)->getModels();
        if ($category){
            return true;
        }
        return false;
    }


    public function scopeRoots(Builder $query)
    {
        return $query->where('parent_id', null);
    }

}

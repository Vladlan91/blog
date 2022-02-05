<?php


namespace App\Entity\Storage;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
/**
 * @property int $id
 * @property string $slag
 * @property string $name
 * @property int $parent_id
 * @property int $price
 * @property Category $parent
 */
class Category extends Model
{
    use NodeTrait;

    protected $table = 'floor_categories';

    public  $timestamps = false;

    protected $fillable = ['id', 'name', 'description','slag', 'parent_id'];

    public function getPath(): string
    {
        return implode('/', array_merge($this->ancestors()->defaultOrder()->pluck('slag')->toArray(),[$this->slag]));
    }

    public function getPa(): string
    {
        return implode('/', array_merge($this->ancestors()->defaultOrder()->pluck('name')->toArray(),[$this->name]));
    }

    public function parent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(static::class, 'parent_id', 'id');
    }

    public function getParent(){

    }

    public function isParent()
    {
        return $this->parent_id === null;
    }

    public function hasChildren($categoryId)
    {
        $category = Category::where('parent_id', $categoryId)->getModels();
        if ($category){
            return true;
        }
        return false;
    }

    public function children(){
        return $this->hasMany(static::class, 'parent_id', 'id');
    }


}

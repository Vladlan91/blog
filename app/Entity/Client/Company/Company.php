<?php


namespace App\Entity\Client\Company;

use App\Entity\Client\Client;

/**
 * Class Region
 * @package App\Entity
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $title
 * @property string $description
 * @property string $logo
 * @property string $email
 * @property string $text
 * @property string $insta
 * @property string $face
 * @property string $site
 * @property string $region_id
 * @property string $avtor
 *
 */
class Company extends \Illuminate\Database\Eloquent\Model
{

    public $table = "company";

    protected $fillable = ['name','slug','title','description','logo','region_id','email','insta','face','site','avtor'];
    public function workers()
    {
        return $this->hasMany(Client::class);
    }
    public function typies()
    {
        return $this->belongsToMany(Type::class);
    }

    public function hasWorkers($id)
    {
        $workers = Client::where('company_id', $id)->first();
        if ($workers){
            return true;
        }
        return false;
    }
}


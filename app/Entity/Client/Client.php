<?php


namespace App\Entity\Client;

use App\Entity\Client\Company\Company;
use App\Entity\Region;

/**
 * Class Region
 * @package App\Entity
 * @property int $id
 * @property string $name
 * @property string $avatar
 * @property string $region_id
 * @property string $email
 * @property string $phone
 * @property string $comments
 * @property string $insta
 * @property string $face
 * @property int $sex
 * @property int|null $company_id
 *
 */
class Client extends \Illuminate\Database\Eloquent\Model
{
    public $table = "client";

    protected $fillable = ['name','avatar','region_id','email','phone','comments','insta','face','company_id','avtor'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function location()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

}








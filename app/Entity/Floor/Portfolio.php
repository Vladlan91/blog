<?php


namespace App\Entity\Floor;

use App\Entity\Client\Client;
use App\Entity\Client\Company\Company;
use App\Entity\Comercial;
use App\Entity\Region;
use App\User;
use Carbon\Carbon;

/**
 * Class Region
 * @package App\Entity
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $region_id
 * @property int $floor_id
 * @property int $id_client
 * @property int $id_manager
 * @property int $id_technologist
 * @property int $id_commercial
 * @property int $price
 * @property int $price_two
 * @property int $square
 * @property int|null $comerc_id
 * @property Carbon $data_start_plan
 * @property Carbon $data_start_fact
 * @property Carbon $data_finish_plan
 * @property Carbon $data_finish_fact
 * @property int $financial_motivation
 * @property int $public
 *
 */
class Portfolio extends \Illuminate\Database\Eloquent\Model
{
    public const STATUS_NOT_IN_WORK = 'not_in_work';
    public const STATUS_OPEN = 'open';
    public const STATUS_ORDERED_MATERIAL = 'ordered_material';
    public const STATUS_STARTED_WORK = 'started_work';
    public const STATUS_COMPLETED = 'сompleted';


    public  $timestamps = false;

    protected $table = 'portfolio';

    public static function typeList(): array
    {
        return [
            self::STATUS_COMPLETED => 'сompleted',
            self::STATUS_STARTED_WORK => 'started_work',
            self::STATUS_ORDERED_MATERIAL => 'ordered_material',
            self::STATUS_OPEN => 'open',
            self::STATUS_NOT_IN_WORK => 'not_in_work',

        ];

    }

    protected $fillable = ['id', 'name', 'comerc_id','region_id','floor_id', 'id_client', 'id_manager', 'price','square','type'];

    public function manager(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'id_manager', 'id');
    }
    public function client(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Client::class, 'id_client', 'id');
    }
    public function floor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Floor::class, 'floor_id', 'id');
    }
    public function technologist(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'id_technologist', 'id');
    }
    public function region(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
    public function comerc(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Comercial::class, 'comerc_id', 'id');
    }
}


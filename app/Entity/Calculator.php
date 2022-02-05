<?php


namespace App\Entity;


use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    public $type;
    public $floor;
    public $comercial;
    public $prise_1;
    public $prise;

    public function __construct($type, $floor, Comercial $comercial)
    {
        $this->type = $type;
        $this->floor = $floor;
        $this->comercial = $comercial;
    }
    public function getPrice(){
        $prise_1 = $this->comercial->getFloorPrice($this->comercial->floor_id);
        $this->prise = $this->comercial->square * $prise_1;
        return $this->prise;
    }
    public function getPrice2(){
        $this->prise = $this->comercial->square2 * 150;
        return $this->prise;
    }


}

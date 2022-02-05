<?php


namespace App\Entity\Storage;


class Material extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'material';

    protected $fillable = ['name','unit','limit','avatar','related_goods','category_id','count','sum'];

    public function getUnit(){
        if($this->unit == 1){
            return 'кг';
        }elseif($this->unit == 2){
            return 'л';
        }else{
            return 'шт';
        }
    }

    public function materialUpdated($transaction){
        if ($transaction->isProvider()){
            $this->count = $transaction->count + $this->count;
            $this->sum = $transaction->sum + $this->sum;
            $this->saveOrFail();
        }else{
            $this->count = $this->count - $transaction->count;
            $this->sum = $this->sum - $transaction->sum;
            $this->saveOrFail();
        }
    }
}

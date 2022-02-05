<?php


namespace App\Http\Controllers;


use App\Entity\Calculator;
use App\Entity\Comercial;
use App\Entity\Floor\Floor;
use App\Entity\Region;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComercController extends \Illuminate\Routing\Controller
{
    private  $comercial;
    private  $floor;
    private  $type;

    public function __construct(Comercial $comercial)
    {
        $this->comercial = $comercial;
    }

    public function index()
    {
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/comerc/comerc');
        }else{
            return view('uk/comerc/comerc');
        }
    }

    public function stepTwo($id)
    {
        $this->floor = $id;

        if($id == 1){
            $types = Floor::whereIn('id', array(1, 2, 3, 5, 6))->get();
        }elseif ($id == 2){
            $types = Floor::whereIn('id', array(1, 2, 3))->get();
        }elseif ($id == 3){
            $types = Floor::whereIn('id', array( 2, 3, 5, 6))->get();
        }elseif ($id == 4){
            $types = Floor::whereIn('id', array(6, 7, 8, 9))->get();
        }elseif ($id == 5){
            $types = Floor::whereIn('id', array(1, 2, 3, 6))->get();
        }else{
            $types = Floor::whereIn('id', array(6, 7, 8, 9))->get();
        }
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/comerc/step2',compact('types','id'));
        }else{
            return view('uk/comerc/step2',compact('types','id'));
        }
    }

    public function stepThree(int $id, $floor){
        $this->type = $id;
        $this->floor = $floor;
        $regions = Region::orderBy('id')->getModels();
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/comerc/step3',compact('types','id','floor','regions'));
        }else{
            return view('uk/comerc/step3',compact('types','id','floor','regions'));
        }
    }
    public function finish(Request $request, int $id, $floor){
        $comercel = Comercial::create([
               'region_id' =>   $request['region_id'],
               'address' =>   $request['address'],
               'top_object' =>   $request['top_object'],
               'square' =>   $request['square'],
               'square2' =>   $request['square2'],
               'baseboard' =>   $request['baseboard'],
               'damfer' =>   $request['damfer'],
               'light' =>   $request['light'],
               'rosette' =>   $request['rosette'],
               'toilet' =>   $request['toilet'],
               'floor_type' =>   $request['floor_type'],
               'floor_quality' =>   $request['floor_quality'],
               'name_company' =>   $request['name_company'],
               'usreou' =>   $request['usreou'],
               'floor_id' => $id,
               'email' =>  $request['email'],
               'phone' =>   $request['phone'],
        ]);
        $calc = new Calculator($id,$floor,$comercel);
        if(Auth::guest()){
            $comercel->avtor = '0';
        }else{
            $comercel->user_id = Auth::id();
        }
        $comercel->price = $calc->getPrice();
        $comercel->price2 = $calc->getPrice2();
        $comercel->saveOrFail();
        return redirect()->route('comerc.show', compact('comercel'));

    }
    public function show(Comercial $comercel){
        $this->url = LocaleMiddleware::getLocale();
        $i = 1;
        if($this->url == 'ru'){
            return view('ru/comerc/step4',compact('comercel','i'));
        }else{
            return view('uk/comerc/step4',compact('comercel','i'));
        }
    }

}

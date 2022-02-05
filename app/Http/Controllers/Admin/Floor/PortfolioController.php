<?php


namespace App\Http\Controllers\Admin\Floor;


use App\Entity\Client\Company\Company;
use App\Entity\Floor\Floor;
use App\Entity\Floor\Portfolio;
use App\Entity\Region;
use App\Http\Middleware\LocaleMiddleware;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PortfolioController extends \Illuminate\Routing\Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $client = \App\Entity\Client\Client::orderBy('id')->pluck('id','name');
        $manager = User::orderBy('id')->pluck('id','name');
        $regions = Region::orderBy('id')->pluck('id','name');
        $portfolio = Portfolio::orderBy('name')->paginate(20);
        $floors = Floor::orderBy('id')->pluck('id','name');
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/admin/floor/portfolio/index', compact('portfolio','regions','client','floors','manager'));
        }else{
            return view('uk/admin/floor/portfolio/index',compact('portfolio','regions','client','floors','manager'));
        }
    }


    public function create(Request $request)
    {
        $price = Floor::where('id', $request['floor_id'])->pluck('price');
        $portfolio = Portfolio::create([
            'name' => $request['name'],
            'region_id' => $request['region_id'],
            'floor_id' => $request['floor_id'],
            'id_client' => $request['id_client'],
            'price' => $price1 = $price[0] * $request['square'],
            'square' => $request['square'],
            'id_manager' => $request['id_manager'],
            'public' => 0,
            'type' => Portfolio::STATUS_NOT_IN_WORK,

        ]);

        return redirect()->route('admin.portfolio.index');
    }

    public function show(Portfolio $portfolio)
    {
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/admin/floor/portfolio/show', compact('portfolio'));
        }else{
            return view('uk/admin/floor/portfolio/show',compact('portfolio'));
        }
    }


    public function update(Request $request)
    {

    }
}

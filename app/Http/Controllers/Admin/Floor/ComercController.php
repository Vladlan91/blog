<?php


namespace App\Http\Controllers\Admin\Floor;


use App\Entity\Comercial;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Http\Request;


class ComercController extends \Illuminate\Routing\Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $comerc = Comercial::orderBy('id')->paginate(20);
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/admin/floor/comerc/index', compact('comerc'));
        }else{
            return view('uk/admin/floor/comerc/index',compact('comerc'));
        }
    }

    public function create(Request $request)
    {

        return redirect()->route('admin.client.index');
    }

    public function show()
    {
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/admin/client/show', compact('client'));
        }else{
            return view('uk/admin/client/show',compact('client'));
        }
    }


    public function update(Request $request)
    {

    }
}

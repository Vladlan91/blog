<?php

namespace App\Http\Controllers;

use App\Entity\Client\Company\Company;
use App\Entity\Project;
use App\Entity\Region;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    public $url;

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/app/home');
        }else{
            return view('uk/app/home');
        }
    }

    public function page($slag){
        $this->url = LocaleMiddleware::getLocale();
        $comoanies = Company::orderBy('id')->getModels();
        $regions = Region::orderBy('sort')->getModels();
        if($this->url == 'ru'){
            $page = Project::where('slag',$slag)->first();
            return view('ru/app/'.$page->view, compact('regions','page','comoanies'));
        }else{
            $page = Project::where('slag',$slag)->first();
            return view('uk/app/'. $page->view, compact('regions','page','comoanies'));
        }

    }

    public function pageInTown($slag, $slag1){
        $this->url = LocaleMiddleware::getLocale();
        $comoanies = Company::orderBy('id')->getModels();
        $regions = Region::orderBy('sort')->getModels();
        $region = Region::where('slag',$slag1)->first();
        if($this->url == 'ru'){
            $page = Project::where('slag',$slag)->first();
            return view('ru/app/'.$page->view, compact('regions','region','page','comoanies'));
        }else{
            $page = Project::where('slag',$slag)->first();
            return view('uk/app/'. $page->view, compact('regions','region','page','comoanies'));
        }

    }
}

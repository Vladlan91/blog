<?php


namespace App\Http\Controllers;


use App\Entity\Client\Company\Company;
use App\Entity\Floor\Portfolio;
use App\Entity\Project;
use App\Http\Middleware\LocaleMiddleware;

class CompanyController extends \Illuminate\Routing\Controller
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
    public function index($slug)
    {
        $portfolio = Portfolio::orderByDesc('id')->getModels();
        $company= Company::where('slug',$slug)->first();
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/app/company', compact('company','portfolio'));
        }else{
            return view('uk/app/company', compact('company','portfolio'));
        }
    }

}

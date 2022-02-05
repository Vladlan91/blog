<?php


namespace App\Http\Controllers;

use App\Entity\Client\Company\Company;
use App\Entity\Floor\Portfolio;
use App\Http\Middleware\LocaleMiddleware;

class PortfolioController extends \Illuminate\Routing\Controller
{
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
        $portfolio= Portfolio::where('slug',$slug)->first();
        $this->url = LocaleMiddleware::getLocale();
        if($this->url == 'ru'){
            return view('ru/app/portfolio', compact('portfolio'));
        }else{
            return view('uk/app/portfolio', compact('portfolio'));
        }
    }


}

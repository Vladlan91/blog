<?php


namespace App\Http\Controllers\Admin\Workers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\LocaleMiddleware;
use App\UseCases\Workers\KpiService;

class KpiController extends Controller
{
    private $kpi;
    private $url;

    public function __construct(KpiService  $kpi){
        $this->middleware('can:user-creat');
        $this->kpi = $kpi;
        $this->url = LocaleMiddleware::getLocale();
    }

    public function index(){
        if($this->url == 'ru'){
            return view('ru.admin.workers.kpi.index');
        }else{
            return view('uk.admin.workers.kpi.index');
        }
    }
}

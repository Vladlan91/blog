<?php


namespace App\Http\Controllers\Admin\Storage;


use App\Entity\Storage\Provider;
use App\Entity\User\Transaction\Timesheet;
use App\Http\Middleware\LocaleMiddleware;
use App\UseCases\Storage\ProviderService;
use Illuminate\Http\Request;

class ProviderController extends \App\Http\Controllers\Controller
{
    private $url;
    private $service;
    public function __construct(ProviderService $service){
        $this->service = $service;
        $this->url = LocaleMiddleware::getLocale();
    }

    public function index(){
        $providers = Provider::orderBy('id')->get();
        if($this->url == 'ru'){
            return view('ru.admin.storage.provider.index', compact('providers'));
        }else{
            return view('uk.admin.storage.provider.index', compact('providers'));
        }
    }

    public function store(Request $request){
        $this->service->create($request);
        return redirect()->route('admin.storage.provider');
    }

    public function edit(Request $request, Provider $provider): \Illuminate\Http\RedirectResponse
    {
        $this->service->edit($request, $provider);
        return redirect()->route('admin.storage.provider');
    }

    public function show(Provider $provider): \Illuminate\Http\RedirectResponse
    {
        return redirect()->route('admin.storage.provider');
    }

    public function destroy(Provider $provider): \Illuminate\Http\RedirectResponse
    {
        if(isset($provider->avatar)){
            unlink(public_path($provider->avatar));
        }
        $provider->delete();
        return redirect()->route('admin.storage.provider');
    }

}

<?php


namespace App\Http\Controllers\Admin\Storage;


use App\Entity\Storage\Material;
use App\Entity\Storage\Provider;
use App\Http\Middleware\LocaleMiddleware;
use App\UseCases\Storage\MaterialService;
use Illuminate\Http\Request;

class MaterialController extends \App\Http\Controllers\Controller
{
    private $url;
    private $service;
    public function __construct(MaterialService $service){
        $this->service = $service;
        $this->url = LocaleMiddleware::getLocale();
    }

    public function store(Request $request){
        $this->service->create($request);
        return redirect()->back();
    }

    public function edit(Request $request, Material $material): \Illuminate\Http\RedirectResponse
    {
        $this->service->edit($request, $material);
        return redirect()->back();
    }

    public function show(Material $material)
    {
        if($this->url == 'ru'){
            return view('ru.admin.storage.material.show', compact('material'));
        }else{
            return view('uk.admin.storage.material.show', compact('material'));
        }
    }

    public function destroy(Material $material): \Illuminate\Http\RedirectResponse
    {
        if(isset($material->avatar)){
            unlink(public_path($material->avatar));
        }
        $material->delete();
        return redirect()->back();
    }
}

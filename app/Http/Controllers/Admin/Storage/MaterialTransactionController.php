<?php


namespace App\Http\Controllers\Admin\Storage;


use App\Entity\Storage\Material;
use App\Entity\Storage\Provider;
use App\Entity\Storage\Transaction\MaterialTransaction;
use App\Http\Middleware\LocaleMiddleware;
use App\UseCases\Storage\Transaction\MaterialTransactionService;
use Illuminate\Http\Request;

class MaterialTransactionController extends \App\Http\Controllers\Controller
{
    private $url;
    private $service;
    public function __construct(MaterialTransactionService $service){
        $this->service = $service;
        $this->url = LocaleMiddleware::getLocale();
    }

    public function store(Request $request){
        $this->service->create($request);
        return redirect()->back();
    }

    public function edit(Request $request, MaterialTransaction $material): \Illuminate\Http\RedirectResponse
    {
        $this->service->edit($request, $material);
        return redirect()->back();
    }

    public function show(MaterialTransaction $material): \Illuminate\Http\RedirectResponse
    {
        return redirect()->back();
    }

    public function destroy(MaterialTransaction $materialTransaction): \Illuminate\Http\RedirectResponse
    {
        $materialTransaction->material->materialUpdated($materialTransaction);
        $materialTransaction->delete();
        return redirect()->back();
    }
}

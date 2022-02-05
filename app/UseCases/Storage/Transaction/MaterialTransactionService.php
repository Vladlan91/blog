<?php


namespace App\UseCases\Storage\Transaction;


use App\Entity\Storage\Material;
use App\Entity\Storage\Transaction\MaterialTransaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class MaterialTransactionService
{
    public function create($request){
        return DB::transaction( function () use ($request){
            $transaction_material = MaterialTransaction::create([
                'material_id' => $request['material_id'],
                'portfolio_id' => $request['portfolio_id'] ? : null,
                'provider_id' => $request['provider_id'] ? : null,
                'months' => Carbon::now()->month,
                'year' => Carbon::now()->year,
                'score_id' => $request['score_id'],
                'count' => $request['count'],
                'sum' => $request['sum'] ? : (new \App\Entity\Storage\Transaction\MaterialTransaction)->getSum($request['material_id'], $request['count']),
                'created_user_id' => Auth::id(),
            ]);
            $transaction_material->material->materialUpdated($transaction_material);
        });

    }

    public function edit($request, $transaction_material){
        return DB::transaction( function () use ($request, $transaction_material){
            $transaction_material->update([
                'material_id' => $request['material_id'],
                'portfolio_id' => $request['portfolio_id'] ? : null,
                'provider_id' => $request['provider_id'] ? : null,
                'months' => Carbon::now()->month,
                'year' => Carbon::now()->year,
                'score_id' => $request['score_id'],
                'count' => $request['count'],
                'sum' => $request['sum'] ? : null,
                'created_user_id' => Auth::id(),

            ]);
            $transaction_material->material->materialUpdated($transaction_material);
        });
    }
}

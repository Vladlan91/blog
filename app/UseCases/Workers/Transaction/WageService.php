<?php


namespace App\UseCases\Workers\Transaction;




use App\Entity\User\Transaction\Wage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WageService
{
    public function create($request, $b){
        return DB::transaction( function () use ($request, $b){

            if ($b == 1){
                $wage = Wage::create([
                    'user_id' => $request['user_id'],
                    'months' => $request['months'],
                    'year' => Carbon::now()->year,
                    'type' => $request['type'],
                    'type_transaction' => $request['type_transaction'],
                    'sum' => $request['sum'],
                    'income_expense' => 1,
                    'created_user_id' => Auth::id(),
                ]);
            }
            else{
                $wage = Wage::create([
                    'user_id' => $request['user_id'],
                    'months' => $request['months'],
                    'year' => Carbon::now()->year,
                    'sum' => $request['sum'],
                    'type' => null,
                    'type_transaction' => 1,
                    'income_expense' => 2,
                    'reason_fine' => $request['reason_fine'],
                    'created_user_id' => Auth::id(),
                ]);
            }
            $wage->user->updateMonthsStatistick($wage->months, $wage->year);
        });
    }

    public function edit($request, $wage, $b){
        return DB::transaction( function () use ($request, $wage, $b){

            if ($b == 1){
                $wage->update([
                    'user_id' => $request['user_id'],
                    'months' => $request['months'],
                    'year' => Carbon::now()->year,
                    'type' => $request['type'],
                    'type_transaction' => $request['type_transaction'],
                    'sum' => $request['sum'],
                    'income_expense' => 1,
                    'reason_fine' => null,
                    'created_user_id' => Auth::id(),
                ]);
            }
            else{
                $wage->update([
                    'user_id' => $request['user_id'],
                    'months' => $request['months'],
                    'year' => Carbon::now()->year,
                    'sum' => $request['sum'],
                    'type' => null,
                    'type_transaction' => 1,
                    'income_expense' => 2,
                    'reason_fine' => $request['reason_fine'],
                    'created_user_id' => Auth::id(),
                ]);
            }

            $wage->user->updateMonthsStatistick($wage->months, $wage->year);
        });
    }
}

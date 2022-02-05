<?php


namespace App\UseCases\Workers\Transaction;


use App\Entity\User\Transaction\Timesheet;
use App\Entity\User\Transaction\Wage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TimesheetService
{
    public function create($request, $b){
        return DB::transaction( function () use ($request, $b){

            if ($b == 1){
                $timesheet = Timesheet::create([
                    'user_id' => $request['user_id'],
                    'portfolio_id' => $request['portfolio_id'],
                    'months' => $request['months'],
                    'count_day' => $request['count_day'],
                    'year' => Carbon::now()->year,
                    'type' => $request['type'],
                    'reason_fine' => null,
                    'created_user_id' => Auth::id(),
                ]);
            }
            else{
                $timesheet = Timesheet::create([
                    'user_id' => $request['user_id'],
                    'portfolio_id' => $request['portfolio_id'],
                    'months' => $request['months'],
                    'count_day' => $request['count_day'],
                    'year' => Carbon::now()->year,
                    'type' => 3,
                    'reason_fine' => $request['reason_fine'],
                    'created_user_id' => Auth::id(),
                ]);
            }
            $timesheet->user->updateMonthsStatistick($timesheet->months, $timesheet->year);
        });
    }

    public function edit($request, $timesheet, $b){
        return DB::transaction( function () use ($request, $timesheet, $b){
            if ($b == 1){
                $timesheet->update([
                    'user_id' => $request['user_id'],
                    'portfolio_id' => $request['portfolio_id'],
                    'months' => $request['months'],
                    'year' => Carbon::now()->year,
                    'type' => $request['type'],
                    'count_day' => $request['count_day'],
                    'reason_fine' => null,
                    'created_user_id' => Auth::id(),
                ]);
            }
            else{
                $timesheet->update([
                    'user_id' => $request['user_id'],
                    'portfolio_id' => $request['portfolio_id'],
                    'months' => $request['months'],
                    'count_day' => $request['count_day'],
                    'year' => Carbon::now()->year,
                    'type' => 3,
                    'reason_fine' => $request['reason_fine'],
                    'created_user_id' => Auth::id(),
                ]);
            }
            $timesheet->user->updateMonthsStatistick($timesheet->months, $timesheet->year);
        });
    }

}

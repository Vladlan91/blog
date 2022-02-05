<?php


namespace App\Http\Controllers\Admin\Workers;


use App\Entity\Floor\Portfolio;
use App\Entity\User\Transaction\Timesheet;
use App\Entity\User\Transaction\Wage;
use App\Http\Middleware\LocaleMiddleware;
use App\UseCases\Workers\Transaction\TimesheetService;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TimesheetController extends \App\Http\Controllers\Controller
{
    private $timesheet;
    private $url;

    public function __construct(TimesheetService  $timesheet){
        $this->middleware('can:user-creat');
        $this->timesheet = $timesheet;
        $this->url = LocaleMiddleware::getLocale();
    }

    public function index(Request $request){
        $query = Timesheet::orderByDesc('id');
        if(!empty($value = $request->get('type'))){
            $query->where('type', $value);
        }
        if(!empty($value = $request->get('user'))){
            $query->where('user_id', $value);
        }
        if(!empty($value = $request->get('months'))){
            $query->where('months', $value);
        }

        $timesheets = $query->paginate(10);
        $users = User::orderBy('id')->get();
        $portfolios = Portfolio::orderBy('id')->get();
        $data = Carbon::now()->month;

        if($this->url == 'ru'){
            return view('ru.admin.workers.timesheet.index',compact('users','data','timesheets','portfolios'));
        }else{
            return view('uk.admin.workers.timesheet.index',compact('users','data','timesheets','portfolios'));
        }
    }
    public function create(Request $request, $b){
        try{
            $this->timesheet->create($request, $b);
        } catch (\DomainException $e){
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('admin.workers.timesheet');
    }

    public function edit(Request $request, Timesheet $timesheet, $b): \Illuminate\Http\RedirectResponse
    {

        $this->timesheet->edit($request, $timesheet, $b);
        return redirect()->route('admin.workers.timesheet');
    }

    public function destroy(Timesheet $timesheet): \Illuminate\Http\RedirectResponse
    {
        $months = $timesheet->months;
        $year = $timesheet->year;
        $user = $timesheet->user;
        $timesheet->delete();
        $user->updateMonthsStatistick($months, $year);
        return redirect()->route('admin.workers.timesheet');
    }
}

<?php


namespace App\Http\Controllers\Admin\Workers;



use App\Entity\User\Transaction\Wage;
use App\Http\Middleware\LocaleMiddleware;
//use App\UseCases\Workers\Transaction\WageService;
use App\UseCases\Workers\Transaction\WageService;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class WageController extends \App\Http\Controllers\Controller
{
    private $wage;
    private $url;

    public function __construct(WageService $wage){
        $this->middleware('can:user-creat');
        $this->wage = $wage;
        $this->url = LocaleMiddleware::getLocale();
    }

    public function index(Request $request){
        $query = Wage::orderByDesc('id');
        if(!empty($value = $request->get('type'))){
            $query->where('type', $value);
        }
        if(!empty($value = $request->get('user'))){
            $query->where('user_id', $value);
        }
        if(!empty($value = $request->get('months'))){
            $query->where('months', $value);
        }
        if(!empty($value = $request->get('type_transaction'))){
            $query->where('type_transaction', $value);
        }

        $wages = $query->paginate(20);
        $users = User::orderBy('id')->get();
        $data = Carbon::now()->month;

        if($this->url == 'ru'){
            return view('ru.admin.workers.wage.index',compact('users','data','wages'));
        }else{
            return view('uk.admin.workers.wage.index',compact('users','data','wages'));
        }
    }

    public function create(Request $request, $b){

        try{
            $this->wage->create($request, $b);
        } catch (\DomainException $e){
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('admin.workers.wage');
    }

    public function edit(Request $request, Wage $wage, $b): \Illuminate\Http\RedirectResponse
    {
        $this->wage->edit($request, $wage, $b);
        return redirect()->route('admin.workers.wage');
    }

    public function destroy(Wage $wage): \Illuminate\Http\RedirectResponse
    {
        $months = $wage->months;
        $year = $wage->year;
        $user = $wage->user;
        $wage->delete();
        $user->updateMonthsStatistick($months, $year);
        return redirect()->route('admin.workers.wage');
    }
}

<?php

namespace App\Http\Controllers\Admin\Workers;

use App\Entity\User\Position;
use App\Entity\User\Transaction\Wage;
use App\UseCases\Workers\WorkersService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\LocaleMiddleware;



class UserController extends Controller
{
    private $workers;
    private $url;

    public function __construct(WorkersService  $workers){
        $this->middleware('can:user-creat');
        $this->workers = $workers;
        $this->url = LocaleMiddleware::getLocale();
    }

    public function index(Request $request){

        $query = User::orderByDesc('id');
        if(!empty($value = $request->get('id'))){
            $query->where('id',$value);
        }
        if(!empty($value = $request->get('name'))){
            $query->where('name','like','%' .$value. '%');
        }
        if(!empty($value = $request->get('email'))){
            $query->where('email','like','%' .$value. '%');
        }

        $users = $query->paginate(20);
        $statuses = [
            User::STATUS_ACTIVE => 'active',
            User::STATUS_WAIT => 'wait',
        ];
        $positions = Position::orderByDesc('id')->getModels();
        $role = User::roleList();
        if($this->url == 'ru'){
            return view('ru.admin.users.index',  compact('users','statuses','role','positions'));
        }else{
            return view('uk.admin.workers.index',  compact('users','statuses','role','positions'));
        }
    }

    public function store(Request $request)
    {
        try{
            $user = $this->workers->store($request);
        } catch (\DomainException $e){
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('admin.workers.show', $user);
    }

    public function show(User $user)
    {
        $workers_months = $this->workers->getWorkersMonths($user);
        $workers_months_one = $this->workers->getWorkerMonths_One($user);
        $positions = Position::orderByDesc('id')->getModels();
        $countDays = $this->workers->countDays;
        $day = $this->workers->data->day;
        $wages = Wage::forUser($user)->where('months',$this->workers->data->month)->getModels();
        $fine = $this->workers->fineSum($user);
        $role = $user->roleList();
        if($this->url == 'ru'){
            return view('ru.admin.workers.show',  compact('user','workers_months_one','day','workers_months','countDays','statuses','positions','role','fine','wages'));
        }else{
            return view('uk.admin.workers.show',  compact('user','workers_months_one','day','workers_months','countDays','statuses','positions','role','fine','wages'));
        }
    }

    public function update(Request $request, User $user): \Illuminate\Http\RedirectResponse
    {
        try{
            $user = $this->workers->update($request, $user);
        } catch (\DomainException $e){
            return back()->with('error', $e->getMessage());
        }
        return redirect()->route('admin.workers.show', $user);
    }


    public function destroy(User $user): \Illuminate\Http\RedirectResponse
    {
        if(isset($user->avatar)){
            unlink(public_path($user->avatar));
        }
        $user->delete();
        return redirect()->route('admin.workers');
    }
}

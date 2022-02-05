<?php

namespace App\Http\Controllers\Auth;


use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use ThrottlesLogins;


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('home');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        if($this->hasTooManyLoginAttempts($request)){
            $this->fireLockoutEvent($request);
            $this->sendLockoutResponse($request);
        }
        $authenticate = Auth::attempt(
            $request->only(['email','password']),
            $request->filled(['remember'])
        );

        if ($authenticate){
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            $user = Auth::user();
            if ($user->status !== User::STATUS_ACTIVE){
                Auth::logout();
                flash('Вам потрібно підтвердити емейл, перейдіть на вашу пошту')->important();
                return back()->with('error','Вам потрібно підтвердити емейл, перейдіть на вашу пошту.');
            }
            return redirect()->route('admin.panel.home');
        }
        $this->incrementLoginAttempts($request);
        throw ValidationException::withMessages(['email'=> [trans('auth.failed')]]);
    }
protected function username(){
        return 'email';
}

}

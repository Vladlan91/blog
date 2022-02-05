<?php

namespace App\Http\Controllers\Auth;

use App\UseCases\Auth\RegisterService;
use App\User;
use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\Auth\VerifyMail;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    private $service;

    use RegistersUsers;

    protected $redirectTo = '/cabinet';

    public function __construct(RegisterService $service)
    {
        $this->middleware('guest');
        $this->service = $service;
    }


    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    protected function register(RegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
        $this->service->register($request);
        return redirect()->route('login')->with('success','Прогляньте вашу пошту для підтвердження емейлу');
    }

    public function verify($token): \Illuminate\Http\RedirectResponse
    {
        if(!$user = User::where('verify_token', $token)->first()){
            return redirect()->route('login')->with('error','Посилання нерозпізнано');
        }
        try {
            $this->service->verify($user->id);
            return redirect()->route('login')->with('error','Ваш емейл вже підтверджений');
        }catch ( \DomainException $e){
            return redirect()->route('login')->with('error', $e->getMessage());
        }

    }

}

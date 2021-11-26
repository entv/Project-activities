<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('Login.login');
    }

    public function register(Request $request)
    {
        if (Auth::check())
        {
            return redirect(route('news'));
        }
        
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (User::where('name', $data['name'])->first() != null)
        {
            return redirect(route('authentication'))->withErrors([
                'authentication.error' => 'Такой пользователь уже существует'
            ]);
        }

        $user = new User($data);
        $user->password = $data['password'];
        $user->save();

        if ($user)
        {
            Auth::login($user);
            return redirect(route('news'));
        }

        return redirect(route('authentication'))->withErrors([
            'authentication.error' => 'Похоже вы неправильно заполнили форму'
        ]);
    }

    public function login(Request $request)
    {
        if (Auth::check())
        {
            return redirect(route('news'));
        }
        
        if(Auth::attempt($request->only('name', 'password')))
        {
            return redirect(route('news'));
        }

        return redirect(route('authentication'))->withErrors([
            'authentication.error' => 'Неверное имя пользователя или пароль'
        ]);
    }

    public function logout()
    {
        if (Auth::check())
        {
            Auth::logout();
            return redirect(route('home'));
        }

        return redirect(route('authentication'));
    }
}

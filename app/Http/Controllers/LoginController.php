<?php

namespace App\Http\Controllers;

use Cart;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function register(Request $request)
    {
        // Validar los datos

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('shop'));
    }


    public function login(Request $request)
    {
        // Validacion

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

       if(Auth::attempt($credentials)){

        $request->session()->regenerate();

        return redirect()->intended(route('shop'));

       }else{

            return redirect('login')->with('success_msg', 'El usuario no existe');

       }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Cart::clear();

        return redirect(route('login'));
    }
}

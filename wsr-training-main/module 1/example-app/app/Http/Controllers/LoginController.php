<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function login_user(Request $request)
    {
        $data = $request->all();

        $cred = [
            'login' => $data['login'],
            'password' => $data['password']
        ];
    
        $user = User::where([
            'login' => $data['login']
        ])->get()->first();
    
        if (Auth::attempt($cred)) {
            if ($user->type_id == 2) {
                return redirect()->route('admin')->with('status', 'Добро пожаловать, администратор');
            }
    
            return redirect()->route('user')->with('status', 'Добро пожаловать');
        } else {
            return back()->with('error', 'Не удалось авторизироваться');
        }
    
    }

}

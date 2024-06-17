<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegistrationController extends Controller
{
    
    public function register_user(Request $request)
    {
        $data = $request->all();

        if (User::where('email', $data['email'])->get()->first()) {
            return back()->with('error', 'Такой пользователь уже есть');
        }
    
        $newUser = new User();
        $newUser->second_name = $data['second_name'];
        $newUser->first_name = $data['first_name'];
        $newUser->patronymic = $data['patronymic'];
        $newUser->tel = $data['tel'];
        $newUser->email = $data['email'];
        $newUser->login = $data['login'];
        $newUser->password = bcrypt($data['password']);
        $newUser->type_id = 1;
    
        $newUser->save();
    
        return redirect()->route('main')->with('status', 'Регистрация прошла успешно');
    }

}

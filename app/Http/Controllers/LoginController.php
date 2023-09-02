<?php

namespace App\Http\Controllers;

use App\Models\userLogin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $result = userLogin::where("email", $email)->where("password", $password)->first();

        if($result)
        {
            $request->session()->put("user_type", $result->user_type);
            $request->session()->put("name", $result->name);

            if($result->user_type == "admin")
            {
                return redirect('/admin-dashboard');
            }
        }
        return redirect('sign-in')->with('msg','Email or Password Does not match');;
    }
    public function logout() {
        session()->forget(['user_type','name']);
        return redirect('/sign-in?logout=success');
    }
}

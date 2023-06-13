<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class LoginController extends Controller
{
    public function show_login_view()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        if(auth()->guard('admin')->attempt(['username'=>$request->input('username'), 'password'=>$request->input('password')]))
        {
            return redirect()->route('admin.dashboard');
        }
    }

    public function create_new_admin()
    {   
        $admin = new App\Models\Admin();
        $admin->name = 'omer memes';
        $admin->email = 'admin@gmail.com';
        $admin->username = 'admin';
        $admin->password = bcrypt('admin');
        $admin->com_code = 1;
        $admin->save();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.ShowLogin');
    }
}
 
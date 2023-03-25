<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $data['title'] = 'Gipra | Interview Task';
        return view('auth.login', $data);
    }
    public function loginAction(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = ['email' => $request->username, 'password' => $request->password, 'type' => $request->type];
        $login_url = $request->user . '.login';

        if (auth()->attempt($credentials, true)) {
            if ($request->user == 'admin') {
                return redirect()->route('admin.dashboard')->withSuccess('Login Success');
            } elseif ($request->user == 'staff') {
                return redirect()->route('staff.dashboard')->withSuccess('Login Success');
            } elseif ($request->user == 'developers') {
                return redirect()->route('developers.dashboard')->withSuccess('Login Success');
            } else {
                exit('denied');
            }
        }

        return redirect()->route($login_url)->withError('Login credentials are not valid. Try Again');
    }

    public function logout(Request $request)
    {
        $segment = auth()->user()->type;
        auth()->logout();
        if ($segment == 1) {
            return redirect()->route('admin.login');
        } elseif ($segment == 2) {
            return redirect()->route('staff.login');
        } else {
            return redirect()->route('developers.login');
        }
    }
}

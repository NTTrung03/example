<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showlogin()
    {
        return view('auth.login');
    }

    public function showregister()
    {
        return view('auth.register');
    }

    public function forgotpassword()
    {
        return view('auth.forgot');
    }

    public function login(Request $request)
    {
        //$credentials chua giu lieu duoc xac thuc tu request
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);


        $remember = $request->has('remember');
        //Auth::attempt() se kiem tra xem email va password co ton tai trong database hay khong
        //thu dang nhap voi email va password duoc gui tu form
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            //luu email va password neu remember duoc chon
            if ($remember) {
                Cookie::queue('last_email', $request->email);
                Cookie::queue('last_password', ($request->password));
            }
            //Auth::user() se tra ve user vua dang nhap
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('home.index');
            }
        }
        //neu dang nhap that bai se tra ve trang login voi thong bao loi
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function logout(Request $request)
    {   
        //logout user
        Auth::logout();
        //xoa session va tao lai token
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        //tra ve trang login
        return redirect('/login')->withCookies([
            //xoa cookie last_email va last_password
            Cookie::forget('last_email'),
            Cookie::forget('last_password'),
        ]);
    }
}

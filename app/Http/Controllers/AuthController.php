<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Alert::success('LOGIN AKUN BERHASIL', 'Anda berhasil melakukan login akun');

            if (Auth::user()->role_id == 1) {
                return redirect()->intended('admin');
            } else {
                return redirect()->intended('pegawai');
            }
        } else {
            Alert::error('LOGIN AKUN GAGAL', 'Pastikan data yang dimasukkan sesuai dengan saat register akun');
        }

        return back()->withErrors([
            'email' => 'Email yang anda masukkan tidak terdaftar',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Alert::info('LOGOUT AKUN BERHASIL', 'Anda berhasil logout dari sistem');

        return redirect()->to('login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(AuthRequest $request)
    {
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'role_id'  => 2,
            'password'  => Hash::make($request->password)
        ]);

        Alert::success('REGISTER AKUN BERHASIL', 'Anda berhasil melakukan register akun');
        return redirect('login');
    }
}

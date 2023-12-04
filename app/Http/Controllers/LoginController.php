<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],[
            'email.required' => 'Mohon isi form ini',
            'password.required' => 'Mohon isi form ini',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if ($user && $request->password === $user->password) {
            Auth::login($user);
            $request->session()->put('username', $user->name);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
        
    }  

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu berhasil logout');
    }

    public function register(){
        return view('auth.register');
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ],[
            'name.required' => 'Mohon isi form ini',
            'name.regex' => 'Masukkan hanya teks',
            'email.required' => 'Mohon isi form ini',
            'email.email' => 'Masukkkan inputan bertipe email',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Mohon isi form ini',
            'password.min' => 'Password minimal 8 digit',
        ]);
    
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        $user = User::create($data);
    
        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard')->with('success', 'Registrasi Berhasil');
        } else {
            return redirect()->route('login')->with('failed', 'Gagal mendaftar');
        }
    }
}

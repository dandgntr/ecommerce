<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Jika login berhasil, arahkan ke halaman yang sesuai berdasarkan role
        if (Auth::user()->role === 'admin') {
            return redirect()->route('dashboard')->with('success', 'Welcome, Admin!');
        } else {
            return redirect()->route('home')->with('success', 'Welcome, User!');
        }
    }

    // Kirim pesan error jika login gagal
    return back()->withErrors(['login' => 'Invalid credentials.'])->with('error', 'Login failed! Please check your credentials.');
}


    // Proses logout
    public function logout()
    {
        Auth::logout(); 
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

    // Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Proses registrasi
    public function register(Request $request)
    {
        // Validasi data registrasi
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:user,admin' // Pastikan role adalah 'user' atau 'admin'
        ]);

        // Buat user baru dengan role yang divalidasi
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'] // Simpan role yang dipilih
        ]);

        // Login user setelah registrasi
        session(['user' => $user->id]);
        
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}

<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthLoginCustomController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Gunakan view login yang sama
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email', // Atau 'username'
            'password' => 'required',
            'remember' => 'nullable|boolean',
        ]);

        $user = User::where('email', $request->email)->first(); // Atau 'username'

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user, $request->remember);
            // dd(Auth::user());
            return redirect()->intended(route('home')); // Sesuaikan dengan route Anda
        }

        return back()->withErrors([
            'email' => 'These credentials do not match our records.', // Sesuaikan pesan error
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

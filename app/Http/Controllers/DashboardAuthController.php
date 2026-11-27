<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardAuthController extends Controller
{
    public function login()
    {
        return view('dashboard.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $username = config('dashboard.username');
        $passwordHash = config('dashboard.password');

        if (
            !$username ||
            !$passwordHash ||
            !hash_equals($username, $request->username) ||
            !Hash::check($request->password, $passwordHash)
        ) {
            return back()->withErrors([
                'username' => 'Identifiant ou mot de passe incorrect.',
            ])->onlyInput('username');
        }

        $request->session()->regenerate();

        $request->session()->put('dashboard_authenticated', true);
        $request->session()->put('dashboard_last_activity', time());

        return redirect()->route('dashboard.home');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('dashboard.login');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) { //['email' => $credentials['email'], 'password' => $credentials['password']]
            // Authentication passed...
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}

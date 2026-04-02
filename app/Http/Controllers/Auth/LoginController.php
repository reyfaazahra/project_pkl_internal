<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Redirect setelah login berdasarkan role
     */
    protected function authenticated(Request $request, $user)
{
    // Kalau isAdmin = 1 atau 2 → admin
    if ($user->isAdmin == '1' || $user->isAdmin == '2') {
        return redirect('/admin');
    }

    // Kalau user biasa → dashboard
    return redirect('/dashboard');
}

}

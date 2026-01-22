<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function login(): View
    {
        return view("admin.login");
    }

    public function authAdmin(Request $request): RedirectResponse
    {
        $valid = $request->validate([
            "email" => "required|email",
            "password" => 'required'
        ]);

        if (Auth::guard('admin')->attempt($valid)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}

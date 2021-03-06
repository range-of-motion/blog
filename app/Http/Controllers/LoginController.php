<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller {
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            return redirect()->route('index');
        }

        return redirect()->route('login');
    }
}

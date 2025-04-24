<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth; // ✅ This line was added!

class SessionController extends Controller
{
    public function destroy(){
        Auth::logout();
        return redirect("/");
    }

    public function unwelcome(){
        return redirect("/");
    }

    public function show() {
        return view('account.login');
    }
    public function create(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($credentials)) {
            // Auth::attempt checks the credentials and logs user in if correct
            $request->session()->regenerate(); // 🔒 Prevent session fixation
            return redirect()->intended('/'); // or wherever you wanna go
        }
    
        // If login fails:
        return back()->withErrors([
            'email' => 'Nepareizs e-pasts vai parole.',
        ])->onlyInput('email'); // keep email filled in
    }
    
}

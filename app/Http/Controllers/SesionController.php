<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
// Retrieve the currently authenticated user...
$user = Auth::user();

// Retrieve the currently authenticated user's ID...
$id = Auth::id();


class SesionController extends Controller
{
    public function create(){
        return view('loguin');
    }
    public function authenticate()
    {
        if (Auth::attempt(request(['email', 'password']))==false) {
            return back()->withErrors([
                'email' => 'usuario o contraseña incorrecto.',
            ]);
        }else{
            return view('welcome');
        }
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('loguin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', Rules\Password::defaults()],
        ]);



        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        Auth::login($user);



        event(new Registered($user));

        return redirect('/dashboard');
    }

    public function login(Request $request): RedirectResponse
    {
        if(Auth::check() || Auth::viaRemember()) redirect()->route('dashboard');

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', Rules\Password::defaults()],
            'remember' => ['boolean']
        ]);

        $credentials = $request->only('email', 'password', 'remember_token');

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            return redirect('/dashboard');
        }else {
            return redirect('');
        }
    }

    public function destroy(Request $request): RedirectResponse
    {
            if (Auth::check()){
                Auth::logout();
                return redirect('/');
            }else {
                return redirect("/");
            }
    }
}

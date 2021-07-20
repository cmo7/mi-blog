<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registro(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $validatedData["password"] = bcrypt($validatedData["password"]);

        $user = User::create($validatedData);
        auth()->login($user);

        session()->flash('success', 'Se ha creado tu cuenta');
        return redirect('/');
    }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (!auth()->attempt($validatedData)) {
            return back()
                ->withInput()
                ->withErrors(['email' => 'Nombre de usuario o password incorrectos']);
        }

        return redirect('/')->with('success', 'Has accedido con éxito');
    }
    public function logout(Request $request)
    {
        auth()->logout();

        return redirect('/')->with('success', 'Has salido de tu cuenta');
        //sesion()->flash('success', 'Has salido de tu cuenta);
        //redirect('/');
    }
    public function formularioRegistro()
    {
        return view('formulario-Registro');
    }
    public function formularioLogin()
    {
        return view('formulario-login');
    }
}

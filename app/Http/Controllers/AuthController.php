<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'telephone' => 'required|string',
            'role' => 'required|string',
        ]);

        // Création d'un nouvel utilisateur
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->telephone = $request->telephone;
        $user->role = $request->role;

        $user->save();

        // Redirection après l'enregistrement
        return redirect()->route('login')->with('success', 'Registered successfully');
    }
    public function login()
    {
        return view('login');
    }

    public function loginPost()
    {
        $credetails = [
            'email' => $request->email,
            'password' => $request->password,

        ];
        if (Auth::attempt($credetails))
        {
            return redirect ('/home')->with("success" , 'login good');
        }
        return back()->with('error', 'Error Email or password');

    }
    public function store(Request $request)
{
    $name = $request->name;
    $password = $request->password;
    $password_confirmation = $request->password_confirmation;
    $telephone = $request->telephone;
    $role = $request->role;

    // Validation 
    $request->validate([
        'name' => 'required'
    ]);

    // Insertion 
    User::create([
        'name' => $request->name,
        'email' => $request->email, // Ajoutez cette ligne
        'password' => $request->password, 
        'password_confirmation' => $request->password_confirmation,
        'telephone' => $request->telephone,
        'role' => $request->role,
    ]);
    

    return redirect()->route('register');
}

}

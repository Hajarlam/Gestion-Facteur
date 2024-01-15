<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'tenant_societe_id' => ['nullable', 'integer', 'exists:tenant_societes,id'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'max:255'],
            'full_name' => ['required', 'string', 'max:255'],
            'last_login' => ['required', 'string', 'max:255'],
            'statut' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'], // Ajoutez cette ligne

        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'tenant_societe_id' => $data['tenant_societe_id'],
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'phone' => $data['telephone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'full_name' => $data['full_name'],
            'last_login' => $data['last_login'],
            'statut' => $data['statut'],
            'username' => $data['username'], // Ajoutez cette ligne
        ]);
    }
}

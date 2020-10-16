<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Symfony\Contracts\Service\Attribute\Required;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view('Pengguna.Registration');
    }
    public function postregistration(Request $request)
    {

        User::create(['name' => $request->name, 'email' => $request->email, 'level' => $request->level, 'password' => bcrypt($request->password)]);
        return redirect('/');
    }
}
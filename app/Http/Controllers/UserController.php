<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{

        // public function store(Request $request)
        // {
        //     $request->validate([
        //         'name' => 'required|string|max:255',
        //         'email' => 'required|string|email|max:255|unique:users',
        //         'password' => 'required|string|min:8|confirmed',
        //         'role' => 'required|in:admin,merchant,customer', // Ensure role is valid
        //     ]);

        //     $user = User::create([
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'password' => bcrypt($request->password),
        //         'role' => $request->role, // Store role
        //     ]);

        //     Auth::login($user);

        //     // Redirect Based on Role
        //     return $this->redirectBasedOnRole($user);
        // }


}

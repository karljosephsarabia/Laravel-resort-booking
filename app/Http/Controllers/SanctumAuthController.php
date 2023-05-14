<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SanctumAuthController extends Controller
{
    public function register (Request $request) 
    {
        $this->validate($request, [
            'name' => 'required | min: 4',
            'email' => 'required | email',
            'password' => 'required | min: 8'
        ]);

        $user = User::create([
            'user_type' => $request -> user_type,
            'name' => $request -> name,
            'password' => bcrypt($request -> password),
            'address' => $request -> address,
            'email' => $request -> email,
            'contact_number' => $request -> contact_number
        ]);

        return response() -> json(['message' => 'Successfully registered'], 200);
    }

    public function login (Request $request) {
        $data = [
            'email' => $request -> email,
            'password' => $request -> password
        ];

        if (auth() -> attempt($data)) {
            $token = auth() -> user() -> createToken('LaravelAuthApp')->plainTextToken;
            return response() -> json(['token' => $token], 200);
        } else {
            return response() -> json(['error' => 'Unauthorized'], 401);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class UserController extends Controller
{
    public function update(Request $request, User $user) {
        $userData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['string', 'min:8', 'confirmed'],
        ]);

        if (isset($userData['password']))
            $userData['password'] = Hash::make($userData['password']);

        $success = $user->update($userData);
        return response()->json([ 'success' => $success ]);
    }
}

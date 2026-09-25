<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

use App\Models\User;

class UserController extends Controller
{
    public function update(Request $request, User $user) {
        abort_unless((int) $user->id === (int) Auth::id(), 403);

        $userData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => ['string', 'min:8', 'confirmed'],
        ]);

        if (isset($userData['password']) || $userData['email'] !== $user->email) {
            $request->validate(['current_password' => ['required', 'current_password']]);
        }

        if (isset($userData['password'])) {
            $userData['password'] = Hash::make($userData['password']);
            $user->setRememberToken(Str::random(60));
        }

        $success = $user->update($userData);
        return response()->json([ 'success' => $success ]);
    }

    public function destroy(Request $request, User $user) {
        abort_unless((int) $user->id === (int) Auth::id(), 403);

        $request->validate(['current_password' => ['required', 'current_password']]);

        // Everything the site holds about them: the account, their messages
        // and any unused password reset link
        DB::transaction(function () use ($user) {
            $user->verbiages()->delete();
            DB::table('password_resets')->where('email', $user->email)->delete();
            $user->delete();
        });

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['success' => true, 'redirect' => route('feed')]);
    }
}

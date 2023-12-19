<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfilePasswordUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(ProfilePasswordUpdateRequest $request)
    {
        $user = User::find(Auth()->user()->id);
        $user->password = Hash::make($request['password']);
        $user->save();

        return back()->with('status', 'password-updated');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileDestroyRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit()
    {
        $user = User::find(Auth()->user()->id);

        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request)
    {
        $data = $request->all();

        $user = User::find(Auth()->user()->id);
        $user->update($data);
        $user->save();

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }
}

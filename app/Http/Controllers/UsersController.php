<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserAvatartRequest;
use App\User;

class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function updateAvatar(UpdateUserAvatartRequest $request, User $user)
    {        
        $user->avatar = $request->avatar->store('public/users');

        $user->save();

        return back();
    }
}

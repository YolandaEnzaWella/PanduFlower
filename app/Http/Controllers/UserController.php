<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $data = [
            'user' => Auth::user()
        ];
        return view('user.show', $data);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('user.show', $user);
    }
}

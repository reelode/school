<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        //$user = User::findOrFail($user);
        // return dd('profile.index', compact('user'));
        return view('profile.index', [
            'user' => $user,
        ]);
    }
}

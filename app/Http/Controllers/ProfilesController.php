<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use function PHPUnit\Framework\isEmpty;

class ProfilesController extends Controller
{
    /*public function index(User $user)
    {
        //$user = User::findOrFail($user);
        // return dd('profile.index', compact('user'));
        return view('profile.index', [
            'user' => $user,
        ]);
    }*/

    public function view($username)
    {
        if ($user = User::where('id', '=', $username)->orWhere('username', $username)->first()) {
            return View::make('profile.index', compact('user'));
        }
        return abort(404, 'User not found with ID/Username ' . $username);
    }
}

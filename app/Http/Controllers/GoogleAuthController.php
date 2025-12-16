<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Socialite;

use Illuminate\Http\Request;
use Throwable;

class GoogleAuthController extends Controller
{
    //
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $google_user = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            [
                'google_id' => $google_user->id,
            ],
            [
                'name' => $google_user->name,
                'email' => $google_user->email,
                'avatar' => $google_user->avatar,
            ]
        );
        Auth::login($user);
        return redirect('/dashboard');
    }
}

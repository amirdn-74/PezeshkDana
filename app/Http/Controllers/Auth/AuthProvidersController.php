<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthProvidersController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::where('email', $googleUser->email)->first();

        if ($user) {
            $user->provider = 'google';
            $user->provider_id = $googleUser->id;
            $user->save();
        } else {
            $user = User::create([
                'provider' => 'google',
                'provider_id' => $googleUser->id,
                'email' => $googleUser->email,
                'name' => $googleUser->name,
            ]);
        }

        Auth::login($user);

        return redirect()->intended('/panel/dashboard');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $socialUser = Socialite::driver('google')->user();
            
            // Temukan atau buat pengguna berdasarkan google_id
            $user = User::firstOrCreate(
                ['google_id' => $socialUser->id],
                [
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    'password' => Hash::make('Admin#123'),
                    'google_token' => $socialUser->token,
                    'google_refresh_token' => $socialUser->refreshToken,
                ]
            );

            // Login pengguna
            Auth::login($user);

            // Redirect ke dashboard
            return redirect('/dashboard');

        } catch (\Exception $e) {
            // Tangani kesalahan
            return redirect('/login')->with('error', 'Terjadi kesalahan saat login dengan Google.');
        }
    }
}

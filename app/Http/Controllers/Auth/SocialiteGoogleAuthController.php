<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class SocialiteGoogleAuthController extends Controller
{
    public function redirectToProvider(): RedirectResponse
    {
        return Socialite::driver("google")->redirect();
    }

    public function handelProviderCallback(): RedirectResponse
    {
        try {
            $googleUser= Socialite::driver("google")->stateless()->user();
        } catch(Exception $err) {
            return redirect()->back()->with("status", "Something Went Wrong!");
        }

        $existingUser=User::where("google_id", $googleUser->id)->first();

        if (!$existingUser) {
            $newUser=User::create([
                "google_id"=>$googleUser->id,
                "name"=>$googleUser->name,
                "email"=>$googleUser->email,
                "avatar"=>$googleUser->avatar,
                "email_verified_at"=>now()
            ]);
            Auth::login($newUser);
        } else {
            Auth::login($existingUser);
        }

        return to_route('user.dashboard');
    }
}

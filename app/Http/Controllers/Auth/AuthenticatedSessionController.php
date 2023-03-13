<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $gender=auth()->user()->gender==="male" ? "Mr." : "Mrs.";

        return to_route(User::find(auth()->id())->getRedirectRouteName())->with("success", "Welcome Back $gender".auth()->user()->name." 😍");
    }

    public function destroy(Request $request): RedirectResponse
    {
        $user=auth()->user();

        $gender=$user->gender==="male" || $user->gender === "other" ? "Mr." : "Mrs.";

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route(User::find($user->id)->logoutRedirect())->with("success", 'See you later '.$gender.$user->name .' 🤗');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $mojangResponse = Http::get("https://api.mojang.com/users/profiles/minecraft/{$request->name}");

        if ($mojangResponse->successful()) {
            $uuid = $mojangResponse->json()['id'];
            $avatarLink = "https://crafatar.com/avatars/{$uuid}?size=100&overlay";
        } else {
            // Use Steve skin if Minecraft account is not found
            $uuid = null;
            $avatarLink = asset('images/steve.png'); // Use local Steve skin
        }

        // Create user with the avatar link and uuid
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $avatarLink,
            'uuid' => $uuid,
            'rank' => 'player', 
            'subrank' => 'member',
        ]);

        // Default permissions for new user
        Permission::create(['user_id' => $user->id]);

        event(new Registered($user));
        Auth::login($user);

        // Send email verification notification
        $user->sendEmailVerificationNotification();

        return redirect()->route('verification.notice')->with('resent', true);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Validator;
use App\Rules\ReCaptcha;



class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            // get user data from Google
            $user = Socialite::driver('google')->user();

            $finduser = User::where('social_id', $user->id)->first();

            if ($finduser)  
            {
                Auth::login($finduser);
                return redirect('/');
            }
            else
            {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'social_type' => 'google', 
                    'password' => bcrypt('my-google'),
                ]);

                Auth::login($newUser);

                return redirect('/');
            }

        }
        catch (Exception $e)
        {
            dd($e->getMessage());
        }
    }

    use App\Rules\ReCaptcha;

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'g-recaptcha-response' => ['required', new ReCaptcha($request->input('g-recaptcha-response'))],
        ], [
            'g-recaptcha-response.required' => 'Please complete the reCAPTCHA to proceed.',
        ]);
    
        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        return redirect()->back()->with('success', 'User registered successfully!');
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'g-recaptcha-response' => ['required', new ReCaptcha($request->input('g-recaptcha-response'))],
        ], [
            'g-recaptcha-response.required' => 'Please complete the reCAPTCHA to proceed.',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended('/')->with('success', 'Login successful!');
        }
    
        // If authentication fails, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
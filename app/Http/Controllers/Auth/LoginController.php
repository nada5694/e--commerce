<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Socialite;
use Str;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function github()
    {
        // send the user's request to github
        return Socialite::driver('github')->redirect();
    }

    public function githubRedirect()
    {
        // get oauth request back from github to authenticate user
        $user = Socialite::driver('github')->user();

        // if the user doesn't exist, then add them
        // if they do, get the model
        // either way, authenticate the user into the application and redirect afterwards
        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'username' => $user->name , // username (column from users table) => $user->name (name from github)
            'password' => Hash::make(Str::random(24)) ,
        ]);

        Auth::login($user, true);

        return redirect()->route('home');
    }

    public function google()
    {
        // send the user's request to github
        return Socialite::driver('google')->redirect();
    }

    public function googleRedirect()
    {
        // get oauth request back from google to authenticate user
        $user = Socialite::driver('google')->user();

        // if the user doesn't exist, then add them
        // if they do, get the model
        // either way, authenticate the user into the application and redirect afterwards
        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'username' => $user->name , // username (column from users table) => $user->name (name from google)
            'password' => Hash::make(Str::random(24)) ,
        ]);

        Auth::login($user, true);

        return redirect()->route('home');
    }

    public function facebook()
    {
        // send the user's request to github
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookRedirect()
    {
        // get oauth request back from google to authenticate user
        $user = Socialite::driver('facebook')->user();

        // if the user doesn't exist, then add them
        // if they do, get the model
        // either way, authenticate the user into the application and redirect afterwards
        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'username' => $user->name , // username (column from users table) => $user->name (name from google)
            'password' => Hash::make(Str::random(24)) ,
        ]);

        Auth::login($user, true);

        return redirect()->route('home');
    }

    // public function github($provider)
    // {
    //     return Socialite::driver($provider)->redirect();
    // }


    // /**
    //  * Obtain the user information from provider.
    //  *
    //  * @return Response
    //  */
    // public function githubRedirect($provider)
    // {
    //     $user = Socialite::driver($provider)->user();
    //     $authUser = $this->findOrCreateUser($user, $provider);
    //     Auth::login($authUser, true);
    //     return redirect($this->redirectTo);
    // }

    // /**
    //  * If a user has registered before using social auth, return the user
    //  * else, create a new user object.
    //  * @param  $user Socialite user object
    //  * @param $provider Social auth provider
    //  * @return  User
    //  */
    // public function findOrCreateUser($user, $provider)
    // {
    //     $authUser = User::where('provider_id', $user->id)->first();
    //     if ($authUser) {
    //         return $authUser;
    //     }
    //     return User::create([
    //         'name'     => $user->name,
    //         'email'    => $user->email,
    //         'provider' => $provider,
    //         'provider_id' => $user->id
    //     ]);
    // }
}

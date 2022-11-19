<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Foundation\Auth\ResetsPasswords;

class ProfileController extends Controller
{
    public function index()
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'username' => ['required', 'string'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password'  => ['required',  'confirmed'],
        //     'user_type' => ['required', 'in:vendor,customer,admin,moderator'],
        //     'gender' => ['required', 'in:male,female,undetermined'],
        //     'phone' => ['required', 'string'],
        // ]);
        return view ('website.website.profile');
    }

    public function edit($id)
    {
        $model = User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $users            = User::findOrFail($id);
        $users->name      = $request->name;
        $users->username  = $request->username;
        $users->user_type = $request->user_type;
        $users->save();

        return redirect()->route('website.website.profile')
                        ->with('message','User Updated successfully.');
    }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}

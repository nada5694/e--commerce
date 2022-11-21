<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\ResetsPasswords;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('created_at','asc');
        // $users->username  = $request->username;
        // $users->name      = $request->name;
        // $users->lastname  = $request->lastname;
        // // $users->avatar    = $request->avatar;
        // $users->email     = $request->email;
        // $users->user_type = $request->user_type;
        // $users->phone     = $request->phone;
        // $users->gender    = $request->gender;
        // $users->address   = $request->address;
        // $users->city      = $request->city;
        // $users->country   = $request->country;
        // $users->dob       = $request->dob;
        // $users->bio       = $request->bio;
        // // $users->save();


        // $request->validate([
        //     'name'      => ['required', 'string', 'max:255'],
        //     'username'  => ['required', 'string'],
        //     'lastname'  => ['required', 'string', 'max:255'],
        //     'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password'  => ['required',  'confirmed'],
        //     'user_type' => ['required', 'in:vendor,customer,admin,moderator'],
        //     'gender'    => ['required', 'in:male,female,undetermined'],
        //     'phone'     => ['required', 'string'],
        //     'address'   => ['required', 'string'],
        //     'city'      => ['required', 'string'],
        //     'country'   => ['required', 'string'],
        //     'dob'       => ['date', 'string'],
        //     'bio'       => ['required', 'string'],
        // ]);

        return view ('website.website.profile' ,compact('users'));
    }

    public function editProfile()
    {
        $model = User::findOrFail(auth()->user()->id);

        return view('website.website.edit-profile' ,compact('model'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        
        $users            = User::findOrFail($id);
        // $users->username  = $request->username;
        $users->name      = $request->name;
        $users->lastname  = $request->lastname;
        // $users->avatar    = $request->avatar;
        // $users->email     = $request->email;
        // $users->user_type = $request->user_type;
        // $users->phone     = $request->phone;
        // $users->gender    = $request->gender;
        // $users->address   = $request->address;
        // $users->city      = $request->city;
        // $users->country   = $request->country;
        // $users->dob       = $request->dob;
        // $users->bio       = $request->bio;
        $users->save();

        return redirect()->route('profile')
                        ->with('message','Profile Updated successfully.');
    }

    // public function edit($id)
    // {
    //     $model = User::findOrFail($id);
    //     return view('website.website.profile',compact('model'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $users            = User::findOrFail($id);
    //     $users->name      = $request->name;
    //     $users->lastname  = $request->lastname;
    //     $users->username  = $request->username;
    //     $user->avatar     = $request->avatar;
    //     $users->user_type = $request->user_type;
    //     $users->save();

    //     return redirect()->route('website.website.profile')
    //                     ->with('message','User Updated successfully.');
    // }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}

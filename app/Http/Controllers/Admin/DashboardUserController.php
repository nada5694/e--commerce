<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at','asc')->paginate(30);
        // $users = User::get();
        // $users = User::all();
        // $users                      = new User();

        return view('Admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $users = User::get();
        // $users = User::all();
        $users                      = new User();
        $users->name                = $request->name;
        $users->username            = $request->username ;
        $users->email               = $request->email;
        $users->gender              = $request->gender;
        $users->User_type           = $request->User_type ;
        $users->phone               = $request->phone;
        // $users->available_quantity  = $request->available_quantity;
        // $users->is_accessory        = $request->is_accessory;
        // $users->product_category    = $request->product_category;
        // $users->create_user_id      = auth()->user()->id;
        $users->save();

        return redirect()->route('users.index')
            ->with(['message' => "($users->name) - Added successfully!"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

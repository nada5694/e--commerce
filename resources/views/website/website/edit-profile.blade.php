@extends('layouts.website.master')
@section('title')
    Profile Management
@endsection
@section('content')
<style>
    .container-fluid-profile {
        padding-right: 15px;
        padding-left: 15px;
        margin-top: 7%;
        margin-right: 3%;
        margin-left: 3%;
    }
    .card {
        width: 100%;
        border-radius: 10px;
        border: 1px solid #d2d6da;
        color: #495057;
    }
    .profile-body {
        justify-content: center;
    }
    .card-profile-bottom{
        margin-top: 15rem;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
    .card-body {
        position: relative;
        padding-top: 2%;
        padding-left: 2%;
        border-radius: 10px;
        border: 1px solid #d2d6da;
    }
    .header-card {
        margin-right: 0% !important;

    }
    .card_header {
        padding: 0.75rem 1.25rem;
    }
    .setting-button {
        margin-left: auto;
        border-radius: 10px;
    }
    .about {
        margin-right: 0.5%;
        margin-left: 0.4%;
    }
    .about-me {
        margin-left: 1.8%;
    }
    .nav-wrapper {
        margin-left: 25%;
        margin-right: -1%;
    }
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #be539b;
        border-radius: 10px;
    }
    .nav .nav-item {
        /* width: 10px */
    }
    .form-control {
        border-radius: 10px;
        border: 1px solid #d2d6da;
        color: #717171;
    }
    .btn-update {
        margin-left: auto;
        border-radius: 10px;
        color: #fff;
        background: #b84592;
        border-color: #b84592;
    }
    .avatar {
        text-align: center;
        margin-bottom: 10%;
    }
    .profile-body{
        margin-bottom: 20%;
    }
</style>
<form action="{{route('update-profile', $model->id)}}" method="post" id="alert-form">
    @csrf
    {{ method_field('patch') }}
    <div class="container-fluid-profile py-4">
        <div class="row profile-body">
            <div class="card-body col-xl-7 mr-4">
                <p class="text-uppercase text-sm">User Information</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Username</label>
                            <input class="form-control @error('username') is-invalid @enderror" type="text"  value="{{Request::old('username') ? Request::old('username') : $model->username}}" name="username" placeholder="Enter Your Username">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Email address</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" value="{{Request::old('email') ?  Request::old('email') : $model->email}}" name="email" placeholder="Enter Your Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">First name</label>
                            <input class="form-control @error('name') is-invalid @enderror" value="{{Request::old('name') ? Request::old('name') : $model->name}}" type="text" name="name" placeholder="Enter Your Frist Name" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Last name</label>
                            <input class="form-control @error('lastname') is-invalid @enderror" type="text"  value="{{Request::old('lastname') ? Request::old('lastname') : $model->lastname}}" placeholder="Enter Your Last Name" name="lastname">
                        </div>
                    </div>
                    <div class="col-md-6" style="display: none;">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">User Type</label>
                            <input class="form-control @error('user_type') is-invalid @enderror" type="text"  value="{{Request::old('user_type') ? Request::old('user_type') : auth()->user()->user_type}}" name="user_type">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="example-text-input">Gender</label>
                        <select name="gender" class="form-control select @error('gender') is-invalid @enderror" value="{{Request::old('gender') ? Request::old('gender') : $model->gender}}">
                            <option value="" disabled selected> ---------- Please select a gender ---------- </option>
                            <option value="male" {{ isset($model) && $model->gender == 'male' ? 'selected'  : '' }}>male</option>
                            <option value="female" {{ isset($model) && $model->gender == 'female' ? 'selected'  : '' }}>female</option>
                            <option value="undetermined" {{ isset($model) && $model->gender == 'undetermined' ? 'selected'  : '' }}>undetermined</option>
                        </select>
                    </div>
                </div>
                <hr class="horizontal dark">
                <p class="text-uppercase text-sm">Contact Information</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Address</label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text"  value="{{Request::old('address') ? Request::old('address') : $model->address}}" placeholder="Enter Your Address" name="address">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">City</label>
                            <input class="form-control @error('city') is-invalid @enderror" type="text"  value="{{Request::old('city') ? Request::old('city') : $model->city}}" placeholder="Enter Your City" name="city">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Country</label>
                            <input class="form-control @error('Country') is-invalid @enderror" type="text"  value="{{Request::old('Country') ? Request::old('Country') : $model->Country}}" placeholder="Enter Your Country" name="country">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Date Of Birth</label>
                            <input class="form-control @error('dob') is-invalid @enderror" type="text"  value="{{Request::old('dob') ? Request::old('dob') : $model->dob}}" placeholder="Enter Your Date Of Birth" name="dob">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Phone Number</label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="text"  value="{{Request::old('phone') ? Request::old('phone') : $model->phone}}" placeholder="Enter Your Phone Number" name="phone">
                        </div>
                    </div>
                </div>
                <hr class="dark">
                <p class="text-uppercase text-sm">About me</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Bio</label>
                            <textarea class="form-control" name="bio" placeholder="Enter your bio here..."  rows="5">{{Request::old('bio') ? Request::old('bio') : $model->bio }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-update mt-4 d-block me-auto" type="submit">Update</button>
            </div>
</form>


            <div class="card-body profile-body col-xl-4">
                    <div class="col-md-12">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                {{-- <img src="{{ auth()->user()->avatar}}" alt="{{$model->name.'img'}}" width="80" height="80" name="avatar"> --}}
                                <img class="img-70 rounded-circle" src="{{$model->avatar}}" alt="{{$model->username ?? $model->name}}" width="50%" height="50%" />
                            </div>
                        </div>
                    </div>
                    <a style="text-align: center;"><h4>{{ $model->username }}</h4></a>
                    <form action="{{route('update-img', $model->id)}}" method="post">
                        @csrf
                        <div class="col" style="text-align: center;">
                            <input type="file" name="avatar" accept="image/jpeg,image/png" value="{{ old('avatar',$model->avatar) }} class="@error('avatar') is-invalid @enderror>
                            @error('avatar')
                            <div class="invalid-feedback ps-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-update mt-4 d-block me-auto" type="submit">Update</button>

                    </form>
                <hr class="horizontal dark">
                    {{-- <div class="col-md-12">
                        <p class="text-uppercase text-sm">Change Password</p>
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Current Password</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" value="{{Request::old('email') ?  Request::old('email') : $model->email}}" name="email" placeholder="Enter Your Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">New Password</label>
                            <input class="form-control @error('name') is-invalid @enderror" value="{{Request::old('name') ? Request::old('name') : $model->name}}" type="text" name="name" placeholder="Enter Your Frist Name" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Conferm New Password</label>
                            <input class="form-control @error('lastname') is-invalid @enderror" type="text"  value="{{Request::old('lastname') ? Request::old('lastname') : $model->lastname}}" placeholder="Enter Your Last Name" name="lastname">
                        </div>
                    </div> --}}

                    {{-- <p class="text-uppercase text-sm">Change Password</p>
                <form action="{{route('editProfile-post')}}" method="post">
                    <div class="mb-3">
                        <label class="form-label">Current Password</label> --}}
                        {{-- <input class="form-control @error('current_password') is-invalid @enderror" name="current_password" type="password" placeholder="Enter Current Password" value="{{Request::old('password') ? Request::old('password') : $password_decrypt}}"/> --}}
                        {{-- <input class="form-control @error('current_password') is-invalid @enderror" name="current_password" type="password" placeholder="Enter Current Password"/>
                        @error('current_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Enter New Password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm New Password</label>
                        <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder="New Password"/>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                <div>
                    <button class="btn btn-update mt-4 d-block me-auto" type="submit">Update</button>
                </div>
            </form> --}}
            {{-- </div> --}}


        <form action="{{route('editProfile-post')}}" method="post">
            @csrf
            <div class="mb-5"><h5>Change Password</h5></div>
                @if(session()->has('user_password_updated_message'))
                <div class="alert alert-success text-center" style="width: 60%; margin-top: 1%; margin-left: auto; margin-right: auto;">
                    {{ session()->get('user_password_updated_message') }}
                </div>
                @endif
                <div class="mb-3">
                    <label class="form-label">Current Password</label>
                    {{-- <input class="form-control @error('current_password') is-invalid @enderror" name="current_password" type="password" placeholder="Enter Current Password" value="{{Request::old('password') ? Request::old('password') : $password_decrypt}}"/> --}}
                    <input class="form-control @error('current_password') is-invalid @enderror" name="current_password" type="password" placeholder="Enter Current Password"/>
                    @error('current_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Enter New Password"/>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirm New Password</label>
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" type="password" placeholder="New Password"/>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-footer">
                    {{-- <button class="btn btn-primary btn-block" type="submit">Save</button> --}}
                    <button class="btn btn-update mt-4 d-block me-auto" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection

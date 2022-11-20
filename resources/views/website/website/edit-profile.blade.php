@extends('layouts.website.master')
@section('title')
    Profile Management
@endsection
@section('content')
<style>
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
        padding-top: 2%;
        padding-left: 2%;
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
</style>
<form action="{{route('update-profile',$model->id)}}" method="post" id="alert-form">
    @csrf
    {{ method_field('put') }}
    <div class="container py-4">
        <div class="row profile-body">
            {{-- <div class="card"> --}}
                {{-- <div class="card_header ">
                    <div class="d-flex align-items-center">
                    <p class="mb-0">Edit Profile</p>
                    <a class="btn btn-primary btn-sm ms-auto setting-button" href="{{route('editProfile')}}">Settings</a>
                    </div>
                </div> --}}
                {{-- <form action="{{route('users.update',$model->id)}}" method="post" id="alert-form"> --}}
                    {{-- @csrf --}}
                    {{-- {{ method_field('put') }} --}}
                    {{-- @include('Admin.users.form') --}}
                    <button class="btn btn-success mt-4 d-block me-auto" type="submit">Update</button>
                {{-- </form> --}}
                <div class="card-body">
                    <p class="text-uppercase text-sm">User Information</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Username</label>
                            <input class="form-control @error('username') is-invalid @enderror" type="text"  value="{{Request::old('username') ? Request::old('username') : $model->username}}" name="username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Email address</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" value="{{Request::old('email') ?  Request::old('email') : $model->email}}" name="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">First name</label>
                            <input class="form-control @error('name') is-invalid @enderror" value="{{Request::old('name') ? Request::old('name') : $model->name}}" type="text" name="name" placeholder="Enter name" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Last name</label>
                            <input class="form-control @error('lastname') is-invalid @enderror" type="text"  value="{{Request::old('lastname') ? Request::old('lastname') : $model->name ?? "Enter Your Last Name"}}" name="lastname">
                            </div>
                        </div>
                        <div class="col-md-6" style="display: none;">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">User Type</label>
                            <input class="form-control @error('user_type') is-invalid @enderror" type="text"  value="{{Request::old('user_type') ? Request::old('user_type') : auth()->user()->user_type}}" name="user_type">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Gender</label>
                            <input class="form-control @error('gender') is-invalid @enderror" type="text"  value="{{Request::old('gender') ? Request::old('gender') : $model->gender ?? "Enter Your Gender"}}" name="gender">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Contact Information</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Address</label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text"  value="{{Request::old('address') ? Request::old('address') : $model->address ?? "Enter Your Address"}}" name="address">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">City</label>
                            <input class="form-control @error('city') is-invalid @enderror" type="text"  value="{{Request::old('city') ? Request::old('city') : $model->city ?? "Enter Your City"}}" name="city">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Country</label>
                            <input class="form-control @error('Country') is-invalid @enderror" type="text"  value="{{Request::old('Country') ? Request::old('Country') : $model->Country ?? "Enter Your Country"}}" name="Country">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Date Of Birth</label>
                            <input class="form-control @error('dob') is-invalid @enderror" type="text"  value="{{Request::old('dob') ?Request::old('dob') : $model->dob ?? "Enter Your Date Of Birth"}}" name="dob">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Phone Number</label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="text"  value="{{Request::old('phone') ? Request::old('phone') : $model->phone ?? "Enter Your Phone Number"}}" name="phone">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="horizontal dark">
                <p class="about-me text-uppercase text-sm">About me</p>
                <div class="row about">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Bio</label>
                        <textarea class="form-control" name="bio" placeholder="Enter your bio here..."  rows="5">{{Request::old('bio') ? Request::old('bio') : $model->bio }}
                        </textarea>
                         {{-- <input class="form-control @error('bio') is-invalid @enderror" type="text"  value="{{Request::old('bio') ? Request::old('bio') : auth()->user()->bio ?? "Enter Your Bio" }}"> --}}
                        </div>
                    </div>
                </div>
            </div>



            {{-- <div class="tab-pane mt-4" role="tabpanel">
                <div class="form-group row">
                    <label class="admin-form col-lg-2">Name <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input class="form-control @error('name') is-invalid @enderror" value="{{Request::old('name') ? Request::old('name') : $model->name}}" type="text" name="name" placeholder="Enter name" autocomplete="off">
                        @error('name')
                        <span class="invalid-feedback" role="alert"></span>
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="admin-form col-lg-2">User Name <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <input class="form-control @error('username') is-invalid @enderror" value="{{Request::old('username') ? Request::old('username') : $model->username}}" type="text" name="username" placeholder="Enter user name" autocomplete="off">
                        @error('username')
                        <span class="invalid-feedback" role="alert"></span>
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                @if ( Route::is('users.create') )
                    <div class="form-group row">
                        <label class="admin-form col-lg-2">Email <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input class="form-control @error('email') is-invalid @enderror" value="{{Request::old('email') ? Request::old('email') : $model->email}}" type="text" name="email" placeholder="Enter User Email" autocomplete="off">
                            @error('email')
                            <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="block admin-form col-lg-2{{$errors->has('password') ? ' text-red-400' : ''}}">{{ __('Password') }}</label>
                        <div class="col-lg-9">
                            <input id="password" class="form-control @error('email') is-invalid @enderror" type="password" name="password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="block admin-form col-lg-2">{{ __('Confirm Password') }}</label>
                        <div class="col-lg-9">
                            <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                @endif


                <div class="form-group row">
                    <label class="admin-form col-lg-2">User type <span class="text-danger">*</span></label>
                    <div class="col-lg-9">
                        <select name="user_type" class="form-control select @error('user_type') is-invalid @enderror" value="{{Request::old('user_type') ? Request::old('user_type') : $model->user_type}}">
                            <option value="" disabled selected> ---------- Please select a user type ---------- </option>
                            <option value="customer" {{ isset($model) && $model->user_type == 'customer' ? 'selected'  : '' }}>customer</option>
                            <option value="vendor" {{ isset($model) && $model->user_type == 'vendor' ? 'selected'  : '' }}>vendor</option>
                            <option value="moderator" {{ isset($model) && $model->user_type == 'moderator' ? 'selected'  : '' }}>moderator</option>
                            <option value="admin" {{ isset($model) && $model->user_type == 'admin' ? 'selected'  : '' }}>admin</option>
                        </select>
                        @error('user_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                @if ( Route::is('users.create') )
                    <div class="form-group row">
                        <label class="admin-form col-lg-2">Gender <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <select name="gender" class="form-control select @error('gender') is-invalid @enderror" value="{{Request::old('gender') ? Request::old('gender') : $model->gender}}">
                                <option value="" disabled selected> ---------- Please select a gender ---------- </option>
                                <option value="male" {{ isset($model) && $model->gender == 'male' ? 'selected'  : '' }}>male</option>
                                <option value="female" {{ isset($model) && $model->gender == 'female' ? 'selected'  : '' }}>female</option>
                                <option value="undetermined" {{ isset($model) && $model->gender == 'undetermined' ? 'selected'  : '' }}>undetermined</option>
                            </select>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="admin-form col-lg-2">Phone <span class="text-danger">*</span></label>
                        <div class="col-lg-9">
                            <input class="form-control @error('phone') is-invalid @enderror" value="{{Request::old('phone') ? Request::old('phone') : $model->phone}}" type="text" name="phone" placeholder="Enter User Phone" autocomplete="off">
                            @error('phone')
                            <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                @endif

            </div> --}}

        </div>
    </div>
</form>
@endsection

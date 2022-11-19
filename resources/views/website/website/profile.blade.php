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
        margin-right: auto;
        margin-left: 0;
    }
    .about-me {
        margin-left: 1rem;
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
        color: #495057;
    }
</style>

    <div class="card shadow card-profile-bottom">
        <div class="card-body ">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="../assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                        Sayo Kravits
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                        Public Relations
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 header-card">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                <i class="fa-solid fa-dice-d6"></i>
                                <span class="ms-2">&nbsp; App</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="fa-solid fa-envelope"></i>
                                <span class="ms-2">&nbsp; Messages</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="fa-solid fa-gear"></i>
                                <span class="ms-2">&nbsp; Settings</span>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="row profile-body">
            <div class="card">
                <div class="card_header ">
                    <div class="d-flex align-items-center">
                    <p class="mb-0">Edit Profile</p>
                    <button class="btn btn-primary btn-sm ms-auto setting-button">Settings</button>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">User Information</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Username</label>
                            <input class="form-control" type="text" value="lucky.jesse">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Email address</label>
                            <input class="form-control" type="email" value="jesse@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">First name</label>
                            <input class="form-control" type="text" value="Jesse">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Last name</label>
                            <input class="form-control" type="text" value="Lucky">
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Contact Information</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Address</label>
                            <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">City</label>
                            <input class="form-control" type="text" value="New York">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Country</label>
                            <input class="form-control" type="text" value="United States">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Postal code</label>
                            <input class="form-control" type="text" value="437300">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="horizontal dark">
                <p class="about-me text-uppercase text-sm">About me</p>
                <div class="row about">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label for="example-text-input" class="form-control-label">About me</label>
                        <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

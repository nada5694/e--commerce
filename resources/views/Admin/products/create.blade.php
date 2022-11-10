@extends('layouts.Admin.master')

@section('title')
    Create New Product
@endsection

@section('content')
    {{-- @include('Admin.products.form') --}}

    <div class="card-body">
        <div class="tab-content" id="pills-tabContent">
            <form action="{{route('products.store')}}" method="post" id="alert-form">
                @csrf
                @include('Admin.products.form')
                <button class="btn btn-success mt-4 d-block me-auto" type="submit">Add</button>
            </form>
        </div>
    </div>

@endsection


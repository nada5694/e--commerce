@extends('layouts.Admin.master')

@section('title')
    Users
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6><span class="b-b-success">{{App\Models\User::count()}} - Users</span></h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">num</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Name</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">User name</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Email</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Gender</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">User type</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Phone</th>
                        {{-- <th scope="col" class="text-center text-xxs font-weight-bolder">Bio</th> --}}
                        {{-- @if(auth()->user()->user_type == "admin")
                            <th scope="col" class="text-center text-xxs font-weight-bolder">Action</th>
                        @endif --}}
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($Users as $user)
                            <tr>
                                <td scope="row" class="text-center text-xs">{{$loop->iteration}}</td>
                                <td class="text-center font-secondary text-xxs">{{$user->name}}</td>
                                <td class="text-center font-secondary text-xxs">{{$user->username}}</td>
                                <td class="text-center font-secondary text-xxs">{{$user->email}}</td>
                                <td class="text-center font-secondary text-xxs">{{$user->gender}}</td>
                                <td class="text-center font-secondary text-xxs">{{$user->user_type}}</td>
                                <td class="text-center font-secondary text-xxs">{{$user->phone}}</td>


                                {{-- <td class="text-center text-xs">{{$user->created_at->translatedFormat('d/m/Y - h:m A')}}</td>
                                <td class="text-center text-xs">{{$user->create_user->name ?? '??'}}</td>
                                <td class="text-center text-xs">{{$user->update_user->name ?? '??'}}</td> --}}
                                {{-- @if(auth()->user()->user_type == "admin")
                                    <td class="align-middle text-center text-sm">
                                        {!! Form::open([
                                            'route' => ['products.destroy',$product->id],
                                            'method' => 'delete'
                                        ])!!}
                                        <button class="delete-button badge badge-sm " onclick="return confirm('Are you sure that you want to delete - {{ $product->name }}?');" type="submit" title="{{'Delete'." ($product->name)"}}"><i class="fa-solid fa-trash"></i>  Delete </button>

                                        <a href="{{route('products.edit',$product->id)}}" class="edit-button badge badge-sm" type="button" title="{{'Edit'." ($product->name)"}}"><i class="fa-solid fa-pencil"></i> Edit</a>
                                        {!! Form::close() !!}
                                    </td>
                                @endif --}}
                            </tr>
                        @empty
                            <div class="alert alert-secondary">
                                There are no data!
                            </div>
                        @endforelse
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection

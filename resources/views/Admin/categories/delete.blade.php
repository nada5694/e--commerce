{{-- @extends('layouts.Admin.master')

@section('title')
    Deleted Category
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
        <div class="col-12">
            <div class="new-product">
                <ul>
                    <a href="{{ route('categories.create') }}" class="btn">Create New Category</a>
                </ul>
            </div>
        <div class="card mb-4">
        <div class="card-header pb-0">
            <h6><span class="b-b-success">{{App\Models\Category::count()}} - Categories</span></h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th scope="col" class="text-center text-s font-weight-bolder">num</th>
                    <th scope="col" class="text-center text-s font-weight-bolder">Name</th>
                    <th scope="col" class="text-center text-s font-weight-bolder">num of Product</th>
                    <th scope="col" class="text-center text-s font-weight-bolder">Description</th>
                    <th scope="col" class="text-center text-s font-weight-bolder">Date of Creation</th>
                    <th scope="col" class="text-center text-s font-weight-bolder">Added By</th>
                    <th scope="col" class="text-center text-s font-weight-bolder">Last Updated By</th>
                    @if(auth()->user()->user_type == "admin")
                        <th scope="col" class="text-center text-s font-weight-bolder">Action</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td scope="row" class="text-center text-xs">{{$loop->iteration}}</td>
                            <td class="text-center font-secondary text-s">{{$category->name}}</td>
                            <td class="text-center font-secondary text-s">{{\App\Models\Product::where('clothing_type',$category->name)->count()}}</td>
                            <td class="text-center text-xs">{{($category->description)}}</td> <!-- ucwords($variable), capitalizes first letter in each word -->
                            <td class="text-center text-xs">{{$category->created_at->translatedFormat('d/m/Y - h:m A')}}</td>
                            <td class="text-center text-xs">{{$category->create_user->name ?? '??'}}</td>
                            <td class="text-center text-xs">{{$category->update_user->name ?? '??'}}</td>
                            @if(auth()->user()->user_type == "admin")
                                <td class="align-middle text-center text-sm">
                                    {!! Form::open([
                                        'route' => ['products.destroy',$category->id],
                                        'method' => 'delete'
                                    ])!!}
                                    <button class="delete-category badge badge-sm " onclick="return confirm('Are you sure that you want to permanently delete - {{ $category->name }}?');" type="submit" title="{{'Permanent Delete'." ($category->name)"}}"><i class="fa-solid fa-trash"></i> Permanent Delete</button>

                                    <a href="{{route('products.edit',$category->id)}}" onclick="return confirm('Are you sure that you want to restore - {{ $category->name }}?');" class="edit-category badge badge-sm" type="button" title="{{'Restore'." ($category->name)"}}"><i class="fa-solid fa-pencil"></i> Restore</a>
                                    {!! Form::close() !!}
                                </td>
                            @endif
                        </tr>
                    @empty
                        <div class="alert alert-secondary">
                            There are no data!
                        </div>
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    </div>
@endsection --}}

@extends('layouts.admin.master')

@section('title')
    Deleted Categories
@endsection

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Show deleted categories - <span class="b-b-success">{{App\Models\Category::onlyTrashed()->count()}}</span></h5>
                        <span>
                            All deleted categories. If you want to create and add new sections,
                            you must click the (Add New Categories) button at the top of the page,
                            and if you want to restore any section, press (Restore) next to each category.
                        </span>
                    </div>
                    <div class="card-block row">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col" class="text-center">Name</th>
                                        <th scope="col" class="text-center">Description</th>
                                        <th scope="col" class="text-center">Added By</th>
                                        <th scope="col" class="text-center">Last Updated By</th>
                                        <th scope="col" class="text-center">Date of Creation</th>
                                        <th scope="col" class="text-center">Date of Deletion</th>
                                        @if(auth()->user()->user_type == "admin")
                                            <th scope="col" class="text-center">Action</th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($categories as $category)
                                    <tr>
                                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                                        <td class="text-center">{{$category->name}}</td>
                                        <td class="text-center">{{$category->description}}</td>
                                        <td class="text-center">{{$product->create_user->name ?? '???'}}</td>
                                        <td class="text-center">{{$product->update_user->name ?? '???'}}</td>
                                        <td class="text-center" title="{{$category->created_at->format('Y-D-M h:m h:m A')}}">{{$category->created_at->format('Y-D-M h:m A')}}</td>
                                        <td class="text-center" title="{{$category->deleted_at->format('Y-D-M h:m h:m A')}}">{{$category->deleted_at->format('Y-D-M h:m A')}}</td>
                                        @if(auth()->user()->user_type == "admin")
                                            <td class="text-center">
                                                {!! Form::open([
                                                    'route' => ['categories.forceDelete',$category->id],
                                                    'method' => 'delete'
                                                ])!!}
                                                <button class="btn btn-danger btn-xs" onclick="return confirm('Are you sure that you want to permanently delete - {{ $category->name }}?');" type="submit" title="{{'Permanent Delete'." ($category->name)"}}"><i class="fa-solid fa-trash"></i> Permanent Delete </button>
                                                <a href="{{route('categories.restore',$category->id)}}" onclick="return confirm('Are you sure that you want to restore - {{ $category->name }}?');" class="btn btn-primary btn-xs" type="button" title="{{'Restore'." ($category->name)"}}"><i class="fa-solid fa-trash-arrow-up"></i> Restore</a>
                                                {!! Form::close() !!}
                                            </td>
                                        @endif
                                    </tr>

                                    @empty
                                        <div class="alert alert-secondary">
                                            There are no data!
                                        </div>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="m-b-30" aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-primary">
                        {!! $categories->links('pagination::bootstrap-4') !!}
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection

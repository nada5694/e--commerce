@extends('layouts.Admin.master')

@section('title')
    Products
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="new-product">
                <ul>
                    <a href="{{ route('products.create') }}" class="btn">Create New Product</a>
                </ul>
            </div>
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6><span class="b-b-success">{{App\Models\Product::count()}} - Products</span></h6>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">num</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Name</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Image</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Discount (%)</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Price (EGP)</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Category</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Clothing type</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Date of Creation</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Added By</th>
                        <th scope="col" class="text-center text-xxs font-weight-bolder">Last Updated By</th>
                        @if(auth()->user()->user_type == "admin")
                            <th scope="col" class="text-center text-xxs font-weight-bolder">Action</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td scope="row" class="text-center text-xs">{{$loop->iteration}}</td>
                                <td class="text-center font-secondary text-xxs">{{$product->name}}</td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <img src="/{{ $product->image_name }}" alt="Image" class="img-fluid">
                                    </div>
                                </td>
                                <td class="text-center text-xs">{{ $product->discount * 100 }}%</td>
                                @if($product->discount > 0)
                                    <td class="text-center text-xs">
                                        <span class="font-danger"><del class="text-xxs">{{$product->price}}</del></span> <label class="font-secondary">&RightArrow;</label> <span class="font-primary">{{$product->price - ($product->price * $product->discount)}}</span>
                                    </td>
                                @elseif($product->discount <= 0 || $product->discount == null || $product->discount == "")
                                    <td class="text-center">{{$product->price}}</td>
                                @endif
                                <td class="text-center text-xs">{{ucwords($product->product_category)}}</td> <!-- ucwords($variable), capitalizes first letter in each word -->
                                <td class="text-center text-xs">
                                    <span>
                                        @if($product->clothing_type == '1')
                                            Formal
                                        @elseif($product->clothing_type == '2')
                                            Casual
                                        @else
                                            Sports Wear
                                        @endif
                                    </span>
                                </td>
                                <td class="text-center text-xs">{{$product->created_at->translatedFormat('d/m/Y - h:m A')}}</td>
                                <td class="text-center text-xs">{{$product->create_user->name ?? '??'}}</td>
                                <td class="text-center text-xs">{{$product->update_user->name ?? '??'}}</td>
                                @if(auth()->user()->user_type == "admin")
                                    <td class="align-middle text-center text-sm">
                                        {!! Form::open([
                                            'route' => ['products.destroy',$product->id],
                                            'method' => 'delete'
                                        ])!!}
                                        <button class="delete-button badge badge-sm " onclick="return confirm('Are you sure that you want to delete - {{ $product->name }}?');" type="submit" title="{{'Delete'." ($product->name)"}}"><i class="fa-solid fa-trash"></i>  Delete </button>

                                        <a href="{{route('products.edit',$product->id)}}" class="edit-button badge badge-sm" type="button" title="{{'Edit'." ($product->name)"}}"><i class="fa-solid fa-pencil"></i> Edit</a>
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
@endsection

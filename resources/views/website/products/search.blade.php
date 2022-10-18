@extends('layouts.website.master')

@section('styles')
@endsection

@section('title')
    Search
@endsection

@section('content')


    @if ($search_text_input == "")
        Search box is empty!
    @else
        @if($products_result_count == 0)
            Results - {{ '"'.$search_text_input.'" ['.$products_result_count.']' }} - Not found! <?php /* "." is for concatenating static front-end
                                                                                                codes with dynamic back-end codes */ ?>
        @else
            Results - {{ '"'.$search_text_input.'" ['.$products_result_count.']' }}
        @endif
    @endif

    @if ($search_text_input == "")
        <div class="alert alert-danger" role="alert" style="text-align: center; margin-left: auto; margin-right: auto;  width: 40%;">
            <span style="font-size: 110%; font-weight: bold;">The search box is empty. You didn't enter anything in it!</span>
        </div>
    @else
        @if ($products_result_count == 0)
            <div class="alert alert-danger" style="text-align: center; margin-left: auto; margin-right: auto; width: 40%;">
                "{{ $search_text_input }}" results ({{ $products_result_count }}) - Not found!
            </div>
        @else
            <div class="alert alert-success" style="text-align: center; margin-left: auto; margin-right: auto; width: 40%;">
                "{{ $search_text_input }}" results ({{ $products_result_count }})
            </div>
        @endif
    @endif
@endsection

@section('scripts')

@endsection


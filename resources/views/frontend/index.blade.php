@extends('layouts.front')

@section('title')
    Welcome To CarRental
@endsection

@section('content')


    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Premium Cars</h2>
                @foreach ($cars as $item)
                    <div class="col-md-4 mb-2">
                        <a href="{{url('category/'. $item->category->slug . '/' . $item->slug)}}" class="clr">
                        <div class="card">
                                <img src="{{ asset('assets/uploads/cars/' . $item->image) }}" alt="Product Image">
                                <div class="card-body">
                                    <h5>{{ $item->name }}</h5>
                                    <span class="float-start">{{ $item->selling_price }}</span>
                                    <span class="float-end"><s>{{ $item->original_price }}</s></span>

                                </div>
                        </div>
                    </a>
                    </div>
                @endforeach





            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Trending Category</h2>
                @foreach ($category as $cate)
                    <div class="col-md-4 mb-2">
                        <a href="{{ url('view-category/' . $cate->slug) }}" class="clr">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/catagory/' . $cate->image) }}" alt="">
                                <div class="card-body">
                                    <h5>{{ $cate->name }}</h5>
                                    <p>
                                        {{ $cate->description }}
                                    </p>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection

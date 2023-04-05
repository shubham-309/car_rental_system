@extends('layouts.front')

@section('title')
All Categories
@endsection

@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>All Categories</h2>
                <div class="row">
                    @foreach($category as $cate)
                    <div class="col-md-4 mb-2">
                        <a href="{{url('view-category/'. $cate->slug)}}" class="clr">
                            <div class="card">
                                <div class="card-body">
                                    <h5>{{$cate->name}}</h5>
                                    <p>
                                        {{$cate->description}}
                                    </p>

                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

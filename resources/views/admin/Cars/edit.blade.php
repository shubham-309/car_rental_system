@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Edit Car Details
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-cars/' . $cars->id) }}" method='post' enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select">
                            <option value="">{{ $cars->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                            NAME
                        </label>
                        <input type="text" name="name" class="form-control" value="{{ $cars->name }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                             Slug
                        </label>
                        <input type="text" name="slug" value="{{ $cars->slug }}" class="form-control"
                            id="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                            Registration Number
                        </label>
                        <input type="text" name="registration_no" value="{{ $cars->registration_no }}" class="form-control"
                            id="">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Discription
                        </label>
                        <input type="text" name="discription" value="{{ $cars->discription }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">
                            Rental Price
                        </label>
                        <input type="number" name="original_price" value="{{ $cars->original_price }}" class="form-control">

                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">
                            Discounted Rental Price
                        </label>
                        <input type="text" name="selling_price" value="{{ $cars->selling_price }}" class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Tax
                        </label>
                        <input type="number" name="tax" value="{{ $cars->tax }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Quantity
                        </label>
                        <input type="number" name="quantity" value="{{ $cars->quantity }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Status
                        </label>
                        <input type="checkbox" name="status" value="{{ $cars->status }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Trending
                        </label>
                        <input type="checkbox" name="trending" value="{{ $cars->trending }}">
                    </div>


                    @if($cars->image)
                    <img src="{{asset('assets/uploads/cars/'. $cars->image)}}" alt="">
                    @endif
                    <div class="col-md-12 mb-3">

                        <input type="file" name="image" class="form-control">

                    </div>





                    <div class="col-md-12 mb-3">

                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>





                </div>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>
                Add Cars
            </h4>
        </div>
        <div class="card-body">
            <form action="{{ url('add-cars') }}" method='post' enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="cate_id">
                            <option selected>Select a Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                            NAME
                        </label>
                        <input type="text" name="name" class="form-control" id="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                            Slug
                        </label>
                        <input type="text" name="slug" class="form-control" id="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">
                            Registration Number
                        </label>
                        <input type="text" name="registration_no" class="form-control" id="">
                    </div>


                    <div class="col-md-12 mb-3">
                        <label for="">
                            Discription
                        </label>
                        <input type="text" name="discription" class="form-control">

                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">
                            Rental Price
                        </label>
                        <input type="number" name="original_price" class="form-control">

                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">
                            Discounted Rental Price
                        </label>
                        <input type="text" name="selling_price" class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Tax
                        </label>
                        <input type="number" name="tax">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Quantity
                        </label>
                        <input type="number" name="quantity">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Status
                        </label>
                        <input type="checkbox" name="status">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">
                            Trending
                        </label>
                        <input type="checkbox" name="trending">
                    </div>

                    <div class="col-md-12 mb-3">

                        <input type="file" name="image" class="form-control">

                    </div>


                    <div class="col-md-12 mb-3">

                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>





                </div>
            </form>
        </div>
    </div>
@endsection

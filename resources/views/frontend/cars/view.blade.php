@extends('layouts.front')

@section('title')
    {{ $cars->name }}
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{url('category')}}" class="clr">
                Collections
            </a> /
            <a href="{{url('view-category/' . $cars->category->slug)}}" class="clr">
                {{ $cars->category->name }}
                </a>
                /
            </h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow cars_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img class="img1" src="{{ asset('assets/uploads/cars/' . $cars->image) }}" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $cars->name }}
                            @if ($cars->trending == '1')
                                <label style="font-size: 16px;"
                                    class="float-end badge bg-danger trending_tag">Premium</label>
                            @endif
                        </h2>

                        <hr>
                        <label class="me-3">Original Rental Price: <s>Rs {{ $cars->original_price }}</s></label>
                        <label class="fw-bold">Discounted Rental Price: Rs {{ $cars->selling_price }}</label>
                        <p class="mt-3">
                            {!! $cars->discription !!}
                        </p>
                        <hr>
                        @if ($cars->quantity > 0)
                            <label class="badge bg-success">Available</label>
                        @else
                            <label class="badge bg-danger">Currently Unavailable</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="quantity">Select Dates</label>
                                <div class="input-group text-center mb-3">
                                    <input type="hidden" class="start_date">
                                    <input type="date" name="start_date" class="form-control">
                                    <br>
                                    <input type="date" name="end_date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <br>
                                <button type="button" class="btn btn-primary me-3 addtocartbtn float-start book">Book Now <i
                                    class="fa fa-shopping-cart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
    <script type="text/javascript">
    $(document).ready(function(){
        $(".start_date").on("blur", function(){
            var start = $(this).val();

            $.ajax({
                url: "{{url('booking')}}/"+start,
                datatype: 'json',
                success:function(res){
                    var _html = '';
                    $.each(res.data,function(index,row){
                        _html += "<a href="/booking"> Book Now </a>"
                    });
                    $(".book").HTML(_html);
                }
            });
        });
    });
    </script>
    @endsection


@endsection


@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
            Cars Page
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Discription</th>
                    <th>Registration Number</th>
                    <th>Image</th>
                    <th>Rental Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->discription}}</td>
                    <td>{{$item->registration_no}}</td>
                    <td>
                        <img src="{{asset('assets/uploads/cars/'.$item->image)}}" class='image' alt="Image Here">
                    </td>
                    <td>{{$item->selling_price}}</td>
                    <td>
                        <a href="{{url('edit-cars/'.$item->id)}}" class="btn btn-primary edit">Edit</a>
                        <a href="{{url('delete-cars/'.$item->id)}}" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
            Category Details
        </h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Discription</th>
                    <th>slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                    <td>{{ $item->id}}</td>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->discription}}</td>
                    <td>{{$item->slug}}</td>
                    <td>
                        <a href="{{url('edit-category/'.$item->id)}}" class="btn btn-primary edit">Edit</a>
                        <a href="{{url('delete-category/'.$item->id)}}" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

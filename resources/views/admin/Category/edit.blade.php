@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
            Edit/Update Category
        </h4>
    </div>
    <div class="card-body">
       <form action="{{url('update-category/'.$category->id)}}" method='post'>
           @csrf
           @method('put')
           <div class="row">
               <div class="col-md-6 mb-3">
                   <label for="">
                       NAME
                   </label>
                   <input type="text" name="name" value= "{{ $category->name }}" class="form-control" id="">
               </div>
               <div class="col-md-6 mb-3">
                   <label for="">
                       Slug
                   </label>
                   <input type="text" name="slug" value= "{{ $category->slug }}" class="form-control" id="">
               </div>






               <div class="col-md-12 mb-3">
                   <label for="">
                       Discription
                   </label>
                   <input type="text" name="discription" value= "{{ $category->discription }}" class="form-control" >

               </div>

               <div class="col-md-6 mb-3">
                <label for="">
                    Status
                </label>
                <input type="checkbox" name="status" value= "{{ $category->status }}">
            </div>

            <div class="col-md-6 mb-3">
                <label for="">
                    Popular
                </label>
                <input type="checkbox" name="popular" value= "{{ $category->popular }}">
            </div>



               <div class="col-md-12 mb-3">

               <button type="submit" class="btn btn-primary">submit</button>
               </div>





           </div>
       </form>
    </div>
</div>

@endsection

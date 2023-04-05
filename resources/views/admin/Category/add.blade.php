@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>
            Add Category
        </h4>
    </div>
    <div class="card-body">
       <form action="{{url('insert-category')}}" enctype="multipart/form-data" method='post'>
           @csrf
           <div class="row">
               <div class="col-md-6 mb-3">
                   <label for="">
                       Car Type
                   </label>
                   <input type="text" name="name" class="form-control" id="">
               </div>




               <div class="col-md-12 mb-3">
                   <label for="">
                        Slug
                   </label>
                   <input type="text" name="slug" class="form-control" >

               </div>


               <div class="col-md-12 mb-3">
                <label for="">
                     Discription
                </label>
                <input type="text" name="discription" class="form-control" >

            </div>

            <div class="col-md-6 mb-3">
                <label for="">
                    Status
                </label>
                <input type="checkbox" name="status">
            </div>

            <div class="col-md-6 mb-3">
                <label for="">
                    Popular
                </label>
                <input type="checkbox" name="popular">
            </div>

               <div class="col-md-12 mb-3">

               <button type="submit" class="btn btn-primary">submit</button>
               </div>





           </div>
       </form>
    </div>
</div>

@endsection

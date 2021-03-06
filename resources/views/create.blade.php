@extends("layout")
@section("content")
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new student</h2>
        </div>
    </div>
</div>
@if($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif

<div class="row">
    <form action="{{ route("student.store")}}" method="POST">
        @csrf
        <div class="col-sm-4">
            <div class="left">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="left">
                <strong>Phone</strong>
                <input class="form-control" name="phone" placeholder="Phone"></textarea>
            </div>
            <div class="left">
                <strong>Address</strong>
                <input class="form-control" name="address" placeholder="Address"></textarea>
            </div>
            <div class="left">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
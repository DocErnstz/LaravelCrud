@extends('layout')

@section("content")
 <div class="row">
     <div class="col-lg-12 margin-tb">
         <div class="pull-lef">
             <h2>Edit student</h2>
         </div>
         <div class="pull-right">

         </div>
     </div>
 </div>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
 @endif
 <div class="row">
     <form action="{{ route("student.update", $student->id)}}" method="POST">
        @csrf
        <div class="col-sm-4">
            <div class="left">
                <strong>Name</strong>
                <input type="text" name="name" class="form-control" value="{{ $student->name }}" placeholder="Name">
            </div>
            <div class="left">
                <strong>Phone</strong>
                <input name="phone" class="form-control" value="{{ $student->phone }}" placeholder="Phone">
            </div>
            <div class="left">
                <strong>Address</strong>
                <input name="address" class="form-control" value="{{ $student->address }}" placeholder="Address">
            </div>
            <div class="left">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
 </div>
@endsection
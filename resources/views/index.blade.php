@extends("layout")
@section("content")
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Simple crud </h2>
        </div>
    </div>
</div>
<div class="row" align="left">
     <div class="pull-right">
        <a href="{{ route("student.create") }}" class="btn btn-success">New Student</a>
     </div>
</div>
@if ($message = Session::get("success"))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Adress</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->address}}</td>
    </tr>
    
@endforeach
</table>

@endsection
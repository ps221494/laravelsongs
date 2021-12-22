@extends('bands.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Article</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('bands.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check your fields.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

<form action="{{ route('bands.update',$band->id) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="name">band name</label>
    <input type="text" class="form-control" value="{{ $band->name }}" placeholder="Enter name" name ="name">
</div>
<div class="form-group">
    <label for="genre">genre </label>
    <input type="text" class="form-control" value="{{ $band->genre }}" placeholder="Enter genre" name ="genre">
</div>
<div class="form-group">
    <label for="founded">founded</label>
    <input type="text" class="form-control" value="{{ $band->founded }}" placeholder="Enter founded" name ="founded">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
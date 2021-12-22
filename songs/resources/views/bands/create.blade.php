@extends('bands.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Song</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('bands.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your fields<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('bands.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="name">song title</label>
    <input type="text" class="form-control"  placeholder="Enter name" name ="name">
  </div>
  <div class="form-group">
    <label for="genre">singer</label>
    <input type="text" class="form-control"  placeholder="Enter genre" name ="genre">
  </div>
  <div class="form-group">
    <label for="founded">singer</label>
    <input type="text" class="form-control"  placeholder="Enter founded" name ="founded">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
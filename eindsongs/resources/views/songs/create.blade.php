@extends('songs.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Song</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('songs.index') }}"> Back</a>
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

<form action="{{ route('songs.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="title">song title</label>
    <input type="text" class="form-control"  placeholder="Enter title" name ="title">
  </div>
  <div class="form-group">
    <label for="singer">singer</label>
    <input type="text" class="form-control"  placeholder="Enter singer" name ="singer">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
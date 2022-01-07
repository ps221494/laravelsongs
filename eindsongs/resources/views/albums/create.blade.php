@extends('albums.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New album</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('albums.index') }}"> Back</a>
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

<form action="{{ route('albums.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="Name">album name</label>
    <input type="text" class="form-control"  placeholder="Enter Name" name ="Name">
  </div>
  <div class="form-group">
    <label for="Year">year created</label>
    <input type="text" class="form-control"  placeholder="Enter Year" name ="year">
  </div>
  <div class="form-group">
    <label for="times_sold">times sold</label>
    <input type="text" class="form-control"  placeholder="Enter number" name ="times_sold">
  </div>
  <div class="form-group">
    <label for="band_id">times sold</label>
    <input type="text" class="form-control"  placeholder="Enter band id" name ="band_id">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
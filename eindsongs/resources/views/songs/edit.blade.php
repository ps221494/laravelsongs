@extends('songs.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Article</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('songs.index') }}"> Back</a>
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

<form action="{{ route('songs.update',$song->id) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="title">Topic title</label>
    <input type="text" class="form-control" value="{{ $song->title }}" placeholder="Enter title" name ="title">
</div>
<div class="form-group">
    <label for="singer">Categorie</label>
    <input type="text" class="form-control" value="{{ $song->singer }}" placeholder="Enter singer" name ="singer">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
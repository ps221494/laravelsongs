@extends('songs.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Article</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('albums.index') }}"> Back</a>
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

<form action="{{ route('albums.update',$album->id) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="Name">Topic title</label>
    <input type="text" class="form-control" value="{{ $album->Name }}" placeholder="Enter name" name ="Name">
</div>
<div class="form-group">
    <label for="year">Categorie</label>
    <input type="text" class="form-control" value="{{ $album->year }}" placeholder="Enter year" name ="year">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div class="form-group">
    <label for="times_sold">Categorie</label>
    <input type="text" class="form-control" value="{{ $album->times_sold }}" placeholder="Enter times_sold" name ="times_sold">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
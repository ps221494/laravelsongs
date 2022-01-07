@extends('albums.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('albums.create') }}"> Create new album</a>
            </div>
        </div>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Created year</th>
      <th scope="col">Times sold</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
@foreach ($albums as $albumsall)
    <tr>
      <th scope="row">{{ $albumsall->id }}</th>
      <td>{{ $albumsall->Name }}</td>
      <td>{{ $albumsall->year }}</td>
      <td>{{ $albumsall->times_sold }}</td>

      <td>
      <form action="{{ route('albums.destroy',$albumsall->id) }}" method="POST">
        
        <a class="btn btn-info" href="{{ route('albums.show',$albumsall->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('albums.edit',$albumsall->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    {{ $albums->links() }}
@endforeach
  </tbody>
</table>
@endsection
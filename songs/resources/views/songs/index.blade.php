@extends('songs.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('songs.create') }}"> Create new article</a>
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
      <th scope="col">title</th>
      <th scope="col">singer</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
@foreach ($songs as $songall)
    <tr>
      <th scope="row">{{ $songall->id }}</th>
      <td>{{ $songall->title }}</td>
      <td>{{ $songall->singer }}</td>

      <td>
      <form action="{{ route('songs.destroy',$songall->id) }}" method="POST">
        
        <a class="btn btn-info" href="{{ route('songs.show',$songall->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('songs.edit',$songall->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    {{ $songs->links() }}
@endforeach
  </tbody>
</table>
@endsection
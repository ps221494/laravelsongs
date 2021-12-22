@extends('bands.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bands.create') }}"> Create new band</a>
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
      <th scope="col">name</th>
      <th scope="col">genre</th>
      <th scope="col">founded</th>
    </tr>
  </thead>
  <tbody>
@foreach ($bands as $bandall)
    <tr>
      <th scope="row">{{ $bandall->id }}</th>
      <td>{{ $bandall->name }}</td>
      <td>{{ $bandall->genre }}</td>
      <td>{{ $bandall->founded }}</td>
      <td>{{ $bandall->founded }}</td>

      <td>
      <form action="{{ route('bands.destroy',$bandall->id) }}" method="POST">
        
        <a class="btn btn-info" href="{{ route('bands.show',$bandall->id) }}">Show</a>

        <a class="btn btn-primary" href="{{ route('bands.edit',$bandall->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    {{ $bands->links() }}
@endforeach
  </tbody>
</table>
@endsection
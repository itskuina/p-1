<title>Restu Blog | Users</title>
@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Table User</h1>
      </div>

      <div class="table-responsive col-lg-15">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th> 
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th></th>
            </tr>
          </thead>
          @foreach ($dtUser as $item)
          <tbody>
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->username }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->password }}</td>
              <th>
          <a href="{{ route('edituser',$item->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
          <a href="{{ route('deleteuser',$item->id) }}" class="badge bg-danger border-0"><span data-feather="trash-2"></span></a></th>
            </tr>
          </tbody>
          @endforeach
          <a href="{{ route('createuser') }}" class="badge bg-success"><span data-feather="user-plus"></span> Add User</a>
        </table>
      </div>

@endsection
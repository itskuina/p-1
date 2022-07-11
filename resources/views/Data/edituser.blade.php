<title>Restu Blog | Edit User</title>
@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
        <main class="form-registration m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Edit User</h1>
          <form action="{{ route('updateuser',$usr->id) }}" method="post">
            @csrf
          <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ $usr->name }}" required>
              <label for="name">Name</label>
              @error('name')
              <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ $usr->username }}" required>
              <label for="username">Username</label>
              @error('username')
              <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ $usr->email }}" required>
              <label for="floatingInput">Email address</label>
              @error('email')
              <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
            </div>

            <div class="checkbox mb-3">
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Edit User</button>
@endsection
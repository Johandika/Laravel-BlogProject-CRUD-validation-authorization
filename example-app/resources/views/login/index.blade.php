@extends('layouts.main')

@section('container')
<div class="naikin-margin row justify-content-center align-items-center vh-100">
  <div class="col-md-4">

    @if(session()->has("success"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session("success") }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has("loginError")) 
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session("loginError") }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center fw-semibold text-primary ">Please Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input name="email" type="email" class="form-control @error("email") is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old("email") }}">
          <label for="email">Email address</label>
          @error ("email")
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input name="password" type="password" class="form-control" id="password" placeholder="Password">
          <label for="password" required>Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Login</button>
      </form>
      <small class="d-block text-center">Not registered ? <a href="/register">Register now</a>
      </small>
    </main>
  </div>
</div>


@endsection
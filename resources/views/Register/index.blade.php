@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-register">
      <h1 class="h3 mb-3 fw-normal text-center">Register Account </h1>
      <form action="/register" method="post"> 
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="name" required value="{{ old ('name') }}">
          <label for="name">Name</label>
          @error ('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="username" required value="{{ old ('username') }}">
          <label for="username">UserName</label>
          @error ('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old ('email') }}">
          <label for="email">Email address</label>
          @error ('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="Password" placeholder="Password" required value="{{ old ('password') }}">
          <label for="Password">Password</label>
          @error ('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
    
        <div class="checkbox mb-3">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <small class="d-block text-center mt-3">Alredy Register? <a href="/login">Login</a></small>
      </form>
    </main>
  </div>
  
</div>     

@endsection
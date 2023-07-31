<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    @include('template/head')
</head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
    </div>
    @endif

    @if (session()->has('LoginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('LoginError') }}
    </div>
    @endif

  <form action="{{ route('login') }}" method="POST">
    @csrf
    <img class="mb-4 rounded mx-auto d-block" src="{{ asset('./template/img/LogoHits.png') }}" alt="" width="130" height="65">
    <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="nama@contoh.com" value="{{ old('email') }}" id="email" name="email" placeholder="name@example.com" autofocus required>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control  @error('password') is-invalid @enderror" value="{{ old('email') }}" id="password" name="password" placeholder="Password" required>
      @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
  </form>
  <div class="form-check text-start my-3">
    <a href="{{ route('regis') }}">Register</a>
  </div>
</main>
@include('template/script')
    </body>
</html>

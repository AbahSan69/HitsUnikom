<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi</title>
    @include('template/head')
</head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
  <form action="{{ route('SimpanRegis') }}" method="POST">
    @csrf
    <img class="mb-4 rounded mx-auto d-block" src="{{ asset('template/img/LogoHits.png') }}" alt="" width="130" height="65">
    <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>

    <div class="form-floating">
      <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Masukan Nama" required value="{{ old('name') }}">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <label for="floatingInput">Nama</label>
    </div>

    <div class="form-floating">
        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="nama@contoh.com" required value="{{ old('email') }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        <label for="floatingInput">Alamat Email</label>
    </div>

    <div class="form-floating">
      <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required value="{{ old('password') }}">
      @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
  </form>
</main>
@include('template/script')
    </body>
</html>

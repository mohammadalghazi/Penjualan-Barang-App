@extends('authorize.index')

@section('contents')
<form class="col-md-3" action="" method="post">
    @csrf
    <div class="mb-3 text-center">
        <div>
            <img src="" alt="" srcset="">
        </div>
        <div class="h4">Buat Akun</div>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Nama Pengguna">
        <label for="username" class="form-label">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
        <label for="email" class="form-label">Email</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
        <label for="password" class="form-label">Password</label>
    </div>
    <small class="text-danger">
        Pesan invalid
        @error('username') {{ $message }} @enderror
        @error('password') {{ $message }} @enderror
        @if (session('invalid'))
            {{ session('invalid') }}
        @endif
    </small>
    <div class="row justify-content-center mt-3 mb-3">
        <button class="btn btn-primary col-md-4" type="submit">Daftar</button>
    </div>
    <hr>
    <div>
        <small class="text-secondary">
            Sudah memiliki akun? <a class="text-decoration-none" href="/signin">Masuk</a>
        </small>
    </div>
</form>
@endsection
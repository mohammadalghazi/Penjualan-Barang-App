@extends('authorize.index')

@section('contents')
<form class="col-md-3" action="" method="post">
    @csrf
    <div class="mb-3 text-center">
        <div>
            <img src="" alt="" srcset="">
        </div>
        <div class="h4">Masuk</div>
        <div class="text-secondary">Kami perlu mengidentifikasi Anda</div>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Nama Pengguna">
        <label for="username" class="form-label">Nama Pengguna</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control @error('username') is-invalid @enderror" id="password" name="password" placeholder="Kata Sandi">
        <label for="password" class="form-label">Kata Sandi</label>
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
        <button class="btn btn-primary col-md-4" type="submit">Masuk</button>
    </div>
    <div>
        <small class="text-secondary">
            Lupa kata sandi? <a class="text-decoration-none" href="#">Dapatkan Bantuan</a>
        </small>
    </div>
    <hr>
    <div>
        <small class="text-secondary">
            Ingin bergabung dengan kami? <a class="text-decoration-none" href="/signup">Daftar</a>
        </small>
    </div>
</form>
@endsection
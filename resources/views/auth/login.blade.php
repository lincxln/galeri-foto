@extends('layout.app')

@section('content')
<div class="d-flex align-items-center justify-content-center bg-body-tertiary" style="height: 100vh">
    <div class="card" style="width: 30rem">
        <div class="card-body">
            <h4>Login to Snapgram</h4>
            <form action="/login" method="post">
                <div class="mt-3">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div class="mt-3">
                    <label class="form-label" for="password">Pasword</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Login</button>
                    <a href="/daftar" class="btn btn-secondary" type="submit">Daftar</a>
                    <a href="/" class="btn btn-secondary" type="submit">Halaman Utama</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
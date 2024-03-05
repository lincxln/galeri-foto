@extends('layout.app')

@section('content')
<div class="d-flex align-items-center justify-content-center bg-body-tertiary" style="height: 100vh">
    <div class="card" style="width: 30rem">
        <div class="card-body">
            <h4>Sign Up to Snapgram</h4>
            <form action="/daftar" method="GET">
                <div class="mt-3">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
                <div class="mt-3">
                    <label class="form-label" for="password">Pasword</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit">Daftar</button>
                    <a href="/login" class="btn btn-secondary" type="submit">Login</a>
                    <a href="/" class="btn btn-secondary" type="submit">Halaman Utama</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
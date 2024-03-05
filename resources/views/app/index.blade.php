@extends('layout.app')
@section('css')

<style>
.navbar-link{
    padding: 10px 10px;
}

.navbar-link:hover{
    background-color: #687078;
}

.post-interaction{
    font-size: 1.6rem;
}
</style>

@section('content')
    <div class="row">
        <div class="col-3 px-5 mt-5">
            <div class="d-grid">
                <h3>Snapgram</h3>
            </div>
            <div class="d-grid mt-3">
                <a class="navbar-link text-black text-decoration-none fw-medium" style="font-size: 1.2rem;" href="/"><i class="bi bi-house-door-fill"></i> Beranda</a>
            </div>
            <div class="d-grid mt-1">
                <a class="navbar-link text-black text-decoration-none fw-medium" style="font-size: 1.2rem;" href="/"><i class="bi bi-compass"></i> Explore</a>
            </div>
            <div class="d-grid mt-1">
                <a class="navbar-link text-black text-decoration-none fw-medium" style="font-size: 1.2rem;" href="/"><i class="bi bi-person-fill"></i> Profile</a>
            </div>
        </div>
        <div class="col-9 px-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-6 px-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-item-center">
                                <div>
                                    <img class="img-fluid rounded-circle" src="https://via.assets.so/img.jpg?w=30&h=30&tc=black&bg=#cecece" alt="User">
                                </div>
                                <div class="ms-2">
                                    Username
                                </div>
                                <div class="ms-3">
                                    1 Jam
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <img class="img-fluid" src="https://via.assets.so/img.jpg?w=580&h=580&tc=black&bg=#cecece" alt="Post foto">
                            <div class="d-flex text-start mt-2">
                                <div>
                                    <a class="post-interaction text-black" href=""><i class="bi bi-heart"></i></a>
                                </div>
                                <div>
                                    <a class="post-interaction text-black ms-3" href=""><i class="bi bi-chat"></i></a>
                                </div>
                            </div>
                            <div class="text-start fw-medium">
                                <p>1.000 suka</p>
                            </div>
                            <div class="text-start fw-medium">
                                <p><b>Username</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="text-start">
                                <a class="text-secondary text-decoration-none mt-0" href="#">Lihat semua 60 komentar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-grid">
                        Username
                    </div>
                    <div>
                    <a href="/daftar" class="btn btn-secondary" type="submit">Daftar</a>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
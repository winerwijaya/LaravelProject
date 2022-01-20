@extends('layout.main')

@section('content')

<div class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');height: 90vh">
    <div class='d-flex flex-column min-vh-100 justify-content-center align-items-center'>
        <h1>
            Cari pasanganmu sekarang!
        </h1>
        <p class="text-center">
            E-Jodoh adalah aplikasi untuk mencari jodoh berbasis website. <br>
            Daftarkan dirimu sekarang dan bergabunglah dengan kami
        </p>
        <a class="btn btn-primary me-2" href="/register" role="button">Register</a>
    </div>
</div>


@endsection

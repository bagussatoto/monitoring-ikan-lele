@extends('layouts.main')

@section('container')

<section class="pt-7">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-md-6 text-md-start text-center py-6">
        <h1 class="mb-4 fs-9 fw-bold">Monitoring Kualitas Air Budidaya Lele</h1>
        <p class="mb-6 lead text-secondary">Web Sistem Informasi Monitoring<br
            class="d-none d-xl-block" />Kualitas Air Untuk Budidaya Ikan Lele<br
            class="d-none d-xl-block" />By Bagus Budi Satoto</p>
        <div class="text-center text-md-start">
            <a class="btn btn-warning me-3 btn-lg" href="/dashboard" role="button">Mulai Monitoring</a>
        </div>
        </div>
        <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="{{ asset('landpage/assets/img/hero/hero-img.png') }}"
            alt="" /></div>
    </div>
    </div>
</section>

@endsection
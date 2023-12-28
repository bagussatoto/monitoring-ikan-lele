@extends('dashboard.layouts.main')

@section('container')

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4 ">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa-solid fa-temperature-low fa-2xl text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">Suhu Air</p>
                    <h6 class="mb-0"><span id="suhu">0</span> °C</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa-solid fa-water fa-2xl text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">Kekeruhan Air</p>
                    <h6 class="mb-0"><span id="kekeruhan">0</span> NTU</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa-solid fa-hand-holding-droplet fa-2xl text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">pH Air</p>
                    <h6 id="ph" class="mb-0">0</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa-solid fa-ruler-horizontal fa-2xl text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">Jarak Air</p>
                    <h6 class="mb-0"><span id="jarak">0</span> CM</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa-solid fa-arrow-down fa-2xl text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">Pompa Masuk</p>
                    <h6 id="pompa_masuk" class="mb-0">Off</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa-solid fa-arrow-up fa-2xl text-warning"></i>
                <div class="ms-3">
                    <p class="mb-2">Pompa Keluar</p>
                    <h6 id="pompa_keluar" class="mb-0">Off</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->

<!-- Table Update -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Riwayat Monitoring Terbaru</h6>
            <a href="/dashboard/controls" class="text-warning">Lihat Semua</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Tanggal</th>
                        <th scope="col">Pukul</th>
                        <th scope="col">Suhu Air</th>
                        <th scope="col">Keruh Air</th>
                        <th scope="col">Keruh Air</th>
                        <th scope="col">Jarak Air</th>
                        <th scope="col">Pompa In</th>
                        <th scope="col">Pompa Out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($controls as $control) 
                    <tr>
                        <td>{{ $control->created_at->format('d M Y') }}</td>
                        <td>{{ $control->created_at->format('H:i') }}</td>
                        <td>{{ $control->temperature }} °C</td>
                        <td>{{ $control->turbidity }} NTU</td>
                        <td>{{ $control->ph }}</td>
                        <td>{{ $control->jarak }} CM</td>
                        <td>{{ $control->pompa_masuk }}</td>
                        <td>{{ $control->pompa_keluar }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Table Update End -->

@include('dashboard.realtime')
@endsection
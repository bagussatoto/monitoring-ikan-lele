@extends('dashboard.layouts.main')

@section('container')
    <!-- Table Update -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"
            ></button>
        </div>
        @endif
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Riwayat Monitoring</h6>
        </div>
        <form action="/dashboard/controls">
            @csrf
        <div class="input-group mb-3">
            <input type="date" class="form-control" name="filter" value="{{ request('filter') ?: $today }}">
            <button class="btn btn-warning" type="submit"><i class="bx bx-search"></i> Filter</button>
            </form>
            <a class="btn btn-secondary" target="_blank" href="/dashboard/cetak{{ request()->has('filter') ? '?filter=' . request('filter') : '' }}"><i class="bx bx-printer"></i> Cetak</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0 text-center">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Pukul</th>
                        <th scope="col">Suhu Air</th>
                        <th scope="col">Keruh Air</th>
                        <th scope="col">Keruh Air</th>
                        <th scope="col">Jarak Air</th>
                        <th scope="col">Pompa In</th>
                        <th scope="col">Pompa Out</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                @if ($controls->count() == 0)
                <tr>
                    <td colspan="10" class="text-center">Belum ada data</td>
                </tr>
                @endif
                    @foreach ($controls as $control) 
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $control->created_at->format('d M Y') }}</td>
                        <td>{{ $control->created_at->format('H:i') }}</td>
                        <td>{{ $control->temperature }} °C</td>
                        <td>{{ $control->turbidity }} NTU</td>
                        <td>{{ $control->ph }}</td>
                        <td>{{ $control->jarak }} CM</td>
                        <td>{{ $control->pompa_masuk }}</td>
                        <td>{{ $control->pompa_keluar }}</td>
                        <td>
                        <form action="/dashboard/controls/{{ $control->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="bx bx-trash me-1"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Table Update End -->
@endsection
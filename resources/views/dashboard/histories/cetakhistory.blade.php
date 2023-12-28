<!DOCTYPE html>
<html lang="en">
  
  <head>
  <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <title>Data Monitoring | {{ request('filter') ? request('filter') : now()->format('Y-m-d') }}</title>

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Favicon -->
    <link href="{{ asset('landpage\assets\img\favicons\favicon.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('dashmin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dashmin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('dashmin/css/style.css') }}" rel="stylesheet">
  </head>

  <body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        {{-- Content Start --}}
        <div class="content">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Rekap Data Monitoring {{ request('filter') ?: $today }}</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0 text-center">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Pukul</th>
                                    <th scope="col">Suhu Air</th>
                                    <th scope="col">Keruh Air</th>
                                    <th scope="col">Keruh Air</th>
                                    <th scope="col">Jarak Air</th>
                                    <th scope="col">Pompa In</th>
                                    <th scope="col">Pompa Out</th>
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

        </div>
        {{-- Content End --}}

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashmin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dashmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('dashmin/js/main.js') }}"></script>

    {{-- perintah print --}}
    <script>
        window.print();
    </script>
  </body>
</html>

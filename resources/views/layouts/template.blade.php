<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @yield('styles')

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-compass"></i> {{$title}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}"><i class="fa-solid fa-house"></i> Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-table"></i></i></i> Tabel Data
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="nav-link" href="{{ route('table-point') }}">Data Titik Lokasi Wisata</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="nav-link" href="{{ route('table-polyline') }}">Data Jaringan Jalan</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="nav-link" href="{{ route('table-polygon') }}">Data Kawasan Wisata</a></li>
                        </ul>
                      </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#infoModal"><i class="fa-solid fa-circle-info"></i></i> Info</a>
                    </li>

                    @if (Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}"><i class="fa-solid fa-gauge"></i>Dasbor</a>
                    </li>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                    <li class="nav-item">
                        <button class="nav-link" type="submit" style="color: red">
                            <i class="fa-solid fa-right-to-bracket"></i> Keluar
                        </button>
                    </li>
                    </form>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('login')}}"><i class="fa-solid fa-right-to-bracket"></i><Leg></Leg> Masuk</a>
                    </li>
                    @endif



                </ul>
            </div>
        </div>
    </nav>

        <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-circle-info"></i></i> Tentang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Nama: Michael Noelvito Husodo</p>
          <p>NIM: 22/497277/SV/21111</p>
          <p>Prodi: D4 Sistem Informasi Geografis</p>
          <p>Kelas: PGWL A</p>
          <p>Tahun Pembuatan: 2024</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
        </div>
    </div>



    @yield('content')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


     @include("components.toast")
    @yield('script')
</body>

</html>

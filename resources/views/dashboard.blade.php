<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Explore KWB with Mine') }}
        </h1>
    </x-slot>


    <div class="container">
        <!--Section: Content-->
        <section>


    <div class="container py-12">
        <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                <img src="{{ asset('storage/images/Alun-Alun_Batu.jpg') }}" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
            <div class="mb-3">
              <h4><strong>Sekilas Pandang</strong></h4>
              <p class="text-muted">
                Kota Batu merupakan sebuah kota di kawasan Malang raya yang sebenarnya sudah terkenal sebagai salah satu destinasi wisata favorit
                para wisatawan khususnya di Provinsi Jawa Timur. Oleh karena itu, destinasi wisata yang ada di Kota Batu semakin menarik.
                Maka dari itu melalui peta interaktif yang mudah untuk diedit,
                para pengguna dapat membantu menambahkan berbagai destinasi wisata baru yang mungkin belum terjamah oleh pembuat webGIS :).
              </p>
            </div>
            <div class="mb-3">
              <p><strong>Kondisi Geografis</strong></p>
              <p class="text-muted">
                Secara geografis Lawang terletak di pegunungan dan dikelilingi Gunung Arjuno, Gunung Penanggungan, Gunung Kawi dan Gunung Panderman.
                Kota Batu Lawang berbatasan dengan Kabupaten Malang di sebelah timur, barat, dan selatan
                dan Kabupaten Pasuruan, Kabupaten Mojokerto, dan Kabupaten Jombang di utara.
              </p>
            </div>
          </div>
        <div class="card shadow">
            <div class="card-header">
                <h3 class="card-title">Data Spasial dalam Angka</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Total Titik Wisata</h4>
                            <p style="font-size: 28pt">{{ $total_point }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-success" role="alert">
                            <h4><i class="fa-solid fa-chart-line"></i> Total Jaringan Jalan</h4>
                            <p style="font-size: 28pt">{{ $total_polyline }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa-solid fa-draw-polygon"></i> Total Kawasan Wisata</h4>
                            <p style="font-size: 28pt">{{ $total_polygon }}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <p>Anda sudah login sebagai <b>{{ Auth::user()->name }}</b> dengan email <i>{{ Auth::user()->email }}</i></p>
            </div>
        </div>

</x-app-layout>

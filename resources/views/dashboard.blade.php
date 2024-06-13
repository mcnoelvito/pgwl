<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800:text-gray-200 leading-tight">
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
                <style>
                    .mb-3 {
                        text-align: justify;
                    }
                </style>
            <div class="mb-3">
              <h4><strong>Sekilas Pandang</strong></h4>

              <p class="text-muted">
                Kota Batu merupakan sebuah kota di kawasan Malang raya yang sebenarnya sudah terkenal sebagai salah satu destinasi wisata favorit
                para wisatawan khususnya di Provinsi Jawa Timur. Oleh karena itu, destinasi wisata yang ada di Kota Batu semakin menarik dan berkembang.
                Saat ini Kota Batu memiliki wisata yang beragam baik wisata alam dan buatan. Wisata Alam yang ada di Kota Batu adalah berbagai air terjun "coban",
                pemandian air panas Cangar, dan pegunungan seperti Gunung Panderman yang biasa digunakan untuk wisata paralayang.
                Sementara wisata buatannya berupa taman wisata seperti serangkaian Taman Wisata Jatim Park, Museum Angkut, Eco Green Park, Wisata Petik Apel
                Taman wisata Selecta, yang merupakan taman wisata tertua di Kota Batu, dan lain sebagainya. Karena perkembangan wisata di Kota Batu cukup pesat
                terutama dalam destinasi wisata maka WebGIS ini memfasilitasi penggunanya untuk memanfaatkan peta interaktif yang mudah untuk diedit,
                agar dapat membantu menambahkan berbagai destinasi wisata baru yang mungkin belum terjamah oleh pembuat webGIS :).
              </p>
            </div>
            <div class="mb-3">
              <p><strong>Kondisi Geografis</strong></p>
              <p class="text-muted">
                Secara geografis, Kota Batu terletak di pegunungan dan dikelilingi Gunung Arjuno, Gunung Penanggungan, Gunung Kawi dan Gunung Panderman.
                Kota Batu berbatasan dengan Kabupaten Malang di sebelah timur, barat, dan selatan
                dan Kabupaten Pasuruan, Kabupaten Mojokerto, dan Kabupaten Jombang di utara.
                Kota Batu terdiri atas tiga kecamatan yaitu Kecamatan Batu, Kecamatan Junrejo, dan Kecamatan Bumiaji.
                Luas dari Kota Batu adalah sekitar 199,09 km2. Wilayah Kota Batu yang terletak di dataran tinggi di lereng pegunungan dengan ketinggian 700 sampai 1.700 meter di atas permukaan laut
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

        <!--Section: Content-->
      <div class="text-center">
        <h4 class="mb-5"><strong></strong></h4>
      </div>
      <div class="text-center">
        <h4 class="mb-5"><strong>Beberapa Highlight Wisata di Kota Batu</strong></h4>
      </div>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{ asset('storage/images/1718204157_polygon.jpeg') }}" width="500px" height="200px" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Jatim Park</h5>
                <p class="card-text">
                  Jawa Timur Park atau biasa disebut Jatim Park adalah rangkaian kawasan taman wisata buatan di Kota Batu yang  menaungi
                  Taman wisata seperti Jatim Park 1, 2, dan 3, Eco Green Park, BNS, dan Museum Angkut .
                </p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{ asset('storage/images/1718279714_polygon.jpeg') }}" width="500px" height="500px" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Selecta</h5>
                <p class="card-text">
                  Selecta Merupakan taman wisata tertua di Kota Batu yang didirikan pada tahun 1928 sejak zaman Belanda yang berisikan wisata utama berupa kolam renang
                </p>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="{{ asset('storage/images/1718280226_point.jpg') }}" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Air Terjun Coban Rais</h5>
                <p class="card-text">
                    Air Terjun Coban Rais merupakan air terjun yang berada di lereng sebelah timur Gunung Panderman,
                    dengan aliran air terjun yang cukup deras.
                    Di sisi air terjunnya banyak ditumbuhi pohon dan bebatuan besar.
                    Air terjun ini terdapat aliran sungai kecil yang harus dilewati terlebih dahulu selain jalan setapak yang cukup licin.
                    Selain air terjun, Coban Rais juga dilengkapi dengan beberapa spot foto.
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Section: Content-->
     <!--Footer-->
  <section id="team">
    <div class="layar-dalam">
      <h3>Profil Saya</h3>

      <div class="tim">
        <div>
          <img src="{{ asset('storage/images/profile.jpg') }}" width="220px" height="200px"/>
          <h6>Michael Noelvito Husodo</h6>
          <h7>22/497277/SV/21111</h7>
        </div>
      </div>
    </div>
    <div class="p-4">
        <h4 class="fst-italic">Media Sosial</h4>
        <ol class="list-unstyled mb-0">
            <li class="">
                <a class="nav-link" href="https://www.youtube.com/channel/UCcxEDeWG4DIIoKJAi3vLIBw" rel="nofollow"
                  target="_self">
                  <i class="fab fa-youtube"> Youtube </i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.instagram.com/michaelnoelvito/" rel="nofollow" target="_self">
                  <i class="fab fa-instagram"> Instagram </i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/HusodoMichael" rel="nofollow" target="_self">
                  <i class="fab fa-twitter"> Twitter </i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/mcnoelvito/PGweb_responsi.git" rel="nofollow" target="_self">
                  <i class="fab fa-github"> GitHub </i>
                </a>
              </li>
        </ol>
    </div>
  </section>
   <!-- Copyright -->
   <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Author:
    <a class="text-dark">Michael Noelvito Husodo</a>
  </div>
  <!-- Copyright -->
</footer>

    </div>

</x-app-layout>

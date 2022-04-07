
@include('partial.strtemplate')

<body class="g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('partial.nav')
    <!-- End Navbar -->
    <div class="container-fluid py-4" style="padding-left: 0px;">
    @include('partial.mainmenu')
    <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
    <div class="col-12">
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h4 class="text-white text-capitalize ps-3">ABSENSI SISWA PAUD ASSIBYAN</h4>
        </div>
        </div>
        <div class="card-body px-0 pb-2">
        <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
            <table class="table align-items-center mb-0">
            <thead>
                <tr  class="border-radius-lg" style="background-color:#b0c4ee;">
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Kelas</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Tanggal</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Hadir / Tidak Hadir</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="text-left">Jevri Afriliando</td>
                <td class="text-left">A</td>
                <td class="text-left">12-12-2022</td>
                <td class="text-left">Hadir</td>
                <td class="text-left">Masuk</td>
                </tr>
            </tbody>
            </table>
        </div>
        <br>
        </div>
    </div>
<br>
    </div>
    </div>
          
      @include('partial.footer')
    </div>
  </main>

  @include('partial.endtemplate')
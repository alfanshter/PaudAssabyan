
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
                <h4 class="text-white text-capitalize ps-3">NILAI SISWA PAUD ASSIBYAN</h4>
            </div>    
        </div>
        
        <div class="card-body px-0 pb-2">
        <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
            <table class="table align-items-center mb-0">
            <thead>
                <tr  class="border-radius-lg" style="background-color:#b0c4ee;">
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">Tanggal</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Kelas</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Bermain</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Ikrar Bersama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Senan Irama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Bernyanyi</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Berdoa</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Pijakan Sebelum Bermain</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Pijakan Setelah Bermain</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="text-left">12-12-2022</td>
                <td class="text-left">Jevri Afriliando</td>
                <td class="text-left">A</td>
                <td class="text-left">Baik</td>
                <td class="text-left">Baik</td>
                <td class="text-left">Cukup</td>
                <td class="text-left">Baik</td>
                <td class="text-left">Sangat Baik</td>
                <td class="text-left">Cukup</td>
                <td class="text-left">Baik</td>
                </tr>
            </tbody>
            </table>
        </div>
        <hr>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                <h6>Tahun </h6>
                </div>
                <div class="col-lg-2">
                <h6> <input placeholder="Tulis Tahun" type="text" class="form-control border-radius-lg" style="background-color:#b0c4ee;"></h6>
                <p><button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Cari</button></p>
                </div>
                <div class="col-lg-5">
                
                </div>
                <div class="col-lg-3">
                <button type="button" class="btn btn-warning"><img src="../assets/img/illustrations/pdf-btn.png" alt="Kegiatan" width="40" height="40"> Cetak Nilai Kamu</button>
                </div>
            </div>
        </div>
        <br>
        </div>
    </div>
    <br><br>
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h4 class="text-white text-capitalize ps-3">KOMENTAR NILAI SISWA PAUD ASSIBYAN</h4>
        </div>
        </div>
        <div class="card-body px-0 pb-2">
        <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
            <table class="table align-items-center mb-0">
            <thead>
                <tr  class="border-radius-lg" style="background-color:#b0c4ee;">
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  text-center">Tanggal</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Komentar Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="text-center">12-12-2022</td>
                <td class="text-center">Nilai Yang Kamu Peroleh Sangat Baik Pertahankan Ya nilai baik mu itu</td>
                </tr>
            </tbody>
            </table>
        </div>
        <br>
        </div>
    </div>
    </div>
    </div>
          
      @include('partial.footer')
    </div>
  </main>

  @include('partial.endtemplate')
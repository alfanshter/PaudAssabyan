
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
            <h4 class="text-white text-capitalize ps-3">Anggota Siswa Paud Assibyan</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-1">
                <h6>KELAS </h6>
                </div>
                <div class="col-lg-2 mt-2">
                    <h6>
                        <select type="text" class="form-control border-radius-lg w-60" style="background-color:#b0c4ee;">
                            <option value="">A</option>
                        </select>
                    </h6>
                     <p><button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-60  mb-0">Cari</button></p>
                </div>
                <div class="col-lg-5">
                
                </div>
                
            </div>
        </div>
        </div>
        <div class="card-body px-0 pb-2">
        <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
            <table class="table align-items-center mb-0">
            <thead>
                <tr  class="border-radius-lg" style="background-color:#b0c4ee;">
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Kelas</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="text-left">1</td>
                <td class="text-left">Jevri Afriliando</td>
                <td class="text-left">A</td>
                <td class="text-left">Baik</td>
                </tr>
            </tbody>
            </table>
        </div>
        <hr>
        <br>

   
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
@include('partial.strtemplate') 
<body class="g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar --> @include('partial.nav')
    <!-- End Navbar -->
    <div class="container-fluid py-4" style="padding-left: 0px;"> @include('partial.mainmenu') <div class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h4 class="text-white text-capitalize ps-3">KEUANGAN SISWA PAUD ASSIBYAN</h4>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="container">
                <div class="row">
                  <div class="col-lg-2">
                    <p>
                      <button type="submit" class="btn" style="background-color:#b0c4ee;" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
                    </p>
                  </div>
                  <div class="col-lg-3" style="padding-right: 50px;">
                      <div class="row">
                        <div class="col-sm-3">
                            <h6> Bulan </h6>
                        </div>
                        <div class="col-sm" style="padding-bottom: 5px;">
                        <select class="form-select" placeholder="Tulis Tahun" type="text" class="" style="background-color:#b0c4ee;padding-left: 8px;">
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                            <h6> Tahun </h6>
                        </div>
                        <div class="col-sm" style="padding-bottom: 5px;">
                        <input placeholder="Tulis Tahun" type="text" class="form-control" style="background-color:#b0c4ee;padding-left: 8px;">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                            <h6> Kelas </h6>
                        </div>
                        <div class="col-sm">
                            <div class="row">
                                <div class="col-sm">
                                    <select  class="form-select" placeholder="Tulis Tahun" type="text" class="" style="width: 70px;background-color:#b0c4ee;padding-left: 8px;">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <button class="btn btn-xs bg-gradient-light">cari</button>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="row">
                        <div class="col-sm-8" style="padding-left: 0px;">
                            <input placeholder="Cari Siswa" type="text" class="mobileforminput" style="width: 400px;background-color:#FFFFFF;">
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-xs bg-gradient-light">
                                Cari
                            </button>
                        </div>
                        <div class="col-sm-2" style="padding-right: 0px;padding-left: 0px;">
                            <button type="submit" class="btn btn-xs bg-gradient-danger">
                                Reset
                            </button>
                        </div>
                    </div>
                    <div class="row">
                    <button type="button" class="btn btn-warning" style="width: 300px;">
                      <img src="../assets/img/illustrations/pdf-btn.png" alt="Kegiatan" width="40" height="40"> Cetak Keuangan Bulan ini </button>
                  </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr class="border-radius-lg" style="background-color:#b0c4ee;">
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Kelas</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Bulan</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Jenis Surat</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Biaya</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Tanggal</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td class="text-left" style="border-right:1pt solid white;"></td>
                      <td class="text-left" style="border-right:1pt solid white;"></td>
                      <td class="text-left" style="border-right:1pt solid white;"></td>
                      <td class="text-left" style="border-right:1pt solid white;"></td>
                      <td class="text-left" style="border-right:1pt solid white;"></td>
                      <td class="text-left" style="border-right:1pt solid white;"></td>
                      <td class="text-left" style="border-right:1pt solid white;"></td>
                      <td class="text-left" style="border-right:1pt solid white;"></td>
                      <td class="text-left" style="border-right:1pt solid white;"></td>
                    </tr>
                    <tr>
                      <td class="text-center" style="border-right:1pt solid black;">1</td>
                      <td class="text-center" style="border-right:1pt solid black;">Jevri Afriliando</td>
                      <td class="text-center" style="border-right:1pt solid black;">A</td>
                      <td class="text-center" style="border-right:1pt solid black;">Januari</td>
                      <td class="text-center" style="border-right:1pt solid black;">SPP</td>
                      <td class="text-center" style="border-right:1pt solid black;">30000</td>
                      <td class="text-center" style="border-right:1pt solid black;">lunas</td>
                      <td class="text-center" style="border-right:1pt solid black;">23/01/2022</td>
                      <td class="text-center" style="border-right:1pt solid black;">
                        <button type="submit" class="btn btn-xs bg-gradient-success">
                          <img src="../assets/img/illustrations/eye.png" alt="" width="20" height="20" />
                        </button>
                        <button type="submit" class="btn btn-xs bg-gradient-danger">
                          <img src="../assets/img/illustrations/delete-btn.png" alt="" width="20" height="20" />
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <hr style="color:black;">
              <br>
            </div>
          </div>
          <br>
          <br>
        </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Keuangan</h5>
              <button class="buttonclosemodal" type="button" data-bs-dismiss="modal" aria-label="Close">
                <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Nama:</label>
                    </div>
                    <div class="col-sm">
                      <select class="form-select" id="user_id" name="user_id" style="background-color: #FFFFFF;padding-left: 8px;">
                        <option selected>Pilih Siswa</option>
                        <option value=""></option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Kelas:</label>
                    </div>
                    <div class="col-sm">
                      <select class="form-select" id="user_id" name="user_id" style="width: 100px;background-color: #FFFFFF;padding-left: 8px;">
                        <option selected>Pilih Kelas</option>
                        <option value="A">A</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Periode:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="mobileforminput" name="tempat_lahir" id="tempat_lahir" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Jenis Tagihan:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="mobileforminput"  name="tempat_lahir" id="tempat_lahir" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Nominal:</label>
                    </div>
                    <div class="col-sm">
                      <input type="number" value="0" class="mobileforminput" name="tempat_lahir" id="tempat_lahir" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Status Pembayaran:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="mobileforminput" name="tempat_lahir" id="tempat_lahir" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Tanggal Bayar:</label>
                    </div>
                    <div class="col-sm">
                      <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required style="padding-left: 8px;background-color: #E1E1E1">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> @include('partial.footer')
    </div>
  </main> @include('partial.endtemplate')
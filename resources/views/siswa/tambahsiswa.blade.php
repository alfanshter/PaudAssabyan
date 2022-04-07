
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
                <div class="col-lg-2 mt-2">
                     <p><button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-auto  mb-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button></p>

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

    {{-- Modal Tambah Siswa --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Buat Akun Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Buat Username:</label>
                    <input type="text" class="form-control" placeholder="Masukkan Username" name="username" style="background-color: #B6BDFF" id="recipient-name">
                  </div>

                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Buat Password:</label>
                    <input type="text" class="form-control" placeholder="Masukkan Password" name="password" style="background-color: #B6BDFF" id="recipient-name">
                  </div>

                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Ulangi Password:</label>
                    <input type="text" class="form-control" placeholder="Masukkan Ulang Password" name="password_ulang" style="background-color: #B6BDFF" id="recipient-name">
                  </div>

                  <center>
                    <div>
                        <img class="d-block" src="{{asset('assets/img/siswa/imgfoto.svg')}}"  alt="" srcset="">
                        <label for="files"  class="d-block btn-primary mt-2 w-100">Pilih Foto</label>
                        <input id="files" type="file" style="visibility:hidden;" placeholder="Pilih ">
                    </div>
                  </center>
 
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>
          
      @include('partial.footer')
    </div>
  </main>

  @include('partial.endtemplate')
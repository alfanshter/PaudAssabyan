
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
                     @if (session()->has('success'))
                     <div class="alert alert-success mt-2" role="alert">
                         {{session('success')}}  
                     </div>
                     @endif

                     @if (session()->has('error'))
                     <div class="alert alert-danger mt-2" role="alert">
                         {{session('error')}}  
                     </div>
                     @endif

                     @error('username')
                     <div class="alert alert-danger mt-2" role="alert">
                         {{$message}}  
                     </div>                        
                     @enderror

                     @error('password')
                     <div class="alert alert-danger mt-2" role="alert">
                         {{$message}}  
                     </div>                        
                     @enderror

                     @error('foto')
                     <div class="alert alert-danger mt-2" role="alert">
                         {{$message}}  
                     </div>                        
                     @enderror

                     @error('fotoulang')
                     <div class="alert alert-danger mt-2" role="alert">
                         {{$message}}  
                     </div>                        
                     @enderror


 
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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder align-middle text-center ">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 align-middle text-center">Username</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 align-middle text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $data)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td class="text-center">{{$data->username}}</td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-sm-center mt-2">
                            <form action="/siswa/delete" method="post">
                                @csrf
                                <input type="hidden" name="foto" value="{{$data->foto}}" id="foto">
                                <input type="hidden" name="id" value="{{$data->id}}" id="id">
                                <button class="btn btn-danger ml-2" onclick="return confirm('Apakah anda akan menghapus data ?')">Hapus</button>
                            </form>
                            <button type="button" class="btn btn-warning ml-2" data-bs-toggle="modal" data-bs-target="#editmodal">Edit</button>
                                  {{-- Modal Edit Siswa --}}
                                <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodal" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ganti Password Siswa</h5>
                                        <button type="button"  data-bs-dismiss="modal" aria-label="Close"> <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">  </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/siswa/gantipassword" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" id="id" value="{{$data->id}}">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Password Baru:</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Password Baru" name="password" required style="background-color: #B6BDFF" id="recipient-name">
                                            </div>

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Ulangi Password:</label>
                                                <input type="text" class="form-control" placeholder="Ulangi Password Baru" name="password_ulang" required style="background-color: #B6BDFF" id="recipient-name">
                                            </div>

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Foto Ulang:</label>
                                                <input type="file" class="form-control" placeholder="Ulangi Password Baru" name="fotoulang"  style="background-color: #B6BDFF" id="fotoulang" value="{{$data->foto}}">
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                    
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        </td>  
                
                
                    </tr>
                
                    
                @endforeach
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
            <table class="table align-items-center mb-0" id="dataTable">
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
            <button type="button"  data-bs-dismiss="modal" aria-label="Close"> <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">  </button>
        </div>
            <div class="modal-body">
                <form action="/registersiswa" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Nama Siswa:</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Siswa" name="nama" required style="background-color: #B6BDFF" id="recipient-name">
                  </div>

                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Buat Username:</label>
                    <input type="text" class="form-control" placeholder="Masukkan Username" name="username" required style="background-color: #B6BDFF" id="recipient-name">
                  </div>

                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Buat Password:</label>
                    <input type="text" class="form-control" placeholder="Masukkan Password" name="password" required style="background-color: #B6BDFF" id="recipient-name">
                  </div>

                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Ulangi Password:</label>
                    <input type="text" class="form-control" placeholder="Masukkan Ulang Password" name="password_ulang" required style="background-color: #B6BDFF" id="recipient-name">
                  </div>

                  <center>
                    <div>
                        <img class="img-preview img-fluid" src="{{asset('assets/img/siswa/imgfoto.svg')}}" width="200px" width="200px">
                        <label for="foto"  class="d-block btn-primary mt-2 w-100">Pilih Foto</label>
                        <input name="foto" id="foto" type="file" required id="foto" style="visibility:hidden;"  onchange="previewImage()">
                        <script>
                            function previewImage(){
                                const  image = document.querySelector('#foto');
                                const imgPreview = document.querySelector('.img-preview');
                        
                                imgPreview.style.display = 'block';
                        
                                const oFReader = new FileReader();
                                oFReader.readAsDataURL(foto.files[0]);
                        
                                oFReader.onload = function(oFREvent) {
                                    imgPreview.src = oFREvent.target.result;            
                                }
                        
                            }
                        
                        </script>
                    </div>
                  </center>
 
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
         
                </form>
            </div>
        </div>
        </div>
    </div>
          
      @include('partial.footer')
    </div>
  </main>

  @include('partial.endtemplate')
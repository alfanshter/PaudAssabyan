
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
            <h4 class="text-white text-capitalize ps-3">Biodata Siswa Paud Assibyan</h4>
        </div>
        <div class="container" style="background-color: aqua">
            <div class="row">
                <div class="col-lg-2 mt-2">
                    <p><button type="button" class="btn btn-lg btn-lg w-80  mb-0" style="background-color:#b0c4ee;" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button></p>
                    @if (session()->has('success'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{session('success')}}  
                    </div>
                    @endif
                </div>
                <div class="col-lg-2 mt-2 w-auto">
                    <input type="text" placeholder="Cari siswa" name="cari_siswa" id="cari_siswa" class="form-control">
                </div>

                <div class="col-lg-2 mt-2 " >
                    <p><button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-60  mb-0">Cari</button></p>
                
                </div>
                
            </div>
        </div>
        </div>
        <div class="card-body px-0 pb-2">
        <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
            <table class="table align-items-center mb-0">
            <thead>
                <tr  class="border-radius-lg" style="background-color:#b0c4ee;">
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Nama Siswa</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center" >Kelas</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center" >Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($biodata as $data)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td class="text-center">{{$data->biodata->nama}}</td>
                    <td class="text-center">{{$data->kelas}}</td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-sm-center mt-2">
                            <a href="/biodata/{{$data->user_id}}">        
                                <input type="image" src="{{asset('assets/tombol/btnmata.png')}}"   name="button" width="50" height="37"  alt="submit"/>    
                            </a>
                            
                            <form action="/biodata/hapus" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$data->id}}" id="id">
                                <input type="hidden" name="foto" value="{{$data->foto}}" id="foto">
                                <input type="image" src="{{asset('assets/tombol/btnhapus.png')}}" onclick="return confirm('Apakah anda akan menghapus data ?')" name="submit"  width="50" height="37" alt="submit"/>    
                            </form>
                                
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

    </div>
    </div>
    </div>
            {{-- Modal Tambah Siswa --}}
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Biodata Siswa</h5>
                    <button type="button"  data-bs-dismiss="modal" aria-label="Close"> <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">  </button>
                </div>
                <div class="modal-body">
                    <form action="/biodata" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama:</label>
                        <select class="form-select" id="user_id" name="user_id" style="background-color: #B6BDFF">
                            <option selected>Pilih Username...</option>
                            @foreach ($user as $item)
                            <option value="{{$item->id}}">{{$item->username}}</option>                                
                            @endforeach
                          </select>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" id="tempat_lahir" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" id="tanggal_lahir" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Jenis Kelamin:</label>
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" style="background-color: #B6BDFF">
                            <option selected>Pilih Jenis Kelamin ...</option>
                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                            <option value="PEREMPUAN">PEREMPUAN</option>
                          </select>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">NIK:</label>
                        <input type="number" class="form-control" placeholder="Masukkan NIK" name="nik" id="nik" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Alamat:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" id="alamat" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Agama:</label>
                        <select class="form-select" id="agama" name="agama" style="background-color: #B6BDFF">
                            <option selected>Pilih Agama ...</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="KRISTEN">KRISTEN</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="HINDU">HINDU</option>
                            <option value="KONGHUCU">KONGHUCU</option>
                          </select>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Kelas:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kelas" name="kelas" id="kelas" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Alat Transportasi:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Alat Transportasi" name="alat_transportasi" id="alat_transportasi" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">No Hp:</label>
                        <input type="text" class="form-control" placeholder="Masukkan No Hp" name="no_hp" id="no_hp" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">NIS:</label>
                        <input type="text" class="form-control" placeholder="Masukkan NIS" name="nis" id="nis" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nomor KPS:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nomor KPS" name="nomor_kps" id="nomor_kps" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Jenis Tinggal:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jenis Tinggal" name="jenis_tinggal" id="jenis_tinggal" required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Tanggal Masuk PAUD Assibyan:</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal Masuk PAUD Assibyan" name="tanggal_masuk" id="tanggal_masuk" required style="background-color: #B6BDFF" >
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
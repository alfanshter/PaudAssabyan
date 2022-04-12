
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
        </div>
        <div class="card-body px-0 pb-2">
            <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                <p><button type="button" class="btn btn-lg btn-lg w-auto  mb-0" style="background-color:#b0c4ee;">Data Induk</button></p>
                <hr>
                <form action="/biodata/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="oldImage" value="{{$biodata->foto}}">
                    <input type="hidden" name="user_id" value="{{$biodata->user_id}}">
                    <input type="hidden" name="id" value="{{$biodata->id}}">
                    <div>
                        <p class="text-dark">Nama Siswa</p>
                        <input type="text"  name="nama" id="nama" value="{{$biodata->biodata->nama}}"  class="form-control"  required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Username</p>
                        <input type="text" name="username" id="username" value="{{$biodata->biodata->username}}" disabled class="form-control"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">NIK</p>
                        <input type="text" name="nik" id="nik" value="{{$biodata->nik}}" class="form-control"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Tanggal Masuk Paud Assibyan</p>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" value="{{$biodata->tanggal_masuk}}" class="form-control"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Kelas</p>
                        <input type="text" name="kelas" id="kelas" class="form-control"  value="{{$biodata->kelas}}"  required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Tempat Lahir</p>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{$biodata->tempat_lahir}}" class="form-control"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Tanggal Lahir</p>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{$biodata->tanggal_lahir}}" class="form-control"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Jenis Kelamin</p>
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{$biodata->jenis_kelamin}}" class="form-control"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Alamat</p>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="{{$biodata->alamat}}"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Jenis Tinggal</p>
                        <input type="text" name="jenis_tinggal" id="jenis_tinggal" class="form-control" value="{{$biodata->jenis_tinggal}}"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Alat Transportasi</p>
                        <input type="text" name="alat_transportasi" id="alat_transportasi" value="{{$biodata->alat_transportasi}}" class="form-control"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">No. Telepon/HP</p>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" value="{{$biodata->no_hp}}"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">Status Dalam Keluarga</p>
                        <input type="text" name="status_dalam_keluarga" id="status_dalam_keluarga" class="form-control"   style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">NIS</p>
                        <input type="text" name="nis" id="nis" class="form-control" value="{{$biodata->nis}}"   required style="background-color: #B6BDFF" >
                    </div>
                    <div class="mt-2">
                        <p class="text-dark">No KPS</p>
                        <input type="text" name="nomor_kps" id="nomor_kps" value="{{$biodata->nomor_kps}}" class="form-control"    required style="background-color: #B6BDFF" >
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Agama:</label>
                        <select class="form-select" id="agama" name="agama" style="background-color: #B6BDFF">
                            <option selected>{{$biodata->agama}}</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="KRISTEN">KRISTEN</option>
                            <option value="BUDHA">BUDHA</option>
                            <option value="HINDU">HINDU</option>
                            <option value="KONGHUCU">KONGHUCU</option>
                          </select>
                    </div>
                    <center>
                        <div class="mt-2"> 
                            @if ($biodata->foto)
                            <img class="img-preview img-fluid" src="{{asset('storage/'.$biodata->foto)}}" style="width: 200px; height:200px">
                            @else
                            <img class="img-preview img-fluid" src="{{asset('assets/img/siswa/imgfoto.svg')}}" width="200px" width="200px">
                            @endif
                            <label for="foto"  class="d-block btn-primary mt-2 w-100">Pilih Foto</label>
                            <input name="foto" id="foto" type="file"  id="foto" style="visibility:hidden;"  onchange="previewImage()">
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
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Edit</button>                  
                    </div>
{{--                   
                        <div>
                            <button class="d-inline btn"  style="background-color: #FF0707">Close</button>
                            <button class="d-inline btn" type="submit" style="background-color: #DA2FE9">Simpan Edit</button>
                        </div>     --}}

                </form>

        
            </div>
        <br>

   
        <br>
        </div>
    </div>
    <br><br>

    </div>
    </div>
    </div>
    
    </div>
          

    
        @include('partial.footer')


    </div>
  </main>

  @include('partial.endtemplate')
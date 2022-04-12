
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
        <div class="card-body px-0 pb-2">
        <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
            <table class="table align-items-center mb-0">
            <thead>
                <tr  class="border-radius-lg" style="background-color:#b0c4ee;">
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder ">Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Kelas</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Tanggal</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Hadir / Tidak Hadir</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Keterangan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absen as $item)
                <tr>
                    <td class="text-left">{{$loop->iteration}}</td>
                    <td class="text-left">{{$item->user->nama}}</td>
                    <td class="text-left">{{$item->kelas}}</td>
                    <td class="text-left">{{$item->tanggal}}</td>
                    @if ($item->absen == 0)
                    <td class="text-left">Tidak Hadir</td>
                    @else
                    <td class="text-left">Hadir</td>
                    @endif
                    <td class="text-left">{{$item->keterangan}}</td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-sm-center mt-2">
                            <input type="image" src="{{asset('assets/tombol/btnmata.png')}}"   name="button" data-bs-toggle="modal" data-bs-target="#editmodal{{$item->id}}" width="50" height="37"  alt="submit"/>    
                            <form action="/absensiswa/hapus" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$item->id}}" id="id">
                                <input type="image" src="{{asset('assets/tombol/btnhapus.png')}}" onclick="return confirm('Apakah anda akan menghapus data ?')" name="submit"  width="50" height="37" alt="submit"/>    
                            </form>
                                {{-- Modal Edit Absen --}}
                                <div class="modal fade" id="editmodal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail Absensi Siswa</h5>
                                            <button type="button"  data-bs-dismiss="modal" aria-label="Close"> <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">  </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/absensiswa/update" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$item->id}}">
                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                                    <select class="form-select" id="user_id" name="user_id" style="background-color: #B6BDFF">
                                                        <option selected>{{$item->user->nama}}</option>
                                                        {{-- @foreach ($user as $item)
                                                        <option value="{{$item->id}}">{{$item->nama}}</option>                                
                                                        @endforeach --}}
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Tanggal Absen:</label>
                                                    <input type="date" class="form-control" value="{{$item->tanggal}}"  name="tanggal" id="tanggal" required style="background-color: #B6BDFF" >
                                                </div>


                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Kelas:</label>
                                                    <input type="text" class="form-control" value="{{$item->kelas}}" placeholder="Masukkan Kelas" name="kelas" id="kelas" required style="background-color: #B6BDFF" >
                                                </div>


                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Hadir/Tidak Hadir:</label>
                                                    <select class="form-select" id="absen" required name="absen" style="background-color: #B6BDFF">
                                                        <option selected>Pilih Absen</option>
                                                        <option value="1">Hadir</option>                                
                                                        <option value="0">Tidak Hadir</option>                                
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="recipient-name" class="col-form-label">Keterangan:</label>
                                                    <input type="text" class="form-control" value="{{$item->keterangan}}" placeholder="Keterangan" name="keterangan" id="keterangan" required style="background-color: #B6BDFF" >
                                                </div>

                                    
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Edit</button>
                                                </div>
                                    
                                            </form>
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
        <br>
        </div>
    </div>
<br>
    </div>
    </div>
                      {{-- Modal Tambah Siswa --}}
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Absensi Siswa</h5>
                    <button type="button"  data-bs-dismiss="modal" aria-label="Close"> <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">  </button>
                </div>
                <div class="modal-body">
                    <form action="/absensiswa" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama:</label>
                        <select class="form-select" id="user_id" name="user_id" style="background-color: #B6BDFF">
                            <option selected>Pilih Siswa...</option>
                            @foreach ($user as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>                                
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Tanggal Absen:</label>
                        <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal" id="tanggal" required style="background-color: #B6BDFF" >
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Kelas:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kelas" name="kelas" id="kelas" required style="background-color: #B6BDFF" >
                    </div>


                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Hadir/Tidak Hadir:</label>
                        <select class="form-select" id="absen" name="absen" style="background-color: #B6BDFF">
                            <option selected>Pilih Absen</option>
                            <option value="1">Hadir</option>                                
                            <option value="0">Tidak Hadir</option>                                
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Keterangan:</label>
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" id="keterangan" required style="background-color: #B6BDFF" >
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
      


      @include('partial.footer')
    </div>
  </main>

  @include('partial.endtemplate')
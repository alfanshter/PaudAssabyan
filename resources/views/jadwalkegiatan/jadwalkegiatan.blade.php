
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
            <h4 class="text-white text-capitalize ps-3">Jadwal Kegiatan Siswa</h4>
        </div>
        <div class="container">
            <div class="row">
                <p><button type="button" class="btn btn-lg mt-2 btn-lg mb-0" style="background-color: #B6BDFF" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button></p>
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

                @error('jadwal')
                <div class="alert alert-danger mt-2" role="alert">
                    {{$message}}  
                </div>                        
                @enderror

                @error('kegiatan')
                <div class="alert alert-danger mt-2" role="alert">
                    {{$message}}  
                </div>                        
                @enderror




            </div>
            
        </div>
        </div>
        <div class="card-body px-0 pb-2">
        <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
            <table class="table align-items-center mb-0">
            <thead>
                <tr  class="border-radius-lg" style="background-color:#b0c4ee;">
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">Jadwal</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center">Kegiatan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2 text-center" >Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwalkegiatan as $data)
                <tr>
                    <td class="text-center">{{$data->jadwal}}</td>
                    <td class="text-center">{{$data->kegiatan}}</td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-sm-center mt-2">
                            <input type="image" src="{{asset('assets/tombol/btnedit.png')}}"  data-bs-toggle="modal" data-bs-target="#editmodal{{$data->id}}"  name="button" width="50" height="37"  alt="submit"/>    
                             {{-- Modal Edit Siswa --}}
                                <div class="modal fade" id="editmodal{{$data->id}}" tabindex="-1" aria-labelledby="editmodallabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="editmodallabel">EDIT JADWAL KEGIATAN</h5>
                                            <button type="button"  data-bs-dismiss="modal" aria-label="Close"> <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">  </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/jadwalkegiatan/update" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$data->id}}">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Jadwal:</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Jadwal" name="jadwal" required style="background-color: #B6BDFF" id="recipient-name" value="{{$data->jadwal}}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Kegiatan Siswa:</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Kegiatan" name="kegiatan" required style="background-color: #B6BDFF" id="recipient-name" value="{{$data->kegiatan}}">
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
                            <form action="/jadwalkegiatan/hapus" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$data->id}}" id="id">
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

    </div>
    </div>
       {{-- Modal Tambah Siswa --}}
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TAMBAH JADWAL KEGIATAN</h5>
                    <button type="button"  data-bs-dismiss="modal" aria-label="Close"> <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">  </button>
                </div>
                <div class="modal-body">
                    <form action="/jadwalkegiatan" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Jadwal:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jadwal" name="jadwal" required style="background-color: #B6BDFF" id="recipient-name">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Kegiatan Siswa:</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kegiatan" name="kegiatan" required style="background-color: #B6BDFF" id="recipient-name">
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
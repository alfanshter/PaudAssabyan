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
                <h4 class="text-white text-capitalize ps-3">Nilai Siswa Paud Assibyan</h4>
                @if (session()->has('success'))
                <div class="alert alert-success mt-2" role="alert">
                    {{session('success')}}  
                </div>
                @endif
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
                        <div class="col-sm-4">
                            <h6> Kelas </h6>
                        </div>
                        <div class="col-sm" style="padding-bottom: 5px;">
                        <select class="form-select" placeholder="Tulis Tahun" type="text" class="" style="background-color:#b0c4ee;padding-left: 8px;">
                                <option value="Januari">A</option>
                                <option value="Februari">B</option>
                            </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                            <h6> Tanggal </h6>
                        </div>
                        <div class="col-sm" style="padding-bottom: 5px;">
                        <input placeholder="Tulis Tahun" type="date" class="form-control" style="background-color:#b0c4ee;padding-left: 8px;">
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder  ps-2">Aksi</th>
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
                    @foreach ($nilai as $item)
                    <tr>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->tanggal}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->biodata->biodata->nama}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->biodata->kelas}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->bermain}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->ikrar_bersama}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->senam_irama}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->bernyanyi}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->berdoa}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->pijakan_sebelum_bermain}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">{{$item->pijakan_setelah_bermain}}</td>
                      <td class="text-center" style="border-right:1pt solid black;">
                        <button type="button" data-bs-toggle="modal"data-bs-target="#editmodal{{$item->id}}" class="btn btn-xs bg-gradient-success">
                          <img src="../assets/img/illustrations/eye.png" alt="" width="20" height="20" />
                        </button>
                        
                             {{-- Modal Edit Nilai --}}
                             <div
                             class="modal fade"
                             id="editmodal{{$item->id}}"
                             tabindex="-1"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true"
                         >
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLabel">
                                          Nilai Siswa Paud Assibyan
                                         </h5>
                                         <button class="buttonclosemodal" type="button" data-bs-dismiss="modal" aria-label="Close">
                                          <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">
                                        </button>

                                     </div>
                                     <div class="modal-body">
                                         <form
                                             action="/nilaisiswa/update"
                                             method="post"
                                             enctype="multipart/form-data"
                                         >
                                             @csrf
                                             <input type="hidden" name="id" value="{{$item->id}}">
                                      
                                             <div class="mb-3">
                                                 <label
                                                     for="recipient-name"
                                                     class="col-form-label"
                                                     >Nama:</label
                                                 >
                                                 <select class="form-control" id="biodata_siswa_id" name="biodata_siswa_id" style="  background-color: #b6bdff;padding-left: 8px;">
                                                  <option value="{{$item->biodata_siswa_id}}" selected>{{$item->biodata->biodata->nama}}</option>
                                                  @foreach ($siswa as $data)
                                                  <option value="{{$data->id}}">{{$data->biodata->nama}}</option>                            
                                                  @endforeach
                                                </select>
                          
                                             </div>

                                              <div class="mb-3">
                                                 <label
                                                     for="recipient-name"
                                                     class="col-form-label"
                                                     >Bermain:</label
                                                 >
                                                 
                                                 <input
                                                     type="text"
                                                     class="form-control"
                                                     name="bermain"
                                                     value="{{$item->bermain}}"
                                                     required
                                                     style="
                                                         background-color: #b6bdff;
                                                         padding-left: 10px;
                                                     "
                                                     id="recipient-name"
                                                  />
                                              </div>
                                              
                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Ikrar Bersama:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="ikrar_bersama"
                                                    value="{{$item->ikrar_bersama}}"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                 />
                                             </div>
                                             
                                             <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Senam Irama:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="senam_irama"
                                                    value="{{$item->senam_irama}}"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                             </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Bernyanyi:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="bernyanyi"
                                                    value="{{$item->bernyanyi}}"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                              </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Berdoa:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="berdoa"
                                                    value="{{$item->berdoa}}"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                              </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Pijakan Sebelum Bermain:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="pijakan_sebelum_bermain"
                                                    value="{{$item->pijakan_sebelum_bermain}}"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                              </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Pijakan Setelah Bermain:</label
                                                >
                                                
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="pijakan_setelah_bermain"
                                                    value="{{$item->pijakan_setelah_bermain}}"
                                                    required
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                    id="recipient-name"
                                                />
                                              </div>

                                              <div class="mb-3">
                                                <label
                                                    for="recipient-name"
                                                    class="col-form-label"
                                                    >Komentar Nilai Siswa:</label
                                                >
                                                <textarea
                                                    class="form-control"
                                                    name="komentar"
                                                    required
                                                    id="exampleFormControlTextarea1"
                                                    rows="3"
                                                    style="
                                                        background-color: #b6bdff;
                                                        padding-left: 10px;
                                                    "
                                                >{{$item->komentar}}</textarea>
                                            </div>
                                            
                                              <div class="modal-footer">
                                                 <button
                                                     type="button"
                                                     class="btn btn-secondary"
                                                     data-bs-dismiss="modal"
                                                 >
                                                     Close
                                                 </button>
                                                 <button
                                                     type="submit"
                                                     class="btn btn-primary"
                                                 >
                                                     Simpan Edit
                                                 </button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                        <a href="/nilaisiswa/hapus/{{$item->id}}" type="submit" class="btn btn-xs bg-gradient-danger" onclick="return confirm('Apakah anda akan menghapus data ?')">
                          <img src="../assets/img/illustrations/delete-btn.png" alt="" width="20" height="20" />
                        </a>
                      </td>

                    </tr>
                        
                    @endforeach
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
      {{-- MODAL --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai</h5>
              <button class="buttonclosemodal" type="button" data-bs-dismiss="modal" aria-label="Close">
                <img src="{{asset('assets/img/menu/imgclose.svg')}}" alt="" srcset="">
              </button>
            </div>
            <div class="modal-body">
              <form action="/nilaisiswa" method="POST" >
                @csrf
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Nama:</label>
                    </div>
                    <div class="col-sm">
                      <select class="form-select" id="biodata_siswa_id" name="biodata_siswa_id" style="background-color: #FFFFFF;padding-left: 8px;">
                        <option selected>Pilih Siswa</option>
                        @foreach ($siswa as $item)
                        <option value="{{$item->id}}">{{$item->biodata->nama}}</option>                            
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Kelas:</label>
                    </div>
                    <div class="col-sm">
                      <select class="form-select" style="width: 100px;background-color: #FFFFFF;padding-left: 8px;">
                        <option selected>Pilih Kelas</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Bermain:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="mobileforminput" name="bermain" id="bermain" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Ikrar Bersama:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="mobileforminput"  name="ikrar_bersama" id="ikrar_bersama" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Senam Irama:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text"  class="mobileforminput" name="senam_irama" id="senam_irama" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Bernyanyi:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="mobileforminput" name="bernyanyi" id="bernyanyi" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Berdoa:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="mobileforminput" name="berdoa" id="berdoa" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Pijakan Sebelum Bermain:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="mobileforminput" name="pijakan_sebelum_bermain" id="pijakan_sebelum_bermain" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Pijakan Setelah Bermain:</label>
                    </div>
                    <div class="col-sm">
                      <input type="text" class="mobileforminput" name="pijakan_setelah_bermain" id="pijakan_setelah_bermain" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="recipient-name" class="col-form-label">Tanggal Nilai:</label>
                    </div>
                    <div class="col-sm">
                      <input type="date" class="mobileforminput" name="tanggal" id="tanggal" required style="width: 250px;background-color: #FFFFFF">
                    </div>
                  </div>
                 
                  <div class="mb-3">
                    <label
                        for="recipient-name"
                        class="col-form-label"
                        >Komentar Nilai Siswa:</label
                    >
                    <textarea
                        class="form-control"
                        name="komentar"
                        required
                        id="exampleFormControlTextarea1"
                        rows="3"
                        style="
                            background-color: #b6bdff;
                            padding-left: 10px;
                        "
                    ></textarea>
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
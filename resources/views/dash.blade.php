
@include('partial.strtemplate')

<body class="g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('partial.nav')
    <!-- End Navbar -->
    <div class="container-fluid py-4" style="padding-left: 0px;">
    @include('partial.mainmenu')

      <div class="row mt-0">
        <div class="col-lg-4 col-md-6 mt-4 mb-4 retangle4" style="margin-left: 50px;">
          <div class="">
            <div class="card-body retangle3">
              <ul>
                <a href="/jadwalkegiatan">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0 retangle3" >
                  <div class="">
                    <img src= 
                  <div class="">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;Jadwal Kegiatan Siswa</h4>
                  </div>
                </li>
                </a>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mt-3 mb-3 retangle4" style="opacity:0;">
          <div class="">
            <div class="card-body retangle3">
            <ul>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0 retangle3">
                  <div class="">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm"></h6>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3 retangle4" style="padding-right: 0px;padding-left: 0px;">
          <div class="">
            <div class="card-body retangle3" style="padding-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;">
            <ul style="padding-left: 0px;">
              <a href="/absensiswa">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0 retangle3" style="padding-bottom: 0px;margin-bottom: 0px;">
                  <div class="">
                    <img src="../assets/img/illustrations/absensi_siswa.png" alt="kal" width="120" height="120" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;Absensi Siswa</h4>
                  </div>
                </li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-0 ">
        <div class="col-lg-4 col-md-6 mt-4 mb-4 retangle4" style="margin-left: 50px;padding-right: 0px;padding-left: 0px;">
          <div class="">
            <div class="card-body retangle3" style="padding-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;">
              <ul style="padding-left: 0px;">
              <a href="/nilai">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0 retangle3" style="padding-bottom: 0px;margin-bottom: 0px;">
                  <div class="s">
                    <img src="../assets/img/illustrations/nilai_siswa.png"  width="120" height="120" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;Nilai Siswa</h4>
                  </div>
                </li>
                </a>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-5 mt-3 mb-3 retangle4" style="opacity: 0;">
          <div class="">
            <div class="card-body retangle3">
            <ul>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0 retangle3">
                  <div class="">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h4></h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3 retangle4" style="padding-right: 0px;padding-left: 0px;">
          <div class="">
            <div class="card-body retangle3" style="padding-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;">
            <ul style="padding-left: 0px;">
              <a href="/keuangansiswa">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0 retangle3" style="padding-bottom: 0px;margin-bottom: 0px;">
                  <div class="">
                    <img src="../assets/img/illustrations/keuangan_siswa.png" width="120" height="120"  alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;Keuangan Siswa</h4>
                  </div>
                </li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-0">
        <div class="col-lg-3 col-md-3 mt-3 mb-3 retangle4" style="margin-left: 250px;margin-right: 60px;padding-right: 0px;padding-left: 0px;">
          <div class="">
            <div class="card-body retangle3" style="padding-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;">
            <ul style="padding-left: 0px;">
              <a href="/biodata">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0 retangle3" style="padding-bottom: 0px;margin-bottom: 0px;">
                  <div class="">
                    <img src="../assets/img/illustrations/biodata_siswa.png" width="120" height="120" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h4>&nbsp;&nbsp;&nbsp;&nbsp;Biodata Siswa</h4>
                  </div>
                </li>
                </a>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-3 mb-3 retangle4" style="margin-left: 60px;margin-right: 60px;padding-right: 0px;padding-left: 0px;">
          <div class="">
            <div class="card-body retangle3" style="padding-bottom: 0px;padding-top: 0px;padding-left: 0px;padding-right: 0px;">
            <ul style="padding-left: 0px;">
            <a href="/guru">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0 retangle3" style="padding-bottom: 0px;margin-bottom: 0px;">
                  <div class="">
                    <img src="../assets/img/illustrations/nama_guru.png" width="120" height="120" alt="kal" class="border-radius-lg shadow">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h4>Nama Guru Paud Assibyan</h4>
                  </div>
                </li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      @include('partial.footer')
    </div>
  </main>

  @include('partial.endtemplate')
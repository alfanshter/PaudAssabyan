<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="">
        <div class="">
        <div class="dropdown">
          <div class="mainmenubtn"> <h4><i class="fa fa-bars"></i>  Menu Utama</h4>
            <div class="dropdown-child">
              @if (auth()->user()->role == 0)
              <a href="#"><img src="../assets/img/menu/imgfasilitas.svg" alt="fasilitas" width="40" height="40">Fasilitas Paud Assibyan</a>
              <a href="/visimisi"><img src="../assets/img/menu/imgvisimisi.svg" alt="Visi-Misi" width="40" height="40">Visi Misi Paud Assibyan</a>
              <a href="#"><img src="../assets/img/menu/imgkegiatan.svg" alt="Kegiatan" width="40" height="40">Kegiatan Luar Paud</a>
              <a href="/tambahsiswa"><img src="../assets/img/illustrations/imgprofil.svg" alt="Kegiatan" width="40" height="40"> Buat Akun Siswa</a>
              <a href="/siswa"><img src="../assets/img/illustrations/imganggotasiswa.svg"  width="40" height="40"> Anggota Siswa</a>
              @endif
              @if (auth()->user()->role == 1)
              <a href="#"><img src="../assets/img/illustrations/sidebar1.png" alt="fasilitas" width="40" height="40">Fasilitas Paud Assibyan</a>
              <a href="/visimisi"><img src="../assets/img/illustrations/sidebar2.png" alt="Visi-Misi" width="40" height="40">Visi Misi Paud Assibyan</a>
              <a href="#"><img src="../assets/img/illustrations/sidebar3.png" alt="Kegiatan" width="40" height="40">Kegiatan Luar Paud</a>
                  
              @endif

            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-7 justify-content-center" style="float: center;">
      <div class="">
        <div class="">
          <div class="">
              <div class="container">
              <div class="row">
                <div class="col-lg">
                  
                </div>
                <div class="col-lg-7">
                <h4><img src="../assets/img/illustrations/logo-paud-assibyan.png" alt="fasilitas" width="100" height="100">:: Jeva Afriliano ::  </h4>
                </div>
                <div class="col-lg">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
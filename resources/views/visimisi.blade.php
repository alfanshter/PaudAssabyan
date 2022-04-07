
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
                        <h4 class="text-white text-capitalize ps-3">VISI DAN MISI PAUD ASSIBYAN</h4>
                    </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                    <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                        <table class="table align-items-center mb-0 border-radius-lg" style="background-color:#b0c4ee;">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><img src="../assets/img/illustrations/logo-paud-assibyan.png" alt="fasilitas" width="80" height="80"></th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center"><h4>VISI</h4></th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="float: right;"><img src="../assets/img/illustrations/visi.png" alt="fasilitas" width="80" height="80"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td colspan="4" class="text-left">
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5>Adalah wawasan yang menjadi sumber arahan bagi sekolah dan digunakan untuk perumusan tujuan sekolah. Adapun visi<br> 
                                    dari kami adalah sebagai berikut 'KAN GENERASI YANG BERIMAN DAN BERTAQWA BERBUDI PEKERTT LUHUR DALAM<br> KWALITAS, UNGGUL 
                                    DALAM PRESTASI DAN SANTUN DALAM BERBUDAYA'</h5>
                                </div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <br>
                    <br>
                    <div class="row table-responsive p-0" style="margin-left: 20px;margin-right: 20px;">
                        <table class="table align-items-center mb-0 border-radius-lg" style="background-color:#b0c4ee;">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><img src="../assets/img/illustrations/logo-paud-assibyan.png" alt="fasilitas" width="80" height="80"></th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center"><h4>MISI</h4></th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 " style="float: right;"><img src="../assets/img/illustrations/misi.png" alt="fasilitas" width="80" height="80"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td colspan="4" class="text-left">
                                <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <h5>Misi adalah findakan untuk merealisasikan ViSt, tindakan untuk memenuhi kebutuhan stakeholder (semua kelompok kepentingan <br>yang 
                                        terkait dengan sekolah. Dengan misi yang tertuang di bawah ini
                                        diharapkan dapat mewujudkan tujuan pendidikan di taman <br>kanak-kanak 
                                        PAUD Jateng yang diantaranya adalah :
                                        nyenangkan).</h5>
                                </div>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <br>
                    </div>
                </div>
                </div>
              </div>
          
      @include('partial.footer')
    </div>
  </main>

  @include('partial.endtemplate')
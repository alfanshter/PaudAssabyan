<nav style="background-color:#f133ff;" class="navbar navbar-main navbar-expand-lg px-0 shadow-none" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <a href="/dash">
            <h5 class="font-weight-bolder mb-0" style="color:white;">SISWA PAUD ASSIBYAN</h5>
          </a>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar"  style="color:white;">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a>
                <i class="fa fa-question-circle me-sm-1"></i>
                <span class="d-sm-inline d-none">Bantuan</span>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
                <i class="fa fa-key me-sm-1"></i>
                <span class="d-sm-inline d-none">Ganti Password</span>
          
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color:red;">
                <i class="fa fa-user cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">Jeva</span> Afriliano
                        </h6>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  

                      <div class="container">
                              <div class="row">
                                <div class="col-sm">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                  Profil
                                </a>
                                </div>
                                <div class="col-sm">
                                  <form action="/logout" method="POST">
                                    @csrf
                                    <button  class="dropdown-item border-radius-md" >Log out</button>
                                  </form>
                                </div>
                              </div>
                            </div>

                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
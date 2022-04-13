@include('partial.strtemplate')

<body class="g-sidenav-show bg-gray-200">
    <main
        class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
    >
        <!-- Navbar -->
        @include('partial.nav')
        <!-- End Navbar -->
        <div class="container-fluid py-4" style="padding-left: 0px">
            @include('partial.mainmenu')
            <div
                class="position-relative h-100 m-3 px-7 d-flex flex-column justify-content-center"
            >
                <div class="col-12">
                    <div class="card my-4">
                        <div
                            class="card-header p-0 position-relative mt-n4 mx-3 z-index-2"
                        >
                            <div
                                class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3"
                            >
                                <h4 class="text-white text-capitalize ps-3">
                                    Jadwal Kegiatan Luar PAUD
                                </h4>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <p>
                                        <button
                                            type="button"
                                            class="btn btn-lg mt-2 btn-lg mb-0"
                                            style="background-color: #b6bdff"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"
                                        >
                                            Tambah
                                        </button>
                                    </p>
                                    @if (session()->has('success'))
                                    <div
                                        class="alert alert-success mt-2"
                                        role="alert"
                                    >
                                        {{session('success')}}
                                    </div>
                                    @endif @if (session()->has('error'))
                                    <div
                                        class="alert alert-danger mt-2"
                                        role="alert"
                                    >
                                        {{session('error')}}
                                    </div>
                                    @endif @error('foto')
                                    <div
                                        class="alert alert-danger mt-2"
                                        role="alert"
                                    >
                                        {{$message}}
                                    </div>
                                    @enderror @error('nama_kegiatan')
                                    <div
                                        class="alert alert-danger mt-2"
                                        role="alert"
                                    >
                                        {{$message}}
                                    </div>
                                    @enderror @error('cerita_kegiatan')
                                    <div
                                        class="alert alert-danger mt-2"
                                        role="alert"
                                    >
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div
                                class="row table-responsive p-0"
                                style="margin-left: 20px; margin-right: 20px"
                            >
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr
                                            class="border-radius-lg"
                                            style="background-color: #b0c4ee"
                                        >
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                            >
                                                No
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                            >
                                                Foto
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder text-center"
                                            >
                                                Nama 
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 text-center"
                                            >
                                                Lembaga
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 text-center"
                                            >
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($guru as $data)
                                        <tr>
                                            <td class="text-center">
                                                {{$loop->iteration}}
                                            </td>
                                            <td
                                                class="text-center align-middle"
                                            >
                                                <img
                                                    src="{{asset('storage/'.$data->foto)}}"
                                                    width="200"
                                                    height="150"
                                                />
                                            </td>
                                            <td class="text-center">
                                                {{$data->nama_guru}}
                                            </td>
                                            <td class="text-center">
                                                {{$data->nama_lembaga}}
                                            </td>
                                            <td
                                                class="align-middle text-center"
                                            >
                                                <div
                                                    class="d-flex justify-content-sm-center mt-2"
                                                >
                                                    <input
                                                        type="image"
                                                        src="{{asset('assets/tombol/btnedit.png')}}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editmodal{{$data->id}}"
                                                        name="button"
                                                        width="50"
                                                        height="37"
                                                        alt="submit"
                                                    />

                                                          {{-- Modal Tambah Siswa --}}
                                                    <div
                                                    class="modal fade"
                                                    id="editmodal{{$data->id}}"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                    >
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        DETAIL GURU
                                                                    </h5>
                                                                    <button
                                                                        type="button"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"
                                                                    >
                                                                        <img
                                                                            src="{{asset('assets/img/menu/imgclose.svg')}}"
                                                                            alt=""
                                                                            srcset=""
                                                                        />
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="/guru/update"
                                                                        method="post"
                                                                        enctype="multipart/form-data"
                                                                    >
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{$data->id}}">
                                                                        <input type="hidden" name="oldImage" value="{{$data->foto}}">
                                                                        <center>
                                                                            <div>
                                                                                @if ($data->foto)
                                                                                <img class="img-preview_edit img-fluid" src="{{asset('storage/'.$data->foto)}}" style="width: 200px; height:150px">
                                                                                @else
                                                                                <img class="img-preview_edit img-fluid">            
                                                                                @endif
                                                                                <label
                                                                                    for="foto_edit"
                                                                                    class="d-block btn-primary mt-2 w-100"
                                                                                    >Pilih Foto</label
                                                                                >
                                                                                <input
                                                                                    name="foto"
                                                                                    id="foto_edit"
                                                                                    type="file"
                                                                                    style="visibility: hidden"
                                                                                    onchange="hokya()"
                                                                                />
                                                                                <script>
                                                                                    function hokya() {
                                                                                        const image =
                                                                                            document.querySelector(
                                                                                                "#foto_edit"
                                                                                            );
                                                                                        const imgPreview =
                                                                                            document.querySelector(
                                                                                                ".img-preview_edit"
                                                                                            );

                                                                                        imgPreview.style.display =
                                                                                            "block";

                                                                                        const oFReader =
                                                                                            new FileReader();
                                                                                        oFReader.readAsDataURL(
                                                                                            foto_edit.files[0]
                                                                                        );

                                                                                        oFReader.onload = function (
                                                                                            oFREvent
                                                                                        ) {
                                                                                            imgPreview.src =
                                                                                                oFREvent.target.result;
                                                                                        };
                                                                                    }
                                                                                </script>
                                                                            </div>
                                                                        </center>
                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Nama Guru:</label>
                                                                            <input
                                                                                type="text" class="form-control"
                                                                                placeholder="Masukkan Nama Guru"
                                                                                name="nama_guru"
                                                                                value="{{$data->nama_guru}}"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label
                                                                                for="recipient-name"
                                                                                class="col-form-label"
                                                                                >Nama Lembaga:</label
                                                                            >
                                                                            <textarea
                                                                                class="form-control"
                                                                                name="nama_lembaga"
                                                                                required
                                                                                id="exampleFormControlTextarea1"
                                                                                rows="3"
                                                                                style="
                                                                                    background-color: #b6bdff;
                                                                                    padding-left: 10px;
                                                                                "
                                                                            >{{$data->nama_lembaga}}</textarea>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                                                                            <input
                                                                                type="text" class="form-control"
                                                                                placeholder="Masukkan Tempat Lahir"
                                                                                name="tempat_lahir"
                                                                                required
                                                                                value="{{$data->tempat_lahir}}"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
                                                                            <input
                                                                                type="date" class="form-control"
                                                                                placeholder="Masukkan Tanggal Lahir"
                                                                                name="tanggal_lahir"
                                                                                required
                                                                                value="{{$data->tanggal_lahir}}"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">NIK:</label>
                                                                            <input
                                                                                type="text" class="form-control"
                                                                                placeholder="Masukkan NIK"
                                                                                name="nik"
                                                                                required
                                                                                value="{{$data->nik}}"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">TMT:</label>
                                                                            <input
                                                                                type="text" class="form-control"
                                                                                placeholder="Masukkan TMT"
                                                                                name="tmt"
                                                                                required
                                                                                value="{{$data->tmt}}"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Tahun Kerja:</label>
                                                                            <input
                                                                                type="number" class="form-control"
                                                                                placeholder="Masukkan Tahun Kerja"
                                                                                name="tahun_kerja"
                                                                                value="{{$data->tahun_kerja}}"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Bulan Kerja:</label>
                                                                            <input
                                                                                type="text" class="form-control"
                                                                                placeholder="Masukkan Buan Kerja"
                                                                                name="bulan_kerja"
                                                                                value="{{$data->bulan_kerja}}"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Status Guru:</label>
                                                                            <input
                                                                                type="text" class="form-control"
                                                                                placeholder="Masukkan Status Guru"
                                                                                name="status_guru"
                                                                                value="{{$data->status_guru}}"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Alamat Lembaga:</label>
                                                                            <input
                                                                                type="text" class="form-control"
                                                                                placeholder="Masukkan Alamat Lembaga"
                                                                                name="alamat_lembaga"
                                                                                required
                                                                                value="{{$data->alamat_lembaga}}"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Alamat Rumah:</label>
                                                                            <input
                                                                                type="text" class="form-control"
                                                                                placeholder="Alamat Rumah"
                                                                                name="alamat_rumah"
                                                                                value="{{$data->alamat_rumah}}"
                                                                                required
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Pendidikan Guru:</label>
                                                                            <input
                                                                                type="text" class="form-control"
                                                                                placeholder="Pendidikan Guru"
                                                                                name="pendidikan_guru"
                                                                                required
                                                                                value="{{$data->pendidikan_guru}}"
                                                                                style="background-color: #b6bdff;padding-left: 10px;                                        "
                                                                                id="recipient-name"/>
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
                                                                                Submit
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <form
                                                        action="/guru/delete"
                                                        method="post"
                                                    >
                                                        @csrf
                                                        <input
                                                            type="hidden"
                                                            name="id"
                                                            value="{{$data->id}}"
                                                            id="id"
                                                        />
                                                        <input
                                                            type="hidden"
                                                            name="foto"
                                                            value="{{$data->foto}}"
                                                            id="id"
                                                        />
                                                        <input
                                                            type="image"
                                                            src="{{asset('assets/tombol/btnhapus.png')}}"
                                                            onclick="return confirm('Apakah anda akan menghapus data ?')"
                                                            name="submit"
                                                            width="50"
                                                            height="37"
                                                            alt="submit"
                                                        />
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <hr />
                            <br />

                            <br />
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Tambah Siswa --}}
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                TAMBAH GURU
                            </h5>
                            <button
                                type="button"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            >
                                <img
                                    src="{{asset('assets/img/menu/imgclose.svg')}}"
                                    alt=""
                                    srcset=""
                                />
                            </button>
                        </div>
                        <div class="modal-body">
                            <form
                                action="/guru"
                                method="post"
                                enctype="multipart/form-data"
                            >
                                @csrf

                                <center>
                                    <div>
                                        <img
                                            class="img-preview img-fluid"
                                            src="{{asset('assets/img/siswa/imgfoto.svg')}}"
                                            width="200px"
                                            width="200px"
                                        />
                                        <label
                                            for="foto"
                                            class="d-block btn-primary mt-2 w-100"
                                            >Pilih Foto</label
                                        >
                                        <input
                                            name="foto"
                                            id="foto"
                                            type="file"
                                            style="visibility: hidden"
                                            required
                                            onchange="previewImage()"
                                        />
                                        <script>
                                            function previewImage() {
                                                const image =
                                                    document.querySelector(
                                                        "#foto"
                                                    );
                                                const imgPreview =
                                                    document.querySelector(
                                                        ".img-preview"
                                                    );

                                                imgPreview.style.display =
                                                    "block";

                                                const oFReader =
                                                    new FileReader();
                                                oFReader.readAsDataURL(
                                                    foto.files[0]
                                                );

                                                oFReader.onload = function (
                                                    oFREvent
                                                ) {
                                                    imgPreview.src =
                                                        oFREvent.target.result;
                                                };
                                            }
                                        </script>
                                    </div>
                                </center>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Guru:</label>
                                    <input
                                        type="text" class="form-control"
                                        placeholder="Masukkan Nama Guru"
                                        name="nama_guru"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="recipient-name"
                                        class="col-form-label"
                                        >Nama Lembaga:</label
                                    >
                                    <textarea
                                        class="form-control"
                                        name="nama_lembaga"
                                        required
                                        id="exampleFormControlTextarea1"
                                        rows="3"
                                        style="
                                            background-color: #b6bdff;
                                            padding-left: 10px;
                                        "
                                    ></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tempat Lahir:</label>
                                    <input
                                        type="text" class="form-control"
                                        placeholder="Masukkan Tempat Lahir"
                                        name="tempat_lahir"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
                                    <input
                                        type="date" class="form-control"
                                        placeholder="Masukkan Tanggal Lahir"
                                        name="tanggal_lahir"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">NIK:</label>
                                    <input
                                        type="text" class="form-control"
                                        placeholder="Masukkan NIK"
                                        name="nik"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">TMT:</label>
                                    <input
                                        type="text" class="form-control"
                                        placeholder="Masukkan TMT"
                                        name="tmt"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tahun Kerja:</label>
                                    <input
                                        type="number" class="form-control"
                                        placeholder="Masukkan Tahun Kerja"
                                        name="tahun_kerja"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Bulan Kerja:</label>
                                    <input
                                        type="text" class="form-control"
                                        placeholder="Masukkan Buan Kerja"
                                        name="bulan_kerja"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Status Guru:</label>
                                    <input
                                        type="text" class="form-control"
                                        placeholder="Masukkan Status Guru"
                                        name="status_guru"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat Lembaga:</label>
                                    <input
                                        type="text" class="form-control"
                                        placeholder="Masukkan Alamat Lembaga"
                                        name="alamat_lembaga"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Alamat Rumah:</label>
                                    <input
                                        type="text" class="form-control"
                                        placeholder="Alamat Rumah"
                                        name="alamat_rumah"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
                                </div>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Pendidikan Guru:</label>
                                    <input
                                        type="text" class="form-control"
                                        placeholder="Pendidikan Guru"
                                        name="pendidikan_guru"
                                        required
                                        style="background-color: #b6bdff;padding-left: 10px;                                        "
                                        id="recipient-name"/>
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
                                        Submit
                                    </button>
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
</body>

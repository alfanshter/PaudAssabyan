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
                                    @endif @error('foto_kegiatan')
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
                                                Nama Kegiatan
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 text-center"
                                            >
                                                Cerita Kegiatan
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder ps-2 text-center"
                                            >
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kegiatan as $data)
                                        <tr>
                                            <td class="text-center">
                                                {{$loop->iteration}}
                                            </td>
                                            <td
                                                class="text-center align-middle"
                                            >
                                                <img
                                                    src="{{asset('storage/'.$data->foto_kegiatan)}}"
                                                    width="200"
                                                    height="150"
                                                />
                                            </td>
                                            <td class="text-center">
                                                {{$data->nama_kegiatan}}
                                            </td>
                                            <td class="text-center">
                                                {{$data->cerita_kegiatan}}
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

                                                    {{-- Modal Edit Siswa --}}
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
                                                                        TAMBAH KEGIATAN LUAR PAUD
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
                                                                        action="/kegiatanluarpaud/update"
                                                                        method="post"
                                                                        enctype="multipart/form-data"
                                                                    >
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{$data->id}}">
                                                                        <input type="hidden" name="oldImage" value="{{$data->foto_kegiatan}}">
                                                                        <center>
                                                                            <div>
                                                                                @if ($data->foto_kegiatan)
                                                                                <img class="img-preview_edit img-fluid" src="{{asset('storage/'.$data->foto_kegiatan)}}" style="width: 200px; height:150px">
                                                                                @else
                                                                                <img class="img-preview_edit img-fluid">            
                                                                                @endif
                                                                                <label
                                                                                    for="foto_kegiatan_edit"
                                                                                    class="d-block btn-primary mt-2 w-100"
                                                                                    >Pilih Foto</label
                                                                                >
                                                                                <input
                                                                                    name="foto_kegiatan"
                                                                                    id="foto_kegiatan_edit"
                                                                                    type="file"
                                                                                    style="visibility: hidden"
                                                                                    onchange="previewImageEdit()"
                                                                                />
                                                                                <script>
                                                                                    function previewImageEdit() {
                                                                                        const image =
                                                                                            document.querySelector(
                                                                                                "#foto_kegiatan_edit"
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
                                                                                            foto_kegiatan_edit.files[0]
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
                                                                            <label
                                                                                for="recipient-name"
                                                                                class="col-form-label"
                                                                                >Nama Kegiatan:</label
                                                                            >
                                                                            <input
                                                                                type="text"
                                                                                class="form-control"
                                                                                placeholder="Masukkan Nama Kegiatan"
                                                                                name="nama_kegiatan"
                                                                                value="{{$data->nama_kegiatan}}"
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
                                                                                >Cerita Kegiatan:</label
                                                                            >
                                                                            <textarea
                                                                                class="form-control"
                                                                                name="cerita_kegiatan"
                                                                                required
                                                                                id="exampleFormControlTextarea1"
                                                                                rows="3"
                                                                                style="
                                                                                    background-color: #b6bdff;
                                                                                    padding-left: 10px;
                                                                                "
                                                                            >{{$data->cerita_kegiatan}}</textarea>
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
                                                        action="/kegiatanluarpaud/delete"
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
                                                            name="foto_kegiatan"
                                                            value="{{$data->foto_kegiatan}}"
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
                                TAMBAH KEGIATAN LUAR PAUD
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
                                action="/kegiatanluarpaud"
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
                                            for="foto_kegiatan"
                                            class="d-block btn-primary mt-2 w-100"
                                            >Pilih Foto</label
                                        >
                                        <input
                                            name="foto_kegiatan"
                                            id="foto_kegiatan"
                                            type="file"
                                            style="visibility: hidden"
                                            required
                                            onchange="previewImage()"
                                        />
                                        <script>
                                            function previewImage() {
                                                const image =
                                                    document.querySelector(
                                                        "#foto_kegiatan"
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
                                                    foto_kegiatan.files[0]
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
                                    <label
                                        for="recipient-name"
                                        class="col-form-label"
                                        >Nama Kegiatan:</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Masukkan Nama Kegiatan"
                                        name="nama_kegiatan"
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
                                        >Cerita Kegiatan:</label
                                    >
                                    <textarea
                                        class="form-control"
                                        name="cerita_kegiatan"
                                        required
                                        id="exampleFormControlTextarea1"
                                        rows="3"
                                        style="
                                            background-color: #b6bdff;
                                            padding-left: 10px;
                                        "
                                    ></textarea>
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

@extends('apps._layouts.index') @section('content')
<div class="container">
    <div class="my-10">

        <h1>Form Registrasi E-Mitra</h1>
    </div>
    <!--begin::Login-->
    <form class="form mb-2" method="POST" action="{{ route('daftar') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="card mt-2">
                    <div class="card-header">
                        <h5>Account Detail</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name
                                <span class="text-danger">*</span></label>
                            <input required type="text" class="form-control " id="name" placeholder="Name" name="name" value="{{ old('name') }}" />

                        </div>
                        <div class="form-group">
                            <label for="email">Email
                                <span class="text-danger">*</span></label>
                            <input required type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}" />

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="username">Username
                                <span class="text-danger">*</span></label>
                            <input required type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username') }}" />
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group">
                                <input required type="password" id="password" class="form-control" placeholder="Password" name="password" />

                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" onclick="showpass()">
                                        <i class="flaticon-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Avatar
                                <span class="text-danger">*</span></label>
                            <div>

                                <input required type="file" name="ava" value="{{ old('ava') }}" accept="image/*" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">KTP
                                <span class="text-danger">*</span></label>
                            <div>
                                <input required type="file" name="ktp" accept="image/*" />

                            </div>
                        </div>
                        <div>
                        <hr/>
                        <h4>Keterangan :</h4>
                        <p class="text-danger">kolom dengan tanda * wajib diisi</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mt-2">
                    <div class="card-header">
                        <h5>Personal Detail</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="jenis">Jenis Kelamin
                                <span class="text-danger">*</span></label>
                            <div class="radio-inline">
                                <label class="radio ">
                                    <input type="radio" name="jkl" value="laki-laki" required value="{{old('jkl')}}" />
                                    <span></span>
                                    laki-laki
                                </label>
                                <label class="radio">
                                    <input type="radio" name="jkl" value="laki-laki" required value="{{old('jkl')}}" />

                                    <span></span>
                                    perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Lahir
                                <span class="text-danger">*</span></label>

                            <input type="date" required class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Password" value="{{ old('tgl_lahir') }}" />

                        </div>
                        <div class="form-group">
                            <label for="alamat1">Alamat 1

                            </label>
                            <input type="text" class="form-control" id="alamat1" name="alamat1" placeholder="Alamat 1" value="{{ old('alamat1') }}" />

                        </div>
                        <div class="form-group">
                            <label for="alamat2">Alamat 2
                            </label>
                            <input type="text" class="form-control" id="alamat2" name="alamat2" placeholder="Alamat 2" value="{{ old('alamat2') }}" />

                        </div>
                        <div class="form-group">
                            <label for="negara">Negara
                            </label>
                            <input type="text" class="form-control" id="negara" name="negara" placeholder="Negara" value="{{ old('negara') }}" />

                        </div>
                        <div class="form-group">
                            <label for="provinsi">Provinsi
                            </label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" value="{{ old('provinsi') }}" />

                        </div>
                        <div class="form-group">
                            <label for="kota">Kota
                            </label>
                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value="{{ old('kota') }}" />

                        </div>
                        <div class="form-group">
                            <label for="kode">Kode Pos
                            </label>
                            <input type="text" class="form-control" id="kode" name="kodepos" placeholder="Kode pos" value="{{ old('kodepos') }}" />

                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon
                            </label>
                            <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value="{{ old('telepon') }}" />

                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi
                            </label>
                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary font-weight-bold px-9 py-4 my-10 mx-4 submit" type="submit">Registrasi</button>
        </div>
    </form>
</div>

@endsection @push('jsScript')
<script type="text/javascript">
    var avatar1 = new KTImageInput("kt_image_1");
    var avatar2 = new KTImageInput("kt_image_2");

    function showpass() {
        if ('password' == $('#password').attr('type')) {
            $('#password').prop('type', 'text');
        } else {
            $('#password').prop('type', 'password');
        }

    }

</script>
@endpush

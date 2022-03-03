@extends('apps._layouts.index') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" rounded mt-5" style="width:70%; background-color: #ADA9A9">


            <p class=" p-2
                font-weight-bolder
                text-center
              " style="color: #000">
                Data anda telah tersimpan<br />Silahkan verifikasi akun anda dengan silahkan ikuti link yang dikirimkan ke alamat email anda!
                <br><span><a href="{{ url('/') }}" id="kt_login_signup" class="text-primary font-weight-bolder">Ke Halaman Login</a></span>

            </p>

        </div>
    </div>
</div>

@endsection @push('jsScript')
<script type="text/javascript">
    var avatar1 = new KTImageInput("kt_image_1");
    var avatar2 = new KTImageInput("kt_image_2");

</script>
@endpush

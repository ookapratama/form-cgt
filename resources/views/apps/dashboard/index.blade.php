<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    <meta charset="utf-8" />
    <title>Login Mitra E-BMW Aduhai</title>
    <link rel="shortcut icon" href="{{ asset('icon/icon.ico') }}" />

    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    @include('apps._layouts.css.css')

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="
      header-fixed header-mobile-fixed
      subheader-enabled subheader-fixed
      aside-enabled aside-fixed aside-minimize-hoverable
      page-loading
    ">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="
          login login-1 login-signin-on
          d-flex
          flex-column flex-lg-row flex-column-fluid
          bg-white
        " id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #db0808">


                <!--begin::Aside Top-->
                {{-- <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15 mx-5">
                    <!--begin::Aside header-->
                    <a href="#" class="text-center mb-10">
                        <img src="{{asset('logo2.png')}}" class="max-h-100px mx-2" alt="" />
                        <img src="{{asset('logo1.png')}}" class="max-h-100px mx-2" alt="" />
                    </a>
                    <!--end::Aside header-->
                    <!--begin::Aside title-->
                    
                    <!--end::Aside title-->
                </div> --}}
                <!--end::Aside Top-->
                <!--begin::Aside Bottom-->
                <div class="
              aside-img
              d-flex
              flex-row-fluid
              bgi-no-repeat bgi-position-y-bottom bgi-position-x-center
            " style="
              background-image: url({{asset('')}}login1.png)

            "></div>
                <!--end::Aside Bottom-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="
            login-content
            flex-row-fluid
            d-flex
            flex-column
            justify-content-center
            position-relative
            overflow-hidden
            p-7
            mx-auto
          ">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <!--begin::Form-->
                        <form class="form" method="post" id="kt_login_signin_form" action="{{route('login')}}">
                            @csrf


                            <!--begin::Title-->
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="
                      font-weight-bolder
                      text-dark
                      font-size-h4 font-size-h1-lg
                      text-center
                    ">
                                    PENDAFTARAN SISWA BARU
                                </h3>


                            </div>
                             @if ($errors->any())
                             <span class="text-danger">
                                 <strong>Username atau password anda salah</strong>
                             </span>
                             @endif
        

                            <!--begin::Title-->
                            <!--begin::Form group-->
                            {{-- <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                <input class="
                      form-control form-control-solid
                      h-auto
                      py-6
                      px-6
                      rounded-lg
                    " type="text" name="email" autocomplete="off" required  />
                                
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>

                                </div>
                                <input class="
                      form-control form-control-solid
                      h-auto
                      py-6
                      px-6
                      rounded-lg
                    " type="password" name="password" autocomplete="off" required />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>

                                @enderror
                            </div> --}}
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5 mb-5">
                                <button type="submit" class="
                      btn  btn-lg btn-block
                      font-weight-bolder font-size-h6
                    " style="background-color: #db0808">

                                    Registrasi
                                </button>
                                <button type="submit" class="
                      btn  btn-lg btn-block
                      font-weight-bolder font-size-h6
                    " style="background-color: #db0808">

                                    Cetak Kartu Pendaftaran
                                </button>
                                <button type="submit" class="
                      btn  btn-lg btn-block
                      font-weight-bolder font-size-h6
                    " style="background-color: #db0808">

                                    Cetak Kartu Tes
                                </button>

                            </div>
                            {{-- <span class="text-muted font-weight-bold font-size-h4 mt-3">Belum punya akun?
                                <a href="{{ url('/register') }}" id="kt_login_signup" class="text-primary font-weight-bolder">Registrasi di sini</a></span> --}}

                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Content body-->

            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->


    <!--begin::Global Theme Bundle(used by all pages)-->
    @include('apps._layouts.js.js')
</body>
<!--end::Body-->

</html>

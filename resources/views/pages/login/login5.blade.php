{{-- Extends layout --}}
@extends('layout.login')

{{-- Content --}}
@section('content')


<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed subheader-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
<!--begin::Login-->
<div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" 
style="background-image: url('{{asset('media/bg/bg-1.jpg')}}');">
<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
    <!--begin::Login Header-->
    <div class="d-flex flex-center mb-15">
        <a href="#">
            <img src="{{ asset('media/logos/logo-letter-9.png')}}" class="max-h-100px" alt=""/>
        </a>
    </div>
    <!--end::Login Header-->

    <!--begin::Login Sign in form-->
    <div class="login-signin">
        <div class="mb-20">
            <h3>Sign In To Admin</h3>
            <p class="opacity-60 font-weight-bold">Enter your details to login to your account:</p>
        </div>
        <form class="form" id="kt_login_signin_form">
            <div class="form-group">
                <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="text" placeholder="Email" name="username" autocomplete="off"/>
            </div>
            <div class="form-group">
                <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" type="password" placeholder="Password" name="password"/>
            </div>
            <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
                <div class="checkbox-inline">
                    <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                        <input type="checkbox" name="remember"/>
                        <span></span>
                        Remember me
                    </label>
                </div>
                <a href="forgot5" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a>
            </div>
            <div class="form-group text-center mt-10">
                <button id="kt_login_signin_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign In</button>
            </div>
        </form>
        <div class="mt-10">
            <span class="opacity-70 mr-4">
                Don't have an account yet?
            </span>
            <a href="register5" id="kt_login_signup" class="text-white font-weight-bold">Sign Up</a>
        </div>
    </div>
    <!--end::Login Sign in form-->
    </div>
	</div>
</div>
<!--end::Login-->
	</div>
<!--end::Main-->


        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#3699FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#E4E6EF",
                "dark": "#181C32"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1F0FF",
                "secondary": "#EBEDF3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#3F4254",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#EBEDF3",
            "gray-300": "#E4E6EF",
            "gray-400": "#D1D3E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#7E8299",
            "gray-700": "#5E6278",
            "gray-800": "#3F4254",
            "gray-900": "#181C32"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <script src="{{ asset('js/scripts.bundle.js') }}" type="text/javascript"></script>
                    {{-- Scripts Section --}}
                    @section('scripts')
                    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
                    @endsection
{{-- Extends layout --}}
@extends('layout.login')

{{-- Content --}}
@section('content')

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed subheader-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
<!--begin::Login-->
<div class="login login-2 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
<!--begin::Aside-->
<div class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
<!--begin: Aside Container-->
<div class="d-flex flex-row-fluid flex-column justify-content-between">
	<!--begin::Aside body-->
	<div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
		<a href="#" class="mb-15 text-center">
			<img src="{{ asset('media/logos/logo-letter-1.png')}}" class="max-h-75px" alt=""/>
		</a>
		<!--begin::Signup-->
		<div class="login-form login-signup">
                    <div class="text-center mb-10 mb-lg-20">
                        <h3 class="">Sign Up</h3>
                        <p class="text-muted font-weight-bold">Enter your details to create your account</p>
                    </div>

                    <!--begin::Form-->
                    <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                        <div class="form-group py-3 m-0">
                            <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text" placeholder="Fullname" name="fullname" autocomplete="off" />
                        </div>
                        <div class="form-group py-3 border-top m-0">
                            <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Email" name="email" autocomplete="off" />
                        </div>
                        <div class="form-group py-3 border-top m-0">
                            <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Password" name="password" autocomplete="off" />
                        </div>
                        <div class="form-group py-3 border-top m-0">
                            <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password" placeholder="Confirm password" name="cpassword" autocomplete="off" />
                        </div>
                        <div class="form-group mt-5">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-outline">
                                    <input type="checkbox" name="agree" />
                                    <span></span>
                                    I Agree the <a href="#" class="ml-1">terms and conditions</a>.
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center">
                            <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit</button>
                            <button type="button" id="kt_login_signup_cancel" onclick="window.location.href='login3'" class="btn btn-outline-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
				<!--end::Signup-->
				</div>
            <!--end::Aside body-->

            <!--begin: Aside footer for desktop-->
            <div class="d-flex flex-column-auto justify-content-between mt-15">
                <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">
                    &copy; 2020 Metronic
                </div>
                <div class="d-flex order-1 order-sm-2 my-2">
                    <a href="#" class="text-muted text-hover-primary">Privacy</a>
                    <a href="#" class="text-muted text-hover-primary ml-4">Legal</a>
                    <a href="#" class="text-muted text-hover-primary ml-4">Contact</a>
                </div>
            </div>
            <!--end: Aside footer for desktop-->
        </div>
        <!--end: Aside Container-->
    </div>
    <!--begin::Aside-->

    <!--begin::Content-->
	<div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" 
	style="background-image: url('{{asset('media/bg/bg-4.jpg')}}');">
        <!--begin::Content body-->
        <div class="d-flex flex-column-fluid flex-lg-center">
            <div class="d-flex flex-column justify-content-center">
                <h3 class="display-3 font-weight-bold my-7 text-white">Welcome to Metronic!</h3>
                <p class="font-weight-bold font-size-lg text-white opacity-80">
                    The ultimate Bootstrap, Angular 8, React & VueJS admin theme<br/>framework for next generation web apps.
                </p>
            </div>
        </div>
        <!--end::Content body-->
    </div>
    <!--end::Content-->
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
 
{{-- Scripts Section --}}
@section('scripts')
<script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
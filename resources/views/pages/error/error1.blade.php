{{-- Extends layout --}}
@extends('layout.error')
{{-- Content --}}
@section('content')
<body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed subheader-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"  >
        <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Error-->
<div class="d-flex flex-row-fluid flex-column bgi-size-cover bgi-position-center bgi-no-repeat p-10 p-sm-30" 
style="background-image: url('{{asset('media/error/bg1.jpg')}}');">
    <!--begin::Content-->
    <h1 class="font-weight-boldest text-dark-75 mt-15" style="font-size: 10rem">404</h1>
    <p class="font-size-h3 text-muted font-weight-normal">
        OOPS! Something went wrong here
    </p>
    <!--end::Content-->
</div>
{{-- Scripts Section --}}
@section('scripts')
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
                "white": "#FFFFFF",
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
                "white": "#FFFFFF",
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
                "white": "#FFFFFF",
                "primary": "#FFFFFF",
                "secondary": "#3F4254",
                "success": "#FFFFFF",
                "info": "#FFFFFF",
                "warning": "#FFFFFF",
                "danger": "#FFFFFF",
                "light": "#464E5F",
                "dark": "#FFFFFF"
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
    @endsection
<!--end::Error-->
    </div>
<!--end::Main-->
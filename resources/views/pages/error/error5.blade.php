{{-- Extends layout --}}
@extends('layout.error')
{{-- Content --}}
@section('content')

<body  id="kt_body" style="background-image: url(assets/media/bg/bg-10.jpg)"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"  >

    	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Error-->
<div class="error error-5 d-flex flex-row-fluid bgi-size-cover bgi-position-center" 
style="background-image: url('{{asset('media/error/bg5.jpg')}}');">
	<!--begin::Content-->
	<div class="container d-flex flex-row-fluid flex-column justify-content-md-center p-12">
		<h1 class="error-title font-weight-boldest text-info mt-10 mt-md-0 mb-12">Oops!</h1>
		<p class="font-weight-boldest display-4">
			Something went wrong here.
		</p>
		<p class="font-size-h3">
			We're working on it and we'll get it fixed</br>
			as soon possible.</br>
			You can back or use our Help Center.
		</p>
	</div>
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
        "xxl": 1200
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
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
                "secondary": "#212121",
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
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
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
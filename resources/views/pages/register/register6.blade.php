{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    {{-- Dashboard 1 --}}
    <div class="d-flex flex-column-fluid flex-center">
    <div class="login-form login-form-signup">
                <!--begin::Form-->
                <form class="form" novalidate="novalidate" id="kt_login_signup_form">
                    <!--begin: Wizard Step 1-->
                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                        <!--begin::Title-->
                        <div class="pb-10 pb-lg-15">
                            <h3 class="font-weight-bolder text-dark display5">Create Account</h3>
                            <div class="text-muted font-weight-bold font-size-h4">
                                Already have an Account ?
                                <a href="login6" class="text-primary font-weight-bolder">Sign In</a>
                            </div>
                        </div>
                        <!--begin::Title-->

                        <!--begin::Form Group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">First Name</label>
                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="fname" placeholder="First Name" value="" />
                        </div>
                        <!--end::Form Group-->

                        <!--begin::Form Group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Last Name</label>
                            <input type="text" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="lname" placeholder="Last Name" value="" />
                        </div>
                        <!--end::Form Group-->

                        <!--begin::Form Group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Phone</label>
                            <input type="tel" class="form-control h-auto py-7 px-6 border-0 rounded-lg font-size-h6" name="phone" placeholder="phone" value="+61412345678" />
                        </div>
                        <!--end::Form Group-->
                    </div>
                    <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" data-wizard-type="action-submit" type="submit" id="kt_login_signup_form_submit_button">
                                Submit
                                <span class="svg-icon svg-icon-md ml-2"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000) " x="7.5" y="7.5" width="2" height="9" rx="1"/>
        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
    </g>
</svg><!--end::Svg Icon--></span>                            </button>
</form>
</div></div>

    @endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection

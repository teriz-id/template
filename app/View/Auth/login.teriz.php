@extends('Template.auth.layout')
@section('judul', 'Masuk ke Teriz')
@section('content')
<div class="d-flex flex-stack py-2">
    <div class="me-2">
        <a href="{{ baseurl }}" class="btn btn-icon bg-light rounded-circle">
            <span class="svg-icon svg-icon-2 svg-icon-gray-800">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor" />
                    <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor" />
                </svg>
            </span>
        </a>
    </div>
    <div class="m-0">
        <span class="text-gray-400 fw-bold fs-5 me-2">{{ Lang::bhs('Belum punya akun?') }}</span>
        <a href="{{ baseurl }}/user/register" class="link-primary fw-bold fs-5">{{ Lang::bhs('Buat Akun') }}</a>
    </div>
</div>
<div class="py-10 pb-10">
    <div class="text-center mb-15">
        <a href="{{ baseurl }}" class="d-block d-lg-none mx-auto pt-10">
            <img alt="Logo" src="{{ baseurl }}/static/auth/fav.png" class="theme-light-show h-35px" />
            <img alt="Logo" src="{{ baseurl }}/static/auth/fav.png" class="theme-dark-show h-35px" />
        </a>
    </div>
    <form class="form w-100" id="formLogin" action="{{ baseurl }}/user/login/auth" method="POST">
        <div class="card-body">
            <div class="text-start mb-10">
                <h1 class="text-dark fw-bolder mb-3 fs-2x">{{ Lang::bhs('Masuk ke Teriz') }}</h1>
                <div class="text-gray-400 fw-semibold fs-6">{{ Lang::bhs('Gunakan Email atau Sosial media untuk masuk ke Teriz.') }}</div>
            </div>

            {{Flasher::ErrorLogin()}}

            <div class="fv-row mb-8">
                <input type="email" name="email" autocomplete="off" class="form-control form-control-solid" placeholder="{{ Lang::bhs('Email') }}" />
            </div>
            <div class="fv-row mb-7">
                <input type="password" name="password" autocomplete="off" class="form-control form-control-solid" placeholder="{{ Lang::bhs('Kata sandi') }}" />
            </div>
            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                <div></div>
                <a href="{{ baseurl }}/user/reset-password" class="link-primary">{{ Lang::bhs('Lupa sandi?') }}</a>
            </div>
            <div class="d-flex flex-stack">
                <div>
                    <button class="btn btn-primary me-2 flex-shrink-0">
                        <span class="indicator-label login">{{ Lang::bhs('Masuk') }}</span>
                    </button>
                    <span class="svg-icon svg-icon-1 svg-icon-success loginicon"></span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="text-gray-400 fw-semibold fs-6 me-3 me-md-6">{{ Lang::bhs('Atau') }}</div>
                    <a href="{{ baseurl }}/user/login/google" class="symbol symbol-circle symbol-45px w-45px bg-light me-3">
                        <img alt="Login With Google" src="{{ baseurl }}/static/auth/svg/google-icon.svg" class="p-4" />
                    </a>
                    <a href="Javascript:void();" class="symbol symbol-circle symbol-45px w-45px bg-light me-3 commingsooon">
                        <img alt="Login With Facebook" src="{{ baseurl }}/static/auth/svg/facebook-3.svg" class="p-4" />
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="m-0">
    <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
        <img data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3" src="{{ baseurl }}/static/auth/svg/indonesia.svg" alt="" />
        <span data-kt-element="current-lang-name" class="me-2">Indonesia</span>
        <span class="svg-icon svg-icon-3 svg-icon-muted rotate-180 m-0">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
            </svg>
        </span>
    </button>
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true" id="kt_auth_lang_menu">
        <div class="menu-item px-3">
            <a href="#" class="menu-link d-flex px-5" data-kt-lang="Indonesia">
                <span class="symbol symbol-20px me-4">
                    <img data-kt-element="lang-flag" class="rounded-1" src="{{ baseurl }}/static/auth/svg/indonesia.svg" alt="" />
                </span>
                <span data-kt-element="lang-name">Indonesia</span>
            </a>
        </div>
        <div class="menu-item px-3">
            <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                <span class="symbol symbol-20px me-4">
                    <img data-kt-element="lang-flag" class="rounded-1" src="{{ baseurl }}/static/auth/svg/united-states.svg" alt="" />
                </span>
                <span data-kt-element="lang-name">English</span>
            </a>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).on('submit', '#formLogin', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'json',
            data: form_data,
            success: function(response) {
                if (response.status == 'success') {
                    console.log(response.keterangan);
                    location.href = response.url;
                    $(".loginicon").html('<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"><path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" /><path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" /></svg>');
                } else if (response.status == 'verify whatsapp') {
                    console.log(response.keterangan);
                    Swal.fire({
                        text: response.keterangan,
                        icon: "warning",
                        buttonsStyling: false,
                        showCancelButton: true,
                        reverseButtons: false,
                        confirmButtonText: "{{ Lang::bhs('Verifikasi') }}",
                        cancelButtonText: "{{ Lang::bhs('Tutup') }}",
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: 'btn btn-danger'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = response.url;
                        }
                    });
                } else if (response.status == 'terblokir') {
                    console.log(response.keterangan);
                    Swal.fire({
                        text: response.keterangan,
                        icon: "warning",
                        buttonsStyling: false,
                        showCancelButton: true,
                        reverseButtons: true,
                        confirmButtonText: "{{ Lang::bhs('Hubungi Admin') }}",
                        cancelButtonText: "{{ Lang::bhs('Tutup') }}",
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: 'btn btn-danger'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = response.url;
                        }
                    });
                } else if (response.status == 'notfound') {
                    Swal.fire({
                        text: response.keterangan,
                        icon: "warning",
                        buttonsStyling: false,
                        showCancelButton: true,
                        reverseButtons: true,
                        confirmButtonText: "{{ Lang::bhs('Buat Akun') }}",
                        cancelButtonText: "{{ Lang::bhs('Tutup') }}",
                        customClass: {
                            confirmButton: "btn btn-primary",
                            cancelButton: 'btn btn-danger'
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.href = response.url;
                        }
                    });
                } else {
                    console.log(response.keterangan);
                    Swal.fire({
                        text: response.keterangan,
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "{{ Lang::bhs('Siap!') }}",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            },
            beforeSend: function(b) {
                $(".login").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> {{ Lang::bhs('Sebentar...') }}");
            }
        }).done(function(d) {
            $(".login").html("{{ Lang::bhs('Masuk') }}");
        });
    });
</script>
@endsection
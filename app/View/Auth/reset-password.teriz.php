@extends('Template.auth.layout')
@section('judul', 'Setel Ulang Kata Sandi Kamu')
@section('content')
<div class="d-flex flex-stack py-2">
    <div class="me-2">
        <a href="{{ baseurl }}/user/login" class="btn btn-icon bg-light rounded-circle">
            <span class="svg-icon svg-icon-2 svg-icon-gray-800">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor" />
                    <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor" />
                </svg>
            </span>
        </a>
    </div>
    <div class="m-0">
        <span class="text-gray-400 fw-bold fs-5 me-2">{{ Lang::bhs('Sudah punya akun?') }}</span>
        <a href="{{ baseurl }}/user/login" class="link-primary fw-bold fs-5">{{ Lang::bhs('Masuk') }}</a>
    </div>
</div>
<div class="py-10 pb-10">
    <div class="text-center mb-15">
        <a href="{{ baseurl }}" class="d-block d-lg-none mx-auto pt-10">
            <img alt="Logo" src="{{ baseurl }}/static/auth/fav.png" class="theme-light-show h-35px" />
            <img alt="Logo" src="{{ baseurl }}/static/auth/fav.png" class="theme-dark-show h-35px" />
        </a>
    </div>
    <div id="replaceHere">
        <form class="form w-100" novalidate="novalidate" id="formReset" action="{{ baseurl }}/user/reset-password/check" method="POST">
            <div class="text-start mb-10">
                <h1 class="text-dark mb-3 fs-3x">{{ Lang::bhs('Lupa kata sandi?') }}</h1>
                <div class="text-gray-400 fw-semibold fs-6">{{ Lang::bhs('Masukkan email kamu untuk reset password.') }}</div>
            </div>
            <div class="fv-row mb-10">
                <input class="form-control form-control-solid" type="email" placeholder="{{ Lang::bhs('Email') }}" name="email" autocomplete="off" required />
            </div>
            <div class="d-flex flex-stack">
                <div class="m-0">
                    <button class="btn btn-primary me-2" type="submit">
                        <span class="indicator-label resetSandi">{{ Lang::bhs('Reset') }}</span>
                    </button>
                    <a href="{{ baseurl }}/user/login" class="btn btn-lg btn-light-primary fw-bold">{{ Lang::bhs('Batal') }}</a>
                </div>
            </div>
        </form>
    </div>
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
    $(document).on('submit', '#formReset', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'json',
            data: form_data,
            success: function(response) {
                if (response.status === 'success') {
                    $('#replaceHere').html(response.data);

                    var form = $("#formKonfirmasi");
                    var inputs = form.find("[name^='kode']");

                    inputs.first().focus();

                    inputs.on("keyup", function(e) {
                        e.preventDefault();
                        var $this = $(this);
                        if ($this.val().length === 1) {
                            setTimeout(function() {
                                $this.next('input').focus();
                            }, 10);
                        } else if ($this.val().length === 0) {
                            setTimeout(function() {
                                $this.prev('input').focus();
                            }, 10);
                        }

                        var isFilled = inputs.toArray().every(function(input) {
                            return input.value.length === 1;
                        });

                        if (isFilled) {
                            form.find("button[type='submit']").prop("disabled", false);
                            submit();
                        } else {
                            form.find("button[type='submit']").prop("disabled", true);
                        }
                    });

                    inputs.on("paste", function(e) {
                        var pastedData = e.originalEvent.clipboardData.getData("text");
                        var pastedChars = pastedData.split("");

                        for (var i = 0; i < pastedChars.length; i++) {
                            if (inputs.eq(i).length && pastedChars[i].match(/\d/)) {
                                inputs.eq(i).val(pastedChars[i]);
                                inputs.eq(i).next('input').focus();
                            }
                        }

                        form.find("button[type='submit']").prop("disabled", false);
                        submit();

                        e.preventDefault();
                    });

                    form.on("reset", function() {
                        inputs.eq(0).focus();
                    });

                    function submit() {
                        form.submit();
                    }

                    $('#formKonfirmasi').on('submit', function(e) {
                        e.preventDefault();
                        var url = $(this).attr('action');
                        var form_data = $(this).serialize();
                        $.ajax({
                            type: 'POST',
                            url: url,
                            dataType: 'json',
                            data: form_data,
                            success: function(responsee) {
                                if (responsee.status == 'success') {
                                    $('#replaceHere').html(responsee.data);

                                    $('#formSetupPassword').on('submit', function(e) {
                                        e.preventDefault();
                                        var url = $(this).attr('action');
                                        var form_data = $(this).serialize();
                                        $.ajax({
                                            type: 'POST',
                                            url: url,
                                            dataType: 'json',
                                            data: form_data,
                                            success: function(responseee) {
                                                if (responseee.status == 'success') {
                                                    Swal.fire({
                                                        text: responseee.keterangan,
                                                        icon: "success",
                                                        buttonsStyling: !1,
                                                        confirmButtonText: "{{ Lang::bhs('Mantap') }}",
                                                        customClass: {
                                                            confirmButton: "btn btn-primary",
                                                        }
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            location.href = responseee.url;
                                                        }
                                                    });
                                                } else {
                                                    console.log(responseee.keterangan);
                                                    Swal.fire({
                                                        text: responseee.keterangan,
                                                        icon: "error",
                                                        buttonsStyling: !1,
                                                        confirmButtonText: "{{ Lang::bhs('Tutup') }}",
                                                        customClass: {
                                                            confirmButton: "btn btn-primary",
                                                        }
                                                    });
                                                }
                                            },
                                            beforeSend: function(b) {
                                                $(".simpanpass").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> {{ Lang::bhs('Sebentar...') }}");
                                            }
                                        }).done(function(d) {
                                            $(".simpanpass").html("{{ Lang::bhs('Simpan') }}");
                                        });
                                    });
                                } else {
                                    console.log(responsee.keterangan);
                                    Swal.fire({
                                        text: responsee.keterangan,
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "{{ Lang::bhs('Tutup') }}",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        }
                                    });
                                }
                            },
                            beforeSend: function(b) {
                                $(".konfirmasi").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> {{ Lang::bhs('Sebentar...') }}");
                            }
                        }).done(function(d) {
                            $(".konfirmasi").html("{{ Lang::bhs('Konfirmasi') }}");
                        });
                    });

                } else {
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
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                Swal.fire({
                    text: error,
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "{{ Lang::bhs('Siap!') }}",
                    customClass: {
                        confirmButton: "btn btn-primary",
                    }
                });
            },
            beforeSend: function(b) {
                $(".resetSandi").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> {{ Lang::bhs('Sebentar...') }}");
            }
        }).done(function(d) {
            $(".resetSandi").html("{{ Lang::bhs('Reset') }}");
        });
    });
</script>
@endsection
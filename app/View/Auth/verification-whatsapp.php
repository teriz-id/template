<!DOCTYPE html>
<html lang="en">

<head>
    <title>Verifikasi Whatsapp - Qondangan</title>
    <meta charset="utf-8" />
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content=" " />
    <meta property="og:url" content=" " />
    <meta property="og:site_name" content=" " />
    <link rel="canonical" href=" " />
    <link rel="shortcut icon" href="<?= baseurl ?>/static/qondangan.jpg" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="<?= baseurl ?>/static/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= baseurl ?>/static/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="app-blank app-blank">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <div class="d-flex flex-stack py-2">
                        <div class="me-2">
                            <a href="<?= baseurl ?>/user/register" class="btn btn-icon bg-light rounded-circle">
                                <span class="svg-icon svg-icon-2 svg-icon-gray-800">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="currentColor" />
                                        <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="m-0">
                            <span class="text-gray-400 fw-bold fs-5 me-2"><?= Lang::bhs('Sudah verifikasi whatsapp?') ?></span>
                            <a href="<?= baseurl ?>/user/login" class="link-primary fw-bold fs-5"><?= Lang::bhs('Masuk') ?></a>
                        </div>
                    </div>
                    <div class="py-10 pb-10">
                        <div class="text-center mb-15">
                            <a href="<?= baseurl ?>" class="d-block d-lg-none mx-auto pt-10">
                                <img alt="Logo" src="<?= baseurl ?>/static/qondangan-full-dark.png" class="theme-light-show h-35px" />
                                <img alt="Logo" src="<?= baseurl ?>/static/qondangan-full-light.png" class="theme-dark-show h-35px" />
                            </a>
                        </div>
                        <form class="form w-100 mb-10" novalidate="novalidate" id="formVerifikasi" action="<?= baseurl ?>/user/register/validasiwhatsapp" method="POST">
                            <div class="text-center mb-10">
                                <img alt="Logo" class="theme-light-show mh-125px" src="<?= baseurl ?>/static/admin/media/svg/misc/smartphone-2.svg" />
                                <img alt="Logo" class="theme-dark-show mh-125px" src="<?= baseurl ?>/static/admin/media/svg/misc/smartphone-2-dark.svg" />
                            </div>
                            <div class="text-center mb-10">
                                <h1 class="text-dark mb-3" data-kt-translate="two-step-title"><?= Lang::bhs('Verifikasi Nomor Handphone') ?></h1>
                                <div class="text-muted fw-semibold fs-5 mb-5" data-kt-translate="two-step-deck"><?= Lang::bhs('Kami telah mengirimkan OTP Ke WhatsApp kamu.') ?></div>
                                <!-- <div class="fw-bold text-dark fs-3">+<?php //substr_replace($model['verify']['hp'], '******', 3, 6); 
                                                                            ?></div> -->
                                <div class="fw-bold text-dark fs-3">
                                    <span class="ubahsini">+<?= substr($model['verify']['hp'], 0, 5) . '-' . substr($model['verify']['hp'], 5, 4) . '-' . substr($model['verify']['hp'], 9); ?></span>
                                    <a href="javascript:void();" class="link-primary mx-2" data-bs-toggle="modal" data-bs-target="#ubanNomor">
                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 24px;">
                                            <path opacity="0.4" d="M19.9926 18.9532H14.2983C13.7427 18.9532 13.2909 19.4123 13.2909 19.9766C13.2909 20.5421 13.7427 21 14.2983 21H19.9926C20.5481 21 21 20.5421 21 19.9766C21 19.4123 20.5481 18.9532 19.9926 18.9532Z" fill="currentColor" />
                                            <path d="M10.309 6.90388L15.7049 11.264C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8345 7.72908 20.8452L4.23696 20.8882C4.05071 20.8904 3.88775 20.7614 3.84542 20.5765L3.05175 17.1258C2.91419 16.4916 3.05175 15.8358 3.45388 15.3306L9.88256 6.95548C9.98627 6.82111 10.1778 6.79746 10.309 6.90388Z" fill="currentColor" />
                                            <path opacity="0.4" d="M18.1206 8.66544L17.0804 9.96401C16.9756 10.0962 16.7872 10.1177 16.6571 10.0124C15.3925 8.98901 12.1543 6.36285 11.2559 5.63509C11.1247 5.52759 11.1067 5.33625 11.2125 5.20295L12.2157 3.95706C13.1258 2.78534 14.7131 2.67784 15.9936 3.69906L17.4645 4.87078C18.0677 5.34377 18.4698 5.96726 18.6074 6.62299C18.7661 7.3443 18.5968 8.0527 18.1206 8.66544Z" fill="currentColor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class=" mb-10">
                                <div class="text-muted fw-semibold text-start fs-6 mb-1 ms-1" data-kt-translate="two-step-label"><?= Lang::bhs('Masukkan 6 digit kode OTP kamu') ?></div>
                                <div class="d-flex flex-wrap flex-stack">
                                    <input type="text" id="fokus" name="kode1" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="kode2" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="kode3" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="kode4" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="kode5" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                    <input type="text" name="kode6" maxlength="1" class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2" value="" />
                                </div>
                            </div>
                            <input type="hidden" name="auth_key" value="<?= $model['verify']['auth_key'] ?>">
                            <div class="text-center">
                                <button class="btn btn-primary" type="submit" disabled>
                                    <span class="indicator-label verifikasi"><?= Lang::bhs('Verifikasi') ?></span>
                                </button>
                                <span class="svg-icon svg-icon-1 svg-icon-success verifikasiicon"></span>
                            </div>
                        </form>
                        <div class=" d-flex justify-content-center">
                            <span class="text-gray-400 fw-normal fs-5 me-2" data-kt-translate="two-step-head-desc"><?= Lang::bhs('Tidak terima kode?') ?></span>
                            <div id="countdown"></div>
                        </div>
                    </div>
                    <div class="m-0">
                        <button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                            <img data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3" src="<?= baseurl ?>/static/admin/media/flags/indonesia.svg" alt="" />
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
                                        <img data-kt-element="lang-flag" class="rounded-1" src="<?= baseurl ?>/static/admin/media/flags/indonesia.svg" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">Indonesia</span>
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                    <span class="symbol symbol-20px me-4">
                                        <img data-kt-element="lang-flag" class="rounded-1" src="<?= baseurl ?>/static/admin/media/flags/united-states.svg" alt="" />
                                    </span>
                                    <span data-kt-element="lang-name">English</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" style="background-image: url(<?= baseurl ?>/static/admin/media/auth/bg11.png)"></div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="ubanNomor">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title"><?= Lang::bhs('Ubah Nomor') ?></h3>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>

                <form id="UbahNomor" action="<?= baseurl ?>/user/register/ubahnomor" method="POST">
                    <div class="modal-body">
                        <div class="fv-row">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <select class="form-control form-control-lg form-select form-select-solid mr-1" data-dropdown-parent="#UbahNomor" name="negara" data-control="select2" data-placeholder="<?= Lang::bhs('Pilih Negara') ?>">
                                            <option></option>
                                            <option data-countryCode="DZ" value="213">Algeria (+213)</option>
                                            <option data-countryCode="AD" value="376">Andorra (+376)</option>
                                            <option data-countryCode="AO" value="244">Angola (+244)</option>
                                            <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
                                            <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
                                            <option data-countryCode="AR" value="54">Argentina (+54)</option>
                                            <option data-countryCode="AM" value="374">Armenia (+374)</option>
                                            <option data-countryCode="AW" value="297">Aruba (+297)</option>
                                            <option data-countryCode="AU" value="61">Australia (+61)</option>
                                            <option data-countryCode="AT" value="43">Austria (+43)</option>
                                            <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
                                            <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
                                            <option data-countryCode="BH" value="973">Bahrain (+973)</option>
                                            <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
                                            <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
                                            <option data-countryCode="BY" value="375">Belarus (+375)</option>
                                            <option data-countryCode="BE" value="32">Belgium (+32)</option>
                                            <option data-countryCode="BZ" value="501">Belize (+501)</option>
                                            <option data-countryCode="BJ" value="229">Benin (+229)</option>
                                            <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
                                            <option data-countryCode="BT" value="975">Bhutan (+975)</option>
                                            <option data-countryCode="BO" value="591">Bolivia (+591)</option>
                                            <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
                                            <option data-countryCode="BW" value="267">Botswana (+267)</option>
                                            <option data-countryCode="BR" value="55">Brazil (+55)</option>
                                            <option data-countryCode="BN" value="673">Brunei (+673)</option>
                                            <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
                                            <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
                                            <option data-countryCode="BI" value="257">Burundi (+257)</option>
                                            <option data-countryCode="KH" value="855">Cambodia (+855)</option>
                                            <option data-countryCode="CM" value="237">Cameroon (+237)</option>
                                            <option data-countryCode="CA" value="1">Canada (+1)</option>
                                            <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
                                            <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
                                            <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
                                            <option data-countryCode="CL" value="56">Chile (+56)</option>
                                            <option data-countryCode="CN" value="86">China (+86)</option>
                                            <option data-countryCode="CO" value="57">Colombia (+57)</option>
                                            <option data-countryCode="KM" value="269">Comoros (+269)</option>
                                            <option data-countryCode="CG" value="242">Congo (+242)</option>
                                            <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
                                            <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
                                            <option data-countryCode="HR" value="385">Croatia (+385)</option>
                                            <option data-countryCode="CU" value="53">Cuba (+53)</option>
                                            <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
                                            <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
                                            <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
                                            <option data-countryCode="DK" value="45">Denmark (+45)</option>
                                            <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
                                            <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
                                            <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
                                            <option data-countryCode="EC" value="593">Ecuador (+593)</option>
                                            <option data-countryCode="EG" value="20">Egypt (+20)</option>
                                            <option data-countryCode="SV" value="503">El Salvador (+503)</option>
                                            <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
                                            <option data-countryCode="ER" value="291">Eritrea (+291)</option>
                                            <option data-countryCode="EE" value="372">Estonia (+372)</option>
                                            <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
                                            <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
                                            <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
                                            <option data-countryCode="FJ" value="679">Fiji (+679)</option>
                                            <option data-countryCode="FI" value="358">Finland (+358)</option>
                                            <option data-countryCode="FR" value="33">France (+33)</option>
                                            <option data-countryCode="GF" value="594">French Guiana (+594)</option>
                                            <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
                                            <option data-countryCode="GA" value="241">Gabon (+241)</option>
                                            <option data-countryCode="GM" value="220">Gambia (+220)</option>
                                            <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
                                            <option data-countryCode="DE" value="49">Germany (+49)</option>
                                            <option data-countryCode="GH" value="233">Ghana (+233)</option>
                                            <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
                                            <option data-countryCode="GR" value="30">Greece (+30)</option>
                                            <option data-countryCode="GL" value="299">Greenland (+299)</option>
                                            <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
                                            <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
                                            <option data-countryCode="GU" value="671">Guam (+671)</option>
                                            <option data-countryCode="GT" value="502">Guatemala (+502)</option>
                                            <option data-countryCode="GN" value="224">Guinea (+224)</option>
                                            <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
                                            <option data-countryCode="GY" value="592">Guyana (+592)</option>
                                            <option data-countryCode="HT" value="509">Haiti (+509)</option>
                                            <option data-countryCode="HN" value="504">Honduras (+504)</option>
                                            <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
                                            <option data-countryCode="HU" value="36">Hungary (+36)</option>
                                            <option data-countryCode="IS" value="354">Iceland (+354)</option>
                                            <option data-countryCode="IN" value="91">India (+91)</option>
                                            <option data-countryCode="ID" value="62" selected>Indonesia (+62)</option>
                                            <option data-countryCode="IR" value="98">Iran (+98)</option>
                                            <option data-countryCode="IQ" value="964">Iraq (+964)</option>
                                            <option data-countryCode="IE" value="353">Ireland (+353)</option>
                                            <option data-countryCode="IL" value="972">Israel (+972)</option>
                                            <option data-countryCode="IT" value="39">Italy (+39)</option>
                                            <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
                                            <option data-countryCode="JP" value="81">Japan (+81)</option>
                                            <option data-countryCode="JO" value="962">Jordan (+962)</option>
                                            <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
                                            <option data-countryCode="KE" value="254">Kenya (+254)</option>
                                            <option data-countryCode="KI" value="686">Kiribati (+686)</option>
                                            <option data-countryCode="KP" value="850">Korea North (+850)</option>
                                            <option data-countryCode="KR" value="82">Korea South (+82)</option>
                                            <option data-countryCode="KW" value="965">Kuwait (+965)</option>
                                            <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
                                            <option data-countryCode="LA" value="856">Laos (+856)</option>
                                            <option data-countryCode="LV" value="371">Latvia (+371)</option>
                                            <option data-countryCode="LB" value="961">Lebanon (+961)</option>
                                            <option data-countryCode="LS" value="266">Lesotho (+266)</option>
                                            <option data-countryCode="LR" value="231">Liberia (+231)</option>
                                            <option data-countryCode="LY" value="218">Libya (+218)</option>
                                            <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
                                            <option data-countryCode="LT" value="370">Lithuania (+370)</option>
                                            <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
                                            <option data-countryCode="MO" value="853">Macao (+853)</option>
                                            <option data-countryCode="MK" value="389">Macedonia (+389)</option>
                                            <option data-countryCode="MG" value="261">Madagascar (+261)</option>
                                            <option data-countryCode="MW" value="265">Malawi (+265)</option>
                                            <option data-countryCode="MY" value="60">Malaysia (+60)</option>
                                            <option data-countryCode="MV" value="960">Maldives (+960)</option>
                                            <option data-countryCode="ML" value="223">Mali (+223)</option>
                                            <option data-countryCode="MT" value="356">Malta (+356)</option>
                                            <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
                                            <option data-countryCode="MQ" value="596">Martinique (+596)</option>
                                            <option data-countryCode="MR" value="222">Mauritania (+222)</option>
                                            <option data-countryCode="YT" value="269">Mayotte (+269)</option>
                                            <option data-countryCode="MX" value="52">Mexico (+52)</option>
                                            <option data-countryCode="FM" value="691">Micronesia (+691)</option>
                                            <option data-countryCode="MD" value="373">Moldova (+373)</option>
                                            <option data-countryCode="MC" value="377">Monaco (+377)</option>
                                            <option data-countryCode="MN" value="976">Mongolia (+976)</option>
                                            <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
                                            <option data-countryCode="MA" value="212">Morocco (+212)</option>
                                            <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
                                            <option data-countryCode="MN" value="95">Myanmar (+95)</option>
                                            <option data-countryCode="NA" value="264">Namibia (+264)</option>
                                            <option data-countryCode="NR" value="674">Nauru (+674)</option>
                                            <option data-countryCode="NP" value="977">Nepal (+977)</option>
                                            <option data-countryCode="NL" value="31">Netherlands (+31)</option>
                                            <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
                                            <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
                                            <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
                                            <option data-countryCode="NE" value="227">Niger (+227)</option>
                                            <option data-countryCode="NG" value="234">Nigeria (+234)</option>
                                            <option data-countryCode="NU" value="683">Niue (+683)</option>
                                            <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
                                            <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
                                            <option data-countryCode="NO" value="47">Norway (+47)</option>
                                            <option data-countryCode="OM" value="968">Oman (+968)</option>
                                            <option data-countryCode="PW" value="680">Palau (+680)</option>
                                            <option data-countryCode="PA" value="507">Panama (+507)</option>
                                            <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
                                            <option data-countryCode="PY" value="595">Paraguay (+595)</option>
                                            <option data-countryCode="PE" value="51">Peru (+51)</option>
                                            <option data-countryCode="PH" value="63">Philippines (+63)</option>
                                            <option data-countryCode="PL" value="48">Poland (+48)</option>
                                            <option data-countryCode="PT" value="351">Portugal (+351)</option>
                                            <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
                                            <option data-countryCode="QA" value="974">Qatar (+974)</option>
                                            <option data-countryCode="RE" value="262">Reunion (+262)</option>
                                            <option data-countryCode="RO" value="40">Romania (+40)</option>
                                            <option data-countryCode="RU" value="7">Russia (+7)</option>
                                            <option data-countryCode="RW" value="250">Rwanda (+250)</option>
                                            <option data-countryCode="SM" value="378">San Marino (+378)</option>
                                            <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
                                            <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
                                            <option data-countryCode="SN" value="221">Senegal (+221)</option>
                                            <option data-countryCode="CS" value="381">Serbia (+381)</option>
                                            <option data-countryCode="SC" value="248">Seychelles (+248)</option>
                                            <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
                                            <option data-countryCode="SG" value="65">Singapore (+65)</option>
                                            <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
                                            <option data-countryCode="SI" value="386">Slovenia (+386)</option>
                                            <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
                                            <option data-countryCode="SO" value="252">Somalia (+252)</option>
                                            <option data-countryCode="ZA" value="27">South Africa (+27)</option>
                                            <option data-countryCode="ES" value="34">Spain (+34)</option>
                                            <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
                                            <option data-countryCode="SH" value="290">St. Helena (+290)</option>
                                            <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
                                            <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
                                            <option data-countryCode="SD" value="249">Sudan (+249)</option>
                                            <option data-countryCode="SR" value="597">Suriname (+597)</option>
                                            <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
                                            <option data-countryCode="SE" value="46">Sweden (+46)</option>
                                            <option data-countryCode="CH" value="41">Switzerland (+41)</option>
                                            <option data-countryCode="SI" value="963">Syria (+963)</option>
                                            <option data-countryCode="TW" value="886">Taiwan (+886)</option>
                                            <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
                                            <option data-countryCode="TH" value="66">Thailand (+66)</option>
                                            <option data-countryCode="TG" value="228">Togo (+228)</option>
                                            <option data-countryCode="TO" value="676">Tonga (+676)</option>
                                            <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
                                            <option data-countryCode="TN" value="216">Tunisia (+216)</option>
                                            <option data-countryCode="TR" value="90">Turkey (+90)</option>
                                            <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
                                            <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
                                            <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
                                            <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
                                            <option data-countryCode="UG" value="256">Uganda (+256)</option>
                                            <option data-countryCode="GB" value="44">UK (+44)</option>
                                            <option data-countryCode="UA" value="380">Ukraine (+380)</option>
                                            <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
                                            <option data-countryCode="UY" value="598">Uruguay (+598)</option>
                                            <option data-countryCode="US" value="1">USA (+1)</option>
                                            <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
                                            <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
                                            <option data-countryCode="VA" value="379">Vatican City (+379)</option>
                                            <option data-countryCode="VE" value="58">Venezuela (+58)</option>
                                            <option data-countryCode="VN" value="84">Vietnam (+84)</option>
                                            <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
                                            <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
                                            <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
                                            <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
                                            <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
                                            <option data-countryCode="ZM" value="260">Zambia (+260)</option>
                                            <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
                                        </select>
                                    </div>
                                    <input class="form-control form-control-lg" id="whatsapp" type="text" placeholder="<?= Lang::bhs('Whatsapp') ?>" name="whatsapp" autocomplete="off" />
                                    <input type="hidden" name="auth_key" value="<?= $model['verify']['auth_key'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                        <button type="submit" class="btn btn-primary ubah"><?= Lang::bhs('Simpan Perubahan') ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var hostUrl = "<?= baseurl ?>/";
    </script>
    <script src="<?= baseurl ?>/static/admin/plugins/global/plugins.bundle.js"></script>
    <script src="<?= baseurl ?>/static/admin/js/scripts.bundle.js"></script>
    <script src="<?= baseurl ?>/static/admin/js/custom/authentication/sign-in/i18n.js"></script>
    <script>
        $(document).ready(function() {
            var expiration_time = new Date("<?= date('Y-m-d H:i:s', strtotime($model['verify']['exp_token_reset'] . ' +5 minutes')); ?>");
            var countdown;

            function startTimer() {
                countdown = setInterval(function() {
                    var current_time = new Date().getTime();
                    var time_left = expiration_time - current_time;

                    var minutes = Math.floor((time_left % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((time_left % (1000 * 60)) / 1000);

                    if (time_left < 0) {
                        clearInterval(countdown);
                        $('#countdown').html('<a href="javascript:void();" class="link-primary fw-bold fs-5 resendOTP" data-key="<?= $model['verify']['auth_key'] ?>"><?= Lang::bhs('Kirim Ulang') ?></a>');
                    } else {
                        $('#countdown').html('<span class="link-primary fw-bold fs-5">' + minutes + ':' + (seconds < 10 ? '0' : '') + seconds + '</span>');
                    }
                }, 1000);
            }

            startTimer();

            $(document).on('click', '.resendOTP', function() {
                clearInterval(countdown);
                var now = new Date();
                now.setMinutes(now.getMinutes() + 5);
                expiration_time = now;
                startTimer();
            });
        });

        $(document).on('submit', '#UbahNomor', function(e) {
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
                        $('#ubanNomor').modal('hide');
                        $('.ubahsini').html('+' + response.whatsapp);
                        Swal.fire({
                            text: response.keterangan,
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "<?= Lang::bhs('Baik') ?>",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    } else {
                        console.log(response.keterangan);
                        Swal.fire({
                            text: response.keterangan,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "<?= Lang::bhs('Tutup') ?>",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                },
                beforeSend: function(b) {
                    $(".ubah").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> <?= Lang::bhs('Sebentar...') ?>");
                }
            }).done(function(d) {
                $(".ubah").html("<?= Lang::bhs('Simpan Perubahan') ?>");
            });
        });

        $(document).on('submit', '#formVerifikasi', function(e) {
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
                        Swal.fire({
                            text: response.keterangan,
                            icon: "success",
                            buttonsStyling: false,
                            showCancelButton: true,
                            reverseButtons: false,
                            confirmButtonText: "<?= Lang::bhs('Masuk') ?>",
                            cancelButtonText: '<?= Lang::bhs('Tutup') ?>',
                            customClass: {
                                confirmButton: "btn btn-primary",
                                cancelButton: 'btn btn-danger'
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.href = response.url;
                            }
                        });
                    } else if (response.status == 'kadaluarsa') {
                        Swal.fire({
                            text: response.keterangan,
                            icon: "warning",
                            buttonsStyling: false,
                            showCancelButton: true,
                            reverseButtons: false,
                            confirmButtonText: "<?= Lang::bhs('Kirim Ulang') ?>",
                            cancelButtonText: '<?= Lang::bhs('Tutup') ?>',
                            customClass: {
                                confirmButton: "btn btn-primary",
                                cancelButton: 'btn btn-danger'
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    method: "POST",
                                    url: response.url,
                                    data: {
                                        key: response.key,
                                    },
                                    success: function(responsee) {
                                        if (responsee.status == 'success') {
                                            Swal.fire({
                                                text: responsee.keterangan,
                                                icon: "success",
                                                buttonsStyling: !1,
                                                confirmButtonText: "<?= Lang::bhs('Baik!') ?>",
                                                customClass: {
                                                    confirmButton: "btn btn-primary",
                                                }
                                            }).then((result) => {
                                                $("#formVerifikasi")[0].reset();
                                            });
                                        } else {
                                            Swal.fire({
                                                text: responsee.keterangan,
                                                icon: "error",
                                                buttonsStyling: !1,
                                                confirmButtonText: "<?= Lang::bhs('Siap!') ?>",
                                                customClass: {
                                                    confirmButton: "btn btn-primary",
                                                }
                                            });
                                        }
                                    },
                                    beforeSend: function(e) {
                                        $(".verifikasi").html("<span class='spinner-border spinner-border-md align-middle'></span>");
                                    }
                                }).done(function(f) {
                                    $(".verifikasi").html("<?= Lang::bhs('Verifikasi') ?>");
                                });
                            }
                        });
                    } else {
                        console.log(response.keterangan);
                        Swal.fire({
                            text: response.keterangan,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "<?= Lang::bhs('Tutup') ?>",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                },
                beforeSend: function(b) {
                    $(".verifikasi").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> <?= Lang::bhs('Sebentar...') ?>");
                }
            }).done(function(d) {
                $(".verifikasi").html("<?= Lang::bhs('Verifikasi') ?>");
            });
        });

        $(document).on('click', '.resendOTP', function(e) {
            e.preventDefault();
            let key = $(this).data('key');
            $.ajax({
                method: "POST",
                url: hostUrl + 'user/register/resendotpwhatsapp',
                data: {
                    key: key,
                },
                success: function(responsee) {
                    if (responsee.status == 'success') {
                        Swal.fire({
                            text: responsee.keterangan,
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "<?= Lang::bhs('Baik!') ?>",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        }).then((result) => {
                            $("#formVerifikasi")[0].reset();
                        });
                    } else {
                        Swal.fire({
                            text: responsee.keterangan,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "<?= Lang::bhs('Siap!') ?>",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    }
                },
                beforeSend: function(e) {
                    $(".verifikasi").html("<span class='spinner-border spinner-border-md align-middle'></span>");
                }
            }).done(function(f) {
                $(".verifikasi").html("<?= Lang::bhs('Verifikasi') ?>");
            });
        });

        $(document).ready(function() {
            var form = $("#formVerifikasi");
            var inputs = form.find("[name^='kode']");

            inputs.first().focus();

            inputs.on("keyup", function(e) {
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
        });
    </script>
</body>

</html>
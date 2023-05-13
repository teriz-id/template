<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class=" container-xxl " id="kt_content_container">
        <?php
        if ($model['undangan']['paket'] !== 'basic') {
        ?>
            <div class="card-body mt-3 mb-8">
                <div class="row g-3 g-lg-6">
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 hover-elevate-up shadow-sm parent-hover">
                            <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 8C16 10.2091 14.2091 12 12 12C9.79086 12 8 10.2091 8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8ZM14 8C14 9.10457 13.1046 10 12 10C10.8954 10 10 9.10457 10 8C10 6.89543 10.8954 6 12 6C13.1046 6 14 6.89543 14 8Z" fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 19L6.55279 19.8944C6.214 19.725 6 19.3788 6 19C6 17.3594 6.4053 15.4253 7.32657 13.8663C8.26149 12.2841 9.79629 11 12 11C14.2037 11 15.7385 12.2841 16.6734 13.8663C17.5947 15.4253 18 17.3594 18 19C18 19.3788 17.786 19.725 17.4472 19.8944L17 19C17.4472 19.8944 17.4472 19.8944 17.4472 19.8944L17.4447 19.8957L17.4415 19.8973L17.4329 19.9015L17.4067 19.9141C17.3854 19.9242 17.3564 19.9378 17.3198 19.9543C17.2467 19.9874 17.1434 20.0322 17.012 20.0847C16.7494 20.1898 16.3733 20.3262 15.8997 20.4615C14.9537 20.7318 13.6102 21 12 21C10.3898 21 9.0463 20.7318 8.10028 20.4615C7.62669 20.3262 7.25062 20.1898 6.98798 20.0847C6.85659 20.0322 6.75334 19.9874 6.68021 19.9543C6.64364 19.9378 6.61457 19.9242 6.59326 19.9141L6.56713 19.9015L6.55847 19.8973L6.55526 19.8957L6.55393 19.895C6.55393 19.895 6.55279 19.8944 7 19ZM15.9739 18.3392C15.8815 17.1528 15.5436 15.8856 14.9516 14.8837C14.2615 13.7159 13.2963 13 12 13C10.7037 13 9.73851 13.7159 9.04843 14.8837C8.45643 15.8856 8.11851 17.1528 8.02613 18.3392C8.19918 18.4008 8.40815 18.4695 8.64972 18.5385C9.4537 18.7682 10.6102 19 12 19C13.3898 19 14.5463 18.7682 15.3503 18.5385C15.5918 18.4695 15.8008 18.4008 15.9739 18.3392Z" fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 8C17.9477 8 17.5 8.44772 17.5 9C17.5 10.0252 17.4854 10.7932 17.1056 11.5528C16.8586 12.0468 17.0589 12.6474 17.5528 12.8944C19.1671 13.7016 20 15.3233 20 17C20 17.5523 20.4477 18 21 18C21.5523 18 22 17.5523 22 17C22 14.9492 21.0906 12.8555 19.2364 11.5722C19.5005 10.666 19.5003 9.79675 19.5 9.06575C19.5 9.04371 19.5 9.02179 19.5 9C19.5 8.44772 19.0523 8 18.5 8Z" fill="currentColor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 8C6.05228 8 6.5 8.44772 6.5 9C6.5 10.0252 6.5146 10.7932 6.89439 11.5528C7.14135 12.0468 6.94113 12.6474 6.44717 12.8944C4.83292 13.7016 4 15.3233 4 17C4 17.5523 3.55228 18 3 18C2.44772 18 2 17.5523 2 17C2 14.9492 2.90938 12.8555 4.76355 11.5722C4.49945 10.666 4.49974 9.79675 4.49999 9.06575C4.49999 9.04371 4.5 9.02179 4.5 9C4.5 8.44772 4.94772 8 5.5 8Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </span>
                            </div>
                            <div class="m-0">
                                <span class="text-gray-800 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"><?= ($model['statistikTamu']['total'] + ($model['statistikTamu']['diajak']['diajak'] - $model['statistikTamu']['total'])) ?></span>
                                <span class="text-gray-500 fw-semibold fs-6"><?= Lang::bhs('Total Tamu') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 hover-elevate-up shadow-sm parent-hover">
                            <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 24 24">
                                            <path opacity="0.6" d="M16.604,11.048c0.604-1.029,0.872-2.228,0.751-3.44c-0.179-1.784-1.175-3.361-2.803-4.44l-1.105,1.666 c1.119,0.742,1.8,1.799,1.918,2.974c0.11,1.105-0.28,2.194-1.072,2.986l-1.192,1.192l1.618,0.475C18.951,13.701,19,17.957,19,18h2 C21,16.211,20.044,12.715,16.604,11.048z" />
                                            <path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4S7.294 12 9.5 12zM9.5 6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2S8.397 6 9.5 6zM11 13H8c-3.309 0-6 2.691-6 6v1h2v-1c0-2.206 1.794-4 4-4h3c2.206 0 4 1.794 4 4v1h2v-1C17 15.691 14.309 13 11 13z" />
                                        </svg>
                                    </span>
                                </span>
                            </div>
                            <div class="m-0">
                                <span class="text-gray-800 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"><?= $model['statistikTamu']['total'] ?></span>
                                <span class="text-gray-500 fw-semibold fs-6"><?= Lang::bhs('Tamu') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 hover-elevate-up shadow-sm parent-hover">
                            <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <svg width="24" height="24" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 20V19C1 15.134 4.13401 12 8 12V12C11.866 12 15 15.134 15 19V20" stroke="currentColor" stroke-linecap="round" />
                                            <path d="M13 14V14C13 11.2386 15.2386 9 18 9V9C20.7614 9 23 11.2386 23 14V14.5" stroke="currentColor" stroke-linecap="round" />
                                            <path d="M8 12C10.2091 12 12 10.2091 12 8C12 5.79086 10.2091 4 8 4C5.79086 4 4 5.79086 4 8C4 10.2091 5.79086 12 8 12Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18 9C19.6569 9 21 7.65685 21 6C21 4.34315 19.6569 3 18 3C16.3431 3 15 4.34315 15 6C15 7.65685 16.3431 9 18 9Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </span>
                            </div>
                            <div class="m-0">
                                <span class="text-gray-800 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"><?= ($model['statistikTamu']['diajak']['diajak'] - $model['statistikTamu']['total']) ?></span>
                                <span class="text-gray-500 fw-semibold fs-6"><?= Lang::bhs('Tamu yang diajak') ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 hover-elevate-up shadow-sm parent-hover">
                            <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-envelope-check" viewBox="0 0 16 16">
                                            <path opacity="0.6" d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                                        </svg>
                                    </span>
                                </span>
                            </div>
                            <div class="m-0">
                                <span class="text-gray-800 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"><?= $model['statistikTamu']['terbuka'] ?></span>
                                <span class="text-gray-500 fw-semibold fs-6">Undangan telah dibuka</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 hover-elevate-up shadow-sm parent-hover">
                            <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <svg width="28" height="28" viewBox="0 0 48 48" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.6" d="M31.2502 8C31.2502 10.2091 29.4594 12 27.2502 12C25.0411 12 23.2502 10.2091 23.2502 8C23.2502 5.79086 25.0411 4 27.2502 4C29.4594 4 31.2502 5.79086 31.2502 8Z" fill="currentColor" />
                                            <path d="M25.6928 28.3968L30.8857 33.5207C31.0848 33.7172 31.2405 33.9533 31.3427 34.2137L34.112 41.2693C34.5155 42.2975 34.0091 43.4582 32.9809 43.8617C31.9527 44.2653 30.7921 43.7589 30.3885 42.7307L27.7743 36.07L18.8455 27.2598C18.4087 26.8288 18.1939 26.2211 18.2629 25.6113L18.9781 19.2919C17.2542 21.0046 15.9244 23.4143 14.9053 26.607C14.5695 27.6592 13.4442 28.24 12.3919 27.9041C11.3396 27.5682 10.7589 26.4429 11.0948 25.3907C12.965 19.5312 16.0701 15.1454 21.2797 13.1341L21.3034 13.1251C22.6301 12.6321 24.0105 12.6718 25.2398 13.3074C26.4214 13.9182 27.2624 14.9731 27.8131 16.1554C28.0449 16.6532 28.2594 17.1184 28.4607 17.5551C28.9485 18.6129 29.3594 19.5041 29.7535 20.2873C30.3073 21.3877 30.7523 22.1161 31.1921 22.6285C31.5998 23.1034 32.0055 23.3952 32.5225 23.597C33.0782 23.8141 33.8572 23.9636 35.06 23.9997C36.1641 24.0328 37.0323 24.9547 36.9992 26.0588C36.966 27.1628 36.0442 28.031 34.9401 27.9979C33.4952 27.9546 32.2121 27.77 31.0673 27.323C29.8838 26.8608 28.9506 26.1584 28.157 25.2339C27.6565 24.6508 27.2176 23.9859 26.8062 23.2621L25.6928 28.3968Z" fill="currentColor" />
                                            <path opacity="0.6" d="M18.2627 30.2198L21.5778 33.3994L20.0524 38.547C19.9343 38.9453 19.6952 39.297 19.3681 39.5531L14.2335 43.5755C13.364 44.2566 12.1069 44.1039 11.4257 43.2344C10.7445 42.3649 10.8972 41.1078 11.7668 40.4266L16.3987 36.7981L17.7944 32.0881L18.2627 30.2198Z" fill="currentColor" />
                                        </svg>

                                    </span>
                                </span>
                            </div>
                            <div class="m-0">
                                <span class="text-gray-800 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"><?= $model['statistikTamu']['hadir'] ?></span>
                                <span class="text-gray-500 fw-semibold fs-6">Tamu Hadir</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5 hover-elevate-up shadow-sm parent-hover">
                            <div class="symbol symbol-30px me-5 mb-8">
                                <span class="symbol-label">
                                    <span class="svg-icon svg-icon-1 svg-icon-primary"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor" />
                                            <path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                </span>
                            </div>
                            <div class="m-0">
                                <span class="text-gray-800 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1"><?= $model['statistikTamu']['konfirmasi'] ?></span>
                                <span class="text-gray-500 fw-semibold fs-6">Menunggu Konfirmasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="row gy-5 g-xl-10">
            <div class="col-xl-4">
                <div class="card card-flush h-xl-100">
                    <div class="card-header pt-7">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark"><?= Lang::bhs('Konten Undangan') ?></span>
                            <div class="d-flex mt-1">
                                <span class="text-gray-700 mt-1 fw-semibold fs-6 DesKonten"></span>
                            </div>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <div class="border bg-danger rounded px-7 py-2 hover-elevate-up shadow-xs parent-hover">
                                    <?php
                                    $tanggal_dibuat = new DateTime($model['undangan']['dibuat_tgl']);
                                    $tanggal_sekarang = new DateTime('now');
                                    $tanggal_dibuat->modify($model['undangan']['masa_aktif']);
                                    $tgl_dibuat = date('Y-m-d H:i:s', strtotime($model['undangan']['dibuat_tgl'] . ' ' . $model['undangan']['masa_aktif']));
                                    if ($tanggal_sekarang < $tanggal_dibuat) {
                                    ?>
                                        <div class=" d-flex flex-stack">
                                            <div class="m-n4 py-6">
                                                <span class="text-white fs-6 ms-3"><?= Lang::bhs('Masa Aktif :') ?></span>
                                            </div>
                                            <div class="text-white m-0 mr-n2">
                                                <span id="hitungmundur"></span>
                                            </div>
                                        </div>
                                        <script>
                                            var tgl_dibuat = "<?= $tgl_dibuat ?>";
                                        </script>
                                    <?php
                                    } else {
                                    ?>
                                        <div class=" d-flex flex-stack">
                                            <div class="m-n4 py-6">
                                                <span class="text-white fs-6 ms-3"><?= Lang::bhs('Masa Aktif Habis') ?></span>
                                            </div>
                                            <div class="m-0 mr-n2">
                                                <a href="#" class="badge badge-warning text-black fw-normal"><?= Lang::bhs('Upgrade') ?></a>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="border bg-light-danger rounded px-7 py-2 hover-elevate-up shadow-xs parent-hover">
                                    <div class=" d-flex flex-stack">
                                        <div class="m-n4">
                                            <span class="fs-6 ms-3"><?= Lang::bhs('Lihat Tutorial disini') ?></span>
                                        </div>
                                        <div class="m-0 d-flex mr-n2 py-2">
                                            <a href="#" class="badge badge-warning text-black fw-normal"><?= Lang::bhs('Klik disini') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <button type="button" class="btn border border-dashed border-gray-300 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary w-100 pilihtema">
                                    <svg class="text-primary" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width: 30px;">
                                        <path d="M14.036 2.777a2.75 2.75 0 0 1 3.368 1.945l2.718 10.142a2.75 2.75 0 0 1-1.945 3.368L11.9 19.915A2.75 2.75 0 0 1 8.53 17.97L5.813 7.828A2.75 2.75 0 0 1 7.758 4.46l6.278-1.683Zm-8.233 8.881 1.762 6.57a3.732 3.732 0 0 0 1.002 1.714l-.443-.024a2.75 2.75 0 0 1-2.602-2.89l.281-5.37Zm8.621-7.432L8.146 5.91a1.25 1.25 0 0 0-.884 1.53l2.717 10.143a1.25 1.25 0 0 0 1.531.884l6.279-1.683a1.25 1.25 0 0 0 .884-1.53L15.955 5.11a1.25 1.25 0 0 0-1.53-.884ZM4.878 10.18l-.355 6.796c-.037.698.12 1.362.424 1.94l-.414-.161a2.75 2.75 0 0 1-1.582-3.553l1.927-5.022Zm4.863-3.146a1 1 0 1 1 .518 1.932 1 1 0 0 1-.518-1.932Z" fill="currentColor" />
                                    </svg>
                                    <span class="d-flex flex-column align-items-center">
                                        <span class="fs-7 fw-normal"><?= Lang::bhs('Tema') ?></span>
                                    </span>
                                </button>
                            </div>
                            <div class="col-6 mb-3">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#pengaturan" class="btn border border-dashed border-gray-300 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary w-100">
                                    <svg class="text-primary" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" style="width: 30px;">
                                        <path d="M229.6,106,203.7,91.6a80.1,80.1,0,0,0-6.3-11l.5-29.6a102.6,102.6,0,0,0-38.2-22L134.3,44.2a88.3,88.3,0,0,0-12.6,0L96.2,28.9A104,104,0,0,0,58.1,51l.5,29.7a73.6,73.6,0,0,0-6.3,10.9L26.3,106a102,102,0,0,0,.1,44l25.9,14.4a80.1,80.1,0,0,0,6.3,11L58.1,205a102.6,102.6,0,0,0,38.2,22l25.4-15.2a88.3,88.3,0,0,0,12.6,0l25.5,15.3A104,104,0,0,0,197.9,205l-.5-29.7a73.6,73.6,0,0,0,6.3-10.9l26-14.4A102,102,0,0,0,229.6,106ZM128,176a48,48,0,1,1,48-48A48,48,0,0,1,128,176Z" opacity="0.2" />
                                        <path d="M128,72a56,56,0,1,0,56,56A56,56,0,0,0,128,72Zm0,96a40,40,0,1,1,40-40A40,40,0,0,1,128,168Zm109.5-63.7a8,8,0,0,0-4-5.3L209.7,85.8a69.3,69.3,0,0,0-4.3-7.5l.5-27.2a8.3,8.3,0,0,0-2.6-6.1,112,112,0,0,0-41.1-23.7,8.1,8.1,0,0,0-6.6.8l-23.3,14c-2.9-.1-5.7-.1-8.6,0l-23.3-14a8.1,8.1,0,0,0-6.6-.8A111.1,111.1,0,0,0,52.7,45.1a7.9,7.9,0,0,0-2.6,6l.5,27.2c-1.6,2.4-3,4.9-4.4,7.5L22.4,99a7.9,7.9,0,0,0-3.9,5.3,111.4,111.4,0,0,0,0,47.4,8,8,0,0,0,4,5.3l23.8,13.2a69.3,69.3,0,0,0,4.3,7.5l-.5,27.2a8.3,8.3,0,0,0,2.6,6.1,112,112,0,0,0,41.1,23.7,8.1,8.1,0,0,0,6.6-.8l23.3-14h8.6l23.4,14a7.3,7.3,0,0,0,4.1,1.2,10,10,0,0,0,2.4-.4,111.1,111.1,0,0,0,41.1-23.8,7.9,7.9,0,0,0,2.6-6l-.5-27.2c1.6-2.4,3-4.9,4.4-7.5L233.6,157a7.9,7.9,0,0,0,3.9-5.3A111.4,111.4,0,0,0,237.5,104.3Zm-15,40.5-22.7,12.6a8.2,8.2,0,0,0-3.3,3.6,73.6,73.6,0,0,1-5.7,9.8,8.6,8.6,0,0,0-1.4,4.7l.4,25.9a94.4,94.4,0,0,1-29.1,16.9l-22.3-13.4a8.1,8.1,0,0,0-4.1-1.1h-.6a72.3,72.3,0,0,1-11.4,0,8.6,8.6,0,0,0-4.7,1.1L95.3,218.3a95,95,0,0,1-29.1-16.8l.4-26a8.6,8.6,0,0,0-1.4-4.7,86.4,86.4,0,0,1-5.7-9.8,8.8,8.8,0,0,0-3.3-3.6L33.5,144.8a94.8,94.8,0,0,1,0-33.6L56.2,98.6A8.2,8.2,0,0,0,59.5,95a73.6,73.6,0,0,1,5.7-9.8,8.6,8.6,0,0,0,1.4-4.7l-.4-25.9A94.4,94.4,0,0,1,95.3,37.7l22.3,13.4a8.4,8.4,0,0,0,4.7,1.1,72.3,72.3,0,0,1,11.4,0,8.6,8.6,0,0,0,4.7-1.1l22.3-13.4a95,95,0,0,1,29.1,16.8l-.4,26a8.6,8.6,0,0,0,1.4,4.7,86.4,86.4,0,0,1,5.7,9.8,8.8,8.8,0,0,0,3.3,3.6l22.7,12.6A94.8,94.8,0,0,1,222.5,144.8Z" />
                                    </svg>
                                    <span class="d-flex flex-column align-items-center">
                                        <span class="fs-7 fw-normal"><?= Lang::bhs('Pengaturan') ?></span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-6 mb-3">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#musik" class="btn border border-dashed border-gray-300 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary w-100">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-primary" fill="none" style="width: 30px;">
                                        <path d="M2 14.9588L2 9.04123C2 8.46617 2.44772 8 3 8H6.58579C6.851 8 7.10536 7.8903 7.29289 7.69503L10.2929 4.30706C10.9229 3.65112 12 4.11568 12 5.04332V18.9567C12 19.8908 10.91 20.3524 10.2839 19.6834L7.29437 16.3145C7.10615 16.1134 6.84791 16 6.57824 16H3C2.44772 16 2 15.5338 2 14.9588Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16 8.5C17.3333 10.2778 17.3333 13.7222 16 15.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M19 5C22.9879 8.80835 23.0121 15.2171 19 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span class="d-flex flex-column align-items-center">
                                        <span class="fs-7 fw-normal"><?= Lang::bhs('Musik') ?></span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-6 mb-3">
                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#background" class="btn border border-dashed border-gray-300 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary w-100">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="text-primary" fill="none" style="width: 30px;">
                                        <path d="M2 6C2 3.79086 3.79086 2 6 2H18C20.2091 2 22 3.79086 22 6V18C22 20.2091 20.2091 22 18 22H6C3.79086 22 2 20.2091 2 18V6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <circle cx="8.5" cy="8.5" r="2.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.5262 12.6211L6 22H18.1328C20.2686 22 22 20.2686 22 18.1328V18C22 17.5335 21.8251 17.3547 21.5099 17.0108L17.4804 12.615C16.6855 11.7479 15.3176 11.7507 14.5262 12.6211Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span class="d-flex flex-column align-items-center">
                                        <span class="fs-7 fw-normal"><?= Lang::bhs('Background') ?></span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-6 mb-3">
                                <a href="javascript:void(0);" class="btn border border-dashed border-gray-300 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary w-100 tombolPreview">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 92 92" class="text-primary" fill="currentColor" style="width: 30px;">
                                        <path id="XMLID_1239_" d="M91.3,43.8C90.6,42.8,74.4,19,46,19C17.6,19,1.4,42.8,0.7,43.8c-0.9,1.3-0.9,3.1,0,4.5  C1.4,49.2,17.6,73,46,73c28.4,0,44.6-23.8,45.3-24.8C92.2,46.9,92.2,45.1,91.3,43.8z M46,65C26.7,65,13.5,51.4,9,46  c4.5-5.5,17.6-19,37-19c19.3,0,32.5,13.6,37,19C78.4,51.5,65.3,65,46,65z M48.3,29.6c-4.4-0.6-8.7,0.5-12.3,3.2c0,0,0,0,0,0  c-7.3,5.5-8.8,15.9-3.3,23.2c2.7,3.6,6.5,5.8,10.9,6.5c0.8,0.1,1.6,0.2,2.3,0.2c3.6,0,7-1.2,9.9-3.3c7.3-5.5,8.8-15.9,3.3-23.2  C56.6,32.5,52.7,30.2,48.3,29.6z M52.3,54.5c-2.2,1.7-5,2.4-7.8,2c-2.8-0.4-5.3-1.9-7-4.1C34.1,47.7,35,41,39.7,37.5  c2.2-1.7,5-2.4,7.8-2c2.8,0.4,5.3,1.9,7,4.1C57.9,44.3,57,51,52.3,54.5z M51.9,40c0.8,0.7,1.2,1.8,1.2,2.8c0,1-0.4,2.1-1.2,2.8  c-0.7,0.7-1.8,1.2-2.8,1.2c-1.1,0-2.1-0.4-2.8-1.2c-0.8-0.8-1.2-1.8-1.2-2.8c0-1.1,0.4-2.1,1.2-2.8c0.7-0.8,1.8-1.2,2.8-1.2  C50.2,38.9,51.2,39.3,51.9,40z" />
                                    </svg>
                                    <span class="d-flex flex-column align-items-center">
                                        <span class="fs-7 fw-normal"><?= Lang::bhs('Preview') ?></span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-6 mb-3">
                                <a href="javascript:void(0);" class="btn border border-dashed border-gray-300 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary w-100">
                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-primary" style="width: 30px;">
                                        <path d="M22 10.63V12.78C22 16.34 21.11 17.22 17.56 17.22H6.44C2.89 17.22 2 16.33 2 12.78V6.44C2 2.89 2.89 2 6.44 2H17.55C21.11 2 22 2.89 22 6.44" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 17.22V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M2 13H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.5 22H16.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <span class="d-flex flex-column align-items-center">
                                        <span class="fs-7 fw-normal"><?= Lang::bhs('Layar Sapa') ?></span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="border bg-light-success rounded px-7 py-2 hover-elevate-up shadow-xs parent-hover">
                                    <div class=" d-flex flex-stack">
                                        <div class="m-n4">
                                            <span class="fs-6 ms-3"><?= Lang::bhs('Status Undangan') ?> <span class="badge badge-warning text-black fw-normal statusText"><?= $model['config']['status-undangan'] == 'Aktif' ? 'Aktif' : 'Nonaktif' ?></span></span>
                                        </div>
                                        <div class="m-0 d-flex mr-n2 py-2">
                                            <div class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input h-20px w-30px statusUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" type="checkbox" <?= $model['config']['status-undangan'] == 'Aktif' ? 'checked' : '' ?> value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="border border-dashed border-gray-500 rounded px-7 py-2 hover-elevate-up shadow-xs parent-hover">
                                    <div class="d-flex flex-stack flex-equal">
                                        <span class="svg-icon svg-icon-1 svg-icon-primary ml-n2">
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 35px;">
                                                <circle cx="12" cy="12" r="10" stroke="red" stroke-width="2" />
                                                <path d="M12 7H12.01" stroke="red" stroke-width="2" stroke-linecap="round" />
                                                <path d="M10 11H12V16" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 16H14" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span class="text-gray-800 fs-7 ms-3 py-1"><?= Lang::bhs('Upgrade paket premium agar dapat mengakses semua fitur') ?> <a href="#"><?= Lang::bhs('Klik Disini') ?></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pe-6 me-n6 pt-2" id="sortable" data-undangan="<?= $model['undangan']['id_q'] ?>">
                            <?php
                            if (isset($model['config']['fitur-undangan']) && is_array($model['config']['fitur-undangan'])) {
                                foreach ($model['config']['fitur-undangan'] as $config => $fitur) {
                                    if ($fitur['nama'] == 'Cover') {
                            ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M3,14A9,9,0,1,0,14.822,5.46l1.019-1.585a1,1,0,0,0,.031-1.032l-.75-1.333A1,1,0,0,0,14.25,1H9.75a1,1,0,0,0-.872.51l-.75,1.333a1,1,0,0,0,.031,1.032L9.178,5.46A9.011,9.011,0,0,0,3,14Zm8.282-8.966L10.167,3.3l.168-.3h3.33l.168.3L12.718,5.034C12.468,5.011,12.23,5,12,5S11.532,5.011,11.282,5.034ZM12,7a7,7,0,1,1-7,7A7.022,7.022,0,0,1,12,7Z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Cover') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3>
                                                            <input class=" form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" value="" />
                                                    </div>
                                                    <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                        <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="previewEdit" class="mx-2">
                                            <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                        <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                </button>
                                                <?php
                                                if ($fitur['nama'] !== 'Cover') {
                                                ?>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Greeting') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512">
                                                                <path d="M272 191.91c-17.6 0-32 14.4-32 32v80c0 8.84-7.16 16-16 16s-16-7.16-16-16v-76.55c0-17.39 4.72-34.47 13.69-49.39l77.75-129.59c9.09-15.16 4.19-34.81-10.97-43.91-14.45-8.67-32.72-4.3-42.3 9.21-.2.23-.62.21-.79.48l-117.26 175.9C117.56 205.9 112 224.31 112 243.29v80.23l-90.12 30.04A31.974 31.974 0 0 0 0 383.91v96c0 10.82 8.52 32 32 32 2.69 0 5.41-.34 8.06-1.03l179.19-46.62C269.16 449.99 304 403.8 304 351.91v-128c0-17.6-14.4-32-32-32zm346.12 161.73L528 323.6v-80.23c0-18.98-5.56-37.39-16.12-53.23L394.62 14.25c-.18-.27-.59-.24-.79-.48-9.58-13.51-27.85-17.88-42.3-9.21-15.16 9.09-20.06 28.75-10.97 43.91l77.75 129.59c8.97 14.92 13.69 32 13.69 49.39V304c0 8.84-7.16 16-16 16s-16-7.16-16-16v-80c0-17.6-14.4-32-32-32s-32 14.4-32 32v128c0 51.89 34.84 98.08 84.75 112.34l179.19 46.62c2.66.69 5.38 1.03 8.06 1.03 23.48 0 32-21.18 32-32v-96c0-13.77-8.81-25.99-21.88-30.35z">
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Greeting') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'QR') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>" <?= $fitur['nama'] == 'QR' && $model['undangan']['paket'] == 'basic' ? 'data-bs-toggle="modal" data-bs-target="#upgrade"' : '' ?>>
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                                                                <path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm0,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48ZM200,40H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-64,72V144a8,8,0,0,1,16,0v32a8,8,0,0,1-16,0Zm80-16a8,8,0,0,1-8,8H184v40a8,8,0,0,1-8,8H144a8,8,0,0,1,0-16h24V144a8,8,0,0,1,16,0v8h24A8,8,0,0,1,216,160Zm0,32v16a8,8,0,0,1-16,0V192a8,8,0,0,1,16,0Z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('QR Code') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <?php
                                                        if ($fitur['nama'] == 'QR' && $model['undangan']['paket'] == 'basic') {
                                                        ?>
                                                            <div class="py-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M18.75 8V10.1C18.31 10.04 17.81 10.01 17.25 10V8C17.25 4.85 16.36 2.75 12 2.75C7.64 2.75 6.75 4.85 6.75 8V10C6.19 10.01 5.69 10.04 5.25 10.1V8C5.25 5.1 5.95 1.25 12 1.25C18.05 1.25 18.75 5.1 18.75 8Z" fill="currentColor" />
                                                                    <path opacity="0.4" d="M22 15V17C22 21 21 22 17 22H7C3 22 2 21 2 17V15C2 11.66 2.7 10.41 5.25 10.1C5.69 10.04 6.19 10.01 6.75 10H17.25C17.81 10.01 18.31 10.04 18.75 10.1C21.3 10.41 22 11.66 22 15Z" fill="currentColor" />
                                                                    <path d="M8 17.0001C7.87 17.0001 7.74 16.9701 7.62 16.9201C7.49 16.8701 7.39001 16.8001 7.29001 16.7101C7.11001 16.5201 7 16.2601 7 16.0001C7 15.8701 7.02999 15.7401 7.07999 15.6201C7.12999 15.5001 7.20001 15.3901 7.29001 15.2901C7.39001 15.2001 7.49 15.1301 7.62 15.0801C7.99 14.9201 8.42999 15.0101 8.70999 15.2901C8.79999 15.3901 8.87001 15.5001 8.92001 15.6201C8.97001 15.7401 9 15.8701 9 16.0001C9 16.2601 8.88999 16.5201 8.70999 16.7101C8.51999 16.8901 8.26 17.0001 8 17.0001Z" fill="currentColor" />
                                                                    <path d="M12 17C11.73 17 11.48 16.89 11.29 16.71C11.2 16.61 11.13 16.5 11.08 16.38C11.03 16.26 11 16.13 11 16C11 15.73 11.11 15.48 11.29 15.29C11.66 14.92 12.33 14.92 12.71 15.29C12.89 15.48 13 15.73 13 16C13 16.13 12.97 16.26 12.92 16.38C12.87 16.5 12.8 16.61 12.71 16.71C12.52 16.89 12.26 17 12 17Z" fill="currentColor" />
                                                                    <path d="M16 17C15.74 17 15.48 16.89 15.29 16.71C15.11 16.52 15 16.27 15 16C15 15.73 15.11 15.48 15.29 15.29C15.67 14.92 16.34 14.92 16.71 15.29C16.75 15.34 16.79 15.39 16.83 15.45C16.87 15.5 16.9 15.56 16.92 15.62C16.95 15.68 16.97 15.74 16.98 15.8C16.99 15.87 17 15.94 17 16C17 16.26 16.89 16.52 16.71 16.71C16.52 16.89 16.26 17 16 17Z" fill="currentColor" />
                                                                </svg>
                                                            </div>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <div class="form-check form-switch form-check-custom form-check-solid mx-n3">
                                                                <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                            </div>
                                                            <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                                <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                    <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                    </svg>
                                                                </span>
                                                            </button>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <?php
                                                    if ($fitur['nama'] !== 'Cover') {
                                                    ?>
                                                        <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                            <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                                <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                                <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                                <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                                <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                            </svg>
                                                        </button>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Quotes') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 256 256">
                                                                <path d="M108,72v72H40a8,8,0,0,1-8-8V72a8,8,0,0,1,8-8h60A8,8,0,0,1,108,72Zm108-8H156a8,8,0,0,0-8,8v64a8,8,0,0,0,8,8h68V72A8,8,0,0,0,216,64Z" opacity="0.2" />
                                                                <path d="M100,56H40A16,16,0,0,0,24,72v64a16,16,0,0,0,16,16h60v8a32.1,32.1,0,0,1-32,32,8,8,0,0,0,0,16,48,48,0,0,0,48-48V72A16,16,0,0,0,100,56Zm0,80H40V72h60ZM216,56H156a16,16,0,0,0-16,16v64a16,16,0,0,0,16,16h60v8a32.1,32.1,0,0,1-32,32,8,8,0,0,0,0,16,48,48,0,0,0,48-48V72A16,16,0,0,0,216,56Zm0,80H156V72h60Z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Quotes') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Guest') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 8C16 10.2091 14.2091 12 12 12C9.79086 12 8 10.2091 8 8C8 5.79086 9.79086 4 12 4C14.2091 4 16 5.79086 16 8ZM14 8C14 9.10457 13.1046 10 12 10C10.8954 10 10 9.10457 10 8C10 6.89543 10.8954 6 12 6C13.1046 6 14 6.89543 14 8Z" fill="currentColor" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 19L6.55279 19.8944C6.214 19.725 6 19.3788 6 19C6 17.3594 6.4053 15.4253 7.32657 13.8663C8.26149 12.2841 9.79629 11 12 11C14.2037 11 15.7385 12.2841 16.6734 13.8663C17.5947 15.4253 18 17.3594 18 19C18 19.3788 17.786 19.725 17.4472 19.8944L17 19C17.4472 19.8944 17.4472 19.8944 17.4472 19.8944L17.4447 19.8957L17.4415 19.8973L17.4329 19.9015L17.4067 19.9141C17.3854 19.9242 17.3564 19.9378 17.3198 19.9543C17.2467 19.9874 17.1434 20.0322 17.012 20.0847C16.7494 20.1898 16.3733 20.3262 15.8997 20.4615C14.9537 20.7318 13.6102 21 12 21C10.3898 21 9.0463 20.7318 8.10028 20.4615C7.62669 20.3262 7.25062 20.1898 6.98798 20.0847C6.85659 20.0322 6.75334 19.9874 6.68021 19.9543C6.64364 19.9378 6.61457 19.9242 6.59326 19.9141L6.56713 19.9015L6.55847 19.8973L6.55526 19.8957L6.55393 19.895C6.55393 19.895 6.55279 19.8944 7 19ZM15.9739 18.3392C15.8815 17.1528 15.5436 15.8856 14.9516 14.8837C14.2615 13.7159 13.2963 13 12 13C10.7037 13 9.73851 13.7159 9.04843 14.8837C8.45643 15.8856 8.11851 17.1528 8.02613 18.3392C8.19918 18.4008 8.40815 18.4695 8.64972 18.5385C9.4537 18.7682 10.6102 19 12 19C13.3898 19 14.5463 18.7682 15.3503 18.5385C15.5918 18.4695 15.8008 18.4008 15.9739 18.3392Z" fill="currentColor" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 8C17.9477 8 17.5 8.44772 17.5 9C17.5 10.0252 17.4854 10.7932 17.1056 11.5528C16.8586 12.0468 17.0589 12.6474 17.5528 12.8944C19.1671 13.7016 20 15.3233 20 17C20 17.5523 20.4477 18 21 18C21.5523 18 22 17.5523 22 17C22 14.9492 21.0906 12.8555 19.2364 11.5722C19.5005 10.666 19.5003 9.79675 19.5 9.06575C19.5 9.04371 19.5 9.02179 19.5 9C19.5 8.44772 19.0523 8 18.5 8Z" fill="currentColor" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 8C6.05228 8 6.5 8.44772 6.5 9C6.5 10.0252 6.5146 10.7932 6.89439 11.5528C7.14135 12.0468 6.94113 12.6474 6.44717 12.8944C4.83292 13.7016 4 15.3233 4 17C4 17.5523 3.55228 18 3 18C2.44772 18 2 17.5523 2 17C2 14.9492 2.90938 12.8555 4.76355 11.5722C4.49945 10.666 4.49974 9.79675 4.49999 9.06575C4.49999 9.04371 4.5 9.02179 4.5 9C4.5 8.44772 4.94772 8 5.5 8Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Guest') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Countdown') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <rect width="20" height="20" x="2" y="2" opacity=".12" rx="10" />
                                                                <path fill-rule="evenodd" d="M4.53.47a.75.75 0 010 1.06l-3 3A.75.75 0 01.47 3.47l3-3a.75.75 0 011.06 0zM2.75 12a9.25 9.25 0 1118.5 0 9.25 9.25 0 01-18.5 0zM12 1.25C6.063 1.25 1.25 6.063 1.25 12S6.063 22.75 12 22.75 22.75 17.937 22.75 12 17.937 1.25 12 1.25zM12.75 8a.75.75 0 00-1.5 0v4c0 .25.125.485.334.624l3 2a.75.75 0 10.832-1.248l-2.666-1.777V8zm6.72-6.47A.75.75 0 0120.53.47l3 3a.75.75 0 01-1.06 1.06l-3-3z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Countdown') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Couple') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M19.73,16.663A3.467,3.467,0,0,0,20.5,14.5a3.5,3.5,0,0,0-7,0,3.467,3.467,0,0,0,.77,2.163A6.04,6.04,0,0,0,12,18.69a6.04,6.04,0,0,0-2.27-2.027A3.467,3.467,0,0,0,10.5,14.5a3.5,3.5,0,0,0-7,0,3.467,3.467,0,0,0,.77,2.163A6,6,0,0,0,1,22a1,1,0,0,0,1,1H22a1,1,0,0,0,1-1A6,6,0,0,0,19.73,16.663ZM7,13a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,7,13ZM3.126,21a4,4,0,0,1,7.748,0ZM17,13a1.5,1.5,0,1,1-1.5,1.5A1.5,1.5,0,0,1,17,13Zm-3.874,8a4,4,0,0,1,7.748,0ZM14,1a3.548,3.548,0,0,0-2,.562A3.548,3.548,0,0,0,10,1,3.452,3.452,0,0,0,7.306,2.254a4.135,4.135,0,0,0-.689,3.514c.568,2.762,4.474,4.884,4.918,5.118a1.005,1.005,0,0,0,.93,0c.444-.234,4.35-2.356,4.918-5.117a4.137,4.137,0,0,0-.689-3.515A3.452,3.452,0,0,0,14,1Zm1.425,4.365C15.169,6.6,13.352,8.048,12,8.852c-1.131-.681-3.149-2.139-3.426-3.488a2.172,2.172,0,0,1,.28-1.846A1.46,1.46,0,0,1,10,3a1.349,1.349,0,0,1,1.128.433,1,1,0,0,0,.845.491,1.1,1.1,0,0,0,.88-.463A1.323,1.323,0,0,1,14,3a1.46,1.46,0,0,1,1.145.518A2.174,2.174,0,0,1,15.424,5.365Z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Couple') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Event') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                                                <path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Event') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'SpecialGuest') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32">
                                                                <path style="text-indent:0;text-align:start;line-height:normal;text-transform:none;block-progression:tb;-inkscape-font-specification:Bitstream Vera Sans" d="M 16 5 C 12.145852 5 9 8.1458513 9 12 C 9 14.408843 10.23116 16.55212 12.09375 17.8125 C 8.5266131 19.342333 6 22.881262 6 27 L 8 27 C 8 24.466863 9.1726397 22.213966 11 20.75 L 15.3125 24.71875 L 16 25.375 L 16.6875 24.71875 L 21 20.75 C 22.82736 22.213966 24 24.466863 24 27 L 26 27 C 26 22.881262 23.473387 19.342333 19.90625 17.8125 C 21.76884 16.55212 23 14.408843 23 12 C 23 8.1458513 19.854148 5 16 5 z M 16 7 C 18.773268 7 21 9.2267317 21 12 C 21 14.773268 18.773268 17 16 17 C 13.226732 17 11 14.773268 11 12 C 11 9.2267317 13.226732 7 16 7 z M 16 19 C 17.14291 19 18.236948 19.22772 19.21875 19.65625 L 16 22.65625 L 12.78125 19.65625 C 13.763052 19.22772 14.85709 19 16 19 z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Special Guest') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Location') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg id="Layer_1" data-name="Layer 1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101 101">
                                                                <path d="M58.39,71,73.12,47.29a1.42,1.42,0,0,0,.12-.24A26.77,26.77,0,0,0,48.79,6.34a27,27,0,0,0-25,23.91,26.57,26.57,0,0,0,3.81,16.81,1.48,1.48,0,0,0,.11.22L41.87,71c-11.05,1.58-18.32,6.21-18.32,11.86,0,6.93,11.78,12.37,26.83,12.37S77.2,89.79,77.2,82.85C77.2,77.1,69.74,72.46,58.39,71ZM30.27,45.7a23.6,23.6,0,0,1-3.52-15.15A24,24,0,0,1,49,9.33,23.76,23.76,0,0,1,70.55,45.7a1.44,1.44,0,0,0-.12.25L50,78.78l-4.35-7.29h0L30.41,46A1.47,1.47,0,0,0,30.27,45.7Zm20.1,46.51c-14,0-23.83-4.94-23.83-9.37,0-4.07,7.25-7.88,17-9l5.15,8.62a1.5,1.5,0,0,0,1.27.73h0a1.5,1.5,0,0,0,1.27-.71l5.38-8.65c10.07,1.07,17.56,4.89,17.56,9.05C74.2,87.28,64.42,92.22,50.37,92.22Z" />
                                                                <path d="M50.37,42.41a9.74,9.74,0,1,0-9.74-9.74A9.75,9.75,0,0,0,50.37,42.41Zm0-16.48a6.74,6.74,0,1,1-6.74,6.74A6.75,6.75,0,0,1,50.37,25.93Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Location') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Story') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M22,7H18.414L12.707,1.293a1,1,0,0,0-1.414,0L5.586,7H2A1,1,0,0,0,1,8V22a1,1,0,0,0,1,1H22a1,1,0,0,0,1-1V8A1,1,0,0,0,22,7ZM12,3.414,15.586,7H8.414ZM21,21H3V9H21ZM5,13a1,1,0,0,1,1-1H18a1,1,0,0,1,0,2H6A1,1,0,0,1,5,13Zm12,4a1,1,0,0,1-1,1H8a1,1,0,0,1,0-2h8A1,1,0,0,1,17,17Z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Story') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Gallery') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path opacity="0.4" d="M9 10C10.1046 10 11 9.10457 11 8C11 6.89543 10.1046 6 9 6C7.89543 6 7 6.89543 7 8C7 9.10457 7.89543 10 9 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path opacity="0.4" d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Gallery') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Video') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="2" y="4" width="20" height="16" rx="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M15 12L10 9V15L15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Video') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Live') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <rect width="18" height="18" x="1" y="3" opacity=".12" rx="5" />
                                                                <path fill-rule="evenodd" d="M9 2.25h-.034c-1.371 0-2.447 0-3.311.07-.88.073-1.607.221-2.265.557A5.75 5.75 0 00.877 5.39C.54 6.048.393 6.775.32 7.655.25 8.519.25 9.595.25 10.966V13.034c0 1.371 0 2.447.07 3.311.073.88.221 1.607.557 2.265a5.75 5.75 0 002.513 2.513c.658.336 1.385.485 2.265.556.864.071 1.94.071 3.311.071H11.034c1.371 0 2.447 0 3.311-.07.88-.072 1.607-.221 2.265-.557a5.75 5.75 0 002.513-2.513c.323-.634.473-1.332.548-2.17.195.145.364.268.512.368.218.146.452.286.707.358a2.25 2.25 0 002.709-1.354c.095-.247.124-.519.137-.78.014-.266.014-.602.014-1.011V9.979c0-.409 0-.745-.014-1.01-.013-.262-.042-.534-.137-.78a2.25 2.25 0 00-2.709-1.355c-.255.072-.49.212-.707.358-.148.1-.317.223-.512.368-.075-.838-.224-1.536-.548-2.17a5.75 5.75 0 00-2.513-2.513c-.658-.336-1.385-.484-2.265-.556-.864-.071-1.94-.071-3.311-.071H9zM18.25 11V13c0 1.412 0 2.427-.066 3.223-.064.787-.188 1.295-.397 1.707a4.25 4.25 0 01-1.857 1.857c-.412.21-.92.333-1.707.397-.796.065-1.81.066-3.223.066H9c-1.413 0-2.427 0-3.223-.066-.787-.064-1.295-.188-1.706-.397a4.25 4.25 0 01-1.858-1.857c-.21-.412-.333-.92-.397-1.707-.065-.796-.066-1.81-.066-3.223v-2c0-1.412 0-2.427.066-3.223.064-.787.188-1.295.397-1.706a4.25 4.25 0 011.858-1.858c.411-.21.919-.333 1.706-.397C6.573 3.75 7.587 3.75 9 3.75h2c1.412 0 2.427 0 3.223.066.787.064 1.295.188 1.707.397a4.25 4.25 0 011.857 1.858c.21.411.333.919.397 1.706.065.796.066 1.81.066 3.223zm1.5 2.034V14c0 .267.002.32.009.365a.75.75 0 00.204.408c.031.032.073.065.287.226.348.261.586.44.77.563.191.129.262.155.277.159a.75.75 0 00.902-.451c.006-.014.028-.087.04-.317.01-.222.011-.519.011-.954v-4c0-.435 0-.732-.012-.954-.011-.23-.033-.302-.038-.316a.75.75 0 00-.903-.452c-.015.004-.086.03-.277.159a21.07 21.07 0 00-.77.563c-.214.16-.256.195-.287.227a.75.75 0 00-.204.408 2.872 2.872 0 00-.009.365V10.914m0 2.12V10.966" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Live') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Wallet') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path fill-rule="evenodd" d="M15.6 6H2v9.6c0 2.24 0 3.36.436 4.216a4 4 0 001.748 1.748C5.04 22 6.16 22 8.4 22h7.2c2.24 0 3.36 0 4.216-.436a4 4 0 001.748-1.748c.334-.655.412-1.466.43-2.816H21a3 3 0 110-6h.994c-.018-1.35-.096-2.16-.43-2.816a4 4 0 00-1.748-1.748C18.96 6 17.84 6 15.6 6z" opacity=".12" />
                                                                <path fill-rule="evenodd" d="M12.893 2.875c-.414-.118-.876-.125-2.093-.125H4a1.25 1.25 0 100 2.5h11.5l-.18-.24c-.73-.973-1.013-1.339-1.356-1.599a3.25 3.25 0 00-1.072-.536zM4 1.25A2.75 2.75 0 001.25 4v11.633c0 1.092 0 1.958.057 2.655.058.714.18 1.317.46 1.869a4.75 4.75 0 002.077 2.075c.55.281 1.154.403 1.868.461.697.057 1.563.057 2.655.057H15.633c1.092 0 1.958 0 2.655-.057.714-.058 1.317-.18 1.869-.46a4.75 4.75 0 002.075-2.076c.281-.552.403-1.155.461-1.869.057-.697.057-1.563.057-2.655v-3.266c0-1.092 0-1.958-.057-2.655-.058-.714-.18-1.317-.46-1.868a4.75 4.75 0 00-2.076-2.076c-.552-.281-1.155-.403-1.869-.461a16.186 16.186 0 00-.903-.044L16.52 4.11l-.068-.09c-.639-.852-1.05-1.401-1.58-1.804a4.75 4.75 0 00-1.568-.783c-.64-.183-1.326-.183-2.39-.183H4zm8 5.5h3.6c1.133 0 1.937 0 2.566.052.62.05 1.005.147 1.31.302a3.25 3.25 0 011.42 1.42c.155.305.251.69.302 1.31.01.13.02.269.026.416H21a3.75 3.75 0 000 7.5h.224c-.007.147-.015.285-.026.416-.05.62-.147 1.005-.302 1.31a3.25 3.25 0 01-1.42 1.42c-.305.155-.69.251-1.31.302-.63.051-1.433.052-2.566.052H8.4c-1.132 0-1.937 0-2.566-.052-.62-.05-1.005-.147-1.31-.302a3.25 3.25 0 01-1.42-1.42c-.155-.305-.251-.69-.302-1.31-.051-.63-.052-1.433-.052-2.566V6.75H12zm9.25 9.5V12.4v-.65H21a2.25 2.25 0 000 4.5h.25z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Wallet') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Gift') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M19.9707 10H3.9707V18C3.9707 21 4.9707 22 7.9707 22H15.9707C18.9707 22 19.9707 21 19.9707 18V10Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M21.5 7V8C21.5 9.1 20.97 10 19.5 10H4.5C2.97 10 2.5 9.1 2.5 8V7C2.5 5.9 2.97 5 4.5 5H19.5C20.97 5 21.5 5.9 21.5 7Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path opacity="0.4" d="M11.6408 4.99994H6.12076C5.78076 4.62994 5.79076 4.05994 6.15076 3.69994L7.57076 2.27994C7.94076 1.90994 8.55076 1.90994 8.92076 2.27994L11.6408 4.99994Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path opacity="0.4" d="M17.8696 4.99994H12.3496L15.0696 2.27994C15.4396 1.90994 16.0496 1.90994 16.4196 2.27994L17.8396 3.69994C18.1996 4.05994 18.2096 4.62994 17.8696 4.99994Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                                <path opacity="0.4" d="M8.93945 10V15.14C8.93945 15.94 9.81945 16.41 10.4895 15.98L11.4295 15.36C11.7695 15.14 12.1995 15.14 12.5295 15.36L13.4195 15.96C14.0795 16.4 14.9695 15.93 14.9695 15.13V10H8.93945Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Gift') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Rundown') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                                <path d="M2 2v13.6c0 2.24 0 3.36.436 4.216a4 4 0 001.748 1.748C5.04 22 6.16 22 8.4 22H18V2l-2.713 1.206c-.611.271-.917.407-1.226.441a2 2 0 01-.997-.146c-.287-.12-.541-.338-1.05-.774-.674-.578-1.011-.867-1.384-.991a2 2 0 00-1.26 0c-.373.124-.71.413-1.385.991-.508.436-.762.653-1.049.774a2 2 0 01-.997.146c-.31-.034-.615-.17-1.226-.441L2 2z" opacity=".12" />
                                                                <path fill-rule="evenodd" d="M9.134 1.024a2.75 2.75 0 011.732 0c.292.097.543.251.79.435.237.176.507.407.828.682l.019.017c.546.468.7.588.853.653.196.083.41.114.623.09.165-.017.346-.088 1.004-.38l2.712-1.206A.75.75 0 0118.75 2v9.25h.08c.535 0 .98 0 1.345.03.38.03.736.098 1.073.27a2.75 2.75 0 011.202 1.202c.172.337.24.694.27 1.073.03.365.03.81.03 1.345V20A2.75 2.75 0 0120 22.75H8.367c-1.092 0-1.958 0-2.655-.057-.714-.058-1.317-.18-1.868-.46a4.75 4.75 0 01-2.076-2.076c-.281-.552-.403-1.155-.461-1.869-.057-.697-.057-1.563-.057-2.655V2a.75.75 0 011.055-.685L5.017 2.52c.658.293.839.364 1.004.382a1.25 1.25 0 00.623-.091c.154-.065.306-.185.853-.653l.02-.017a16.6 16.6 0 01.826-.682c.248-.184.499-.338.791-.435zM20 21.25c.69 0 1.25-.56 1.25-1.25v-4.8c0-.572 0-.957-.025-1.252-.023-.287-.065-.425-.111-.515a1.25 1.25 0 00-.547-.547c-.09-.046-.227-.088-.515-.111-.295-.024-.68-.025-1.252-.025h-.05V20c0 .69.56 1.25 1.25 1.25zm-2.45 0H8.4c-1.132 0-1.937 0-2.566-.052-.62-.05-1.005-.147-1.31-.302a3.25 3.25 0 01-1.42-1.42c-.155-.305-.251-.69-.302-1.31-.051-.63-.052-1.433-.052-2.566V3.154l1.658.737.093.041c.52.232.928.414 1.356.46a2.75 2.75 0 001.371-.2c.397-.167.736-.458 1.168-.83l.077-.065c.345-.296.576-.493.765-.634.183-.136.288-.188.369-.215a1.25 1.25 0 01.787 0c.08.027.185.08.368.215.19.141.42.338.765.634l.077.066c.432.37.771.662 1.168.83a2.75 2.75 0 001.37.2c.429-.047.837-.229 1.357-.46l.093-.042 1.658-.737V20c0 .45.108.875.3 1.25zM6.25 9A.75.75 0 017 8.25h4a.75.75 0 010 1.5H7A.75.75 0 016.25 9zm3 4a.75.75 0 01.75-.75h3a.75.75 0 010 1.5h-3a.75.75 0 01-.75-.75zm.75 3.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3zM8 13a1 1 0 11-2 0 1 1 0 012 0zm-1 5a1 1 0 100-2 1 1 0 000 2z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Rundown') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'HealtProtocol') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512">
                                                                <path d="M275.3 250.5c7 7.4 18.4 7.4 25.5 0l108.9-114.2c31.6-33.2 29.8-88.2-5.6-118.8-30.8-26.7-76.7-21.9-104.9 7.7L288 36.9l-11.1-11.6C248.7-4.4 202.8-9.2 172 17.5c-35.3 30.6-37.2 85.6-5.6 118.8l108.9 114.2zm290 77.6c-11.8-10.7-30.2-10-42.6 0L430.3 402c-11.3 9.1-25.4 14-40 14H272c-8.8 0-16-7.2-16-16s7.2-16 16-16h78.3c15.9 0 30.7-10.9 33.3-26.6 3.3-20-12.1-37.4-31.6-37.4H192c-27 0-53.1 9.3-74.1 26.3L71.4 384H16c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h356.8c14.5 0 28.6-4.9 40-14L564 377c15.2-12.1 16.4-35.3 1.3-48.9z" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Healt Protocol') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'GuestBook') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.25 4.53286C9.73455 3.56279 7.93246 3 6 3C4.86178 3 3.76756 3.19535 2.75007 3.55499C2.45037 3.66091 2.25 3.94425 2.25 4.26212V18.5121C2.25 18.7556 2.36818 18.9839 2.56696 19.1245C2.76574 19.265 3.02039 19.3004 3.24993 19.2192C4.10911 18.9156 5.03441 18.75 6 18.75C7.99501 18.75 9.82325 19.4573 11.25 20.6357V4.53286Z" fill="currentColor" />
                                                                <path d="M12.75 20.6357C14.1768 19.4573 16.005 18.75 18 18.75C18.9656 18.75 19.8909 18.9156 20.7501 19.2192C20.9796 19.3004 21.2343 19.265 21.433 19.1245C21.6318 18.9839 21.75 18.7556 21.75 18.5121V4.26212C21.75 3.94425 21.5496 3.66091 21.2499 3.55499C20.2324 3.19535 19.1382 3 18 3C16.0675 3 14.2655 3.56279 12.75 4.53286V20.6357Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Guest Book') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'RSVP') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M16.5 6V6.75M16.5 9.75V10.5M16.5 13.5V14.25M16.5 17.25V18M7.5 12.75H12.75M7.5 15H10.5M3.375 5.25C2.75368 5.25 2.25 5.75368 2.25 6.375V9.40135C3.1467 9.92006 3.75 10.8896 3.75 12C3.75 13.1104 3.1467 14.0799 2.25 14.5987V17.625C2.25 18.2463 2.75368 18.75 3.375 18.75H20.625C21.2463 18.75 21.75 18.2463 21.75 17.625V14.5987C20.8533 14.0799 20.25 13.1104 20.25 12C20.25 10.8896 20.8533 9.92006 21.75 9.40135V6.375C21.75 5.75368 21.2463 5.25 20.625 5.25H3.375Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('RSVP') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    if ($fitur['nama'] == 'Thanks') {
                                    ?>
                                        <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                            <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>">
                                                <div class="d-flex flex-stack">
                                                    <div class="m-n4 d-flex">
                                                        <span class="pindahin fs-5 fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                            ::
                                                        </span>
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4" d="M19.86 8.09009C19.86 8.24009 19.86 8.39009 19.85 8.53009C18.32 7.96009 16.52 8.31009 15.32 9.39009C14.51 8.66009 13.46 8.25009 12.34 8.25009C9.88 8.25009 7.88 10.2601 7.88 12.7401C7.88 15.5701 9.3 17.6401 10.66 18.9801C10.55 18.9701 10.46 18.9501 10.38 18.9201C7.79 18.0301 2 14.3501 2 8.09009C2 5.33009 4.21999 3.1001 6.95999 3.1001C8.58999 3.1001 10.03 3.88009 10.93 5.09009C11.84 3.88009 13.28 3.1001 14.9 3.1001C17.64 3.1001 19.86 5.33009 19.86 8.09009Z" fill="currentColor" />
                                                                <path d="M17.9999 9.59009C16.9299 9.59009 15.9599 10.1101 15.3599 10.9101C14.7599 10.1101 13.7999 9.59009 12.7199 9.59009C10.8999 9.59009 9.41992 11.0701 9.41992 12.9101C9.41992 13.6201 9.52992 14.2701 9.72992 14.8701C10.6699 17.8401 13.5599 19.6101 14.9899 20.1001C15.1899 20.1701 15.5199 20.1701 15.7299 20.1001C17.1599 19.6101 20.0499 17.8401 20.9899 14.8701C21.1899 14.2601 21.2999 13.6101 21.2999 12.9101C21.2999 11.0701 19.8199 9.59009 17.9999 9.59009Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-gray-800 fs-6 ms-3"><?= Lang::bhs('Thanks') ?></span>
                                                    </div>
                                                    <div class="m-0 d-flex">
                                                        <div class="form-check form-switch form-check-custom form-check-solid mx-n3d">
                                                            <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                            <span class="svg-icon svg-icon-1 text-gray-800 text-hover-primary">
                                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="m13.94 5 5.061 5.06-.962.962a6.5 6.5 0 0 0-7.016 7.016l-1.96 1.96a2.25 2.25 0 0 1-1 .58l-5.115 1.395a.75.75 0 0 1-.92-.92l1.394-5.116a2.25 2.25 0 0 1 .58-1L13.94 5Zm7.091-2.03a3.579 3.579 0 0 1 0 5.06l-.97.97L15 3.94l.97-.97a3.578 3.578 0 0 1 5.061 0ZM14.28 13.974a2 2 0 0 1-1.441 2.497l-.584.144a5.729 5.729 0 0 0 .006 1.807l.54.13a2 2 0 0 1 1.45 2.51l-.187.632c.44.386.94.699 1.484.921l.494-.518a2 2 0 0 1 2.899 0l.498.525a5.28 5.28 0 0 0 1.483-.913l-.198-.686a2 2 0 0 1 1.442-2.496l.583-.144a5.729 5.729 0 0 0-.006-1.808l-.54-.13a2 2 0 0 1-1.45-2.51l.187-.63a5.28 5.28 0 0 0-1.484-.923l-.493.519a2 2 0 0 1-2.9 0l-.498-.525c-.544.22-1.044.53-1.483.912l.198.686ZM17.501 19c-.8 0-1.45-.672-1.45-1.5 0-.829.65-1.5 1.45-1.5.8 0 1.45.671 1.45 1.5 0 .828-.65 1.5-1.45 1.5Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="previewEdit" class="mx-2">
                                                <div class="fx-row d-flex flex-stack justify-content-between mb-4">
                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                    </button>
                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                            <path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" />
                                                            <path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" />
                                                            <path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" />
                                                            <path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="mb-7 previewEdit<?= $fitur['nama'] ?>"><?= $fitur['nama'] ?>
                                                </div>
                                            </div>
                                        </div>
                            <?php
                                    }
                                }
                            } else {
                                echo '<span class="text-gray-400 mt-1 fw-semibold fs-6">' . Lang::bhs('Tidak ada data') . '</span>';
                            }
                            ?>
                        </div>
                        <button type="button" class="btn btn-primary rounded px-7 py-3 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary w-100 mt-3">+ <?= Lang::bhs('Tambah Halaman') ?></button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card card-flush h-xl-100">
                    <div class="card-header pt-7">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark"><?= Lang::bhs('Daftar Tamu') ?></span>
                            <!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span> -->
                        </h3>
                        <div class="card-toolbar">
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <div class="d-flex align-items-center fw-bold d-block">
                                    <div class="text-muted fs-7 me-2"><?= Lang::bhs('Kelompok') ?></div>
                                    <select id="kelompokTamu" class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px">
                                        <option value="" selected><?= Lang::bhs('Semua') ?></option>
                                        <?php if ($model['kelompok']) {
                                            foreach ($model['kelompok'] as $kelompok) { ?>
                                                <option value="<?= ucwords($kelompok['kelompok']) ?>"><?= ucwords($kelompok['kelompok']) ?></option>
                                            <?php }
                                        } else { ?>
                                            <option value=""><?= Lang::bhs('Tidak ada kelompok') ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="d-flex align-items-center fw-bold d-block">
                                    <div class="text-muted fs-7 me-2"><?= Lang::bhs('Status') ?></div>
                                    <select id="statusTamu" class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-kt-table-widget-5="filter_status">
                                        <option value="" selected><?= Lang::bhs('Semua') ?></option>
                                        <option value="<?= Lang::bhs('Disetujui') ?>"><?= Lang::bhs('Disetujui') ?></option>
                                        <option value="<?= Lang::bhs('Menunggu') ?>"><?= Lang::bhs('Menunggu') ?></option>
                                    </select>
                                </div>
                                <?php
                                if ($model['undangan']['paket'] !== 'basic') {
                                ?>
                                    <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Import Tamu dari file Excel') ?>">
                                        <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#importTamu">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-table-import" width="15" height="15" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M4 13.5v-7.5a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6m-8 -10h16m-10 -6v11.5m-8 3.5h7m-3 -3l3 3l-3 3" />
                                            </svg>
                                        </button>
                                    </div>
                                <?php
                                }
                                ?>
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Cari Tamu') ?>">
                                    <button type="button" class="btn btn-light btn-sm cariTamu">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20 11a9 9 0 11-18 0 9 9 0 0118 0z" opacity=".12" />
                                            <path fill-rule="evenodd" d="M2.75 11a8.25 8.25 0 1116.5 0 8.25 8.25 0 01-16.5 0zM11 1.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75a9.712 9.712 0 006.344-2.346l3.126 3.126a.75.75 0 101.06-1.06l-3.126-3.126A9.712 9.712 0 0020.75 11c0-5.385-4.365-9.75-9.75-9.75z" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Tambah Tamu') ?>">
                                    <button type="button" class="btn btn-light btn-sm tambahTamu">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="w-100">
                            <form id="tambahTamu" action="<?= baseurl ?>/user/qondangan/tambahtamu" method="POST" style="display:none;">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="d-flex align-items-center fs-7 my-2">
                                            <span class="required"><?= Lang::bhs('Nama') ?></span>
                                        </label>
                                        <input type="text" class="form-control form-control-lg form-control-solid fokus" name="nama" placeholder="Jokowi" value="" />
                                        <input type="hidden" name="undangan" value="<?= $model['undangan']['id_q'] ?>" />
                                    </div>
                                    <div class="col-4">
                                        <label class="d-flex align-items-center fs-7 my-2">
                                            <span class="required"><?= Lang::bhs('Whatsapp') ?></span>
                                        </label>
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="whatsapp" placeholder="8139888xxxx" value="" />
                                    </div>
                                    <div class="col-4">
                                        <label class="d-flex align-items-center fs-7 my-2">
                                            <span><?= Lang::bhs('Kelompok') ?></span>
                                        </label>
                                        <input type="text" id="inputKelompok" class="form-control form-control-lg form-control-solid" name="kelompok" placeholder="<?= Lang::bhs('Keluarga/Teman/Mantan') ?>" value="" autocomplete="off" />
                                    </div>
                                    <input type="hidden" id="idundangan" value="<?= md5($model['undangan']['id_q']) ?>">
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-light w-100 tombolTambahTm"><?= Lang::bhs('Simpan') ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="w-100">
                            <form id="cariTamu" action="#" method="POST" style="display: none;">
                                <div class="row">
                                    <div class="col-12 mt-4">
                                        <input type="hidden" id="kategoribyIdUndangan" value="<?= md5($model['undangan']['id_q']) ?>">
                                        <input type="search" class="form-control form-control-lg form-control-solid" id="cari" placeholder="<?= Lang::bhs('Cari') ?>" value="" />
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <!--begin::Block-->
                    <div class="m-5">
                        <table id="listTamuUndangan" class="table table-striped table-row-dashed rounded nowrap gy-5 gs-7">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th><?= Lang::bhs('Nama') ?></th>
                                    <th><?= Lang::bhs('Whatsapp') ?></th>
                                    <th><?= Lang::bhs('Kelompok') ?></th>
                                    <th><?= Lang::bhs('Hadir') ?></th>
                                    <?php
                                    if ($model['undangan']['paket'] !== 'basic') {
                                    ?>
                                        <th><?= Lang::bhs('Dibuka') ?></th>
                                        <th><?= Lang::bhs('Status') ?></th>
                                    <?php
                                    }
                                    ?>
                                    <th class="text-end"><?= Lang::bhs('Aksi') ?></th>
                                </tr>
                            </thead>
                            <tbody class="listTamuUndangan fs-5" style="vertical-align:middle !important;">
                                <?php
                                $no = 1;
                                foreach ($model['daftarTamu'] as $tamu) {
                                ?>
                                    <tr>
                                        <td><?= $tamu['nama'] ?></td>
                                        <td><?= $tamu['whatsapp'] ?> </td>
                                        <td style="word-wrap:break-word;"><?= $tamu['kelompok'] ?> </td>
                                        <td>
                                            <?php
                                            if ($model['undangan']['paket'] !== 'basic') {
                                                if ($tamu['hadir'] == 'hadir') {
                                            ?>
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                                                            <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                                        </svg>
                                                    </span>
                                                <?php
                                                }
                                            } else {
                                                if ($tamu['konfirmasi_hadir'] == 'hadir') {
                                                ?>
                                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                                                            <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                                        </svg>
                                                    </span>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </td>
                                        <?php
                                        if ($model['undangan']['paket'] !== 'basic') {
                                        ?>
                                            <td>
                                                <?php
                                                if ($tamu['telah_dibuka'] == 'terbuka') {
                                                ?>
                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                                                            <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                                        </svg>
                                                    </span>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($tamu['statusTamu'] == 'approved') {
                                                ?>
                                                    <span class="badge py-3 px-4 fs-7 badge-light-primary"><?= Lang::bhs('Disetujui') ?></span>
                                                <?php } else { ?>
                                                    <div class="d-flex">
                                                        <span class="badge badge-sm py-3 px-4 fs-7 badge-light-danger" style="margin-right:5px;"><?= Lang::bhs('Menunggu') ?></span>
                                                        <button type="button" class="btn btn-icon btn-sm btn-bg-light btn-active-color-primary btn-sm approvedTamu" data-idundangan="<?= md5($tamu['id_undangan']) ?>" data-idtamu="<?= md5($tamu['id_tm']) ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Setujui Tamu Undangan ini') ?>">
                                                            <span class="text-success svg-icon svg-icon-3 approved<?= md5($tamu['id_tm']) ?>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                <?php } ?>
                                            </td>
                                        <?php
                                        }
                                        ?>
                                        <td class="text-end">
                                            <div class="d-flex justify-content-end flex-shrink-0">
                                                <input type="hidden" id="linkTamu<?= $tamu['id_tm'] ?>" value="<?= baseurl ?>/<?= $model['undangan']['slug'] ?>/<?= $tamu['nama'] ?>?reff=<?= $tamu['id_tm'] ?>">
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 copyLinkTamu" data-no="<?= $tamu['id_tm'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Salin tautan') ?>">
                                                    <span class=" svg-icon svg-icon-3 loadSalinTautan<?= $tamu['id_tm'] ?>">
                                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.503 4.627 5.5 6.75v10.504a3.25 3.25 0 0 0 3.25 3.25h8.616a2.251 2.251 0 0 1-2.122 1.5H8.75A4.75 4.75 0 0 1 4 17.254V6.75c0-.98.627-1.815 1.503-2.123ZM17.75 2A2.25 2.25 0 0 1 20 4.25v13a2.25 2.25 0 0 1-2.25 2.25h-9a2.25 2.25 0 0 1-2.25-2.25v-13A2.25 2.25 0 0 1 8.75 2h9Zm0 1.5h-9a.75.75 0 0 0-.75.75v13c0 .414.336.75.75.75h9a.75.75 0 0 0 .75-.75v-13a.75.75 0 0 0-.75-.75Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <?php
                                                if ($model['undangan']['paket'] !== 'basic') {
                                                ?>
                                                    <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 bukaKodeQR" data-no="<?= md5($tamu['id_tm']) ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Klik untuk membuka Kode QR') ?>">
                                                        <span class=" svg-icon svg-icon-3 loadKodeQR<?= md5($tamu['id_tm']) ?>">
                                                            <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8 6H6v2h2V6Z" fill="currentColor" />
                                                                <path d="M3 5.5A2.5 2.5 0 0 1 5.5 3h3A2.5 2.5 0 0 1 11 5.5v3A2.5 2.5 0 0 1 8.5 11h-3A2.5 2.5 0 0 1 3 8.5v-3ZM5.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM6 16h2v2H6v-2Z" fill="currentColor" />
                                                                <path d="M3 15.5A2.5 2.5 0 0 1 5.5 13h3a2.5 2.5 0 0 1 2.5 2.5v3A2.5 2.5 0 0 1 8.5 21h-3A2.5 2.5 0 0 1 3 18.5v-3Zm2.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM18 6h-2v2h2V6Z" fill="currentColor" />
                                                                <path d="M15.5 3A2.5 2.5 0 0 0 13 5.5v3a2.5 2.5 0 0 0 2.5 2.5h3A2.5 2.5 0 0 0 21 8.5v-3A2.5 2.5 0 0 0 18.5 3h-3ZM15 5.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-3ZM13 13h2.75v2.75H13V13ZM18.25 15.75h-2.5v2.5H13V21h2.75v-2.75h2.5V21H21v-2.75h-2.75v-2.5ZM18.25 15.75V13H21v2.75h-2.75Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                <?php
                                                }
                                                ?>
                                                <a href="https://wa.me/+62<?= $tamu['whatsapp'] ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="tooltip" data-idundangan="" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Kirim Whatsapp') ?>">
                                                    <span class=" svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm hapusDaftarTamu <?= md5($tamu['id_tm']) ?>" data-bs-toggle="tooltip" data-idundangan="<?= md5($tamu['id_undangan']) ?>" data-idtamu="<?= md5($tamu['id_tm']) ?>" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Hapus tamu') ?> undangan">
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kodeQR" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold"><?= Lang::bhs('Kode QR') ?></h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body loadKodeQRTamu">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="importTamu" tabindex="-1">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <form id="formImportTamu" class="form" action="<?= baseurl ?>/user/qondangan/importtamu" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h2 class="fw-bold"><?= Lang::bhs('Import Daftar Tamu') ?></h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body pt-5 pb-5">
                    <div class="form-group row">
                        <div class="col-12">
                            <label class="d-flex align-items-center fs-7 my-2">
                                <span class="required"><?= Lang::bhs('Pilih File') ?></span>
                            </label>
                            <input type="hidden" name="idundangan" id="idundangan" value="<?= md5($model['undangan']['id_q']) ?>">
                            <input type="hidden" name="undangan" value="<?= $model['undangan']['id_q'] ?>">
                            <input type="file" class="form-control form-control-lg form-control-solid" name="importTamu" accept="text/csv" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                    <button type="submit" class="btn btn-primary loadImportTamu"><?= Lang::bhs('Import') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="tema" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold"><?= Lang::bhs('Tema') ?></h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <form id="settingTemplateUndangan" action="<?= baseurl ?>/user/qondangan/simpansettingtemplate" method="POST">
                <div class="modal-body pt-5 pb-5">
                    <div id="loadTema"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                    <button type="submit" class="btn btn-light-primary simpanTemplateUndangan"><?= Lang::bhs('Simpan') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="pengaturan" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold"><?= Lang::bhs('Pengaturan') ?></h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <form id="settingTemplateUndangan" action="<?= baseurl ?>/user/qondangan/simpansettingtemplate" method="POST">
                <div class="modal-body pt-5">
                    <div class="fv-row mb-5">
                        <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                            <span><?= Lang::bhs('Link Undangan') ?></span>
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-secondary fw-normal">qondangan.com/</span>
                            <input type="text" id="inuseSlug" name="slug" class="form-control fw-normal" value="<?= $model['undangan']['slug'] ?>" />
                            <span class="input-group-text bg-secondary fw-normal">/nama-tamu</span>
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                            <span><?= Lang::bhs('Judul Undangan') ?></span>
                        </label>
                        <input type="text" name="judul" class="form-control form-control-lg form-control-solid fw-normal" value="<?= $model['undangan']['judul_undangan'] ?>" />
                    </div>
                    <div class="fv-row mb-5">
                        <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                            <span><?= Lang::bhs('Desktripsi Singkat') ?></span>
                        </label>
                        <textarea class="form-control fw-normal" name="deskripsi" data-kt-autosize="true"><?= $model['undangan']['deskripsi'] ?></textarea>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                            <span><?= Lang::bhs('Tanggal Acara Utama') ?></span>
                        </label>
                        <input type="datetime-local" class="form-control form-control-lg form-control-solid fw-normal" name="tgl_acara" value="<?= date('Y-m-d\TH:i:s', strtotime($model['undangan']['tgl_acara'])) ?>" />
                    </div>
                    <div class="fv-row mb-5">
                        <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                            <span><?= Lang::bhs('Zona Waktu') ?></span>
                        </label>
                        <select class="form-select form-select-solid" name="zonawaktu" data-control="select2" data-placeholder="<?= Lang::bhs('Pilih...') ?>" data-hide-search="true">
                            <option></option>
                            <option value="WIB" selected>WIB</option>
                            <option value="WITA">WITA</option>
                            <option value="WIT">WIT</option>
                        </select>
                    </div>
                    <div class="fv-row mb-5">
                        <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                            <span><?= Lang::bhs('Alamat Acara') ?></span>
                        </label>
                        <textarea class="form-control fw-normal" name="alamat" data-kt-autosize="true" placeholder="Jl. Gajah Mada, No.1A, Jakarta Pusat, DKI Jakarta"><?= $model['undangan']['alamat'] ?></textarea>
                    </div>
                    <input type="hidden" name="oldslug" value="<?= $model['undangan']['slug'] ?>">
                    <input type="hidden" name="undangan" value="<?= $model['undangan']['id_q'] ?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                    <button type="submit" class="btn btn-light-primary simpanTemplateUndangan"><?= Lang::bhs('Simpan Perubahan') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="musik" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold"><?= Lang::bhs('Musik') ?></h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <form id="settingTemplateUndangan" action="<?= baseurl ?>/user/qondangan/simpansettingtemplate" method="POST">
                <div class="modal-body pt-5 pb-5">
                    <div class="fv-row mb-7">
                        <div class="col-12 mb-3">
                            <div class="border border-dashed border-gray-500 rounded px-7 py-2">
                                <div class=" d-flex flex-stack">
                                    <div class="m-n4">
                                        <span class="fs-6 ms-3"><?= Lang::bhs('Status Undangan') ?> <span class="badge badge-warning text-black fw-normal statusText"><?= $model['config']['status-undangan'] == 'Aktif' ? 'Aktif' : 'Nonaktif' ?></span></span>
                                    </div>
                                    <div class="m-0 d-flex mr-n2 py-2">
                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input h-20px w-30px statusUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" type="checkbox" <?= $model['config']['status-undangan'] == 'Aktif' ? 'checked' : '' ?> value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fv-row">
                        <ul class="nav nav-fill nav-tabs nav-line-tabs mb-5 fs-6">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#default"><?= Lang::bhs('Default') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#soundcloud"><?= Lang::bhs('SoundCloud') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#upload"><?= Lang::bhs('Upload') ?></a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="default" role="tabpanel">
                                <div class="row d-flex">
                                    <div class="col-4">
                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="<?= Lang::bhs('Pilih...') ?>" data-hide-search="true">
                                            <option></option>
                                            <option value="WIB" selected>WIB</option>
                                            <option value="WITA">WITA</option>
                                            <option value="WIT">WIT</option>
                                        </select>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group mb-5">
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="soundcloud" role="tabpanel">
                                <div class="row d-flex">
                                    <div class="col-12 mb-5">
                                        <div class="border bg-light-danger rounded px-7 py-2">
                                            <div class=" d-flex flex-stack">
                                                <div class="m-n4">
                                                    <span class="fs-6 ms-3"><?= Lang::bhs('Tutorial Custom Music') ?></span>
                                                </div>
                                                <div class="m-0 d-flex mr-n2 py-2">
                                                    <a href="#" class="badge badge-warning text-black fw-normal"><?= Lang::bhs('Klik disini') ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                                            <span><?= Lang::bhs('Sound Cloud Embed Code') ?></span>
                                        </label>
                                        <textarea class="form-control fw-normal" data-kt-autosize="true"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="upload" role="tabpanel">
                                <div class="row d-flex">
                                    <div class="col-12">
                                        <input type="file" class="form-control fw-normal" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                    <button type="submit" class="btn btn-light-primary simpanTemplateUndangan"><?= Lang::bhs('Simpan') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="background" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold"><?= Lang::bhs('Background') ?></h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <form id="settingTemplateUndangan" action="<?= baseurl ?>/user/qondangan/simpansettingtemplate" method="POST">
                <div class="modal-body pt-5 pb-5">
                    <div class="fv-row">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                    <button type="submit" class="btn btn-light-primary simpanTemplateUndangan"><?= Lang::bhs('Simpan') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="preview" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content shadow-none" style="background-color: transparent !important;width:400px;">
            <div class="bg-white previewTemplateTema" style="border-left: 5px solid #fff;border-right: 5px solid #fff; border-top: 12px solid #fff;border-bottom: 20px solid #fff;border-radius: 20px; box-shadow: 0px 0px 10px rgba(0,0,0,0.3);"></div>
            <span class="btn btn-primary text-center mt-4 rounded-4" data-bs-dismiss="modal">Tutup</span>
        </div>
    </div>
</div>

<div class="modal fade" id="upgrade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold">
                    <?= Lang::bhs('Unlock All Features') ?>
                </h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body pt-5 pb-5">
                <div class="fv-row">
                    <span class="mt-1 fw-semibold fs-6"><?= Lang::bhs('Paket anda belum punya akses untuk fitur ini, upgrade paket anda untuk mengaktifkan fitur ini.') ?></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editKontenUndangan" tabindex="-1"></div>

<div class="modal fade" id="Galeri" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bold"><?= Lang::bhs('Upgrade Paket Anda') ?></h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary tutupModal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body pt-5 pb-5">
                <div class="fv-row">
                    <span class="mt-1 fw-semibold fs-6"><?= Lang::bhs('Paket anda belum punya akses untuk fitur ini, upgrade paket anda untuk mengaktifkan fitur ini.') ?></span>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light tutupModal"><?= Lang::bhs('Tutup') ?></button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="terimaTamu" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog mw-650px">
        <div class="modal-content">
            <form id="formImportTamu" class="form" action="<?= baseurl ?>/user/qondangan/importtamu" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h2 class="fw-bold"><?= Lang::bhs('Terima Tamu') ?></h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body pt-5 pb-5">
                    <div class="row g-3 g-lg-6">
                        <div class="col-12">
                            <input type="radio" class="btn-check" name="radio_buttons_2" value="apps" checked="checked" id="kt_radio_buttons_2_option_1" />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_radio_buttons_2_option_1">
                                <span class="svg-icon svg-icon-4x me-4">
                                    <svg width="24" height="24" viewBox="0 0 15 15" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 8.5H8.5V12M14 8.5H15M12 14.5H8M11 11.5H14.5V15M3 3.5H4M11 3.5H12M3 11.5H4M1.5 0.5H5.5C6.05228 0.5 6.5 0.947715 6.5 1.5V5.5C6.5 6.05228 6.05228 6.5 5.5 6.5H1.5C0.947715 6.5 0.5 6.05228 0.5 5.5V1.5C0.5 0.947715 0.947715 0.5 1.5 0.5ZM9.5 0.5H13.5C14.0523 0.5 14.5 0.947715 14.5 1.5V5.5C14.5 6.05228 14.0523 6.5 13.5 6.5H9.5C8.94772 6.5 8.5 6.05228 8.5 5.5V1.5C8.5 0.947715 8.94772 0.5 9.5 0.5ZM1.5 8.5H5.5C6.05228 8.5 6.5 8.94772 6.5 9.5V13.5C6.5 14.0523 6.05228 14.5 5.5 14.5H1.5C0.947715 14.5 0.5 14.0523 0.5 13.5V9.5C0.5 8.94772 0.947715 8.5 1.5 8.5Z" stroke="black" />
                                    </svg>
                                </span>
                                <span class="d-block fw-semibold text-start">
                                    <span class="text-dark fw-bold d-block fs-3"><?= Lang::bhs('Scan QR-Code') ?></span>
                                    <span class="text-muted fw-semibold fs-6">
                                        Lorem ipsum dolor sit amet.
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-12">
                            <input type="radio" class="btn-check" name="radio_buttons_2" value="sms" id="kt_radio_buttons_2_option_2" />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_radio_buttons_2_option_2">
                                <span class="svg-icon svg-icon-4x me-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.7111 11.3499L18.7011 13.2499L12.6211 7.16993L14.5111 4.15992C15.3911 2.76992 17.1611 2.70995 18.4511 3.99995L21.8611 7.40992C23.0811 8.63992 23.0011 10.5299 21.7111 11.3499Z" fill="black" />
                                        <path opacity="0.4" d="M16.0003 21.2898L6.64034 22.3898C5.99034 22.4698 5.41034 22.3698 4.92034 22.1298C4.40034 21.8698 3.99034 21.4698 3.73034 20.9398C3.49034 20.4498 3.40034 19.8798 3.47034 19.2398L4.51033 10.5298C4.68033 10.6198 4.87034 10.6998 5.06034 10.7598C5.51034 10.9198 5.99034 10.9998 6.50034 10.9998C7.64034 10.9998 8.67035 10.5798 9.46035 9.87982C9.81035 9.57982 10.1103 9.21982 10.3503 8.81982C10.5603 8.46982 10.7203 8.09983 10.8303 7.69983C10.8903 7.49983 10.9303 7.28982 10.9603 7.06982L12.6203 7.1698L18.7003 13.2598L18.9603 17.6798C19.2103 20.1598 18.3503 21.0198 16.0003 21.2898Z" fill="currentColor" />
                                        <path d="M8.78023 18.2798L4.93022 22.1298C4.40022 21.8698 4.00023 21.4698 3.74023 20.9398L7.59023 17.0898C7.93023 16.7598 8.46023 16.7598 8.78023 17.0898C9.11023 17.4198 9.11023 17.9498 8.78023 18.2798Z" fill="black" />
                                        <path d="M6.5 2C5.44 2 4.46 2.36999 3.69 2.98999C2.65 3.80999 2 5.08 2 6.5C2 7.34 2.23999 8.14001 2.64999 8.82001C3.18999 9.72001 4.04 10.42 5.06 10.76C5.51 10.92 5.99 11 6.5 11C7.64 11 8.67001 10.58 9.46001 9.88C9.81001 9.58 10.11 9.22001 10.35 8.82001C10.56 8.47001 10.72 8.10001 10.83 7.70001C10.94 7.32001 11 6.91 11 6.5C11 4.01 8.99 2 6.5 2ZM8.16 7.25H7.27V8.17999C7.27 8.58999 6.93 8.92999 6.52 8.92999C6.11 8.92999 5.77 8.58999 5.77 8.17999V7.25H4.8C4.39 7.25 4.05 6.91 4.05 6.5C4.05 6.09 4.39 5.75 4.8 5.75H5.77V4.82001C5.77 4.41001 6.11 4.07001 6.52 4.07001C6.93 4.07001 7.27 4.41001 7.27 4.82001V5.75H8.16C8.57 5.75 8.91 6.09 8.91 6.5C8.91 6.91 8.58 7.25 8.16 7.25Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="d-block fw-semibold text-start">
                                    <span class="text-dark fw-bold d-block fs-3"><?= Lang::bhs('Check-In Manual') ?></span>
                                    <span class="text-muted fw-semibold fs-6">Lorem ipsum dolor sit amet consectetur.</span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="position-fixed top-0 end-0 p-3 z-index-3">
    <div id="suksesToast" class="toast bg-light" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success">
            <strong class="me-auto text-white mt-1"><?= Lang::bhs('Sukses') ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Tamu berhasil disimpan.
        </div>
    </div>
</div>
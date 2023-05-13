<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <?php
            if ($model['undangan']['paket'] !== 'basic') {
            ?>
                <div class="row g-3 g-lg-6">
                    <div class="col-xl-4">
                        <div class="card card-flush h-xl-100">

                            <div class="card-header pt-7">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-700"><?= Lang::bhs('Konten Undangan') ?></span>
                                    <div class="d-flex mt-1">
                                        <span class="text-gray-600 mt-1 fw-semibold fs-6 DesKonten"></span>
                                    </div>
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4">
                                    <div class="col-12 mb-3">
                                        <div class="border bg-primary rounded px-7 py-2 hover-elevate-up shadow-xs parent-hover">
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
                                        <div class="border border-dashed border-gray-300 rounded px-7 py-2 hover-elevate-up shadow-xs parent-hover">
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
                                <div class="pe-6 me-n6">
                                    <div class="pe-6 me-n6 pt-2" id="sortable" data-undangan="<?= $model['undangan']['id_q'] ?>">
                                        <?php
                                        if (isset($model['config']['fitur-undangan']) && is_array($model['config']['fitur-undangan'])) {
                                            foreach ($model['config']['fitur-undangan'] as $config => $fitur) {
                                                if ($fitur['nama'] == 'Cover') {
                                                    $nama = Lang::bhs('Cover');
                                                } elseif ($fitur['nama'] == 'Greeting') {
                                                    $nama = Lang::bhs('Greeting');
                                                } elseif ($fitur['nama'] == 'QR') {
                                                    $nama = Lang::bhs('QR Code');
                                                } elseif ($fitur['nama'] == 'Quotes') {
                                                    $nama = Lang::bhs('Quotes');
                                                } elseif ($fitur['nama'] == 'Guest') {
                                                    $nama = Lang::bhs('Guest');
                                                } elseif ($fitur['nama'] == 'Countdown') {
                                                    $nama = Lang::bhs('Countdown');
                                                } elseif ($fitur['nama'] == 'Couple') {
                                                    $nama = Lang::bhs('Couple');
                                                } elseif ($fitur['nama'] == 'Event') {
                                                    $nama = Lang::bhs('Event');
                                                } elseif ($fitur['nama'] == 'SpecialGuest') {
                                                    $nama = Lang::bhs('Special Guest');
                                                } elseif ($fitur['nama'] == 'Location') {
                                                    $nama = Lang::bhs('Location');
                                                } elseif ($fitur['nama'] == 'Story') {
                                                    $nama = Lang::bhs('Story');
                                                } elseif ($fitur['nama'] == 'Gallery') {
                                                    $nama = Lang::bhs('Gallery');
                                                } elseif ($fitur['nama'] == 'Video') {
                                                    $nama = Lang::bhs('Video');
                                                } elseif ($fitur['nama'] == 'Live') {
                                                    $nama = Lang::bhs('Live');
                                                } elseif ($fitur['nama'] == 'Wallet') {
                                                    $nama = Lang::bhs('Wallet');
                                                } elseif ($fitur['nama'] == 'Gift') {
                                                    $nama = Lang::bhs('Gift');
                                                } elseif ($fitur['nama'] == 'Rundown') {
                                                    $nama = Lang::bhs('Rundown');
                                                } elseif ($fitur['nama'] == 'HealtProtocol') {
                                                    $nama = Lang::bhs('Healt Protocol');
                                                } elseif ($fitur['nama'] == 'GuestBook') {
                                                    $nama = Lang::bhs('Guest Book');
                                                } elseif ($fitur['nama'] == 'RSVP') {
                                                    $nama = Lang::bhs('RSVP');
                                                } elseif ($fitur['nama'] == 'Thanks') {
                                                    $nama = Lang::bhs('Thanks');
                                                } else {
                                                    $nama = $fitur['nama'];
                                                }
                                                if ($fitur['nama'] == 'QR' && $model['undangan']['paket'] == 'basic') {
                                                    $upgrade = 'data-bs-toggle="modal" data-bs-target="#upgrade"';
                                                }
                                                if ($fitur['aktif'] == 'Yes') {
                                        ?>
                                                    <div id="<?= $fitur['nama'] ?>" class="dataUrut" data-id="<?= $fitur['nama'] ?>">
                                                        <div class="class<?= $fitur['nama'] ?> border border-dashed border-gray-300 rounded px-7 py-2 mb-3 hover-elevate-up shadow-xs parent-hover bg-hover-light-primary" data-id="<?= $fitur['nama'] ?>" <?= $fitur['nama'] == 'QR' && $model['undangan']['paket'] == 'basic' ? $upgrade : '' ?> <?= $fitur['nama'] == 'Cover' ? 'disabled' : '' ?>>
                                                            <div class="d-flex flex-stack">
                                                                <div class="m-n4 d-flex">
                                                                    <span class="<?= $fitur['nama'] !== 'Cover' ? 'pindahin text-primary' : 'text-secondary' ?> fw-bold mx-3" data-id="<?= $fitur['nama'] ?>">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M19.4 13.9411L10.7 5.24112C10.4 4.94112 10 4.84104 9.60001 5.04104C9.20001 5.24104 9 5.54107 9 5.94107V18.2411C9 18.6411 9.20001 18.941 9.60001 19.141C9.70001 19.241 9.9 19.2411 10 19.2411C10.2 19.2411 10.4 19.141 10.6 19.041C11.4 18.441 12.1 17.941 12.9 17.541L14.4 21.041C14.6 21.641 15.2 21.9411 15.8 21.9411C16 21.9411 16.2 21.9411 16.4 21.8411C17.2 21.5411 17.5 20.6411 17.2 19.8411L15.7 16.2411C16.7 15.9411 17.7 15.741 18.8 15.541C19.2 15.541 19.5 15.2411 19.6 14.8411C19.8 14.6411 19.7 14.2411 19.4 13.9411Z" fill="currentColor" />
                                                                            <path opacity="0.3" d="M15 6.941C14.8 6.941 14.7 6.94102 14.6 6.84102C14.1 6.64102 13.9 6.04097 14.2 5.54097L15.2 3.54097C15.4 3.04097 16 2.84095 16.5 3.14095C17 3.34095 17.2 3.941 16.9 4.441L15.9 6.441C15.7 6.741 15.4 6.941 15 6.941ZM18.4 9.84102L20.4 8.84102C20.9 8.64102 21.1 8.04097 20.8 7.54097C20.6 7.04097 20 6.84095 19.5 7.14095L17.5 8.14095C17 8.34095 16.8 8.941 17.1 9.441C17.3 9.841 17.6 10.041 18 10.041C18.2 9.94097 18.3 9.94102 18.4 9.84102ZM7.10001 10.941C7.10001 10.341 6.70001 9.941 6.10001 9.941H4C3.4 9.941 3 10.341 3 10.941C3 11.541 3.4 11.941 4 11.941H6.10001C6.70001 11.941 7.10001 11.541 7.10001 10.941ZM4.89999 17.1409L6.89999 16.1409C7.39999 15.9409 7.59999 15.341 7.29999 14.841C7.09999 14.341 6.5 14.141 6 14.441L4 15.441C3.5 15.641 3.30001 16.241 3.60001 16.741C3.80001 17.141 4.1 17.341 4.5 17.341C4.6 17.241 4.79999 17.2409 4.89999 17.1409Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <span class="<?= ($fitur['nama'] == 'QR' && $model['undangan']['paket'] == 'basic') ? 'text-gray-400' : 'text-gray-700' ?> ms-3 mt-1"><?= $nama ?></span>
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
                                                                        if ($fitur['nama'] !== 'Cover') {
                                                                        ?>
                                                                            <div class="form-check form-switch form-check-custom form-check-solid mx-n3">
                                                                                <input class="form-check-input h-20px w-30px kontenUndangan" data-undangan="<?= $model['undangan']['id_q'] ?>" data-konten="<?= $fitur['nama'] ?>" type="checkbox" <?= $fitur['tampil'] == 'Yes' ? 'checked' : '' ?> value="" />
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end editKontenUndangan" data-id="<?= $fitur['nama'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
                                                                            <span class="text-gray-600 text-hover-primary">
                                                                                <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                                                                <div>
                                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary">
                                                                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                                            <path d="M2 12.99V15C2 20 4 22 9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M11 8C11 9.1 10.1 10 9 10C7.9 10 7 9.1 7 8C7 6.9 7.9 6 9 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                            <path d="M2.66992 18.9501L7.59992 15.6401C8.38992 15.1101 9.52992 15.1701 10.2399 15.7801L10.5699 16.0701C11.3499 16.7401 12.6099 16.7401 13.3899 16.0701L17.5499 12.5001C18.3299 11.8301 19.5899 11.8301 20.3699 12.5001L21.9999 13.9001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                                        </svg>
                                                                        <span class="text-gray-700 fs-6 ms-1"><?= Lang::bhs('Background') ?></span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-sm border bg-secondary rounded-2 bg-hover-light-primary" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>">
                                                                        <svg class="mx-n3" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="width: 18px;">
                                                                            <path d="M5.293 5.293a1 1 0 0 1 1.414 0L12 10.586l5.293-5.293a1 1 0 1 1 1.414 1.414L13.414 12l5.293 5.293a1 1 0 0 1-1.414 1.414L12 13.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L10.586 12 5.293 6.707a1 1 0 0 1 0-1.414z" fill="currentColor" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <?php
                                                                if ($fitur['nama'] !== 'Cover') {
                                                                ?>
                                                                    <button type="button" class="btn btn-sm border border-dashed border-danger rounded-2 bg-hover-light-warning hapusHalaman" data-halaman="<?= $fitur['nama'] ?>" data-idundangan="<?= $model['undangan']['id_q'] ?>" data-slug="<?= $model['undangan']['slug'] ?>">
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
                    </div>

                    <div class="col-xl-8">
                        <div class="row gy-5 g-xl-10">
                            <div class="col-12 col-sm-6 mb-10">
                                <div class="card card-flush h-100" style="background-image:url('<?= baseurl ?>/static/admin/media/svg/shapes/top-green.png" data-theme="light">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-sm-7 pe-0 mb-5 mb-sm-0">
                                                <div class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
                                                    <div class="mb-7">
                                                        <div class="mb-6">
                                                            <h3 class="fs-2x fw-bolder text-white"><?= ($model['statistikTamu']['total'] + ($model['statistikTamu']['diajak']['diajak'] - $model['statistikTamu']['total'])) ?></h3>
                                                            <span class="fw-semibold text-white opacity-75"><?= Lang::bhs('Total Tamu') ?></span>
                                                        </div>
                                                        <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                            <div class="d-flex align-items-center me-5 me-xl-13">
                                                                <div class="symbol symbol-30px symbol-circle me-3">
                                                                    <span class="symbol-label" style="background:rgba(255, 255, 255, 0.15);">
                                                                        <span class="svg-icon svg-icon-4 svg-icon-white">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
                                                                                <path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="m-0">
                                                                    <span class="text-white text-opacity-75"><?= Lang::bhs('Tamu utama') ?></span>
                                                                    <span class="fw-bold text-white fs-5 fw-bolder d-block"><?= $model['statistikTamu']['total'] ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="symbol symbol-30px symbol-circle me-3">
                                                                    <span class="symbol-label" style="background: rgba(255, 255, 255, 0.15);">
                                                                        <span class="svg-icon svg-icon-4 svg-icon-white">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                                                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="m-0">
                                                                    <span class="text-white text-opacity-75"><?= Lang::bhs('Tamu yang diajak') ?></span>
                                                                    <span class="fw-bold text-white fs-5 d-block"><?= ($model['statistikTamu']['diajak']['diajak'] - $model['statistikTamu']['total']) ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mb-10">
                                <div class="card card-flush mb-5 mb-10 h-100" style="background-color: #CBD4F4">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-column mb-7">
                                            <a href="#" class="text-dark text-hover-primary fw-bold fs-3"><?= Lang::bhs('Ringkasan') ?></a>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center mb-9 me-2">
                                                    <div class="symbol symbol-40px me-3">
                                                        <div class="symbol-label bg-light">
                                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="currentColor" />
                                                                    <path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="fs-3 text-dark fw-bold lh-1"><?= $model['statistikTamu']['terbuka'] ?></div>
                                                        <div class="fs-7 text-gray-600 fw-bold"><?= Lang::bhs('Undangan telah dibuka') ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center mb-9 ms-2">
                                                    <div class="symbol symbol-40px me-3">
                                                        <div class="symbol-label bg-light">
                                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="currentColor" />
                                                                    <path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="fs-3 text-dark fw-bold lh-1"><?= $model['statistikTamu']['hadir'] ?></div>
                                                        <div class="fs-7 text-gray-600 fw-bold"><?= Lang::bhs('Tamu hadir') ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center me-2">
                                                    <div class="symbol symbol-40px me-3">
                                                        <div class="symbol-label bg-light">
                                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="currentColor" />
                                                                    <path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="fs-3 text-dark fw-bold lh-1"><?= $model['statistikTamu']['konfirmasi'] ?></div>
                                                        <div class="fs-7 text-gray-600 fw-bold"><?= Lang::bhs('Menunggu konfirmasi') ?></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                }
                    ?>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-0 pt-5">
                                <div class="card-title">
                                    <span class="fw-bold fs-3 text-gray-700"><?= Lang::bhs('Daftar Tamu') ?></span>
                                </div>
                            </div>
                            <div class="card-header border-0">
                                <div class="card-title">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <input type="hidden" id="kategoribyIdUndangan" value="<?= md5($model['undangan']['id_q']) ?>">
                                        <input id="cari" type="text" data-kt-user-table-filter="search" class="form-control form-control-sm form-control-solid w-250px ps-14" placeholder="<?= Lang::bhs('Cari Tamu') ?>" />
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                        <button type="button" class="btn btn-sm btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <?= Lang::bhs('Filter') ?>
                                        </button>
                                        <div id="filterUndanganKelompok" class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-dark fw-bold"><?= Lang::bhs('Filter') ?></div>
                                            </div>
                                            <div class="separator border-gray-200"></div>
                                            <div class="px-7 py-5">
                                                <div class="mb-5">
                                                    <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                                                        <span><?= Lang::bhs('Kelompok') ?></span>
                                                    </label>
                                                    <select id="kelompokTamu" class="form-select" data-control="select2" data-placeholder="<?= Lang::bhs('Semua') ?>" data-hide-search="false">
                                                        <option></option>
                                                        <?php if ($model['kelompok']) {
                                                            foreach ($model['kelompok'] as $kelompok) { ?>
                                                                <option value="<?= ucwords($kelompok['kelompok']) ?>"><?= ucwords($kelompok['kelompok']) ?></option>
                                                            <?php }
                                                        } else { ?>
                                                            <option value=""><?= Lang::bhs('Tidak ada kelompok') ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="mb-5">
                                                    <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                                                        <span><?= Lang::bhs('Status') ?></span>
                                                    </label>
                                                    <select id="statusTamu" class="form-select" data-control="select2" data-placeholder="<?= Lang::bhs('Semua') ?>" data-hide-search="true" data-kt-table-widget-5="filter_status" data-placeholder="<?= Lang::bhs('Semua') ?>">
                                                        <option value=""></option>
                                                        <option value="<?= Lang::bhs('Disetujui') ?>"><?= Lang::bhs('Disetujui') ?></option>
                                                        <option value="<?= Lang::bhs('Menunggu') ?>"><?= Lang::bhs('Menunggu') ?></option>
                                                    </select>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="buset" class="btn btn-sm btn-light btn-active-light-primary me-2 resetFilterTamu" data-reset="" data-kt-menu-dismiss="true"><?= Lang::bhs('Reset') ?></button>
                                                    <button type="button" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true"><?= Lang::bhs('Tutup') ?></button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        if ($model['undangan']['paket'] !== 'basic') {
                                        ?>
                                            <button type="button" class="btn btn-sm btn-light-primary me-3" title="<?= Lang::bhs('Import Tamu dari file Excel') ?>" data-bs-toggle="modal" data-bs-target="#importTamu">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-table-import" width="15" height="15" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M4 13.5v-7.5a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6m-8 -10h16m-10 -6v11.5m-8 3.5h7m-3 -3l3 3l-3 3" />
                                                    </svg>
                                                </span>
                                                <?= Lang::bhs('Import') ?>
                                            </button>
                                        <?php
                                        }
                                        ?>
                                        <button class="btn btn-sm btn-flex btn-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <span class="svg-icon svg-icon-3">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                                    <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                                    <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                                                </svg>
                                            </span>
                                            <?= Lang::bhs('Tambah Tamu') ?>
                                        </button>
                                    </div>
                                    <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                        <div class="fw-bold me-5">
                                            <span class="me-2" data-kt-user-table-select="selected_count"></span><?= Lang::bhs('Terpilih') ?>
                                        </div>
                                        <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected"><?= Lang::bhs('Hapus yang dipilih') ?></button>
                                    </div>
                                </div>
                            </div>
                            <form id="tambahTamu" action="<?= baseurl ?>/user/qondangan/tambahtamu" method="POST" style="display:none;">
                                <div class="card-body py-4">
                                    <div class="row mb-10">
                                        <div class="col-sm-4">
                                            <label class="d-flex align-items-center text-gray-600 fs-7 my-2">
                                                <span class="required"><?= Lang::bhs('Nama') ?></span>
                                            </label>
                                            <input type="text" class="form-control form-control-lg fs-7 fokus" name="nama" placeholder="Jokowi" value="" />
                                            <input type="hidden" name="undangan" value="<?= $model['undangan']['id_q'] ?>" />
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="d-flex align-items-center text-gray-600 fs-7 my-2">
                                                <span class="required"><?= Lang::bhs('Whatsapp') ?></span>
                                            </label>
                                            <input type="text" class="form-control form-control-lg fs-7" name="whatsapp" placeholder="8139888xxxx" value="" />
                                        </div>
                                        <div class="col-sm-4">
                                            <label class="d-flex align-items-center text-gray-600 fs-7 my-2">
                                                <span><?= Lang::bhs('Kelompok') ?></span>
                                            </label>
                                            <input type="text" id="inputKelompok" class="form-control form-control-lg fs-7" name="kelompok" placeholder="<?= Lang::bhs('Keluarga/Teman/Mantan') ?>" value="" autocomplete="off" />
                                        </div>
                                        <input type="hidden" id="idundangan" value="<?= md5($model['undangan']['id_q']) ?>">
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-light-primary w-100 tombolTambahTm"><?= Lang::bhs('Simpan') ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="card-body py-4">
                                <table id="tamuUndangan" class="table align-middle table-row-dashed fs-6 gy-5">
                                    <thead>
                                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#tamuUndangan .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th><?= Lang::bhs('Nama') ?></th>
                                            <th><?= Lang::bhs('Whatsapp') ?></th>
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
                                    <tbody class="text-gray-600 fw-semibold listTamuUndangan">
                                        <?php
                                        $no = 1;
                                        foreach ($model['daftarTamu'] as $tamu) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1" />
                                                    </div>
                                                </td>
                                                <td class="d-flex align-items-center">
                                                    <div class="d-flex flex-column">
                                                        <span class="text-gray-800 text-hover-primary mb-1"><?= $tamu['nama'] ?></span>
                                                        <span class="fs-7"><?= $tamu['kelompok'] ?></span>
                                                    </div>
                                                </td>
                                                <td><?= $tamu['whatsapp'] ?></td>
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
                                                </td><?php
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
                                                            <span class="badge fw-bold badge-light-primary"><?= Lang::bhs('Disetujui') ?></span>
                                                        <?php } else { ?>
                                                            <span class="badge fw-bold badge-light-danger"><?= Lang::bhs('Menunggu') ?></span>
                                                        <?php } ?>
                                                    </td>
                                                <?php
                                                        }
                                                ?>
                                                <td class="d-flex justify-content-end">
                                                    <?php if ($tamu['statusTamu'] !== 'approved') { ?>
                                                        <button type="button" class="btn btn-icon btn-sm btn-bg-light btn-active-color-primary btn-sm approvedTamu me-1" data-idundangan="<?= md5($tamu['id_undangan']) ?>" data-idtamu="<?= md5($tamu['id_tm']) ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Setujui Tamu Undangan ini') ?>">
                                                            <span class="text-success svg-icon svg-icon-3 approved<?= md5($tamu['id_tm']) ?>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    <?php } ?>
                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                        <input type="hidden" id="linkTamu<?= $tamu['id_tm'] ?>" value="<?= baseurl ?>/<?= $model['undangan']['slug'] ?>/<?= $tamu['nama'] ?>?reff=<?= $tamu['id_tm'] ?>">
                                                        <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 copyLinkTamu" data-no="<?= $tamu['id_tm'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Salin tautan') ?>">
                                                            <span class=" svg-icon svg-icon-3 loadSalinTautan<?= $tamu['id_tm'] ?>">
                                                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.503 4.627 5.5 6.75v10.504a3.25 3.25 0 0 0 3.25 3.25h8.616a2.251 2.251 0 0 1-2.122 1.5H8.75A4.75 4.75 0 0 1 4 17.254V6.75c0-.98.627-1.815 1.503-2.123ZM17.75 2A2.25 2.25 0 0 1 20 4.25v13a2.25 2.25 0 0 1-2.25 2.25h-9a2.25 2.25 0 0 1-2.25-2.25v-13A2.25 2.25 0 0 1 8.75 2h9Zm0 1.5h-9a.75.75 0 0 0-.75.75v13c0 .414.336.75.75.75h9a.75.75 0 0 0 .75-.75v-13a.75.75 0 0 0-.75-.75Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="dropdown" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                                            <span class="svg-icon svg-icon-3">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M21.2995 7.57969H15.7195C15.3295 7.57969 15.0195 7.26969 15.0195 6.87969C15.0195 6.48969 15.3295 6.17969 15.7195 6.17969H21.2995C21.6895 6.17969 21.9995 6.48969 21.9995 6.87969C21.9995 7.26969 21.6895 7.57969 21.2995 7.57969Z" fill="currentColor" />
                                                                    <path d="M6.42 7.57969H2.7C2.31 7.57969 2 7.26969 2 6.87969C2 6.48969 2.31 6.17969 2.7 6.17969H6.42C6.81 6.17969 7.12 6.48969 7.12 6.87969C7.12 7.26969 6.8 7.57969 6.42 7.57969Z" fill="currentColor" />
                                                                    <path d="M10.1395 10.8297C12.321 10.8297 14.0895 9.06121 14.0895 6.87969C14.0895 4.69816 12.321 2.92969 10.1395 2.92969C7.95793 2.92969 6.18945 4.69816 6.18945 6.87969C6.18945 9.06121 7.95793 10.8297 10.1395 10.8297Z" fill="currentColor" />
                                                                    <path d="M21.3009 17.8102H17.5809C17.1909 17.8102 16.8809 17.5002 16.8809 17.1102C16.8809 16.7202 17.1909 16.4102 17.5809 16.4102H21.3009C21.6909 16.4102 22.0009 16.7202 22.0009 17.1102C22.0009 17.5002 21.6909 17.8102 21.3009 17.8102Z" fill="currentColor" />
                                                                    <path d="M8.28 17.8102H2.7C2.31 17.8102 2 17.5002 2 17.1102C2 16.7202 2.31 16.4102 2.7 16.4102H8.28C8.67 16.4102 8.98 16.7202 8.98 17.1102C8.98 17.5002 8.66 17.8102 8.28 17.8102Z" fill="currentColor" />
                                                                    <path d="M13.8602 21.0719C16.0417 21.0719 17.8102 19.3034 17.8102 17.1219C17.8102 14.9404 16.0417 13.1719 13.8602 13.1719C11.6786 13.1719 9.91016 14.9404 9.91016 17.1219C9.91016 19.3034 11.6786 21.0719 13.8602 21.0719Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="menu dropdown-menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                            <?php
                                                            if ($tamu['paket'] !== 'basic') {
                                                            ?>
                                                                <div class="menu-item px-3">
                                                                    <a href="javascript:void(0);" class="menu-link px-3 bukaKodeQR fw-normal" data-no="<?= md5($tamu['id_tm']) ?>">
                                                                        <?= Lang::bhs('QR Code') ?>
                                                                    </a>
                                                                </div>
                                                            <?php
                                                            }
                                                            ?>
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3 fw-normal">
                                                                    <?= Lang::bhs('Whatsapp') ?>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item px-3">
                                                                <a href="javascript:void(0);" class="menu-link px-3 hapusDaftarTamu fw-normal" data-idundangan="<?= md5($tamu['id_undangan']) ?>" data-idtamu="<?= md5($tamu['id_tm']) ?>">
                                                                    <?= Lang::bhs('Hapus') ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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
                                <input type="file" class="form-control form-control-lg" name="importTamu" accept="text/csv" />
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
                            <input type="text" name="judul" class="form-control form-control-lg fw-normal" value="<?= $model['undangan']['judul_undangan'] ?>" />
                        </div>
                        <div class="fv-row mb-5">
                            <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                                <span><?= Lang::bhs('Desktripsi Singkat') ?></span>
                            </label>
                            <textarea class="form-control fw-normal textarea" name="deskripsi" data-kt-autosize="true"><?= $model['undangan']['deskripsi'] ?></textarea>
                        </div>
                        <div class="fv-row mb-5">
                            <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                                <span><?= Lang::bhs('Tanggal Acara Utama') ?></span>
                            </label>
                            <input type="datetime-local" class="form-control form-control-lg fw-normal" name="tgl_acara" value="<?= date('Y-m-d\TH:i:s', strtotime($model['undangan']['tgl_acara'])) ?>" />
                        </div>
                        <div class="fv-row mb-5">
                            <label class="d-flex align-items-center fs-6 fw-normal mb-2">
                                <span><?= Lang::bhs('Zona Waktu') ?></span>
                            </label>
                            <select class="form-select" name="zonawaktu" data-control="select2" data-placeholder="<?= Lang::bhs('Pilih...') ?>" data-hide-search="true">
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
                                    <div class="col-12">
                                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="<?= Lang::bhs('Pilih...') ?>" data-hide-search="false" data-dropdown-parent="#musik" data-allow-clear="true">
                                            <option></option>
                                            <option value="WIB">WIB</option>
                                            <option value="WITA">WITA</option>
                                            <option value="WIT">WIT</option>
                                        </select>
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
            </div>
        </div>
    </div>

    <div class="modal fade" id="Galeri" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="d-flex justify-content-between p-7 pt-10">
                    <h1 class="fw-bold"><?= Lang::bhs('Media') ?></h1>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="fx-row px-7">
                    <div class="col-12 display-4">
                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                            <li class="nav-item">
                                <a class="nav-link text-active-gray-700 active loadGaleri" data-bs-toggle="tab" href="#gallery"><?= Lang::bhs('Galeri') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-active-gray-700" data-bs-toggle="tab" href="#unggah"><?= Lang::bhs('Unggah') ?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="modal-body pt-5 pb-5">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="gallery" role="tabpanel">
                            <div class="row muatGaleri"></div>
                        </div>
                        <div class="tab-pane fade" id="unggah" role="tabpanel">
                            <form class="form" action="#" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-form-label text-lg-right"><?= Lang::bhs('Unggah Gambar:') ?></label>
                                    <div class="col-12">
                                        <div class="dropzone dropzone-queue mb-2" id="uploadGambar">
                                            <div class="dropzone-panel mb-lg-0 mb-2">
                                                <a class="dropzone-select btn btn-sm btn-primary me-2"><?= Lang::bhs('Lampirkan gambar') ?></a>
                                                <a class="dropzone-upload btn btn-sm btn-light-primary me-2"><?= Lang::bhs('Unggah Semua') ?></a>
                                                <a class="dropzone-remove-all btn btn-sm btn-light-primary"><?= Lang::bhs('Hapus Semua') ?></a>
                                            </div>
                                            <div class="dropzone-items wm-200px">
                                                <div class="dropzone-item" style="display:none">
                                                    <div class="dropzone-file">
                                                        <div class="dropzone-filename" title="nama_file_gambar.jpg">
                                                            <span data-dz-name>nama_file_gambar.jpg</span>
                                                            <strong>(<span data-dz-size>340kb</span>)</strong>
                                                        </div>
                                                        <div class="dropzone-error" data-dz-errormessage></div>
                                                    </div>
                                                    <div class="dropzone-progress">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropzone-toolbar">
                                                        <span class="dropzone-start"><i class="bi bi-play-fill fs-3"></i></span>
                                                        <span class="dropzone-cancel" data-dz-remove style="display: none;"><i class="bi bi-x fs-3"></i></span>
                                                        <span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted"><?= Lang::bhs('Ukuran file maksimal 10MB per file. type gambar (jpeg, png & gif).') ?></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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

    <div class="modal fade" id="editTextCustom" tabindex="-1"></div>

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
                <div class="modal-body pt-5 pb-5">
                    <div class="fv-row">
                        <ul class="nav nav-fill nav-tabs nav-line-tabs mb-5 fs-6">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#latarbelakang"><?= Lang::bhs('Background') ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#bingkai"><?= Lang::bhs('Frame') ?></a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="latarbelakang" role="tabpanel">
                                <div class="row d-flex text-center mt-3">
                                    <div class="col-6 mb-5">
                                        <div class="d-flex flex-stack mx-1 mb-2">
                                            <div class="m-n4">
                                                <span class="fs-6 ms-3"><?= Lang::bhs('Aktifkan Gambar') ?> <span class="badge badge-warning text-black fw-normal"></span></span>
                                            </div>
                                            <div class="m-0 d-flex mr-n2 py-2">
                                                <div class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input h-20px w-30px pilihanLatar" data-undangan="<?= $model['undangan']['id_q'] ?>" type="checkbox" <?= $model['config']['background-style'] == 'gambar' ? 'checked' : '' ?> value="gambar" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="gantiLatar">
                                            <?php
                                            $path = './static/user/images/' . User::folder() . '/' . $model['config']['background-gambar'];
                                            if (!empty($model['config']['background-gambar']) && file_exists($path)) {
                                            ?>
                                                <img src="<?= baseurl ?>/static/user/images/<?= User::folder() ?>/<?= $model['config']['background-gambar'] ?>" class="border border-dashed border-gray-500 rounded" style="width:100%;height:350px;object-fit:cover;">
                                            <?php
                                            } else {
                                            ?>
                                                <img src="<?= baseurl ?>/static/admin/media/svg/avatars/blank.svg" class="border border-dashed border-gray-500 rounded" style="width:100%;height:350px;object-fit:cover;">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="col-12 mb-3 mt-3">
                                            <button type="button" class="btn btn-light w-100 GambarLatar" data-aksi="latarbelakang" data-undangan="<?= $model['undangan']['id_q'] ?>"><?= Lang::bhs('Galeri') ?></button>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-5">
                                        <div class="d-flex flex-stack mx-1 mb-2">
                                            <div class="m-n4">
                                                <span class="fs-6 ms-3"><?= Lang::bhs('Aktifkan Warna') ?> <span class="badge badge-warning text-black fw-normal"></span></span>
                                            </div>
                                            <div class="m-0 d-flex mr-n2 py-2">
                                                <div class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input h-20px w-30px pilihanLatar" data-undangan="<?= $model['undangan']['id_q'] ?>" type="checkbox" <?= $model['config']['background-style'] == 'warna' ? 'checked' : '' ?> value="warna" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border border-dashed border-gray-500 rounded warnaTemplate" style="width:100%;height:350px;background-color: <?= $model['config']['background-warna'] ?>;"></div>
                                        <div class="col-12 mt-4">
                                            <div class="colours-outer">
                                                <div class="colour-group">
                                                    <label class="bucket">
                                                        <div class="colour fixColortemp" title="Luxury Grey" style="--design-clr: #969696;" data-warna="#969696"></div>
                                                    </label>
                                                </div>
                                                <div class="colour-group">
                                                    <label class="bucket">
                                                        <div class="colour fixColortemp" title="Elegant Black" style="--design-clr: #1B1B1B;" data-warna="#1B1B1B"></div>
                                                    </label>
                                                </div>
                                                <div class="colour-group">
                                                    <label class="bucket">
                                                        <div class="colour fixColortemp" title="Simple White" style="--design-clr: #F0F0F0;" data-warna="#F0F0F0"></div>
                                                    </label>
                                                </div>
                                                <div class="colour-group">
                                                    <label class="bucket">
                                                        <div class="colour fixColortemp" title="Soft Purple" style="--design-clr: #BF949D;" data-warna="#BF949D"></div>
                                                    </label>
                                                </div>
                                                <div class="colour-group">
                                                    <label class="bucket">
                                                        <div class="colour fixColortemp" title="Romantic Red" style="--design-clr: #980019;" data-warna="#980019"></div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3 mt-3">
                                            <input type="color" class="color-picker" value="<?= $model['config']['background-warna'] ?>" data-undangan="<?= $model['undangan']['id_q'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-7">
                                        <button type="button" data-bs-dismiss="modal" class="btn btn-light-danger w-100"><?= Lang::bhs('Tutup') ?></button>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="bingkai" role="tabpanel">
                                <div class="row d-flex">
                                    <div class="col-12">
                                        <div class="d-flex flex-stack mx-1 mb-2">
                                            <div class="m-n4">
                                                <span class="fs-6 ms-3"><?= Lang::bhs('Aktifkan Frame') ?> <span class="badge badge-warning text-black fw-normal"></span></span>
                                            </div>
                                            <div class="m-0 d-flex mr-n2 py-2">
                                                <div class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input h-20px w-30px aktifkanframe" data-undangan="<?= $model['undangan']['id_q'] ?>" type="checkbox" <?= $model['config']['frame'] == 'Yes' ? 'checked' : '' ?> />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-7">
                                        <button type="submit" class="btn btn-light-primary w-100"><?= Lang::bhs('Simpan Perubahan') ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <div id="suksesToast" class="toast-container position-fixed top-0 end-0 p-3" style="z-index:99999;">
        <div class="toast bg-white" role="alert" aria-live="assertive" aria-atomic="true" data-toast="stack">
            <div class="toast-header bg-success">
                <strong class="me-auto text-white mt-1"><?= Lang::bhs('Sukses') ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.onload = function() {
        function removeTinyMCE() {
            tinymce.remove('#editorDocument');
        }
        var typed = new Typed(".DesKonten", {
            strings: ["<?= Lang::bhs('Custom undangan sesuka kamu dengan mudah.') ?>", "<?= Lang::bhs('Drag n Drop sesuai selera.') ?>", "<?= Lang::bhs('Revisi konten tanpa batas.') ?>"],
            typeSpeed: 90
        });

        $(document).ready(function() {
            var sekarang = new Date().getTime();
            var waktuinput = new Date(tgl_dibuat).getTime();
            var selisih = waktuinput - sekarang;
            var hitungmundurInterval = setInterval(function() {
                sekarang = new Date().getTime();
                selisih = waktuinput - sekarang;
                var tahun = Math.floor(selisih / (1000 * 60 * 60 * 24 * 30 * 12));
                var bulan = Math.floor((selisih % (1000 * 60 * 60 * 24 * 30 * 12)) / (1000 * 60 * 60 * 24 * 30));
                var hari = Math.floor((selisih % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24));
                var jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));
                var detik = Math.floor((selisih % (1000 * 60)) / 1000);

                var hitungmundur = "";
                if (tahun > 0) {
                    hitungmundur += tahun + " tahun " + bulan + " bulan " + hari + " hari";
                } else if (bulan > 0) {
                    hitungmundur += bulan + " bulan " + hari + " hari " + jam + " jam ";
                } else if (hari > 0) {
                    hitungmundur += hari + " hari " + jam + " jam " + menit + " menit";
                } else if (jam > 0) {
                    hitungmundur += jam + " jam " + menit + " menit " + detik + " detik";
                } else {
                    hitungmundur += menit + " menit " + detik + " detik";
                }

                $("#hitungmundur").html(hitungmundur);
            }, 1000);
        });

        $(document).on('click', '.hapusHalaman', function() {
            let halaman = $(this).data('halaman');
            let idundangan = $(this).data('idundangan');
            let slug = $(this).data('slug');
            Swal.fire({
                text: "<?= Lang::bhs('Mau hapus halaman " + halaman + " ini?') ?>",
                icon: "warning",
                buttonsStyling: !1,
                confirmButtonText: "<?= Lang::bhs('Ya, Hapus!') ?>",
                showCancelButton: true,
                reverseButtons: true,
                customClass: {
                    cancelButton: "btn btn-danger",
                    confirmButton: "btn btn-primary",
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: hostUrl + "user/qondangan/hapuskontenhalaman",
                        type: "POST",
                        data: {
                            halaman: halaman,
                            idundangan: idundangan,
                            slug: slug,
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                $("#sortable").load(hostUrl + 'user/qondangan/menukonten?slug=' + slug);
                                showToast();
                                $('.toast-body').html("<?= Lang::bhs('Halaman " + halaman + " berhasil dihapus.') ?>");
                            }
                        },
                        beforeSend: function() {
                            $('.hapusHalaman').html("<span class='spinner-border spinner-border-sm'></span>");
                        }
                    }).done(function() {
                        $(".hapusHalaman").html('<svg class="mx-n3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 18px;"><path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="red" /><path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="red" /><path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="red" /><path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="red" /></svg>');
                    });
                }
            });
        });

        $(document).on('click', '.editText', function() {
            var id = $(this).data('id');
            var konten = $(this).data('konten');
            var idtext = $(this).data('idtext');
            var text = $(this).data('text');
            var ukuran = $(this).data('ukuran');
            var warna = $(this).data('warna');
            $.ajax({
                url: hostUrl + "user/qondangan/edittext",
                type: "POST",
                data: {
                    id: id,
                    konten: konten,
                    idtext: idtext,
                    text: text,
                    ukuran: ukuran,
                    warna: warna,
                },
                success: function(ajaxData) {
                    $('#editTextCustom').html(ajaxData);
                    $('#editTextCustom').modal('show');
                    tinymce.init({
                        selector: "#editorDocument",
                        // height: "480",
                        menubar: false,
                        toolbar: [" "],
                        plugins: "autoresize"
                    });
                }
            });
        });

        $(document).on('submit', '#simpantext', function(e) {
            e.preventDefault();
            $.ajax({
                method: $(this).attr("method"),
                url: $(this).attr("action"),
                enctype: 'multipart/form-data',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 'success') {
                        removeTinyMCE();
                        $('.liveEdit' + response.konten).css({
                            color: response.warna,
                            fontSize: response.ukuran + 'px'
                        });
                        if (response.iframe == 'yes') {
                            $('.iFrame' + response.konten).html('<iframe width="560" height="315" src="' + response.text + '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen" tabindex="-1" style="border-radius: 15px;"></iframe>')
                        } else {
                            $('.liveEdit' + response.konten).html(response.text)
                        }
                        $('#editTextCustom').modal('hide');
                        $('#editTextCustom').html('');
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    } else {
                        removeTinyMCE();
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    }
                },
                beforeSend: function(b) {
                    $(".simpanText").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> <?= Lang::bhs('Sebentar...') ?>");
                }
            }).done(function(d) {
                $(".simpanText").html("<?= Lang::bhs('Simpan Perubahan') ?>");
            });
        });

        $('#editTextCustom').on('hidden.bs.modal', function() {
            removeTinyMCE();
        });

        $(document).on('click', '.tombolPreview', function() {
            $('.previewTemplateTema').html('<iframe src="' + hostUrl + '<?= $model['undangan']['slug'] ?>/" width="100%" height="550" frameborder="0" style="border-radius: 20px;"></iframe>');
            $('#preview').modal('show');
        });

        $('#preview').on('hidden.bs.modal', function() {
            $('.previewTemplateTema').html('');
        });

        $(document).ready(function() {
            $(document).on('click', '.editKontenUndangan', function(e) {
                let id = $(this).data("id");
                let slug = $(this).data("slug");
                var parentDiv = $('.class' + id).parent();
                var openHereDiv = parentDiv.find('#previewEdit');
                var isOpen = openHereDiv.is(':visible');
                let undangan = $(this).data('undangan');
                $.ajax({
                    url: hostUrl + "user/qondangan/editkontenundangan",
                    type: "GET",
                    data: {
                        id: id,
                        undangan: undangan,
                        slug: slug
                    },
                    success: function(ajaxData) {
                        $('.previewEdit' + id).html(ajaxData);
                        if (!isOpen) {
                            parentDiv.siblings().find('#previewEdit').hide();
                        }
                        openHereDiv.toggle(!isOpen);

                        tinymce.init({
                            selector: "#editorDocument",
                            // height: "480",
                            menubar: false,
                            toolbar: ["styleselect fontselect fontsizeselect",
                                "undo redo | cut copy paste | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify| bullist numlist | outdent indent | blockquote subscript superscript | advlist | print preview |  code"
                            ],
                            plugins: "autoresize advlist textcolor charmap preview code"
                        });
                    }
                });
            });
        });

        $(document).on('click', '#warna', function() {
            let warna = $(this).data('warna');
            let kodewarna = $(this).val();
            $('.kodeWarna').html(warna);
            $('#inputWarna').val(kodewarna);
        });

        $(document).ready(function() {
            var dragStart = false;
            $("#sortable").sortable({
                items: ".dataUrut",
                handle: ".pindahin",
                start: function(event, ui) {
                    ui.helper.addClass("dragging ui-sortable-helper");
                    dragStart = true;
                },
                beforeStop: function(event, ui) {
                    if (!dragStart) {
                        return false;
                    }
                    dragStart = false;
                    if (ui.position.top < $("#Cover").position().top) {
                        return false;
                    }
                    ui.helper.removeClass("dragging ui-sortable-helper");
                },
                delay: 200,
                cancel: "#Cover",
                stop: function(event, ui) {
                    let undangan = $(this).data('undangan');
                    console.log(undangan);
                    var data = [];
                    $("#sortable .dataUrut").each(function(index, element) {
                        var id = $(element).attr('id');
                        var urut = index + 1;
                        data.push({
                            nama: id,
                            urut: urut
                        });
                    });

                    var json = JSON.stringify(data);
                    console.log(json);

                    $.ajax({
                        url: hostUrl + "/user/qondangan/urutkankonten",
                        type: "POST",
                        data: {
                            urut: json,
                            undangan: undangan
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                showToast();
                                $('.toast-body').html(response.keterangan);
                            } else {
                                showToast();
                                $('.toast-body').html(response.keterangan);
                            }
                        }
                    });
                }
            });
            $("#sortable").disableSelection();
            $(".dataUrut").on("mousedown", function(event) {
                if (!$(event.target).hasClass("drag-btn")) {
                    event.preventDefault();
                }
            });
        });

        $(document).on('change', '.statusUndangan', function() {
            let undangan = $(this).data('undangan');
            if (this.checked == true) {
                var tampil = 'Aktif';
                var keterangan = 'aktifkan';
            } else {
                var tampil = 'Nonaktif';
                var keterangan = 'nonaktifkan';
            }
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/statusundangan',
                data: {
                    tampil: tampil,
                    undangan: undangan
                },
                success: function(response) {
                    if (response.status == 'success') {
                        showToast();
                        $('.toast-body').html('Undangan telah di ' + keterangan);
                        $('.statusText').html(tampil);
                    } else {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    }
                }
            });
        });

        $(document).on('change', '.kontenUndangan', function() {
            let konten = $(this).data('konten');
            let undangan = $(this).data('undangan');
            if (this.checked == true) {
                var tampil = 'Yes';
                var keterangan = 'aktifkan';
            } else {
                var tampil = 'No';
                var keterangan = 'nonaktifkan';
            }
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/disablekonten',
                data: {
                    konten: konten,
                    tampil: tampil,
                    undangan: undangan
                },
                success: function(response) {
                    if (response.status == 'success') {
                        showToast();
                        $('.toast-body').html('Konten ' + konten + ' telah di ' + keterangan);
                    } else {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    }
                }
            });
        });

        $(document).on('submit', '#settingTemplateUndangan', function(e) {
            e.preventDefault();
            $.ajax({
                method: $(this).attr("method"),
                url: $(this).attr("action"),
                enctype: 'multipart/form-data',
                data: new FormData(this),
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 'success') {
                        $('#pengaturan').modal('hide');
                        if (response.newslug == response.oldslug) {
                            showToast();
                            $('.toast-body').html(response.keterangan);
                        } else {
                            Swal.fire({
                                text: response.keterangan,
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "<?= Lang::bhs('Mantap!') ?>",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = hostUrl + 'user/undangan/' + response.newslug;
                                }
                            });
                        }
                    } else if (response.status == 'inuse') {
                        Swal.fire({
                            text: response.keterangan,
                            icon: "warning",
                            buttonsStyling: !1,
                            confirmButtonText: "<?= Lang::bhs('Siap!') ?>",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
                    } else {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    }
                },
                beforeSend: function(b) {
                    $(".simpanTemplateUndangan").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> <?= Lang::bhs('Sebentar...') ?>");
                }
            }).done(function(d) {
                $(".simpanTemplateUndangan").html("<?= Lang::bhs('Simpan Perubahan') ?>");
            });
        });

        // upload gambar dropzone
        const id = "#uploadGambar";
        const dropzone = document.querySelector(id);
        var previewNode = dropzone.querySelector(".dropzone-item");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);
        var myDropzone = new Dropzone(id, {
            url: hostUrl + "user/qondangan/uploadgambar",
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            maxFilesize: 10,
            autoQueue: false,
            previewsContainer: id + " .dropzone-items",
            clickable: id + " .dropzone-select",
            acceptedFiles: 'image/*',
            maxFiles: jumlahfile,
            dictMaxFilesExceeded: "Anda tidak dapat mengunggah file lebih banyak lagi, jumlah file yang diperbolehkan " + maksfile,
            dictInvalidFileType: "Type file tidak diperbolehkan.",
            dictFileTooBig: "File terlalu besar (maksimal: {{maxFilesize}} MB)",
            accept: function(file, done) {
                var allowedFiles = ['jpeg', 'jpg', 'png', 'gif'];
                var fileExtension = file.name.split('.').pop().toLowerCase();
                if (allowedFiles.indexOf(fileExtension) !== -1 && file.type.match(/^image\/(jpeg|jpg|png|gif)$/)) {
                    done();
                } else {
                    done("Type gambar tidak diperbolehkan.");
                }
            }
        });
        myDropzone.on("addedfile", function(file) {
            file.previewElement.querySelector(id + " .dropzone-start").onclick = function() {
                myDropzone.enqueueFile(file);
            };
            const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
            dropzoneItems.forEach(dropzoneItem => {
                dropzoneItem.style.display = '';
            });
            dropzone.querySelector('.dropzone-upload').style.display = "inline-block";
            dropzone.querySelector('.dropzone-remove-all').style.display = "inline-block";
        });
        myDropzone.on("totaluploadprogress", function(progress) {
            const progressBars = dropzone.querySelectorAll('.progress-bar');
            progressBars.forEach(progressBar => {
                progressBar.style.width = progress + "%";
            });
        });
        myDropzone.on("sending", function(file) {
            const progressBars = dropzone.querySelectorAll('.progress-bar');
            progressBars.forEach(progressBar => {
                progressBar.style.opacity = "1";
            });
            file.previewElement.querySelector(id + " .dropzone-start").setAttribute("disabled", "disabled");
        });
        myDropzone.on("complete", function(progress) {
            const progressBars = dropzone.querySelectorAll('.dz-complete');
            setTimeout(function() {
                progressBars.forEach(progressBar => {
                    progressBar.querySelector('.progress-bar').style.opacity = "0";
                    progressBar.querySelector('.progress').style.opacity = "0";
                    progressBar.querySelector('.dropzone-start').style.opacity = "0";
                });
            }, 300);
        });
        dropzone.querySelector(".dropzone-upload").addEventListener('click', function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
        });
        dropzone.querySelector(".dropzone-remove-all").addEventListener('click', function() {
            dropzone.querySelector('.dropzone-upload').style.display = "none";
            dropzone.querySelector('.dropzone-remove-all').style.display = "none";
            myDropzone.removeAllFiles(true);
        });
        myDropzone.on("queuecomplete", function(progress) {
            const uploadIcons = dropzone.querySelectorAll('.dropzone-upload');
            uploadIcons.forEach(uploadIcon => {
                uploadIcon.style.display = "none";
            });
        });
        myDropzone.on("removedfile", function(file) {
            if (myDropzone.files.length < 1) {
                dropzone.querySelector('.dropzone-upload').style.display = "none";
                dropzone.querySelector('.dropzone-remove-all').style.display = "none";
            }
        });
        // muat foto ketika galeri muncul
        $(document).on('click', '.mainGaleri', function() {
            let undangan = $(this).data('undangan');
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/galeri',
                data: {
                    undangan: undangan,
                },
                success: function(response) {
                    $('.muatGaleri').html(response);
                }
            });
        });
        // muat foto ketika galeri klik galeri
        $(document).on('click', '.loadGaleri', function() {
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/galeri',
                success: function(response) {
                    $('.muatGaleri').html(response);
                }
            });
        });
        $(document).on('click', '.gGaleri', function() {
            let aksi = $(this).data('aksi');
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/galeri',
                data: {
                    aksi: aksi,
                },
                success: function(response) {
                    $('#Galeri').modal('show');
                    $('.muatGaleri').html(response);
                }
            });
        });
        $(document).on('click', '.copyGambar', function() {
            let img = $(this).data('img');
            let url = $(this).data('url');
            let dest = $(this).data('dest');
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/copygambar',
                data: {
                    img: img,
                    url: url,
                    dest: dest,
                },
                success: function(response) {
                    $('.muatGaleri1').html(response);
                    $('#Galeri').modal('hide');
                },
                beforeSend: function(b) {
                    $(".copyGambar").html("<span class='spinner-border spinner-border-sm align-middle'></span>");
                }
            }).done(function(d) {
                $(".copyGambar").html('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" /></svg>');
            });
        });
        // hapus foto galeri
        $(document).on('click', '.hpsGaleri', function() {
            let img = $(this).data('img');
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/hapusgaleri',
                data: {
                    img: img
                },
                success: function(response) {
                    $('.muatGaleri').html(response);
                },
                beforeSend: function(b) {
                    $(".hpsGaleri").html("<span class='spinner-border spinner-border-sm align-middle'></span>");
                }
            }).done(function(d) {
                $(".hpsGaleri").html('<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="currentColor" /><path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="currentColor" /><path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="currentColor" /><path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="currentColor" /></svg>');
            });
        });
        $(document).on('click', '.hapusFoto', function() {
            let img = $(this).data('img');
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/hapusfoto',
                data: {
                    img: img
                },
                success: function(response) {
                    $('.muatGaleri1').html(response);
                    $('#Galeri').modal('hide');
                },
                beforeSend: function(b) {
                    $(".hapusFoto").html("<span class='spinner-border spinner-border-sm align-middle'></span>");
                }
            }).done(function(d) {
                $(".hapusFoto").html('<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 3C8 2.44772 8.44772 2 9 2H15C15.5523 2 16 2.44772 16 3V4H19C19.5523 4 20 4.44772 20 5C20 5.55228 19.5523 6 19 6H5C4.44772 6 4 5.55228 4 5C4 4.44772 4.44772 4 5 4H8V3Z" fill="currentColor" /><path d="M6 7C6.55228 7 7 7.44772 7 8V19C7 19.5523 7.44772 20 8 20H16C16.5523 20 17 19.5523 17 19V8C17 7.44772 17.4477 7 18 7C18.5523 7 19 7.44772 19 8V19C19 20.6569 17.6569 22 16 22H8C6.34315 22 5 20.6569 5 19V8C5 7.44772 5.44772 7 6 7Z" fill="currentColor" /><path d="M10 8C10.5523 8 11 8.44772 11 9V17C11 17.5523 10.5523 18 10 18C9.44772 18 9 17.5523 9 17V9C9 8.44772 9.44772 8 10 8Z" fill="currentColor" /><path d="M14 8C14.5523 8 15 8.44772 15 9V17C15 17.5523 14.5523 18 14 18C13.4477 18 13 17.5523 13 17V9C13 8.44772 13.4477 8 14 8Z" fill="currentColor" /></svg>');
            });
        });
        // ganti gambar
        $(document).on('click', '.gantiGambar', function() {
            var id = $(this).data('id');
            var dataid = $(this).data('dataid');
            var konten = $(this).data('konten');
            var idtext = $(this).data('idtext');
            var warna = null;
            var ukuran = null;
            $(document).off('click', '.pakaiGambar').on('click', '.pakaiGambar', function() {
                var text = $(this).data('text');
                $.ajax({
                    method: 'POST',
                    url: hostUrl + 'user/qondangan/simpantext',
                    data: {
                        id: id,
                        konten: konten,
                        idtext: idtext,
                        text: text,
                        warna: warna,
                        ukuran: ukuran,
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            $('.gantiFoto' + konten + dataid).html('<img src="' + hostUrl + 'static/user/images/' + response.path + '/' + text + '" style="width: 100%; height: 100%; object-fit: cover;">')
                            $('#Galeri').modal('hide');
                            showToast();
                            $('.toast-body').html(response.keterangan);
                        } else {
                            showToast();
                            $('.toast-body').html(response.keterangan);
                        }
                    },
                    beforeSend: function(b) {
                        $(".pakaiGambar").html("<span class='spinner-border spinner-border-sm align-middle'></span>");
                    }
                }).done(function(d) {
                    $(".pakaiGambar").html('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" /></svg>');
                });
            });

            $('#Galeri').modal('show');
        });

        $(document).on('click', '.GambarLatar', function() {
            let undangan = $(this).data('undangan');
            let aksi = $(this).data('aksi');
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/galeri',
                data: {
                    undangan: undangan,
                },
                success: function(response) {
                    $('.muatGaleri').html(response);
                    $('#Galeri').modal('show');
                }
            });
            $(document).off('click', '.gantiGambarLatar').on('click', '.gantiGambarLatar', function() {
                let img = $(this).data('img');
                $.ajax({
                    method: 'POST',
                    url: hostUrl + 'user/qondangan/background',
                    data: {
                        undangan: undangan,
                        aksi: aksi,
                        img: img,
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            $('.gantiLatar').html(response.img);
                            $('#Galeri').modal('hide');
                            showToast();
                            $('.toast-body').html(response.keterangan);
                        } else {
                            showToast();
                            $('.toast-body').html(response.keterangan);
                        }
                    },
                    beforeSend: function(b) {
                        $(".gantiGambarLatar").html("<span class='spinner-border spinner-border-sm align-middle'></span>");
                    }
                }).done(function(d) {
                    $(".gantiGambarLatar").html('<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" /></svg>');
                });
            });
        });
        $(document).on('change', '.pilihanLatar', function() {
            $('.pilihanLatar').not(this).prop('checked', false);
            var type = $('.pilihanLatar:checked').map(function() {
                return this.value;
            }).get().join(',');
            var undangan = $(this).data('undangan');
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/jenislatarbelakang',
                data: {
                    undangan: undangan,
                    type: type,
                },
                success: function(response) {
                    if (response.status == 'success') {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    } else {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    }
                }
            });
        });

        $(document).on('change', '.color-picker', function() {
            var warna = $(this).val();
            var undangan = $(this).data('undangan');
            $('.warnaTemplate').css('background-color', warna);
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/warnalatarbelakang',
                data: {
                    undangan: undangan,
                    warna: warna,
                },
                success: function(response) {
                    if (response.status == 'success') {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    } else {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    }
                }
            });
        });

        $(document).on('click', '.fixColortemp', function() {
            let warna = $(this).data('warna');
            $('.warnaTemplate').css('background-color', warna);
            $('.color-picker').val(warna).trigger('change');
        });

        $(document).on('click', '.aktifkanframe', function() {
            let undangan = $(this).data('undangan');
            console.log(undangan);
            if (this.checked == true) {
                var frame = 'Yes';
            } else {
                var frame = 'No';
            }
            $.ajax({
                method: 'POST',
                url: hostUrl + 'user/qondangan/aktifkanframe',
                data: {
                    frame: frame,
                    undangan: undangan,
                },
                success: function(response) {
                    if (response.status == 'success') {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    } else {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    }
                }
            });
        });

        $(document).on('submit', '#formImportTamu', function(e) {
            let idundangan = $('#idundangan').val();
            e.preventDefault();
            $.ajax({
                    method: $(this).attr("method"),
                    url: $(this).attr("action"),
                    enctype: 'multipart/form-data',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == 'success') {
                            $('#importTamu').modal('hide');
                            $(".listTamuUndangan").load(hostUrl + "user/qondangan/loadlisttamu?idundangan=" + idundangan);
                            showToast();
                            $('.toast-body').html(response.keterangan);
                        } else {
                            Swal.fire({
                                text: response.keterangan,
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "<?= Lang::bhs('Siap, Mengerti!') ?>",
                                customClass: {
                                    confirmButton: "btn btn-primary",
                                }
                            });
                        }
                    },
                    beforeSend: function(b) {
                        $(".loadImportTamu").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> Sebentar...");
                    }
                })
                .done(function(d) {
                    $(".loadImportTamu").html("<?= Lang::bhs('Import') ?>");
                });
        });
    };
</script>
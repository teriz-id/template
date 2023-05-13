<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_toolbar" class="app-toolbar py-8">
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-2 flex-column justify-content-center my-0">Undangan Saya</h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="<?= baseurl ?>/user/dashboard" class="text-muted text-hover-primary">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Undangan Saya</li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <div class="card-toolbar">
                    <button class="btn btn-md btn-flex btn-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                        <span class="svg-icon svg-icon-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
                                <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
                                <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
                            </svg>
                        </span>
                        <?= Lang::bhs('Buat Undangan') ?>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4"><?= Lang::bhs('Kategori Undangan') ?></div>
                        </div>
                        <div class="separator mb-3 opacity-75"></div>
                        <div class="mb-5">
                            <div class="menu-item px-3">
                                <a href="javascript:void(0);" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#buatUndangan"><?= Lang::bhs('Pernikahan') ?></a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3"><?= Lang::bhs('Ulang Tahun') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-xxl">
            <form action="#">
                <div class="card-body mb-10">
                    <div class="d-flex align-items-center">
                        <div class="position-relative border border-gray-300 rounded w-100 me-md-2">
                            <span class="svg-icon svg-icon-3 svg-icon-gray-500 position-absolute top-50 translate-middle ms-6">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                </svg>
                            </span>
                            <input type="text" class="form-control ps-10" name="search" value="" placeholder="<?= Lang::bhs('Cari undangan...') ?>" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <?php
                $no = 1;
                if (!empty($model['undangan'])) {
                    foreach ($model['undangan'] as $undangan) {
                        if ($undangan['status'] == 'success') {
                            $status = '<span class="badge badge-light-success fw-nornal">' . Lang::bhs('Sukses') . '</span>';
                            $buka = '<a href="' . baseurl . '/user/undangan/' . $undangan['slug'] . '" class="text-primary opacity-75-hover fs-6 fw-semibold">' . Lang::bhs('Buka') . '<span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" /><rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" /><path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" /></svg></span></a>';
                        } else {
                            $status = '<span class="badge badge-light-primary fw-normal">' . Lang::bhs('Tertunda') . '</span>';
                            $buka = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#belumBayar" class="text-primary opacity-75-hover fs-6 fw-semibold">' . Lang::bhs('Buka') . '<span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" /><rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" /><path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" /></svg></span></a>';
                        }
                ?>
                        <div class="col-lg-6">
                            <div class="card card-flush h-xl-100">
                                <div class="card-body py-9">
                                    <div class="row gx-9 h-100">
                                        <div class="col-xl-6 mb-10 mb-sm-0 d-xl-block d-none">
                                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('<?= baseurl; ?>/static/admin/media/stock/600x600/img-65.jpg')"></div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6">
                                            <div class="d-flex flex-column h-100">
                                                <div class="mb-7">
                                                    <div class="d-flex flex-stack mb-6">
                                                        <div class="flex-shrink-0 me-5">
                                                            <span class="text-gray-400 fs-7 fw-normal me-2 d-block lh-1 pb-1">Undangan Pernikahan</span>
                                                            <span class="text-gray-800 text-wrap fs-4 fw-bold"><?= $undangan['judul_undangan'] ?></span>
                                                            <?= $status ?>
                                                        </div>
                                                        <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
                                                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
                                                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
                                                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                            <div class="py-3">
                                                                <div class="menu-item px-3">
                                                                    <a href="javascript:void(0);" class="menu-link px-3 editUndanganUser" data-judul="<?= $undangan['judul_undangan'] ?>" data-idundangan="<?= md5($undangan['id_q']); ?>"><?= Lang::bhs('Edit') ?></a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="<?= baseurl ?>/<?= $undangan['slug'] ?>/" target="_blank" class="menu-link px-3"><?= Lang::bhs('Pratinjau Undangan') ?></a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3"><?= Lang::bhs('Terima Tamu') ?></a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="javascript:void(0);" class="menu-link px-3 hapusUndangan" data-idundangan="<?= md5($undangan['id_q']) ?>"><?= Lang::bhs('Hapus Undangan') ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-6">
                                                    <div class="d-flex">
                                                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                                            <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                                                            <div class="fw-semibold text-gray-400">Due Date</div>
                                                        </div>
                                                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                                            <span class="fs-6 text-gray-700 fw-bold">$
                                                                <span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
                                                            <div class="fw-semibold text-gray-400">Budget</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-stack mt-auto bd-highlight">
                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                                <img alt="Pic" src="<?= baseurl ?>/static/admin/media/avatars/300-11.jpg" />
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                <img alt="Pic" src="<?= baseurl ?>/static/admin/media/avatars/300-2.jpg" />
                                                            </div>
                                                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?= $buka ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php
                        $no++;
                    }
                } else {
                    ?>
                    <div class="text-center">
                        <img src="<?= baseurl ?>/static/admin/media/nodata.png" width="250" class="img-fluid">
                        <div class="text-center fs-2 fw-bold text-gray-800"><?= Lang::bhs('Oops.') ?></div>
                        <div class="text-center fs-3 text-gray-600"><?= Lang::bhs('Kamu masih belum membuat Undangan nih.') ?></div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
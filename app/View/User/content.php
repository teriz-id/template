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

            <!-- content here -->

        </div>
    </div>
</div>
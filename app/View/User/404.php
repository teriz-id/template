<div class="d-flex flex-column flex-center flex-column-fluid">
    <div class="d-flex flex-column flex-center text-center">
        <div class="card card-flush w-lg-650px py-5">
            <div class="card-body py-15 py-lg-20">
                <h1 class="fw-bolder fs-2hx text-gray-900 mb-4">
                    Oops!
                </h1>
                <div class="fw-semibold fs-4 text-gray-500 mb-7">
                    <?= Lang::bhs('AI Sekali pun tidak bisa menemukan Undangan anda di link ini.') ?>
                </div>
                <div class="mb-3">
                    <img src="<?= baseurl ?>/static/admin/media/auth/404-error.png" class="mw-100 mh-300px theme-light-show" alt="" />
                    <img src="<?= baseurl ?>/static/admin/media/auth/404-error-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
                </div>
                <div class="mb-0">
                    <a href="<?= baseurl ?>/user/dashboard" class="btn btn-sm btn-primary"><?= Lang::bhs('Kembali ke Dashboard') ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
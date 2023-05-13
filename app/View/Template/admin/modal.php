<?php
if (isset($model['nav']) && ($model['nav'] == 'undangan' || $model['nav'] == 'Daftar Undangan')) {
?>

    <div class="modal fade" id="buatUndangan" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h2><?= Lang::bhs('Buat Undangan') ?></h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="tutup" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body py-lg-10 px-lg-10">
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                        <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px d-none d-xl-block">
                            <div class="stepper-nav ps-lg-10 mt-6">
                                <div id="item1" class="stepper-item current" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                <?= Lang::bhs('Paket') ?>
                                            </h3>
                                            <div class="stepper-desc">
                                                <?= Lang::bhs('Lorem, ipsum.') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stepper-line h-40px"></div>
                                </div>
                                <div id="item2" class="stepper-item" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">2</span>
                                        </div>
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                <?= Lang::bhs('Undangan') ?>
                                            </h3>
                                            <div class="stepper-desc">
                                                <?= Lang::bhs('Lorem, ipsum dolor.') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="stepper-line h-40px"></div>
                                </div>
                                <div id="item3" class="stepper-item" data-kt-stepper-element="nav">
                                    <div class="stepper-wrapper">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">3</span>
                                        </div>
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                <?= Lang::bhs('Pembayaran') ?>
                                            </h3>
                                            <div class="stepper-desc">
                                                <?= Lang::bhs('Lorem ipsum dolor sit amet.') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <form id="formBuatUndangan" class="form" action="<?= baseurl ?>/user/qondangan/buatundangan" novalidate="novalidate" id="kt_modal_create_app_form" method="POST">
                                <div class="loadSuccess">
                                    <div id="item4" class="current" data-kt-stepper-element="content">
                                        <div class="w-100">

                                            <div class="row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-4 text-muted">
                                                    <span class="required"><?= Lang::bhs('Pilih Paket') ?></span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="<?= Lang::bhs('Pilih Paket anda') ?>"></i>
                                                </label>
                                                <div class="col-lg-6 mb-10 mb-lg-0">
                                                    <div class="nav flex-column">
                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start active mb-6" data-bs-toggle="tab" data-bs-target="#Basic">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                                    <input class="form-check-input" type="radio" name="paket" checked value="basic" />
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                                        <?= Lang::bhs('Basic') ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-5">
                                                                <span class="mb-2">Rp</span>
                                                                <span class="fs-2x fw-bold">
                                                                    49 </span>
                                                            </div>
                                                        </label>
                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start  mb-6" data-bs-toggle="tab" data-bs-target="#Pro">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                                    <input class="form-check-input" type="radio" name="paket" value="pro" />
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                                        <?= Lang::bhs('Pro') ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-5">
                                                                <span class="mb-2">Rp</span>
                                                                <span class="fs-2x fw-bold">
                                                                    149 </span>
                                                            </div>
                                                        </label>
                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start  mb-6" data-bs-toggle="tab" data-bs-target="#Premium">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                                    <input class="form-check-input" type="radio" name="paket" value="premium" />
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                                        <?= Lang::bhs('Premium') ?>
                                                                        <span class="badge badge-light-success ms-2 py-2 px-3 fs-7"><?= Lang::bhs('Populer') ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-5">
                                                                <span class="mb-2">Rp</span>
                                                                <span class="fs-2x fw-bold">
                                                                    499 </span>
                                                            </div>
                                                        </label>
                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start mb-6" data-bs-toggle="tab" data-bs-target="#kustom">
                                                            <div class="d-flex align-items-center me-2">
                                                                <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                                    <input class="form-check-input checkCustom" type="radio" name="paket" value="custom" />
                                                                </div>
                                                                <div class="flex-grow-1">
                                                                    <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                                        <?= Lang::bhs('Custom') ?>
                                                                    </div>
                                                                    <div class="fw-semibold opacity-75">
                                                                        <?= Lang::bhs('Sesuaikan dengan kebutuhan anda') ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ms-5">
                                                                <a href="#" class="btn btn-sm btn-success"><?= Lang::bhs('Hubungi Kami') ?></a>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="tab-content rounded h-100 bg-light p-10">
                                                        <div class="tab-pane fade show active" id="Basic">
                                                            <div class="pb-5">
                                                                <h2 class="fw-bold text-dark">What’s in Pemula Plan?</h2>
                                                                <div class="text-muted fw-semibold">
                                                                    Optimal for 10+ team size and new startup
                                                                </div>
                                                            </div>
                                                            <div class="pt-1">
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                        Up to 10 Active Users </span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                        Up to 30 Project Integrations </span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                        Analytics Module </span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Finance Module </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Accounting Module </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Network Platform </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center ">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Unlimited Cloud Space </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="Pro">
                                                            <div class="pb-5">
                                                                <h2 class="fw-bold text-dark">What’s in Premium Plan?</h2>
                                                                <div class="text-muted fw-semibold">
                                                                    Optimal for 10+ team size and new startup
                                                                </div>
                                                            </div>
                                                            <div class="pt-1">
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                        Up to 10 Active Users </span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                        Up to 30 Project Integrations </span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                        Analytics Module </span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Finance Module </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Accounting Module </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Network Platform </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center ">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Unlimited Cloud Space </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="Premium">
                                                            <div class="pb-5">
                                                                <h2 class="fw-bold text-dark">What’s in Pemula Plan?</h2>
                                                                <div class="text-muted fw-semibold">
                                                                    Optimal for 10+ team size and new startup
                                                                </div>
                                                            </div>
                                                            <div class="pt-1">
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                        Up to 10 Active Users </span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                        Up to 30 Project Integrations </span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                        Analytics Module </span>
                                                                    <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Finance Module </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Accounting Module </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Network Platform </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                                <div class="d-flex align-items-center ">
                                                                    <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                        Unlimited Cloud Space </span>
                                                                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor" />
                                                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="kustom">
                                                            <div class="pb-5">
                                                                <h2 class="fw-bold text-dark">Coming Soon</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="item5" data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <div class="fv-row">
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-4 text-muted">
                                                    <span class="required"><?= Lang::bhs('Detail Undangan') ?></span>
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="<?= Lang::bhs('Isi detail undangan anda disini') ?>"></i>
                                                </label>
                                                <div class="fv-row">
                                                    <div class="fv-row mb-7">
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required"><?= Lang::bhs('Nama Mempelai Pria') ?></span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-lg form-control-solid" name="nama_pria" placeholder="Rafi" value="" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required"><?= Lang::bhs('Nama Mempelai Wanita') ?></span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-lg form-control-solid" name="nama_wanita" placeholder="Gita" value="" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required"><?= Lang::bhs('Tanggal Acara') ?></span>
                                                        </label>
                                                        <input type="date" class="form-control form-control-lg form-control-solid" name="tgl_acara" value="<?= date('Y-m-d') ?>" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required"><?= Lang::bhs('Judul Undangan') ?></span>
                                                        </label>
                                                        <input type="text" class="form-control form-control-lg form-control-solid" name="judul_undangan" placeholder="Rafi & Gita" value="" />
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required"><?= Lang::bhs('Alamat Website') ?></span>
                                                        </label>
                                                        <div class="input-group mb-5">
                                                            <span class="input-group-text bg-secondary">qondangan.com/</span>
                                                            <input type="text" name="slug" class="form-control" placeholder="rafi-gita" value="" />
                                                            <span class="input-group-text bg-secondary">/nama-tamu</span>
                                                        </div>
                                                    </div>
                                                    <div class="fv-row mb-7 text-center">
                                                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                            <span class="required"><?= Lang::bhs('Tema') ?></span>
                                                        </label>
                                                        <div>
                                                            <span id="priviewthemes"></span>
                                                        </div>
                                                        <input type="hidden" id="temapilihan" name="tema" value="">
                                                        <button type="button" class="btn btn-secondary pilihtema loadspin"><?= Lang::bhs('Pilih Tema') ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-stack pt-10">
                                        <div class="me-2">
                                            <button type="button" class="btn btn-lg btn-light-primary me-3 item10" data-kt-stepper-action="previous">
                                                <span class="svg-icon svg-icon-3 me-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                                                        <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <?= Lang::bhs('Kembali') ?>
                                            </button>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-lg btn-primary item8" data-kt-stepper-action="submit">
                                                <span class="indicator-label indicatorBuatUndangan">
                                                    <?= Lang::bhs('Buat') ?>
                                                    <span class="svg-icon svg-icon-3 ms-2 me-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </button>
                                            <button type="button" class="btn btn-lg btn-primary item9" data-kt-stepper-action="next">
                                                <?= Lang::bhs('Lanjutkan') ?>
                                                <span class="svg-icon svg-icon-3 ms-1 me-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal bg-white fade" tabindex="1" id="tema" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content shadow-none">
                <div class="modal-header">
                    <h5 class="modal-title">Tema</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <div id="loadTema"></div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" id="pratinjau" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content shadow-none" style="background-color: transparent !important;width:400px;">
                <div id="loadPratinjau" class="bg-white" style="border-left: 5px solid #fff;border-right: 5px solid #fff; border-top: 12px solid #fff;border-bottom: 20px solid #fff;border-radius: 20px; box-shadow: 0px 0px 10px rgba(0,0,0,0.3);"></div>
                <span class="btn btn-primary text-center mt-4 rounded-4 tutupPratinjau">Tutup</span>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="1" id="editUndangan" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow-none loadEditUndangan"></div>
        </div>
    </div>

    <div class="modal fade" tabindex="1" id="belumBayar" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow-none">
                <div class="modal-header">
                    <h2 class="modal-title"><?= Lang::bhs('Ooppss') ?></h2>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>Status pembelian anda masih tertunda, mohon selesaikan pembayaran atau hubungi <a href="<?= baseurl ?>/user/dashboard">admin</a></h4>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-soft-secondary" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                    <a href="<?= baseurl ?>/user/dashboard" class="btn btn-primary"><?= Lang::bhs('Hubungi Admin') ?></a>
                    <a href="<?= baseurl ?>/user/dashboard" class="btn btn-warning"><?= Lang::bhs('Konfirmasi Pembayaran') ?></a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>



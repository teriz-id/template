 <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
     <div class="post d-flex flex-column-fluid" id="kt_post">
         <div id="kt_content_container" class="container-xxl">
             <div class="card mb-5 mb-xl-8">
                 <div class="card-header border-0 pt-5">
                     <h3 class="card-title align-items-start flex-column">
                         <span class="card-label fw-bold fs-3 mb-1"><?= Lang::bhs('Daftar Undangan') ?></span>
                         <span class="text-muted mt-1 fw-semibold fs-7">Over 500 new products</span>
                     </h3>
                     <div class="card-title">
                         <div class="d-flex align-items-center position-relative my-1">
                             <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                 <span class="path1"></span>
                                 <span class="path2"></span>
                             </i>
                             <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="<?= Lang::bhs('Cari Undangan') ?>">
                         </div>
                     </div>
                 </div>
                 <div class="card-body py-3">
                     <div class="table-responsive">
                         <table class="table align-middle gs-0 gy-4">
                             <thead>
                                 <tr class="fw-bold text-muted bg-light">
                                     <th class="ps-4 min-w-325px rounded-start"><?= Lang::bhs('Nama') ?></th>
                                     <th class="min-w-125px">Price</th>
                                     <th class="min-w-125px">Deposit</th>
                                     <th class="min-w-200px">Agent</th>
                                     <th class="min-w-150px">Status</th>
                                     <th class="min-w-200px text-end rounded-end"></th>
                                 </tr>
                             </thead>
                             <tbody class="listUndangan">
                                 <?php
                                    $no = 1;
                                    if (!empty($model['undangan'])) {
                                        foreach ($model['undangan'] as $undangan) {
                                            if ($undangan['status'] == 'success') {
                                                $status = '<span class="badge badge-light-success fw-semibold">' . Lang::bhs('Sukses') . '</span>';
                                                $buka = '<a href="' . baseurl . '/user/undangan/' . $undangan['slug'] . '" class="text-primary opacity-75-hover fs-6 fw-semibold">' . Lang::bhs('Buka') . '<span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" /><rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" /><path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" /></svg></span></a>';
                                            } else {
                                                $status = '<span class="badge badge-light-primary fw-semibold">' . Lang::bhs('Tertunda') . '</span>';
                                                $buka = '<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#belumBayar" class="text-primary opacity-75-hover fs-6 fw-semibold">' . Lang::bhs('Buka') . '<span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" /><rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" /><path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" /></svg></span></a>';
                                            }
                                    ?>
                                         <tr>
                                             <td>
                                                 <div class="d-flex align-items-center">
                                                     <div class="symbol symbol-50px me-5">
                                                         <img src="<?= baseurl ?>/static/admin/media/stock/600x400/img-26.jpg" class="" alt="" />
                                                     </div>
                                                     <div class="d-flex justify-content-start flex-column">
                                                         <a href="#" class="text-dark fw-semibold text-hover-primary mb-1 fs-6"><?= $undangan['judul_undangan'] ?></a>
                                                         <span class="text-muted fw-normal text-muted d-block fs-7"><?= $undangan['kategori'] ?></span>
                                                     </div>
                                                 </div>
                                             </td>
                                             <td>
                                                 <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,790</a>
                                                 <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                             </td>
                                             <td>
                                                 <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$520</a>
                                                 <span class="text-muted fw-semibold text-muted d-block fs-7">Rejected</span>
                                             </td>
                                             <td>
                                                 <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Bradly Beal</a>
                                                 <span class="text-muted fw-semibold text-muted d-block fs-7">Insurance</span>
                                             </td>
                                             <td>
                                                 <?= $status ?>
                                             </td>
                                             <td class="d-flex justify-content-end">
                                                 <a href="<?= baseurl ?>/user/undangan/<?= $undangan['slug'] ?>" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                     <i class="ki-duotone ki-exit-right-corner fs-2">
                                                         <span class="path1"></span>
                                                         <span class="path2"></span>
                                                     </i>
                                                 </a>
                                                 <div class="dropdown mx-1">
                                                     <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                         <i class="ki-duotone ki-switch fs-2">
                                                             <span class="path1"></span>
                                                             <span class="path2"></span>
                                                         </i>
                                                     </button>
                                                     <div class="menu dropdown-menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                                         <div class="menu-item px-3">
                                                             <a href="javascript:void(0);" class="menu-link px-3 bukaKodeQR fw-normal">
                                                                 <?= Lang::bhs('Edit') ?>
                                                             </a>
                                                         </div>

                                                         <div class="menu-item px-3">
                                                             <a href="<?= baseurl ?>/<?= $undangan['slug'] ?>/" target="_blank" class="menu-link px-3 fw-normal">
                                                                 <?= Lang::bhs('Pratinjau') ?>
                                                             </a>
                                                         </div>
                                                         <div class="menu-item px-3">
                                                             <a href="<?= baseurl ?>/user/undangan/terima-tamu/<?= $undangan['slug'] ?>" class="menu-link px-3 fw-normal">
                                                                 <?= Lang::bhs('Terima Tamu') ?>
                                                             </a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <a href="javascript:void();" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm hapusUndangan" data-idundangan="<?= md5($undangan['id_q']) ?>">
                                                     <i class="ki-duotone ki-trash fs-2">
                                                         <span class="path1"></span>
                                                         <span class="path2"></span>
                                                         <span class="path3"></span>
                                                         <span class="path4"></span>
                                                         <span class="path5"></span>
                                                     </i>
                                                 </a>
                                             </td>
                                         </tr>

                                     <?php
                                            $no++;
                                        }
                                    } else {
                                        ?>
                                     <tr>
                                         <td>
                                             <img src="<?= baseurl ?>/static/admin/media/nodata.png" width="250" class="img-fluid">
                                             <div class="text-center fs-2 fw-bold text-gray-800"><?= Lang::bhs('Oops.') ?></div>
                                             <div class="text-center fs-3 text-gray-600"><?= Lang::bhs('Kamu masih belum membuat Undangan nih.') ?></div>
                                         </td>
                                     </tr>
                                 <?php } ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
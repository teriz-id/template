<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class=" container-xxl " id="kt_content_container">

        <div class="row gy-5 g-xl-10">
            <div class="col-xl-4">
                <div class="card card-flush h-xl-100">
                    <div class="card-header pt-7">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark"><?= Lang::bhs('Pindai Kode QR') ?></span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex">
                                <button type="button" class="btn btn-light w-100 me-1" id="startButton"><?= Lang::bhs('Mulai') ?></button>
                            </div>
                        </div>
                        <div class="mb-6 mt-3">
                            <video id="video" width="100%" height="100%" class="border border-dashed border-gray-300 rounded"></video>
                        </div>
                        <div class="fv-row mb-7">
                            <div class="align-items-center fw-bold d-block" id="sourceSelectPanel" style="display:none">
                                <div class="text-muted fs-7 me-2"><?= Lang::bhs('Ganti perangkat kamera') ?></div>
                                <select id="sourceSelect" name="paket" data-control="select2" data-placeholder="<?= Lang::bhs('Ganti perangkat kamera...') ?>" class="form-select form-select-solid form-select-lg">
                                </select>
                            </div>
                        </div>
                        <input type="hidden" id="decoding-style" value="continuously">
                        <div class="fv-row mb-7">
                            <div class="align-items-center fw-bold d-block" id="sourceSelectPanel" style="display: table">
                                <div class="text-muted fs-7 me-2"><?= Lang::bhs('Keterangan') ?></div>
                                <span><code id="result"></code></span>
                                <span id="result2" style="display: none;"></span>
                                <input id="idKodeQRUndangan" type="hidden" value="<?= $model['undangan']['id_q'] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="konfirmasiManual" class="col-xl-8">
                <div class="card card-flush h-xl-100">
                    <div class="card-header pt-7">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark"><?= Lang::bhs('Konfirmasi Manual') ?></span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <input type="hidden" id="kategoribyIdUndangan2" value="<?= md5($model['undangan']['id_q']) ?>">
                                <input type="search" class="form-control form-control-sm form-control-lg form-control-solid" data-idundangan="<?= md5($model['undangan']['id_q']) ?>" id="cari" placeholder="<?= Lang::bhs('Cari') ?>" value="" />
                            </div>
                        </div>
                    </div>

                    <div class="card-body py-4">
                        <table id="listTamuUndangan" class="table align-middle table-row-dashed fs-6 gy-5">
                            <thead>
                                <tr class="text-start text-muted fw-semibold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#listTamuUndangan .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th><?= Lang::bhs('Nama') ?></th>
                                    <th><?= Lang::bhs('Kelompok') ?></th>
                                    <th><?= Lang::bhs('Hadir') ?></th>
                                    <th class="text-end"><?= Lang::bhs('Status') ?></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-normal listTamuUndangan">
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
                                        <td>
                                            <a href="javascript:void(0);" class="KonfirmTamuManual" data-idtamu="<?= md5($tamu['id_tm']) ?>" data-idundangan="<?= md5($tamu['id_undangan']) ?>"><?= $tamu['nama'] ?></a>
                                        </td>
                                        <td style="word-wrap:break-word;"><?= $tamu['kelompok'] ?> </td>
                                        <td>
                                            <?php
                                            if ($tamu['hadir'] == 'hadir') {
                                            ?>
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                        <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                                                        <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                                    </svg>
                                                </span>
                                                <?php
                                            } else {
                                                if ($tamu['statusTamu'] == 'approved') {
                                                ?>
                                                    <button class="btn btn-sm btn-warning btn-color-danger KonfirmTamuManual" data-idtamu="<?= md5($tamu['id_tm']) ?>" data-idundangan="<?= md5($tamu['id_undangan']) ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Konfirmasi Kehadiran') ?>"><?= Lang::bhs('Konfirmasi') ?></button>
                                            <?php
                                                }
                                            } ?>
                                        </td>
                                        <td class="text-end">
                                            <?php
                                            if ($tamu['statusTamu'] == 'approved') {
                                                echo '<span class="badge badge-light-success fw-semibold">' . Lang::bhs('Sukses') . '</span>';
                                            } else {
                                                echo '<span class="badge badge-light-danger fw-semibold">' . Lang::bhs('Menunggu') . '</span>';
                                            } ?>
                                        </td>
                                        <td class="text-end">
                                            <?php
                                            if ($tamu['statusTamu'] !== 'approved') {
                                            ?>
                                                <span class="text-success svg-icon svg-icon-3 approvedTamu approved<?= md5($tamu['id_tm']) ?>" data-idundangan="<?= md5($tamu['id_undangan']) ?>" data-idtamu="<?= md5($tamu['id_tm']) ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="<?= Lang::bhs('Setujui Tamu Undangan ini') ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                    </svg>
                                                </span>
                                            <?php
                                            }
                                            ?>
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

<div class="modal fade" id="importTamu" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                <div class="modal-body pt-10 pb-15 px-lg-17">
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

<div class="modal fade" id="tambahKontenUndangan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form id="formImportTamu" class="form" action="<?= baseurl ?>/user/qondangan/importtamu" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h2 class="fw-bold"><?= Lang::bhs('Tambah Konten Undangan') ?></h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body pt-10 pb-15 px-lg-17">
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

<div class="modal fade" id="konfirmasiTamuManual" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form id="konfirmasiJmlTamu" class="form" action="<?= baseurl ?>/user/qondangan/konfirmasitamu" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h2 class="fw-bold"><?= $model['undangan']['judul_undangan'] ?></h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body pt-10 pb-15 px-lg-17">
                    <div class="col-12">
                        <div class="card card-flush h-xl-100">
                            <div id="selamatDatangTamuManual" class="text-center"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-stack flex-wrap mb-15">
                    <div class="d-flex align-content-center fw-bold d-block ">
                        <div class="text-muted fs-7 me-2" style="white-space: nowrap;"><?= Lang::bhs('Jumlah Tamu : ') ?></div>
                        <input id="jumlahTamu" name="jumlahtamu" type="number" class="form-control form-control-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-5" value="1" min="1" style="width: 75px;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                    <button type="submit" class="btn btn-primary simpanJumlahTamu" data-idundangan="<?= md5($model['undangan']['id_q']) ?>"><?= Lang::bhs('Konfirmasi') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="terimaTamu" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form id="konfirmasiJmlTamu" class="form" action="<?= baseurl ?>/user/qondangan/konfirmasitamu" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h2 class="fw-bold"><?= $model['undangan']['judul_undangan'] ?></h2>
                    <div class="btn btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        Tutup otomatis dalam waktu : <span id="hitung-mundur"></span> detik
                    </div>
                </div>
                <div class="modal-body pt-10 pb-15 px-lg-17">
                    <div class="col-12">
                        <div class="card card-flush h-xl-100">
                            <div id="selamatDatangTamu" class="text-center"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center flex-stack flex-wrap mb-15">
                    <div class="d-flex align-content-center fw-bold d-block ">
                        <div class="text-muted fs-7 me-2" style="white-space: nowrap;"><?= Lang::bhs('Jumlah Tamu : ') ?></div>
                        <input id="jumlahTamu" name="jumlahtamu" type="number" class="form-control form-control-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-5" value="1" style="width: 75px;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><?= Lang::bhs('Tutup') ?></button>
                    <button type="submit" class="btn btn-primary simpanJumlahTamu" data-idundangan="<?= md5($model['undangan']['id_q']) ?>"><?= Lang::bhs('Konfirmasi') ?></button>
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
            Hello, world!
        </div>
    </div>
</div>


<script>
    window.onload = function() {
        $(document).ready(function() {
            var timeout;
            $("#tampilkanTamu").mouseenter(function() {
                clearTimeout(timeout);
            });

            $("#tampilkanTamu").mouseleave(function() {
                timeout = setTimeout(function() {
                    $('#konfirmasiManual').show();
                    $('#tampilkanTamu').hide();
                }, 5000);
            });
        });

        function decodeOnce(codeReader, selectedDeviceId) {
            codeReader.decodeFromInputVideoDevice(selectedDeviceId, 'video').then((result) => {
                $('#result').text(result.text);
            }).catch((err) => {
                $('#result').text(err);
            })
        }

        function decodeContinuously(codeReader, selectedDeviceId) {
            codeReader.decodeFromInputVideoDeviceContinuously(selectedDeviceId, 'video', (result, err) => {
                if (result) {
                    $('#result').text('Sebentar...');
                    let hasil = $('#result2').text();
                    let idundangan = $('#idKodeQRUndangan').val();
                    let idTamu = result;
                    var timeout;
                    console.log(result.text);
                    if (result != hasil) {
                        $('#result2').text(result.text);
                        setTimeout(function() {
                            $('#result2').text('');
                        }, 2000);
                        $.ajax({
                            url: hostUrl + "user/qondangan/kodeqrtamu",
                            type: "POST",
                            data: {
                                result: result.text,
                                idundangan: idundangan,
                            },
                            success: function(response) {
                                if (response.status == 'success') {
                                    $('#konfirmasiTamuManual').modal('hide');
                                    $('#result').text(response.nama);
                                    $('#jumlahTamu').val(response.jumlahtamu);
                                    $('#selamatDatangTamu').html('<div class="fs-2 mt-4">' + response.salam + '</div><div style="font-size: 45px;font-weight:bold;">' + response.nama + '</div><div class="fs-1">' + response.kelompok + '</div><input type="hidden" id="idtamuforconfirm" name="idtamuforconfirm" value="' + response.idtamu + '">');
                                    $('#terimaTamu').modal('show');
                                } else {
                                    $('#konfirmasiTamuManual').modal('hide');
                                    $('#result').text(response.keterangan);
                                    $('#selamatDatangTamu').html('<div style="font-size: 35px;font-weight:bold;">' + response.keterangan + '</div>');
                                    $('#terimaTamu').modal('hide');
                                }
                                $(".listTamuUndangan").load(hostUrl + "user/qondangan/loadlisttamubyid?idtamu=" + result);

                                function updateCountdown(countdown) {
                                    var seconds = countdown % 60;
                                    seconds = seconds < 10 ? seconds : seconds;
                                    var countdownString = seconds;
                                    $("#hitung-mundur").text(countdownString);
                                }

                                function resetCountdown() {
                                    updateCountdown(5);
                                }

                                function startCountdown(timeout) {
                                    var countdown = 5;
                                    updateCountdown(countdown);
                                    timeout = setTimeout(function() {
                                        $('#terimaTamu').modal('hide');
                                        $('#result').text('');
                                    }, countdown * 1000);
                                    $("#terimaTamu").data("timeout", timeout);
                                    var countdownInterval = setInterval(function() {
                                        countdown--;
                                        updateCountdown(countdown);
                                        if (countdown <= 0) {
                                            clearInterval(countdownInterval);
                                        }
                                    }, 1000);
                                    $("#terimaTamu").data("countdownInterval", countdownInterval);
                                }

                                function stopCountdown() {
                                    clearTimeout($("#terimaTamu").data("timeout"));
                                    clearInterval($("#terimaTamu").data("countdownInterval"));
                                }
                                $("#terimaTamu").on("mousemove click", function() {
                                    var targetId = $(this).attr("id");
                                    clearTimeout($("#" + targetId).data("timeout"));
                                    clearInterval($("#" + targetId).data("countdownInterval"));
                                    resetCountdown();
                                    startCountdown();
                                });
                                stopCountdown();
                                resetCountdown();
                                startCountdown();
                            }
                        });
                    }
                }

                if (err) {
                    if (err instanceof ZXing.NotFoundException) {
                        console.log('Kode QR tidak ditemukan.');
                    }

                    if (err instanceof ZXing.ChecksumException) {
                        console.log('Kode QR tidak valid.');
                    }

                    if (err instanceof ZXing.FormatException) {
                        console.log('Format Kode QR tidak valid.');
                    }
                }
            });
        }

        let selectedDeviceId;
        const codeReader = new ZXing.BrowserQRCodeReader();

        codeReader.getVideoInputDevices()
            .then((videoInputDevices) => {
                const sourceSelect = $('#sourceSelect');
                selectedDeviceId = videoInputDevices[0].deviceId;
                if (videoInputDevices.length >= 1) {
                    videoInputDevices.forEach((element) => {
                        const sourceOption = $('<option>').text(element.label).val(element.deviceId);
                        sourceSelect.append(sourceOption);
                    });

                    sourceSelect.on('change', () => {
                        selectedDeviceId = sourceSelect.val();
                    });

                    const sourceSelectPanel = $('#sourceSelectPanel');
                    sourceSelectPanel.css('display', 'block');
                }

                $(document).on('click', '#startButton', function() {
                    const decodingStyle = $('#decoding-style').val();
                    $('#startButton').text("Hentikan");
                    $('#startButton').attr("id", "resetButton");

                    if (decodingStyle == 'once') {
                        decodeOnce(codeReader, selectedDeviceId);
                    } else {
                        decodeContinuously(codeReader, selectedDeviceId);
                    }

                    console.log(`Decode dari kamera id ${selectedDeviceId}`);
                });

                $(document).on('click', '#resetButton', function() {
                    codeReader.reset();
                    $('#result').text('');
                    $('#result2').text('');
                    $('#resetButton').text("Mulai");
                    $('#resetButton').attr("id", "startButton");
                });

            }).catch((err) => {
                console.error(err);
            });



        $(document).on('submit', '#konfirmasiJmlTamu', function(e) {
            e.preventDefault();
            let idundangan = $(this).data('idundangan');
            $.ajax({
                    url: $(this).attr("action"),
                    type: $(this).attr("method"),
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#terimaTamu').modal('hide');
                        $('#konfirmasiTamuManual').modal('hide');
                        if (response.status == 'success') {
                            showToast();
                            $('.toast-body').html('<?= Lang::bhs('Berhasil mengupdate tamu.') ?>');
                            $(".listTamuUndangan").load(hostUrl + "user/qondangan/loadlisttamumanual?idundangan=" + response.idundangan);
                        }
                    },
                    beforeSend: function(b) {
                        $(".simpanJumlahTamu").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> Sebentar...");
                    }
                })
                .done(function(d) {
                    $(".simpanJumlahTamu").html("<?= Lang::bhs('Konfirmasi') ?>");
                });
        });

        $(document).on('click', '.KonfirmTamuManual', function() {
            $('#result').text('Sebentar...');
            let result = $(this).data('idtamu');
            let idundangan = $(this).data('idundangan');
            var timeout;
            $.ajax({
                url: hostUrl + "user/qondangan/cektamumanual",
                type: "POST",
                data: {
                    result: result
                },
                success: function(response) {
                    setTimeout(function() {
                        $('#result').text('');
                    }, 5000);
                    if (response.status == 'success') {
                        $('#result').text(response.nama);
                        $('#jumlahTamu').val(response.jumlahtamu);
                        $('#selamatDatangTamuManual').html('<div class="fs-2 mt-4">' + response.salam + '</div><div style="font-size: 45px;font-weight:bold;">' + response.nama + '</div><div class="fs-1">' + response.kelompok + '</div><input type="hidden" id="idtamuforconfirm" name="idtamuforconfirm" value="' + response.idtamu + '">');
                    } else {
                        $('#result').text(response.keterangan);
                        $('#selamatDatangTamuManual').html('<div style="font-size: 35px;">' + response.keterangan + '</div>');
                    }
                    $('#konfirmasiTamuManual').modal('show');
                }
            });
        });


    };
</script>
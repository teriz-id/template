<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-semibold me-1"><?= date('Y') ?>&copy;</span>
            <a href="#" target="_blank" class="text-gray-800 text-hover-primary"><?= Lang::bhs('Qondangan') ?></a>
        </div>
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
            <li class="menu-item">
                <a href="#" target="_blank" class="menu-link px-2">About</a>
            </li>
            <li class="menu-item">
                <a href="#" target="_blank" class="menu-link px-2">Support</a>
            </li>
            <li class="menu-item">
                <a href="#" target="_blank" class="menu-link px-2">Purchase</a>
            </li>
        </ul>
    </div>
</div>
</div>
</div>
</div>


<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<script>
    var hostUrl = "<?= baseurl ?>/";
</script>
<script src="<?= baseurl ?>/static/admin/plugins/global/plugins.bundle.js"></script>
<script src="<?= baseurl ?>/static/admin/js/scripts.bundle.js"></script>
<script src="<?= baseurl ?>/static/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="<?= baseurl ?>/static/admin/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?= baseurl ?>/static/admin/js/widgets.bundle.js"></script>
<script src="<?= baseurl ?>/static/admin/js/custom/widgets.js"></script>
<script src="<?= baseurl ?>/static/admin/js/custom/apps/chat/chat.js"></script>
<script src="<?= baseurl ?>/static/admin/js/typedjs.bundle.js"></script>
<script src="<?= baseurl; ?>/static/admin/js/create.js"></script>
<script src="<?= baseurl ?>/static/admin/js/list.js"></script>
<?php if (isset($model['nav']) && $model['nav'] == 'Terima Tamu') { ?>
    <script src="<?= baseurl ?>/static/admin/js/zxing.min.js"></script>
<?php } ?>
<?php if (isset($model['nav']) && ($model['nav'] == 'Undangan' || $model['nav'] == 'Terima Tamu')) { ?>
    <script src="<?= baseurl ?>/static/admin/js/jquery-ui.min.js"></script>
    <script src="<?= baseurl ?>/static/admin/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?= baseurl ?>/static/admin/js/tinymce/tinymce.bundle.js"></script>
    <script src="<?= baseurl ?>/static/admin/js/ckeditor-inline.bundle.js"></script>
<?php } ?>

</body>

</html>
<?php
$url = "static/user/images/" . User::folder() . "/";
if (!is_dir($url)) {
    mkdir($url, 0777, true);
}
$maksfile = 20;
$hitungfile = count(glob("$url*"));
$sisa = $maksfile - $hitungfile;
?>
<script>
    var jumlahfile = '<?= $sisa ?>';
    var maksfile = '<?= $maksfile ?>';

    function showToast() {
        const container = document.getElementById('suksesToast');
        const targetElement = document.querySelector('[data-toast="stack"]');
        targetElement.parentNode.removeChild(targetElement);
        const newToast = targetElement.cloneNode(true);
        container.append(newToast);
        const toast = bootstrap.Toast.getOrCreateInstance(newToast);
        toast.show();
    }

    $(document).on('show.bs.modal', '.modal', function() {
        var zIndex = 1040 + (10 * $('.modal:visible').length);
        $(this).css('z-index', zIndex);
        setTimeout(function() {
            $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
        }, 0);
    });
</script>


<!-- dashboard -->
<script type="text/javascript">
    $(document).ready(function() {
        tinymce.init({
            selector: "#editorDocument",
            // height: "480",
            menubar: false,
            toolbar: ["styleselect fontselect fontsizeselect",
                "undo redo | cut copy paste | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify| bullist numlist | outdent indent | blockquote subscript superscript | advlist | print preview |  code"
            ],
            plugins: "autoresize advlist textcolor charmap preview code"
        });
        tinymce.init({
            selector: "#editorDocument2",
            // height: "480",
            menubar: false,
            toolbar: ["styleselect fontselect fontsizeselect",
                "undo redo | cut copy paste | bold italic | forecolor backcolor | alignleft aligncenter alignright alignjustify| bullist numlist | outdent indent | blockquote subscript superscript | advlist | print preview |  code"
            ],
            plugins: "autoresize advlist textcolor charmap preview code"
        });
    });

    $(document).on('submit', '#formGreeting', function(e) {
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
                        $('#editKontenUndangan').modal('hide');
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    } else {
                        showToast();
                        $('.toast-body').html(response.keterangan);
                    }
                },
                beforeSend: function(b) {
                    $(".simpanKonten").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> Sebentar...");
                }
            })
            .done(function(d) {
                $(".simpanKonten").html("Simpan");
            });
    });

    $(document).on('click', '.bukaGaleri', function() {
        $('#Galeri').modal('show');
    });

    $(document).on('click', '.tutupModal', function() {
        $('#Galeri').modal('hide');
    });

    $(document).on('hidden.bs.modal', function() {
        $('#editKontenUndangan').html('');
    });

    $(document).ready(function() {
        $("#MusicLatar div").hide();
        $('select[name="pilihSumber"]').on('change', function() {
            $('#MusikLatar > div').hide();
            $('#' + $(this).val()).show();
        });
        $('#qondangan select[name="paket"]').on('change', function() {
            $('#MusikLatar > div').not('#qondangan').hide();
            $('#' + $(this).val()).show();
        });

        function createResultCard(item) {
            var videoId = item.id.videoId;
            var title = item.snippet.title;
            var thumbnailUrl = item.snippet.thumbnails.high.url;
            var cardHtml = "<span>'" + title + "'</span><br/>";
            return cardHtml;
        }

        $(function() {
            var apiKey = "AIzaSyBGm5mSWCgHZPTAROWjtyCsc1V9PmfZNw0";
            var youtubeUrl = "https://www.googleapis.com/youtube/v3/search";

            $("#searchYoutube").keyup(function() {
                var searchTerm = $("#searchYoutube").val();

                $.ajax({
                    url: youtubeUrl,
                    data: {
                        key: apiKey,
                        q: searchTerm,
                        type: "video",
                        part: "snippet",
                        maxResults: 10
                    },
                    success: function(response) {
                        var resultsContainer = $("#resultYoutube");
                        resultsContainer.empty();

                        $.each(response.items, function(index, item) {
                            var cardHtml = createResultCard(item);
                            resultsContainer.append(cardHtml);
                        });

                        $(".result-card").click(function() {
                            var videoId = $(this).data("video-id");
                            var audioUrl = "https://music.youtube.com/watch?v=" + videoId;

                            $("#audio-player").attr("src", audioUrl);
                            $("#play-btn").click();
                        });
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            $("#play-btn").click(function() {
                $("#audio-player")[0].play();
            });

            $("#pause-btn").click(function() {
                $("#audio-player")[0].pause();
            });
        });
    });

    $(document).on('click', '.hapusDaftarTamu', function() {
        let idundangan = $(this).data('idundangan');
        let idtamu = $(this).data('idtamu');
        Swal.fire({
            text: "<?= Lang::bhs('Yakin mau hapus tamu ini?') ?>",
            icon: "warning",
            buttonsStyling: !1,
            confirmButtonText: "<?= Lang::bhs('Yakin, Hapus!') ?>",
            showCancelButton: true,
            reverseButtons: true,
            customClass: {
                cancelButton: "btn btn-danger",
                confirmButton: "btn btn-primary",
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: hostUrl + "user/qondangan/hapustamu",
                    type: "POST",
                    data: {
                        idtamu: idtamu,
                        idundangan: idundangan,
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            $(".listTamuUndangan").load(hostUrl + "user/qondangan/loadlisttamu?idundangan=" + idundangan);
                            showToast();
                            $('.toast-body').html('<?= Lang::bhs('Tamu berhasil dihapus.') ?>');
                        }
                    },
                    beforeSend: function() {
                        $('.' + idtamu).html("<span class='spinner-border spinner-border-sm'></span>");
                    }
                });
            }
        });
    });

    $(document).on('click', '.bukaKodeQR', function() {
        let idTamu = $(this).data('no');
        $.ajax({
                url: hostUrl + "user/qondangan/kodeqr",
                type: "POST",
                data: {
                    idTamu: idTamu,
                },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#kodeQR').modal('show');
                        $('.loadKodeQRTamu').html(response.dataTamu);
                    }
                },
                beforeSend: function() {
                    $('.loadKodeQR' + idTamu).html("<span class='spinner-border spinner-border-sm'></span>");
                }
            })
            .done(function(d) {
                $('.loadKodeQR' + idTamu).html('<svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8 6H6v2h2V6Z" fill="currentColor" /><path d="M3 5.5A2.5 2.5 0 0 1 5.5 3h3A2.5 2.5 0 0 1 11 5.5v3A2.5 2.5 0 0 1 8.5 11h-3A2.5 2.5 0 0 1 3 8.5v-3ZM5.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM6 16h2v2H6v-2Z" fill="currentColor" /><path d="M3 15.5A2.5 2.5 0 0 1 5.5 13h3a2.5 2.5 0 0 1 2.5 2.5v3A2.5 2.5 0 0 1 8.5 21h-3A2.5 2.5 0 0 1 3 18.5v-3Zm2.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM18 6h-2v2h2V6Z" fill="currentColor" /><path d="M15.5 3A2.5 2.5 0 0 0 13 5.5v3a2.5 2.5 0 0 0 2.5 2.5h3A2.5 2.5 0 0 0 21 8.5v-3A2.5 2.5 0 0 0 18.5 3h-3ZM15 5.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-3ZM13 13h2.75v2.75H13V13ZM18.25 15.75h-2.5v2.5H13V21h2.75v-2.75h2.5V21H21v-2.75h-2.75v-2.5ZM18.25 15.75V13H21v2.75h-2.75Z" fill="currentColor" /></svg>');
            });
    });

    $(document).on('click', '.copyLinkTamu', function() {
        let noTamu = $(this).data('no');
        var copyText = $("#linkTamu" + noTamu).val();
        var tempInput = $("<input>");
        $("body").append(tempInput);
        tempInput.val(copyText).select();
        document.execCommand("copy");
        tempInput.remove();
        showToast();
        $('.toast-body').html('<?= Lang::bhs('Link tersalin.') ?>');
        $('.loadSalinTautan' + noTamu).html('<svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.62 3.596L7.815 12.81l-.728-.033L4 8.382l.754-.53 2.744 3.907L14.917 3l.703.596z"/><path fill-rule="evenodd" clip-rule="evenodd" d="M7.234 8.774l4.386-5.178L10.917 3l-4.23 4.994.547.78zm-1.55.403l.548.78-.547-.78zm-1.617 1.91l.547.78-.799.943-.728-.033L0 8.382l.754-.53 2.744 3.907.57-.672z"/></svg>');
        setTimeout(function() {
            $('.loadSalinTautan' + noTamu).html('<svg width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5.503 4.627 5.5 6.75v10.504a3.25 3.25 0 0 0 3.25 3.25h8.616a2.251 2.251 0 0 1-2.122 1.5H8.75A4.75 4.75 0 0 1 4 17.254V6.75c0-.98.627-1.815 1.503-2.123ZM17.75 2A2.25 2.25 0 0 1 20 4.25v13a2.25 2.25 0 0 1-2.25 2.25h-9a2.25 2.25 0 0 1-2.25-2.25v-13A2.25 2.25 0 0 1 8.75 2h9Zm0 1.5h-9a.75.75 0 0 0-.75.75v13c0 .414.336.75.75.75h9a.75.75 0 0 0 .75-.75v-13a.75.75 0 0 0-.75-.75Z" fill="currentColor" /></svg>');
        }, 1500);
    });

    $(document).on('click', '.approvedTamu', function() {
        let idtamu = $(this).data('idtamu');
        let idundangan = $(this).data('idundangan');
        $.ajax({
            url: hostUrl + "user/qondangan/approvedtamu",
            type: "POST",
            data: {
                idtamu: idtamu,
            },
            success: function(response) {
                if (response.status == 'success') {
                    $(".listTamuUndangan").load(hostUrl + "user/qondangan/loadlisttamu?idundangan=" + idundangan);
                    showToast();
                    $('.toast-body').html('<?= Lang::bhs('Tamu telah dihapus.') ?>');
                }
            },
            beforeSend: function() {
                $('.approved' + idtamu).html("<span class='spinner-border spinner-border-sm'></span>");
            }
        })
    });

    $(document).on('submit', '#tambahTamu', function(e) {
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
                        showToast();
                        $('.toast-body').html(response.keterangan);
                        $('#tambahTamu')[0].reset();
                        $('.fokus').focus();
                        $(".listTamuUndangan").load(hostUrl + "user/qondangan/loadlisttamu?idundangan=" + idundangan);
                    } else if (response.status == 'empty') {
                        Swal.fire({
                            text: response.keterangan,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "<?= Lang::bhs('Siap, Paham!') ?>",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
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
                    $(".tombolTambahTm").html("<span class='spinner-border spinner-border-sm align-middle mr-2'></span> <?= Lang::bhs('Sebentar...') ?>");
                }
            })
            .done(function(d) {
                $(".tombolTambahTm").html("<?= Lang::bhs('Simpan') ?>");
            });
    });

    $(document).ready(function() {
        $(".tambahTamu").click(function() {
            $("#tambahTamu").show();
            $("#cariTamu").hide();
            $('.fokus').focus();
        });

        $(".cariTamu").click(function() {
            $("#tambahTamu").hide();
            $("#cariTamu").show();
            $('#cari').focus();
        });
    });

    $(document).on('click', '.editUndanganUser', function() {
        let idundangan = $(this).data('idundangan');
        $.ajax({
                url: hostUrl + "user/qondangan/editundangan",
                type: "GET",
                data: {
                    idundangan: idundangan,
                },
                success: function(response) {
                    $('#editUndangan').modal('show');
                    $(".loadEditUndangan").html(response);
                },
                beforeSend: function() {
                    $(".spinedit" + idundangan).html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
                }
            })
            .done(function() {
                $(".spinedit" + idundangan).html('<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" /><path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"/></svg>');
            });
    });

    $(document).on('click', '.tampilkantema', function() {
        let tema = $(this).data('tema');
        $.ajax({
            url: hostUrl + "user/qondangan/temapilihan",
            type: "GET",
            data: {
                tema: tema,
            },
            success: function(ajaxData) {
                $("#temapilihan").val(tema);
                $("#priviewthemes").html(ajaxData);
            },
            beforeSend: function() {
                $("#priviewthemes").html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Sebentar")
            }
        });
    });

    $(document).on('click', '.pratinjautema', function() {
        let tema = $(this).data('idtema');
        $.ajax({
                url: hostUrl + "user/qondangan/temaglobal",
                type: "GET",
                success: function(ajaxData) {
                    $('#pratinjau').modal('show');
                    $("#loadPratinjau").html('<iframe src="<?= baseurl; ?>/contoh/' + tema + '" width="100%" height="550" frameborder="0" style="border-radius: 20px;"></iframe>');
                },
                beforeSend: function() {
                    $(".tema" + tema).html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Sebentar")
                }
            })
            .done(function() {
                $(".tema" + tema).html('<?= Lang::bhs('Pratinjau') ?>');
            });
    });

    $(document).on('click', '.tutupPratinjau', function() {
        $('#pratinjau').modal('hide');
        $("#loadPratinjau").empty();
    });

    $(document).on('click', '.pilihtema', function() {
        $.ajax({
                url: hostUrl + "user/qondangan/temaglobal",
                type: "GET",
                success: function(ajaxData) {
                    $('#tema').modal('show');
                    $("#loadTema").html(ajaxData);
                },
                beforeSend: function() {
                    $(".loadspin").html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Sebentar")
                }
            })
            .done(function() {
                $('.loadspin').html(pilihtema);
            });
    });

    $('.hapustema').on('click', function() {
        $("#priviewthemes").empty();
    });

    $(document).on('submit', '#formBuatUndangan', function(e) {
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
                        // window.location.href = hostUrl + 'user/dashboard';
                        $("#item1").attr("class", "stepper-item completed");
                        $("#item2").attr("class", "stepper-item completed");
                        $("#item3").attr("class", "stepper-item current");
                        $('#tutup').removeAttr('data-bs-dismiss');
                        $("#tutup").addClass("tutup");
                        $('.loadSuccess').load(hostUrl + 'user/qondangan/modulpembayaran');
                    } else if (response.status == 'empty') {
                        Swal.fire({
                            text: response.keterangan,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "<?= Lang::bhs('Siap, Paham!') ?>",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            }
                        });
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
                    $(".indicatorBuatUndangan").html("<span class='spinner-border spinner-border-sm align-middle ms-2'></span> Sebentar...");
                }
            })
            .done(function(d) {
                $(".indicatorBuatUndangan").html("Buat <span class='svg-icon svg-icon-3 ms-2 me-0'><svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><rect opacity='0.5' x='18' y='13' width='13' height='2' rx='1' transform='rotate(-180 18 13)' fill='currentColor' /><path d='M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z' fill='currentColor' /></svg></span>");
            });
    });


    $(document).on('click', '.hapusUndangan', function() {
        console.log('test');
        let idundangan = $(this).data('idundangan');
        Swal.fire({
            text: "<?= Lang::bhs('Yakin mau hapus undangan ini?') ?>",
            icon: "question",
            buttonsStyling: !1,
            confirmButtonText: "<?= Lang::bhs('Yakin, Hapus!') ?>",
            showCancelButton: true,
            reverseButtons: true,
            customClass: {
                cancelButton: "btn btn-danger",
                confirmButton: "btn btn-primary",
            }
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: hostUrl + "user/qondangan/hapus",
                    type: "POST",
                    data: {
                        idundangan: idundangan,
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            $(".listUndangan").load(hostUrl + "user/qondangan/loadlistundangan");
                            Swal.fire(
                                '<?= Lang::bhs('Terhapus!') ?>',
                                '<?= Lang::bhs('Undangan anda berhasil dihapus.') ?>',
                                'success'
                            )
                        }
                    },
                    beforeSend: function() {
                        $('.' + idundangan).html("<span class='spinner-border spinner-border-sm'></span>");
                    }
                });
            }
        });
    });

    $(document).ready(function() {
        $('.buatUndangan').on('click', function() {
            $.ajax({
                    url: hostUrl + "user/qondangan/modalundangan",
                    type: "GET",
                    success: function(ajaxData) {
                        $("#buatUndangan").modal('show');
                        $(".loadSuccess").html(ajaxData);
                    },
                    beforeSend: function() {
                        $(".loadspin").html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
                    }
                })
                .done(function(d) {
                    $('.loadspin').html("<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><rect opacity='0.5' x='11.364' y='20.364' width='16' height='2' rx='1' transform='rotate(-90 11.364 20.364)' fill='currentColor' /><rect x='4.36396' y='11.364' width='16' height='2' rx='1' fill='currentColor' /></svg>");
                });
        });
    });

    $(document).on('click', '.tutup', function() {
        location.reload(true);
    });

    $(document).on('click', '.userLogout', function(e) {
        e.preventDefault();
        Swal.fire({
            text: "<?= Lang::bhs('Yakin mau keluar?') ?>",
            icon: "question",
            buttonsStyling: false,
            showCancelButton: true,
            reverseButtons: true,
            confirmButtonText: "<?= Lang::bhs('Keluar') ?>",
            cancelButtonText: '<?= Lang::bhs('Batal') ?>',
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: 'btn btn-danger'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = hostUrl + 'user/logout';
            }
        });
    });
</script>

</body>

</html>
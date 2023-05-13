<!DOCTYPE html>
<html lang="id" class="notranslate" translate="no">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="google" content="notranslate">
    <link rel="canonical" href="https://undangandigitalkami.com/preview/green-tropical">
    <title>Undangan Pernikahan <?= $model['undangan']['judul_undangan'] ?></title>
    <link rel="icon" type="image/x-icon" href="<?= baseurl ?>/static/qondangan.jpg">
    <meta name="title" content="<?= $model['undangan']['judul_undangan'] ?>">
    <meta name="description" content="">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://undangandigitalkami.com/preview/green-tropical">
    <meta property="og:title" content="<?= $model['undangan']['judul_undangan'] ?>">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://undangandigitalkami.com/themes/green-tropical/thumbnail.webp">
    <!-- css -->
    <link rel="stylesheet" href="<?= baseurl ?>/static/themes/qs1/splide.min.css">
    <link rel="stylesheet" href="<?= baseurl ?>/static/themes/qs1/animate.min.css">
    <link href="<?= baseurl ?>/static/themes/qs1/bootstrap.min.css" rel="stylesheet">

    <link href="<?= baseurl ?>/static/themes/qs1/themes.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= baseurl ?>/static/themes/qs1/qondangan.css">

</head>

<body>
    <main id="app">
        <div id="modalOverlay" class="modal-backdrop fade" style="display: none;"></div>
        <div id="loader" class="loader-wrapper" style="display: none;"><span class="loader"><span class="loader-inner"></span></span></div>
        <audio id="music" loop="loop" autoplay="autoplay" __idm_id__="573441">
            <source src="https://assets.satuMomen.com/musics/a-million-dreams-cover-oleh-alexandra-porat.mp3">
        </audio>
        <div id="Qondangan" class="splide not-open splide--fade splide--ttb is-active is-overflow is-initialized" role="region" aria-roledescription="carousel">
            <div class="splide__track invitation__track splide__track--fade splide__track--ttb" id="Qondangan-track" style="padding-top: 0px; padding-bottom: 0px; height: calc((100% - 0px) - 0px);" aria-live="polite" aria-atomic="true" aria-busy="false">
                <ul class="splide__list invitation__list" id="Qondangan-list" role="presentation">
                    <?php

                    use chillerlan\QRCode\QRCode;

                    foreach ($model['config']['fitur-undangan'] as $config => $fitur) {
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Cover') {

                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                    ?>
                            <li class="splide__slide invitation__slide is-active is-visible" id="Qondangan-slide01" role="group" aria-roledescription="slide" aria-label="1 of 14" style="height: calc(100%); transform: translateX(0%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div style="width: 100%;">
                                            <div>
                                                <div class="text-center animate__animated animate__fadeInDown animate__slower">
                                                    <div class="editable mb-2" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                                    <div class="editable font-accent color-accent h3 mb-3"><?= $model['undangan']['judul_undangan'] ?></div>
                                                    <div class="animate__animated animate__fadeInDown animate__slower image-editable" style="height: 160px; width: 160px; margin: auto auto 20px; border-radius: 100%; overflow: hidden;">
                                                        <?php
                                                        $path = './static/user/images/' . User::folder() . '/' . $model['konten'][$fitur['nama']][3]['text'];
                                                        if (!empty($model['konten'][$fitur['nama']][3]['text']) && file_exists($path)) {
                                                        ?>
                                                            <img src="<?= baseurl ?>/static/user/images/<?= User::folder() ?>/<?= $model['konten'][$fitur['nama']][3]['text'] ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <img src="<?= baseurl ?>/static/admin/media/svg/avatars/blank.svg" style="width: 100%; height: 100%; object-fit: cover;">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <div class="editable mb-2 animate__animated animate__fadeInUp animate__slower" style="color:<?= $model['konten'][$fitur['nama']][1]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][1]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][1]['text'] ?></div>
                                                    <div id="guestNameSlot" class="editable color-accent h5 font-weight-bold mb-4 animate__animated animate__fadeInUp animate__slower"><?= $model['tamu'] ?></div> <button type="button" class="btn-open-invitation btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow" style="color:<?= $model['konten'][$fitur['nama']][2]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][2]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][2]['text'] ?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Greeting') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide is-active is-visible" id="Qondangan-slide01" role="group" aria-roledescription="slide" aria-label="1 of 14" style="height: calc(100%); transform: translateX(0%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div style="width: 100%;">
                                            <div>
                                                <div class="text-center animate__animated animate__fadeInDown animate__slower">
                                                    <div class="mb-2" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                                    <div class="font-accent color-accent h1 mb-3" style="font-size: 55px !important;"><?= $model['undangan']['judul_undangan'] ?></div>
                                                </div>
                                                <div class="text-center">
                                                    <div class="mb-4 animate__animated animate__fadeInUp animate__slower" style="color:<?= $model['konten'][$fitur['nama']][1]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][1]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][1]['text'] ?></div>
                                                    <div id="guestNameSlot" class="color-accent h5 font-weight-bold mb-4 animate__animated animate__fadeInUp animate__slower">5 Mei 2023</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Quotes') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide is-next" id="Qondangan-slide02" role="group" aria-roledescription="slide" aria-label="2 of 14" style="height: calc(100%); transform: translateX(-100%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div style="width: 100%;">
                                            <div class="text-left text-dark bg-white rounded p-4 shadow animate__animated animate__fadeInUp animate__slower">
                                                <div class="editable font-italic mb-3" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                                <div class="editable quotes" style="color:<?= $model['konten'][$fitur['nama']][1]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][1]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][1]['text'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Couple') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide03" role="group" aria-roledescription="slide" aria-label="3 of 14" style="height: calc(100%); transform: translateX(-200%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div width="100%">
                                            <div class="editable mb-3 text-center animate__animated animate__fadeInDown animate__slower" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                            <div class="d-flex justify-content-center mb-3" style="gap: 20px;">
                                                <div class="image-editable animate__animated animate__fadeInLeft animate__slower" style="height: 100px; width: 100px; border-radius: 100%; overflow: hidden; background-position: center center; background-size: contain; display: flex; justify-content: center; align-items: center;">
                                                    <?php
                                                    $path = './static/user/images/' . User::folder() . '/' . $model['konten'][$fitur['nama']][7]['text'];
                                                    if (!empty($model['konten'][$fitur['nama']][7]['text']) && file_exists($path)) {
                                                    ?>
                                                        <img src="<?= baseurl ?>/static/user/images/<?= User::folder() ?>/<?= $model['konten'][$fitur['nama']][7]['text'] ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img src="<?= baseurl ?>/static/admin/media/svg/avatars/blank.svg" style="width: 100%; height: 100%; object-fit: cover;">
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="image-editable animate__animated animate__fadeInRight animate__slower" style="height: 100px; width: 100px; border-radius: 100%; overflow: hidden; background-position: center center; background-size: contain; display: flex; justify-content: center; align-items: center;">
                                                    <?php
                                                    $path = './static/user/images/' . User::folder() . '/' . $model['konten'][$fitur['nama']][8]['text'];
                                                    if (!empty($model['konten'][$fitur['nama']][8]['text']) && file_exists($path)) {
                                                    ?>
                                                        <img src="<?= baseurl ?>/static/user/images/<?= User::folder() ?>/<?= $model['konten'][$fitur['nama']][8]['text'] ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <img src="<?= baseurl ?>/static/admin/media/svg/avatars/blank.svg" style="width: 100%; height: 100%; object-fit: cover;">
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="text-center animate__animated animate__fadeInUp animate__slower mb-4">
                                                <div class="editable font-latin color-accent h4 mb-2" style="color:<?= $model['konten'][$fitur['nama']][1]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][1]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][1]['text'] ?></div>
                                                <div class="editable mb-2" style="color:<?= $model['konten'][$fitur['nama']][2]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][2]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][2]['text'] ?></div> <a href="https://instagram.com/<?= $model['konten'][$fitur['nama']][3]['text'] ?>" target="_blank" draggable="false" class="link btn btn-sm btn-primary rounded-pill" style="font-family: sans-serif;" tabindex="-1" style="color:<?= $model['konten'][$fitur['nama']][3]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][3]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][3]['text'] ?></a>
                                            </div>
                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                <div class="editable font-latin color-accent h4 mb-2" style="color:<?= $model['konten'][$fitur['nama']][4]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][4]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][4]['text'] ?></div>
                                                <div class="editable mb-2" style="color:<?= $model['konten'][$fitur['nama']][5]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][5]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][5]['text'] ?></div> <a href="https://instagram.com/<?= $model['konten'][$fitur['nama']][6]['text'] ?>" target="_blank" draggable="false" class="link btn btn-sm btn-primary rounded-pill" style="font-family: sans-serif;" tabindex="-1" style="color:<?= $model['konten'][$fitur['nama']][6]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][6]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][6]['text'] ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Story') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide10" role="group" aria-roledescription="slide" aria-label="10 of 14" style="height: calc(100%); transform: translateX(-900%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div class="text-center" style="width: 100%;">
                                            <div class="editable font-latin color-accent h4 mb-3 animate__animated animate__fadeInDown animate__slower" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                            <div class="animate__animated animate__fadeInUp animate__slower">
                                                <div class="mb-2" style="font-size: 12px;">
                                                    <div class="" style="color:<?= $model['konten'][$fitur['nama']][1]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][1]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][1]['text'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Event') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide04" role="group" aria-roledescription="slide" aria-label="4 of 14" style="height: calc(100%); transform: translateX(-300%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div style="width: 100%;">
                                            <div class="text-center mb-4 animate__animated animate__fadeInLeft animate__slower">
                                                <div class="editable font-latin color-accent h4 mb-2" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                                <div class="" style="color:<?= $model['konten'][$fitur['nama']][1]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][1]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][1]['text'] ?></div>
                                            </div>
                                            <div class="text-center mb-4 animate__animated animate__fadeInRight animate__slower">
                                                <div class="editable font-latin color-accent h4 mb-2" style="color:<?= $model['konten'][$fitur['nama']][2]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][2]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][2]['text'] ?></div>
                                                <div class="" style="color:<?= $model['konten'][$fitur['nama']][3]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][3]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][3]['text'] ?></div>
                                            </div>
                                            <div data-datetime="2022-01-18T19:11" class="countdown-wrapper d-flex flex-column animate__animated animate__fadeInUp animate__slower">
                                                <div class="countdown text-center">
                                                    <div class="countdown-item day">
                                                        <div class="number">00</div>
                                                        <div class="text editable">Hari</div>
                                                    </div>
                                                    <div class="countdown-item hour">
                                                        <div class="number">00</div>
                                                        <div class="text editable">Jam</div>
                                                    </div>
                                                    <div class="countdown-item minute">
                                                        <div class="number">00</div>
                                                        <div class="text editable">Menit</div>
                                                    </div>
                                                    <div class="countdown-item second">
                                                        <div class="number">00</div>
                                                        <div class="text editable">Detik</div>
                                                    </div>
                                                </div> <button class="btn-countdown btn btn-sm btn-pilled btn-accent mt-2" tabindex="-1">Atur Countdown</button>
                                            </div>
                                            <div class="text-center"><a href="https://calendar.google.com/calendar/u/0/r/eventedit?text=&amp;dates=%2F&amp;details=&amp;location=" target="_blank" draggable="false" class="btn-reminder btn btn-primary rounded-pill my-3 animate__animated animate__fadeInUp animate__slow" tabindex="-1" style="color:<?= $model['konten'][$fitur['nama']][4]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][4]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][4]['text'] ?></a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Location') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide05" role="group" aria-roledescription="slide" aria-label="5 of 14" style="height: calc(100%); transform: translateX(-400%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div style="width: 100%;">
                                            <div>
                                                <div class="animate__animated animate__fadeInDown animate__slow" style="width: 100%; margin: auto auto 20px; border-radius: 10px; overflow: hidden; padding-bottom: 100%; position: relative;">
                                                    <iframe width="100%" height="100%" style="border:0;position: absolute;" loading="lazy" allowfullscreen="" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCpV55KNPo55TuxnDFd_dR3MD0luBrN1Gc&amp;zoom=17&amp;q=-3.3265096968337646,114.5743546576721" class="maps-embed">
                                                    </iframe>
                                                </div>
                                                <button class="btn-maps btn btn-sm btn-pilled btn-block btn-accent mt-1 mb-4" tabindex="-1">Edit Denah Lokasi</button>
                                                <div class="text-center animate__animated animate__fadeInUp animate__slow">
                                                    <div class="editable mb-3" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div> <a href="https://www.google.com/maps/search/?q=-3.3265096968337646,114.5743546576721" target="_blank" draggable="false" class="btn-maps-link btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow" tabindex="-1" style="color:<?= $model['konten'][$fitur['nama']][1]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][1]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][1]['text'] ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Gallery') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide06" role="group" aria-roledescription="slide" aria-label="6 of 14" style="height: calc(100%); transform: translateX(-500%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div style="width: 100%;">
                                            <div class="text-center mb-4 animate__animated animate__fadeInDown animate__slower">
                                                <div class="font-latin color-accent h4 mb-2 editable">Galeri Foto Mempelai</div>
                                            </div>
                                            <div class="image-editable d-flex flex-wrap justify-content-center">
                                                <?php
                                                $url = "static/user/images/" . User::folder() . "/gallery\/";
                                                if (!is_dir($url)) {
                                                    mkdir($url, 0777, true);
                                                }

                                                $files = scandir($url);
                                                $images = array();
                                                foreach ($files as $file) {
                                                    $ext = pathinfo($file, PATHINFO_EXTENSION);
                                                    if (in_array($ext, array("jpg", "jpeg", "png"))) {
                                                        $images[] = $file;
                                                    }
                                                }
                                                if (count($images) > 0) {
                                                    foreach ($images as $image) {
                                                ?>
                                                        <div class="animate__animated animate__zoomIn animate__slower" style="width: 33.333%; overflow: hidden; padding: 4px;">
                                                            <div class="light" style="overflow: hidden; width: 100%; height: 100px;">
                                                                <img src="<?= baseurl ?>/<?= $url ?>/<?= $image ?>" alt="<?= $image ?>" class="lightbox" style="width: 100%; height: 100%; object-fit: cover;">
                                                            </div>
                                                        </div>
                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <div class="animate__animated animate__zoomIn animate__slower" style="width: 33.333%; overflow: hidden; padding: 4px;">
                                                        <div class="light" style="overflow: hidden; width: 100%; height: 100px;">
                                                            <img src="<?= baseurl ?>/static/admin/media/svg/avatars/blank.svg" style="width: 100%; height: 100%; object-fit: cover;">
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Video') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide07" role="group" aria-roledescription="slide" aria-label="7 of 14" style="height: calc(100%); transform: translateX(-600%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div style="width: 100%;">
                                            <div>
                                                <div class="embed-video animate__animated animate__fadeInDown animate__slower" style="width: 100%; margin: auto auto 20px; overflow: hidden; padding-bottom: 57%; position: relative;">
                                                    <?php
                                                    if (!empty($model['konten'][$fitur['nama']][1]['text'])) {
                                                    ?>
                                                        <iframe width="560" height="315" src="<?= $model['konten'][$fitur['nama']][1]['text'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen" tabindex="-1" style="border-radius: 15px!important;"></iframe>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/a3ICNMQW7Ok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen" tabindex="-1" style="border-radius: 15px;"></iframe>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                    <div class="quotes mb-3" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Live') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" role="group" aria-roledescription="slide" aria-label="8 of 14" style="height: calc(100%); transform: translateX(-700%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div class="text-center" style="width: 100%;">
                                            <div class="font-latin mb-4 animate__animated animate__fadeInDown animate__slower" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>;">
                                                <?= $model['konten'][$fitur['nama']][0]['text'] ?>
                                            </div>
                                            <div class="animate__animated animate__fadeInUp animate__slower"><?= $model['konten'][$fitur['nama']][1]['text'] ?></div>
                                            <div class="d-flex justify-content-center mt-3">
                                                <div class="image-editable animate__animated animate__zoomIn animate__slower m-2" style="height: 90px; width: 90px; border-radius: 10px; overflow: hidden;"><img src="<?= baseurl ?>/static/themes/qs1/2048px-Instagram_icon.png" draggable="false" style="width: 100%; height: 100%; object-fit: cover;"></div>
                                            </div><a href="https://instagram.com/" target="_blank" draggable="false" class="link btn btn-primary rounded-pill my-3 animate__animated animate__fadeInUp animate__slow" tabindex="-1">Join Live Streaming</a>
                                            <div class="editable animate__animated animate__fadeInUp animate__slower" style="font-size: 14.4px;">Instagram : @Mempelai<br>Zoom Meeting ID : 123456789<br>Password : Rahasia</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Gift') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" role="group" aria-roledescription="slide" style="height: calc(100%); transform: translateX(-800%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile py-20" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%; ">
                                        <div style="width: 100%;" class="text-center">
                                            <div class="font-latin color-accent h4 mb-2 animate__animated animate__fadeInDown animate__slower"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                            <div class="mb-4 px-5 animate__animated animate__fadeInDown animate__slower"><?= $model['konten'][$fitur['nama']][1]['text'] ?></div>
                                            <div style="display: flex;">
                                                <button type="button" class="btn-gift btn btn-block btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" style="max-width: 150px;margin: auto;"><?= $model['konten'][$fitur['nama']][2]['text'] ?></button>
                                                <button type="button" class="btn-gift btn btn-block btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" style="max-width: 150px;margin: auto;"><?= $model['konten'][$fitur['nama']][3]['text'] ?></button>
                                            </div>
                                            <div class="gift-container mt-3 p-4 rounded animate__animated animate__zoomIn animate__slow">
                                                <div class="text-center mb-2">
                                                    <div class="mb-2"><?= $model['konten'][$fitur['nama']][4]['text'] ?></div>
                                                </div>
                                            </div>
                                            <div class="gift-container mt-3 p-4 rounded animate__animated animate__zoomIn animate__slow">
                                                <div class="text-center mb-2">
                                                    <div class="mb-2"><?= $model['konten'][$fitur['nama']][5]['text'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Rundown') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide10" role="group" aria-roledescription="slide" aria-label="10 of 14" style="height: calc(100%); transform: translateX(-900%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div class="text-center" style="width: 100%;">
                                            <div class="font-latin color-accent h4 mb-3 animate__animated animate__fadeInDown animate__slower" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                            <div class="animate__animated animate__fadeInUp animate__slower">
                                                <div class="mb-2" style="color:<?= $model['konten'][$fitur['nama']][1]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][1]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][1]['text'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'HealtProtocol') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide11" role="group" aria-roledescription="slide" aria-label="11 of 14" style="height: calc(100%); transform: translateX(-1000%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div style="width: 100%;">
                                            <div class="text-center">
                                                <div class="font-latin color-accent h4 mb-2 editable animate__animated animate__fadeInDown animate__slow">
                                                    Protokol Kesehatan</div>
                                                <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower">Mengingat kondisi pandemi saat
                                                    ini, kami menghimbau Bapak/Ibu/Saudara/i tamu undangan agar tetap memperhatikan protokol kesehatan dalam
                                                    rangka upaya pencegahan penyebaran virus Covid-19.</div>
                                            </div>
                                            <div class="d-flex justify-content-center text-center">
                                                <div class="p-4 animate__animated animate__fadeInLeft animate__slow delay-4" style="width: 50%;">
                                                    <div class="color-accent"><svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.5 30v1.25a8.75 8.75 0 0 0 0 17.5V50a27.504 27.504 0 0 0 54.502 5.237l-2.455-.474a24.9 24.9 0 0 1-3.297 8.405V48.982l3.75-9.75V47.5s-.038 4.096-.112 4.883l2.489.234c.082-.863.123-3.867.123-3.867a8.75 8.75 0 0 0 0-17.5V22.5a20.023 20.023 0 0 0-20-20H10a1.25 1.25 0 0 0-1.25 1.25v5h2.5V5H47.5A17.52 17.52 0 0 1 65 22.5v6.357l-6.513-8.375A1.249 1.249 0 0 0 57.5 20h-35a11.28 11.28 0 0 1-11.025-8.999l-2.45.498a13.678 13.678 0 0 0 4.051 7.249A12.476 12.476 0 0 0 12.5 22.5V30Zm0 16.25a6.25 6.25 0 0 1 0-12.5v12.5Zm55-12.5a6.25 6.25 0 0 1 0 12.5v-12.5ZM40 75a24.843 24.843 0 0 1-10.915-2.5h21.83A24.842 24.842 0 0 1 40 75Zm18.75-8.469A25.078 25.078 0 0 1 54.997 70H25.003a25.073 25.073 0 0 1-3.753-3.469V65h37.5v1.531Zm0-11.531h-25v2.5h25v5h-37.5v-5h10V55h-10v-5h37.5v5ZM25.518 22.5h31.37l7.942 10.21L59.14 47.5H37.775l.95-4.755-2.45-.49-1.05 5.245H20.86l-5.65-14.69L25.517 22.5ZM15 22.5c0-.704.075-1.406.222-2.095a13.708 13.708 0 0 0 6.771 2.084L15 29.482V22.5Zm0 16.732 3.75 9.75V63.17A25.017 25.017 0 0 1 15 50V39.232Zm4.357-7.804a13.373 13.373 0 0 1 13.786 0l-1.286 2.144a10.878 10.878 0 0 0-11.214 0l-1.286-2.144Zm28.786 2.144-1.286-2.144a13.373 13.373 0 0 1 13.786 0l-1.286 2.144a10.878 10.878 0 0 0-11.214 0ZM26.25 36.25a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5Zm0 5a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Zm27.5-5a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5Zm0 5a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Z"></path>
                                                        </svg></div>
                                                    <div class="editable">Memakai<br>Masker</div>
                                                </div>
                                                <div class="p-4 animate__animated animate__fadeInRight animate__slow delay-4" style="width: 50%;">
                                                    <div class="color-accent"><svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M73.272 25h3.271v2.5H72.84c-.28 0-.552-.096-.771-.273l-.7-.566a51.79 51.79 0 0 0-11.6-7.102l-10.857-4.36-.039-.015a2.123 2.123 0 0 0-1.538-.071c-.504.17-.928.523-1.19.99a2.197 2.197 0 0 0-.229 1.542c.115.525.418.989.85 1.3l9.465 6.259a1.24 1.24 0 0 1 .534.799 16.127 16.127 0 0 0 2.61 5.667c2.589 3.512 6.247 5.055 10.872 4.587l.246 2.487c-.63.064-1.235.095-1.817.094-5.854 0-9.371-3.051-11.337-5.752a18.798 18.798 0 0 1-2.735-5.586H33.796V25h17.611l-6.01-3.974a4.65 4.65 0 0 1-1.299-1.372 4.71 4.71 0 0 1-.566-3.603 4.7 4.7 0 0 1 .788-1.681 4.611 4.611 0 0 1 2.505-1.713 4.56 4.56 0 0 1 3.016.226l10.858 4.36.04.016a54.243 54.243 0 0 1 12.173 7.449l.36.292Zm-45.88-7.5 5.197 25.255 2.417-.51-5.378-26.132a13.85 13.85 0 0 0-4.029-9.63 13.51 13.51 0 0 0-9.55-3.983H2.47V5h13.58a11.05 11.05 0 0 1 7.405 2.869A11.314 11.314 0 0 1 27.093 15h-7.496a5.014 5.014 0 0 0-1.76-2.701 4.908 4.908 0 0 0-3.022-1.049H2.469v2.5h12.346c.637.001 1.25.251 1.709.699.459.447.73 1.057.755 1.702l-6.144 31.104 2.421.49L19.531 17.5h7.861Zm35.643 27.208a54.273 54.273 0 0 0-12.172-7.448l-.028-.012L45.411 35h2.737v-2.5H36.163V35h1.042a4.699 4.699 0 0 0-1.013 1.955 4.73 4.73 0 0 0 .556 3.592c.324.53.751.99 1.254 1.351L42.022 45H19.753c-.94 0-1.861.271-2.654.783a4.978 4.978 0 0 0-1.823 2.105 5.053 5.053 0 0 0 .699 5.328 4.983 4.983 0 0 0-2.043 2.433 5.058 5.058 0 0 0-.172 3.188 5.002 5.002 0 0 0 1.77 2.643c.86.662 1.909 1.02 2.989 1.02h19.753V60H18.519a2.454 2.454 0 0 1-1.746-.732 2.516 2.516 0 0 1-.724-1.768c0-.663.26-1.299.724-1.768A2.454 2.454 0 0 1 18.519 55h19.753v-2.5H19.753a2.454 2.454 0 0 1-1.746-.732A2.516 2.516 0 0 1 17.284 50c0-.663.26-1.299.723-1.768a2.454 2.454 0 0 1 1.746-.732H45.68c.258 0 .51-.082.72-.234a1.264 1.264 0 0 0 .028-2.01l-6.947-5.36a2.175 2.175 0 0 1-.9-1.327 2.198 2.198 0 0 1 .222-1.547c.26-.47.684-.824 1.188-.996a2.122 2.122 0 0 1 1.542.068l.027.011 8.328 3.452a51.812 51.812 0 0 1 11.606 7.104c.437.353.868.839 1.47.839h13.58V45H63.396l-.36-.292Zm.61 25.424C60.755 71.596 53.371 75 47.275 75H24.692a2.454 2.454 0 0 1-1.747-.732 2.516 2.516 0 0 1-.723-1.768c0-.663.26-1.299.723-1.768A2.454 2.454 0 0 1 24.692 70h13.58v-2.5H20.988a2.457 2.457 0 0 1-1.745-.733A2.519 2.519 0 0 1 18.519 65h-2.47a5.042 5.042 0 0 0 1.258 3.33 4.925 4.925 0 0 0 3.127 1.639 5.046 5.046 0 0 0-.029 5.016 4.97 4.97 0 0 0 1.81 1.841 4.89 4.89 0 0 0 2.477.674h22.582c2.713 0 8.538-.654 17.214-5h12.055V70H64.198c-.192 0-.381.045-.552.132Zm-41.27-30.844.926-16.875-2.466-.138-.925 16.875 2.465.138Zm2.475-10.281 1.08 13.594 2.461-.2-1.08-13.595-2.461.201ZM11.11 52.5c0 .742-.217 1.467-.624 2.083a3.713 3.713 0 0 1-1.662 1.382 3.66 3.66 0 0 1-2.14.213 3.689 3.689 0 0 1-1.896-1.026 3.764 3.764 0 0 1-1.014-1.92 3.794 3.794 0 0 1 .21-2.167 3.74 3.74 0 0 1 1.365-1.683 3.67 3.67 0 0 1 2.058-.632 3.685 3.685 0 0 1 2.617 1.1 3.778 3.778 0 0 1 1.086 2.65Zm-2.469 0c0-.247-.072-.489-.208-.694a1.238 1.238 0 0 0-.554-.46 1.22 1.22 0 0 0-1.345.27 1.255 1.255 0 0 0-.268 1.362c.093.229.252.424.455.561a1.223 1.223 0 0 0 1.558-.156 1.26 1.26 0 0 0 .362-.883Zm27.16-30a3.67 3.67 0 0 1-2.057-.632 3.74 3.74 0 0 1-1.364-1.683 3.794 3.794 0 0 1-.211-2.167 3.765 3.765 0 0 1 1.014-1.92 3.689 3.689 0 0 1 1.896-1.026 3.66 3.66 0 0 1 2.14.214 3.714 3.714 0 0 1 1.662 1.38 3.783 3.783 0 0 1-.462 4.734 3.685 3.685 0 0 1-2.617 1.1Zm0-2.5c.245 0 .483-.073.687-.21a1.266 1.266 0 0 0 .187-1.923 1.23 1.23 0 0 0-1.346-.272 1.238 1.238 0 0 0-.554.46 1.261 1.261 0 0 0 .154 1.579c.231.234.545.366.873.366Zm12.346 45a3.67 3.67 0 0 1-2.057-.632 3.74 3.74 0 0 1-1.364-1.683 3.793 3.793 0 0 1-.211-2.167 3.765 3.765 0 0 1 1.013-1.92 3.689 3.689 0 0 1 1.897-1.026 3.66 3.66 0 0 1 2.14.213 3.714 3.714 0 0 1 1.662 1.382 3.784 3.784 0 0 1-.462 4.733 3.685 3.685 0 0 1-2.618 1.1Zm0-2.5c.244 0 .483-.073.686-.21a1.265 1.265 0 0 0 .187-1.923 1.23 1.23 0 0 0-1.345-.272 1.238 1.238 0 0 0-.554.46 1.262 1.262 0 0 0 .154 1.578c.231.235.545.367.872.367Z"></path>
                                                        </svg></div>
                                                    <div class="editable">Mencuci<br>Tangan</div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center text-center">
                                                <div class="p-4 animate__animated animate__fadeInLeft animate__slow delay-8" style="width: 50%;">
                                                    <div class="color-accent"><svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M45.568 33.312a1.172 1.172 0 1 0-1.657 1.657l1.515 1.515H34.574l1.515-1.515a1.172 1.172 0 1 0-1.657-1.657l-3.516 3.516a1.172 1.172 0 0 0 0 1.657L34.432 42a1.17 1.17 0 0 0 1.657 0c.458-.458.458-1.2 0-1.658l-1.515-1.515h10.852l-1.515 1.515A1.172 1.172 0 1 0 45.57 42l3.515-3.515c.458-.458.458-1.2 0-1.657l-3.516-3.516ZM22.37 23.516H5.86A5.866 5.866 0 0 0 0 29.375a1.172 1.172 0 1 0 2.344 0 3.52 3.52 0 0 1 3.515-3.516h16.51a3.52 3.52 0 0 1 3.517 3.516v18.984c0 .624-.505 1.094-1.173 1.094s-1.171-.47-1.171-1.094V29.453a1.172 1.172 0 1 0-2.344 0v41.732c0 .924-.817 1.706-1.784 1.706-.984 0-1.784-.8-1.784-1.784V48.28c0-.647-.524-1.172-1.172-1.172h-4.687c-.648 0-1.172.525-1.172 1.172v22.826c0 .983-.8 1.784-1.784 1.784-.967 0-1.784-.782-1.784-1.706V29.453a1.172 1.172 0 1 0-2.343 0v18.828a1.173 1.173 0 0 1-2.344 0V34.063a1.172 1.172 0 1 0-2.344 0V48.28a3.52 3.52 0 0 0 4.688 3.314v19.59c0 2.233 1.851 4.05 4.127 4.05a4.132 4.132 0 0 0 4.128-4.128V49.453h2.343v21.654a4.132 4.132 0 0 0 4.128 4.127c2.276 0 4.128-1.816 4.128-4.05V51.608c.365.123.758.19 1.171.19 1.972 0 3.516-1.51 3.516-3.438V29.375c0-3.23-2.628-5.86-5.86-5.86ZM14.063 21.172c4.523 0 8.203-3.68 8.203-8.203 0-4.524-3.68-8.203-8.203-8.203S5.86 8.446 5.86 12.969s3.68 8.203 8.203 8.203Zm0-14.063a5.866 5.866 0 0 1 5.86 5.86c0 3.23-2.629 5.86-5.86 5.86a5.866 5.866 0 0 1-5.86-5.86 5.866 5.866 0 0 1 5.86-5.86ZM74.14 23.516H57.63a5.866 5.866 0 0 0-5.86 5.859v18.906a3.52 3.52 0 0 0 4.688 3.314v19.59c0 2.233 1.852 4.05 4.128 4.05a4.132 4.132 0 0 0 4.127-4.128V49.453h2.344v21.654a4.132 4.132 0 0 0 4.128 4.127c2.276 0 4.127-1.816 4.127-4.05V51.608c.366.123.76.19 1.172.19 1.972 0 3.516-1.51 3.516-3.438V29.375c0-3.23-2.629-5.86-5.86-5.86Zm3.516 24.843c0 .624-.504 1.094-1.172 1.094-.668 0-1.171-.47-1.171-1.094V29.453a1.172 1.172 0 1 0-2.344 0v41.732c0 .924-.817 1.706-1.784 1.706-.984 0-1.784-.8-1.784-1.784V48.28c0-.647-.525-1.172-1.172-1.172h-4.688a1.172 1.172 0 0 0-1.171 1.172v22.826c0 .983-.8 1.784-1.784 1.784-.967 0-1.784-.782-1.784-1.706V29.453a1.172 1.172 0 1 0-2.344 0V48.28a1.173 1.173 0 0 1-2.344.002V29.374a3.52 3.52 0 0 1 3.516-3.516h16.51a3.52 3.52 0 0 1 3.516 3.516v18.984ZM65.834 21.172c4.523 0 8.203-3.68 8.203-8.203 0-4.524-3.68-8.203-8.203-8.203s-8.203 3.68-8.203 8.203 3.68 8.203 8.203 8.203Zm0-14.063a5.866 5.866 0 0 1 5.86 5.86c0 3.23-2.629 5.86-5.86 5.86a5.866 5.866 0 0 1-5.86-5.86 5.866 5.866 0 0 1 5.86-5.86Z"></path>
                                                        </svg></div>
                                                    <div class="editable">Menjaga<br>Jarak</div>
                                                </div>
                                                <div class="p-4 animate__animated animate__fadeInRight animate__slow delay-8" style="width: 50%;">
                                                    <div class="color-accent"><svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m49.42 37.347.214-.213a1.25 1.25 0 0 0-1.768-1.768l-.213.214a3.748 3.748 0 0 1-5.306 0l-.213-.214a1.25 1.25 0 0 0-1.768 1.768l.214.213a6.25 6.25 0 0 0 8.84 0ZM27.5 30H5a1.25 1.25 0 0 0-1.237 1.075l-1.25 8.75a1.257 1.257 0 0 0 .287 1 1.296 1.296 0 0 0 .95.425h2.063l-2.05 12.3c-.048.336.037.676.237.95l3.75 5a1.267 1.267 0 0 0 1 .5h5A1.25 1.25 0 0 0 15 58.75v-4.9l1.262-7.6H20A1.25 1.25 0 0 0 21.25 45v-5h6.25a1.25 1.25 0 0 0 1.25-1.25v-7.5A1.25 1.25 0 0 0 27.5 30ZM5.188 38.75l.9-6.25h1.187l-1.037 6.25h-1.05Zm13.562 5h-2.063l.625-3.75h1.438v3.75Zm2.5-6.25h-5a1.25 1.25 0 0 0-1.238 1.05l-2.5 15c-.01.066-.014.133-.012.2v3.75H9.375l-3.05-4.075L9.813 32.5H21.25v5Zm5 0h-2.5v-5h2.5v5Z"></path>
                                                            <path d="M77.5 13.75a11.25 11.25 0 0 0-22.425-1.25H31.25A1.25 1.25 0 0 0 30 13.75v2.5a11.269 11.269 0 0 0 7.025 10.425A6.201 6.201 0 0 0 35 31.25v4.7l-3.95 7.8h-2.3a1.276 1.276 0 0 0-.938.413 1.21 1.21 0 0 0-.3.975l2.5 22.5a1.236 1.236 0 0 0 1.238 1.112h7.5a13.779 13.779 0 0 0 2.5-.237v7.737a1.25 1.25 0 0 0 1.25 1.25H65a1.25 1.25 0 0 0 1.25-1.25v-9.325l4.013-2.688A16.173 16.173 0 0 0 77.5 50.725V31.25c.006-3.538-1-7.003-2.9-9.988a11.186 11.186 0 0 0 2.9-7.512ZM66.25 5a8.75 8.75 0 1 1-8.75 8.75A8.76 8.76 0 0 1 66.25 5ZM37.362 36.813a1.25 1.25 0 0 0 .138-.563v-5a3.761 3.761 0 0 1 3.75-3.75H55a6.25 6.25 0 0 1 6.25 6.25v6.462l-18.975 3.563v.025c-.337-.025-.675-.05-1.025-.05h-7.4l3.512-6.938ZM38.75 66.25h-6.375l-2.225-20h11.1A8.76 8.76 0 0 1 50 55a11.267 11.267 0 0 1-11.25 11.25Zm25 8.75h-20v-7.2a14.47 14.47 0 0 0 3.138-1.737v.012L63.75 55.962V75ZM65 52.5c-.22.026-.435.084-.638.175l-13.012 7.8A13.547 13.547 0 0 0 52.5 55a11.216 11.216 0 0 0-5.4-9.587L62.612 42.5h6.138A1.25 1.25 0 0 1 70 43.75v5a3.762 3.762 0 0 1-3.75 3.75H65Zm10-21.25v19.475a13.715 13.715 0 0 1-6.112 11.438l-2.638 1.75V55a6.25 6.25 0 0 0 6.25-6.25v-5A3.761 3.761 0 0 0 68.75 40h-5v-6.25A8.76 8.76 0 0 0 55 25H41.25a8.76 8.76 0 0 1-8.75-8.75V15h22.575A11.27 11.27 0 0 0 66.25 25a11.117 11.117 0 0 0 6.463-2.063A16.151 16.151 0 0 1 75 31.25ZM14.734 27.32c.496.12 1.005.18 1.516.18A6.25 6.25 0 0 0 20 16.25v-10a3.75 3.75 0 0 0-7.5 0v10a6.261 6.261 0 0 0-2.311 6.554 6.182 6.182 0 0 0 4.545 4.516Zm-.359-9.311A1.25 1.25 0 0 0 15 16.925V6.25a1.25 1.25 0 0 1 2.5 0h-1.25v2.5h1.25V10h-1.25v2.5h1.25v1.25h-1.25v2.5h1.25v.675a1.25 1.25 0 0 0 .625 1.084 3.75 3.75 0 1 1-3.75 0Z"></path>
                                                            <path d="M16.25 23.75a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM63.965 18.535a1.25 1.25 0 0 0 1.767 0l7.072-7.071a1.25 1.25 0 1 0-1.768-1.768l-6.187 6.188-2.653-2.651A1.25 1.25 0 1 0 60.43 15l3.536 3.535Z"></path>
                                                        </svg></div>
                                                    <div class="editable">Cek Suhu<br>Tubuh</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'RSVP') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide12" role="group" aria-roledescription="slide" aria-label="12 of 14" style="height: calc(100%); transform: translateX(-1100%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div style="width: 100%;">
                                            <div>
                                                <div class="animate__animated animate__fadeInRight animate__slower">
                                                    <div class="image-editable" style="width: 248px; height: 195px; margin: auto; overflow: hidden; transform: translate(15px, 24px) rotate(356deg); border: 4px solid var(--inv-border);">
                                                        <?php
                                                        $path = './static/user/images/' . User::folder() . '/' . $model['konten'][$fitur['nama']][2]['text'];
                                                        if (!empty($model['konten'][$fitur['nama']][2]['text']) && file_exists($path)) {
                                                        ?>
                                                            <img src=" <?= baseurl ?>/static/user/images/<?= User::folder() ?>/<?= $model['konten'][$fitur['nama']][2]['text'] ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <img src="<?= baseurl ?>/static/admin/media/svg/avatars/blank.svg" style="width: 100%; height: 100%; object-fit: cover;">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="animate__animated animate__fadeInLeft animate__slower">
                                                    <div class="image-editable" style="width: 248px; height: 195px; margin: auto auto 20px; overflow: hidden; transform: translate(-7px, 0px) rotate(2deg); border: 4px solid var(--inv-border);">
                                                        <?php
                                                        $path = './static/user/images/' . User::folder() . '/' . $model['konten'][$fitur['nama']][3]['text'];
                                                        if (!empty($model['konten'][$fitur['nama']][3]['text']) && file_exists($path)) {
                                                        ?>
                                                            <img src=" <?= baseurl ?>/static/user/images/<?= User::folder() ?>/<?= $model['konten'][$fitur['nama']][3]['text'] ?>" style="width: 100%; height: 100%; object-fit: cover;">
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <img src="<?= baseurl ?>/static/admin/media/svg/avatars/blank.svg" style="width: 100%; height: 100%; object-fit: cover;">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower"><?= $model['konten'][$fitur['nama']][0]['text'] ?>
                                                    </div> <button type="button" class="btn-rsvp btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow" tabindex="-1">
                                                        <?= $model['konten'][$fitur['nama']][1]['text'] ?>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Thanks') {
                            if ($model['config']['background-style'] == 'gambar') {
                                $path = './static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'];
                                if (file_exists($path)) {
                                    $bg = 'style="background-image: url(' . baseurl . '/static/user/images/' . $model['undangan']['id_q'] . '/' . $model['config']['background-gambar'] . ');border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } elseif ($model['config']['background-style'] == 'warna') {
                                if (!empty($model['config']['background-warna'])) {
                                    $bg = 'style="background-color:' . $model['config']['background-warna'] . ';border-radius:15px;"';
                                } else {
                                    $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                                }
                            } else {
                                $bg = 'style="background-image: url(\'https://undangandigitalkami.com/themes/green-tropical/bg.webp\');border-radius:15px;"';
                            }
                        ?>
                            <li class="splide__slide invitation__slide" id="Qondangan-slide14" role="group" aria-roledescription="slide" aria-label="14 of 14" style="height: calc(100%); transform: translateX(-1300%); transition: opacity 400ms cubic-bezier(0.25, 1, 0.5, 1) 0s;" aria-hidden="true">
                                <div class="container-mobile" <?= $bg ?>>
                                    <div class="frame">
                                        <?php
                                        if ($model['config']['frame'] == 'Yes') {
                                        ?>
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tl.png" alt="frame" class="frame-tl animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-tr.png" alt="frame" class="frame-tr animate__animated animate__fadeInDown animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-bl.png" alt="frame" class="frame-bl animate__animated animate__fadeInUp animate__slower">
                                            <img src="<?= baseurl ?>/static/themes/qs1/frame-br.png" alt="frame" class="frame-br animate__animated animate__fadeInUp animate__slower">
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <div class="watermark d-flex justify-content-center align-items-center" style="height: 100%;">
                                        <div swtyle="width: 100%">
                                            <div class="text-center">
                                                <div class="quotes mb-3 animate__animated animate__fadeInDown animate__slower" style="color:<?= $model['konten'][$fitur['nama']][0]['warna'] ?>;font-size:<?= $model['konten'][$fitur['nama']][0]['ukuran'] ?>px;"><?= $model['konten'][$fitur['nama']][0]['text'] ?></div>
                                                <div class="font-accent h4 color-accent animate__animated animate__fadeInDown animate__slow"><?= $model['undangan']['judul_undangan'] ?></div>
                                                <div class="watermark-placeholder mt-5">
                                                    <div id="waterMark" class="mt-5" style="display: inherit;position:relative;z-index:9999;">
                                                        <img src="<?= baseurl ?>/static/qondangan.jpg" width="50" alt="Qondangan">
                                                        <div style="padding-top:15px !important;">Powered by: <a href="<?= baseurl ?>" style="text-decoration:none;">Qondangan</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div id="menuSlider" class="splide">
            <div class="splide__track menu-track">
                <ul class="splide__list menu-list">
                    <?php
                    foreach ($model['config']['fitur-undangan'] as $config => $fitur) {
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Cover') {
                    ?>
                            <li class="splide__slide menu-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M3,14A9,9,0,1,0,14.822,5.46l1.019-1.585a1,1,0,0,0,.031-1.032l-.75-1.333A1,1,0,0,0,14.25,1H9.75a1,1,0,0,0-.872.51l-.75,1.333a1,1,0,0,0,.031,1.032L9.178,5.46A9.011,9.011,0,0,0,3,14Zm8.282-8.966L10.167,3.3l.168-.3h3.33l.168.3L12.718,5.034C12.468,5.011,12.23,5,12,5S11.532,5.011,11.282,5.034ZM12,7a7,7,0,1,1-7,7A7.022,7.022,0,0,1,12,7Z" />
                                </svg>
                                <span>Opening</span>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Greeting') {
                        ?>
                            <li class="splide__slide menu-item">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8899 2.06314C12.7591 1.12839 14.5994 3.39622 14.9762 4.47574L11.4985 9.75752C11.4985 9.75752 11.6697 9.15619 10.6726 6.99714C10.2028 5.97999 7.99016 3.51325 10.8899 2.06314Z" fill="currentColor" />
                                    <path d="M15.5056 3.19028L6.92293 15.7689C5.71603 17.3619 5 19.3474 5 21.5002C5 26.7469 9.25329 31.0002 14.5 31.0002C18.0387 31.0002 21.1254 29.0654 22.7602 26.196L26.9226 20.2525C27.7879 19.017 27.4671 17.3116 26.2121 16.4749C25.8483 16.2324 25.4467 16.0902 25.04 16.042C25.7413 14.832 25.3931 13.2622 24.2061 12.4709C23.303 11.8689 22.1662 11.8868 21.3002 12.4267C21.6056 11.341 21.1996 10.1333 20.2061 9.47089C19.4805 8.98717 18.604 8.90369 17.8383 9.16958L19.9064 6.24993C20.7791 5.01786 20.4623 3.3084 19.2061 2.47089C17.9839 1.65609 16.3335 1.97692 15.5056 3.19028Z" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M17.8845 9.15403L15.6 12.2C15.4343 12.4209 15.4791 12.7343 15.7 12.9C15.9209 13.0657 16.2343 13.0209 16.4 12.8L19.2021 9.06392C18.7599 8.98321 18.3064 9.01604 17.8845 9.15403Z" fill="currentColor" />
                                    <path d="M21.3358 12.4048L19.1096 15.1877C18.9371 15.4033 18.972 15.7179 19.1877 15.8904C19.4033 16.0629 19.7179 16.028 19.8905 15.8123L22.9182 12.0277C22.3668 11.9872 21.8121 12.1182 21.3358 12.4048Z" fill="currentColor" />
                                    <path d="M23.1 18.7001L25.0889 16.0483C25.4304 16.0952 25.7675 16.2087 26.0806 16.3927L23.9 19.3001C23.7343 19.521 23.4209 19.5658 23.2 19.4001C22.9791 19.2344 22.9343 18.921 23.1 18.7001Z" fill="currentColor" />
                                </svg>
                                <span>Greeting</span>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Quotes') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity=".4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z" fill="currentColor"></path>
                                </svg> <span>Quotes</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Couple') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity=".4" d="M11.776 21.837a36.258 36.258 0 0 1-6.328-4.957 12.668 12.668 0 0 1-3.03-4.805C1.278 8.535 2.603 4.49 6.3 3.288A6.282 6.282 0 0 1 12.007 4.3a6.291 6.291 0 0 1 5.706-1.012c3.697 1.201 5.03 5.247 3.893 8.787a12.67 12.67 0 0 1-3.013 4.805 36.58 36.58 0 0 1-6.328 4.957l-.25.163-.24-.163Z" fill="currentColor"></path>
                                    <path d="m12.01 22-.234-.163a36.316 36.316 0 0 1-6.337-4.957 12.667 12.667 0 0 1-3.048-4.805c-1.13-3.54.195-7.586 3.892-8.787a6.296 6.296 0 0 1 5.728 1.023V22ZM18.23 10a.719.719 0 0 1-.517-.278.818.818 0 0 1-.167-.592c.022-.702-.378-1.341-.994-1.59-.391-.107-.628-.53-.53-.948.093-.41.477-.666.864-.573a.384.384 0 0 1 .138.052c1.236.476 2.036 1.755 1.973 3.155a.808.808 0 0 1-.23.56.708.708 0 0 1-.537.213Z" fill="currentColor"></path>
                                </svg> <span>Mempelai</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Story') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity=".4" d="M11.776 21.837a36.258 36.258 0 0 1-6.328-4.957 12.668 12.668 0 0 1-3.03-4.805C1.278 8.535 2.603 4.49 6.3 3.288A6.282 6.282 0 0 1 12.007 4.3a6.291 6.291 0 0 1 5.706-1.012c3.697 1.201 5.03 5.247 3.893 8.787a12.67 12.67 0 0 1-3.013 4.805 36.58 36.58 0 0 1-6.328 4.957l-.25.163-.24-.163Z" fill="currentColor"></path>
                                    <path d="m12.01 22-.234-.163a36.316 36.316 0 0 1-6.337-4.957 12.667 12.667 0 0 1-3.048-4.805c-1.13-3.54.195-7.586 3.892-8.787a6.296 6.296 0 0 1 5.728 1.023V22ZM18.23 10a.719.719 0 0 1-.517-.278.818.818 0 0 1-.167-.592c.022-.702-.378-1.341-.994-1.59-.391-.107-.628-.53-.53-.948.093-.41.477-.666.864-.573a.384.384 0 0 1 .138.052c1.236.476 2.036 1.755 1.973 3.155a.808.808 0 0 1-.23.56.708.708 0 0 1-.537.213Z" fill="currentColor"></path>
                                </svg> <span>Story</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Event') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3 16.87V9.257h18v7.674C21 20.07 19.024 22 15.863 22H8.127C4.996 22 3 20.03 3 16.87Zm4.96-2.46a.822.822 0 0 1-.85-.799c0-.46.355-.84.81-.861.444 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.06 0a.822.822 0 0 1-.85-.799c0-.46.356-.84.81-.861.445 0 .81.351.82.8a.822.822 0 0 1-.78.86Zm4.03 3.68a.847.847 0 0 1-.82-.85.831.831 0 0 1 .81-.849h.01c.465 0 .84.38.84.849 0 .47-.375.85-.84.85Zm-4.88-.85c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm-4.07 0c.02.46.395.821.85.8a.821.821 0 0 0 .78-.859.817.817 0 0 0-.82-.801.855.855 0 0 0-.81.86Zm8.14-3.639c0-.46.356-.83.81-.84.445 0 .8.359.82.8a.82.82 0 0 1-.79.849.814.814 0 0 1-.84-.799v-.01Z" fill="currentColor"></path>
                                    <path opacity=".4" d="M3.003 9.257c.013-.587.063-1.752.156-2.127.474-2.11 2.084-3.45 4.386-3.64h8.911c2.282.2 3.912 1.55 4.386 3.64.092.365.142 1.539.155 2.127H3.003Z" fill="currentColor"></path>
                                    <path d="M8.305 6.59c.435 0 .76-.329.76-.77V2.771A.748.748 0 0 0 8.306 2c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77ZM15.695 6.59c.425 0 .76-.329.76-.77V2.771a.754.754 0 0 0-.76-.771c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77Z" fill="currentColor"></path>
                                </svg> <span>Acara</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Location') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.532 2.937a6.89 6.89 0 0 1 7.034.058C17.71 4.327 19.012 6.705 19 9.26c-.05 2.54-1.447 4.929-3.193 6.775a18.727 18.727 0 0 1-3.358 2.82 1.173 1.173 0 0 1-.408.144.82.82 0 0 1-.39-.119 18.515 18.515 0 0 1-4.839-4.547A9.28 9.28 0 0 1 5 9.134c-.001-2.562 1.347-4.928 3.532-6.197Zm1.262 7.258a2.378 2.378 0 0 0 2.198 1.497 2.339 2.339 0 0 0 1.683-.701c.446-.454.696-1.07.694-1.713a2.423 2.423 0 0 0-1.462-2.243 2.346 2.346 0 0 0-2.594.52 2.455 2.455 0 0 0-.519 2.64Z" fill="currentColor"></path>
                                    <ellipse opacity=".4" cx="12" cy="21" rx="5" ry="1" fill="currentColor"></ellipse>
                                </svg> <span>Maps</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Gallery') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 14.702v1.384c0 .23-.01.461-.03.69-.28 3.16-2.475 5.224-5.641 5.224H7.67c-1.603 0-2.956-.52-3.928-1.464a4.593 4.593 0 0 1-.951-1.232c.33-.402.7-.842 1.062-1.283a98.56 98.56 0 0 0 1.573-1.925c.55-.682 2.004-2.476 4.018-1.634.41.17.771.41 1.102.621.812.542 1.152.702 1.723.391.632-.34 1.043-1.012 1.473-1.714.23-.372.461-.732.712-1.063 1.092-1.423 2.775-1.804 4.178-.962.702.42 1.303.952 1.864 1.493.12.12.24.231.35.341.15.15.652.652 1.153 1.133Z" fill="currentColor"></path>
                                    <path opacity=".4" d="M16.339 2H7.67C4.275 2 2 4.376 2 7.914v8.172c0 1.232.28 2.326.792 3.218.33-.402.701-.842 1.062-1.284a95.981 95.981 0 0 0 1.573-1.924c.551-.682 2.004-2.476 4.018-1.634.41.17.771.41 1.102.621.812.542 1.152.702 1.723.39.632-.34 1.043-1.011 1.473-1.714.23-.37.461-.73.712-1.062 1.092-1.423 2.775-1.804 4.178-.962.702.42 1.303.952 1.864 1.493.12.12.24.231.35.342.151.149.652.65 1.153 1.133V7.914C22 4.376 19.726 2 16.339 2Z" fill="currentColor"></path>
                                    <path d="M11.454 8.797a2.604 2.604 0 0 1-2.58 2.581c-1.408 0-2.58-1.173-2.58-2.581s1.172-2.582 2.58-2.582c1.407 0 2.58 1.174 2.58 2.582Z" fill="currentColor"></path>
                                </svg> <span>Gallery</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Video') {
                        ?>
                            <li class="splide__slide menu-item">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="4" width="20" height="16" rx="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 12L10 9V15L15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span>Video</span>
                            </li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Live') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity=".4" d="M21.33 7.443a1.383 1.383 0 0 0-1.372-.064l-1.482.748a1.618 1.618 0 0 0-.888 1.456v5.833c0 .622.34 1.179.888 1.457l1.48.747c.202.104.417.153.632.153.258 0 .514-.073.743-.216.419-.263.669-.718.669-1.218V8.662c0-.5-.25-.956-.67-1.22Z" fill="currentColor"></path>
                                    <path d="M11.905 20H6.113C3.691 20 2 18.33 2 15.94V9.06C2 6.67 3.691 5 6.113 5h5.792c2.422 0 4.113 1.669 4.113 4.06v6.88c0 2.39-1.69 4.06-4.113 4.06Z" fill="currentColor"></path>
                                </svg> <span>Live</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Gift') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity=".4" d="M16.191 2H7.81C4.77 2 3 3.78 3 6.83v10.33C3 20.26 4.77 22 7.81 22h8.381C19.28 22 21 20.26 21 17.16V6.83C21 3.78 19.28 2 16.191 2" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.08 6.65v.01a.78.78 0 0 0 0 1.56h2.989c.431 0 .781-.35.781-.791a.781.781 0 0 0-.781-.779H8.08Zm7.84 6.09H8.08a.78.78 0 0 1 0-1.561h7.84a.781.781 0 0 1 0 1.561Zm0 4.57H8.08c-.3.04-.59-.11-.75-.36a.795.795 0 0 1 .75-1.21h7.84c.399.04.7.38.7.79 0 .399-.301.74-.7.78Z" fill="currentColor"></path>
                                </svg> <span>Gift</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Rundown') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity=".4" d="M16.34 2H7.67C4.28 2 2 4.38 2 7.92v8.17C2 19.62 4.28 22 7.67 22h8.67c3.39 0 5.66-2.38 5.66-5.91V7.92C22 4.38 19.73 2 16.34 2Z" fill="currentColor"></path>
                                    <path d="M15.573 15.814a.756.756 0 0 1-.384-.105l-3.926-2.342a.754.754 0 0 1-.365-.645V7.675a.75.75 0 0 1 1.5 0v4.621l3.56 2.123a.752.752 0 0 1-.385 1.395Z" fill="currentColor"></path>
                                </svg> <span>Rundown</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'HealtProtocol') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity=".4" d="M12.086 22a.781.781 0 0 1-.359-.086L8.126 20.05c-1.022-.53-1.821-1.124-2.445-1.816a8.243 8.243 0 0 1-2.139-5.474L3.5 6.124a1.813 1.813 0 0 1 1.228-1.712l6.613-2.305c.392-.14.83-.142 1.23-.007l6.637 2.227c.743.248 1.245.93 1.25 1.695l.042 6.64a8.243 8.243 0 0 1-2.066 5.496c-.617.702-1.41 1.305-2.421 1.845l-3.57 1.906a.765.765 0 0 1-.357.091Z" fill="currentColor"></path>
                                    <path d="M11.32 14.32a.763.763 0 0 1-.537-.21l-1.916-1.844a.722.722 0 0 1-.006-1.04.77.77 0 0 1 1.068-.007l1.379 1.326 3.368-3.32a.77.77 0 0 1 1.068-.007c.297.286.3.752.007 1.04l-3.9 3.844a.76.76 0 0 1-.532.219Z" fill="currentColor"></path>
                                </svg> <span>Protokol</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'RSVP') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity=".4" d="M12.02 2C6.21 2 2 6.74 2 12c0 1.68.49 3.41 1.35 4.99.16.26.18.59.07.9l-.67 2.24c-.15.54.31.94.82.78l2.02-.6c.55-.18.98.05 1.491.36 1.46.86 3.279 1.3 4.919 1.3 4.96 0 10-3.83 10-10C22 6.65 17.7 2 12.02 2Z" fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.98 13.29c-.71-.01-1.28-.58-1.28-1.29 0-.7.58-1.28 1.28-1.27.71 0 1.28.57 1.28 1.28 0 .7-.57 1.28-1.28 1.28Zm-4.61 0c-.7 0-1.28-.58-1.28-1.28 0-.71.57-1.28 1.28-1.28.71 0 1.28.57 1.28 1.28 0 .7-.57 1.27-1.28 1.28Zm7.94-1.28c0 .7.57 1.28 1.28 1.28.71 0 1.28-.58 1.28-1.28 0-.71-.57-1.28-1.28-1.28-.71 0-1.28.57-1.28 1.28Z" fill="currentColor"></path>
                                </svg> <span>RSVP</span></li>
                        <?php
                        }
                        if ($fitur['tampil'] == 'Yes' && $fitur['nama'] == 'Thanks') {
                        ?>
                            <li class="splide__slide menu-item"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity=".4" d="M16.34 2H7.67C4.28 2 2 4.38 2 7.92v8.17C2 19.62 4.28 22 7.67 22h8.67c3.39 0 5.66-2.38 5.66-5.91V7.92C22 4.38 19.73 2 16.34 2Z" fill="currentColor"></path>
                                    <path d="M10.813 15.248a.872.872 0 0 1-.619-.256l-2.373-2.373a.874.874 0 1 1 1.237-1.238l1.755 1.755 4.128-4.128a.874.874 0 1 1 1.237 1.238l-4.746 4.746a.872.872 0 0 1-.619.256Z" fill="currentColor"></path>
                                </svg> <span>Thanks</span></li>
                        <?php
                        }
                        ?>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div style="max-width: 500px; margin: auto; position: fixed; left: 0px; right: 0px; bottom: 70px;">
            <button onclick="showModal(QRCode)" class=" btn btn-music btn-qrcode" style="width:40px;height:40px;">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 256 256" fill="currentColor">
                    <path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm0,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48ZM200,40H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-64,72V144a8,8,0,0,1,16,0v32a8,8,0,0,1-16,0Zm80-16a8,8,0,0,1-8,8H184v40a8,8,0,0,1-8,8H144a8,8,0,0,1,0-16h24V144a8,8,0,0,1,16,0v8h24A8,8,0,0,1,216,160Zm0,32v16a8,8,0,0,1-16,0V192a8,8,0,0,1,16,0Z" />
                </svg>
            </button>
        </div>
        <div style="max-width: 500px; margin: auto; position: fixed; left: 0px; right: 0px; bottom: 0px;">
            <button id="btnMusic" onclick="playMusic()" class="btn btn-music" style="width:40px;height:40px;">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M18 3a1 1 0 0 0-1.196-.98l-10 2A1 1 0 0 0 6 5v9.114A4.369 4.369 0 0 0 5 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0 0 15 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"></path>
                </svg>
            </button>
        </div>
        <div id="lightboxWrapper" class="lightbox-wrapper">
            <div class="lightbox-list"></div>
            <a href="https://undangandigitalkami.com/preview/green-tropical#" id="lightboxCloseBtn" class="btn-lightbox">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 1 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <div class="lightbox-navigation">
                <a href="https://undangandigitalkami.com/preview/green-tropical#" id="lightboxPrevBtn" data-index="0" class="lightbox-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"></path>
                    </svg>
                </a>
                <a href="https://undangandigitalkami.com/preview/green-tropical#" id="lightboxNextBtn" data-index="0" class="lightbox-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal" aria-hidden="true" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="height: 100%;">
                    <div class="p-4 p-sm-5 rsvp-form"><!---->
                        <div class="mb-4">
                            <div class="font-accent h4 text-center">RSVP</div>
                        </div> <!---->
                        <form>
                            <div class="form-group"><input id="inputName" type="text" placeholder="Nama" class="form-control"> <!----></div>
                            <div class="form-group"><input id="inputGroup" type="text" placeholder="Nama Grup" class="form-control"> <!----></div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn bg-muted text-dark border dropdown-toggle">+62</button>
                                        <div class="dropdown-menu"><a href="https://undangandigitalkami.com/preview/green-tropical#" class="dropdown-item active">Indonesia +62</a><a href="https://undangandigitalkami.com/preview/green-tropical#" class="dropdown-item">Malaysia +60</a><a href="https://undangandigitalkami.com/preview/green-tropical#" class="dropdown-item">United States +1</a></div>
                                    </div> <input id="inputPhone" type="text" placeholder="No Hp / WhatsApp" class="form-control">
                                </div> <!---->
                            </div>
                            <div class="form-group"><select id="inputAttendance" placeholder="Kehadiran?" class="form-control">
                                    <option value="" selected="selected">Kehadiran?</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Tidak Hadir">Tidak Hadir</option>
                                </select> <!----></div> <!----> <!---->
                            <div class="form-group"><textarea id="inputComment" rows="3" placeholder="Komentar atau Ucapan" class="form-control"></textarea> <!----></div> <button type="submit" class="btn btn-primary btn-block mt-4 mb-3"><span>Kirim</span></button>
                        </form> <!---->
                        <hr>
                        <div class="mt-4 comment">
                            <div class="mb-3">
                                <div class="d-flex"><img src="<?= baseurl ?>/static/themes/qs1/saved_resource" alt="andi" class="avatar rounded-circle" style="height: 30px; width: 30px;">
                                    <div class="ml-2 text-left">
                                        <p class="mb-0"><b>andi</b><span class="badge ml-1 badge-success">Hadir</span></p>
                                        <p class="mb-0">asd</p> <small>4 bulan yang lalu</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex"><img src="<?= baseurl ?>/static/themes/qs1/saved_resource(1)" alt="gga" class="avatar rounded-circle" style="height: 30px; width: 30px;">
                                    <div class="ml-2 text-left">
                                        <p class="mb-0"><b>gga</b><span class="badge ml-1 badge-success">Hadir</span></p>
                                        <p class="mb-0">sfsf</p> <small>4 bulan yang lalu</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex"><img src="<?= baseurl ?>/static/themes/qs1/saved_resource(2)" alt="Gh" class="avatar rounded-circle" style="height: 30px; width: 30px;">
                                    <div class="ml-2 text-left">
                                        <p class="mb-0"><b>Gh</b><span class="badge ml-1 badge-success">Hadir</span></p>
                                        <p class="mb-0">Hb</p> <small>6 bulan yang lalu</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex"><img src="<?= baseurl ?>/static/themes/qs1/saved_resource(3)" alt="Jkkk" class="avatar rounded-circle" style="height: 30px; width: 30px;">
                                    <div class="ml-2 text-left">
                                        <p class="mb-0"><b>Jkkk</b><span class="badge ml-1 badge-success">Hadir</span></p>
                                        <p class="mb-0">Bbbb</p> <small>9 bulan yang lalu</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex"><img src="<?= baseurl ?>/static/themes/qs1/saved_resource(4)" alt="R" class="avatar rounded-circle" style="height: 30px; width: 30px;">
                                    <div class="ml-2 text-left">
                                        <p class="mb-0"><b>R</b><span class="badge ml-1 badge-secondary">Tidak Hadir</span></p>
                                        <p class="mb-0">Ty</p> <small>9 bulan yang lalu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <button onclick="closeModal(rsvpModal)" type="button" class="btn btn-close"><svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12"></path>
                        </svg></button>
                </div>
            </div>
        </div>


        <div id="QRCode" tabindex="-1" role="dialog" aria-labelledby="QRCode" aria-hidden="true" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="pt-4 pb-0">
                        <div class="font-accent h4 text-center">QR Code Tamu</div>
                    </div>
                    <div class="rsvp-form">
                        <img src="<?= (new QRCode)->render('Test') ?>" alt="QR Code Tamu" width="100%">
                    </div>
                    <button onclick="closeModal(QRCode)" type="button" class="btn btn-close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="35px" width="35px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <!-- illegal -->
    <div id="illegal" class="container-mobile" style="background: #ffffff; z-index: 9999; min-height: 100vh; display: flex; justify-content: center; align-items: center; display: none">
        <div class="modal-body modal-body d-flex flex-column align-items-center">
            <div class="mb-4 text-center">
                <svg width="90" height="90" fill="none">
                    <path d="M36 28.024A18.05 18.05 0 0025.022 39M59.999 28.024A18.05 18.05 0 0170.975 39" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <ellipse cx="37.5" cy="43.5" rx="4.5" ry="7.5" fill="currentColor"></ellipse>
                    <ellipse cx="58.5" cy="43.5" rx="4.5" ry="7.5" fill="currentColor"></ellipse>
                    <path d="M24.673 75.42a9.003 9.003 0 008.879 5.563m-8.88-5.562A8.973 8.973 0 0124 72c0-7.97 9-18 9-18s9 10.03 9 18a9 9 0 01-8.448 8.983m-8.88-5.562C16.919 68.817 12 58.983 12 48c0-19.882 16.118-36 36-36s36 16.118 36 36-16.118 36-36 36a35.877 35.877 0 01-14.448-3.017" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M41.997 71.75A14.94 14.94 0 0148 70.5c2.399 0 4.658.56 6.661 1.556a3 3 0 003.999-4.066 12 12 0 00-10.662-6.49 11.955 11.955 0 00-7.974 3.032c1.11 2.37 1.917 4.876 1.972 7.217z" fill="currentColor"></path>
                </svg>
                <h2 class="mb-3">Jangan Bikin Aku Sedih</h2>
                <p>Kamu didapati mencoba menghapus watermark secara ilegal.</p>
            </div>
        </div>
    </div>
    <!-- end illegal -->

    <!-- not support modal -->
    <div class="modal fade" id="notSupport" tabindex="-1" role="dialog" aria-labelledby="notSupport" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: .8rem;">
                <div class="modal-body text-center justify-content-center align-items-center">
                    <svg width="90" height="90" fill="none">
                        <path d="M36 28.024A18.05 18.05 0 0025.022 39M59.999 28.024A18.05 18.05 0 0170.975 39" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <ellipse cx="37.5" cy="43.5" rx="4.5" ry="7.5" fill="currentColor"></ellipse>
                        <ellipse cx="58.5" cy="43.5" rx="4.5" ry="7.5" fill="currentColor"></ellipse>
                        <path d="M24.673 75.42a9.003 9.003 0 008.879 5.563m-8.88-5.562A8.973 8.973 0 0124 72c0-7.97 9-18 9-18s9 10.03 9 18a9 9 0 01-8.448 8.983m-8.88-5.562C16.919 68.817 12 58.983 12 48c0-19.882 16.118-36 36-36s36 16.118 36 36-16.118 36-36 36a35.877 35.877 0 01-14.448-3.017" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M41.997 71.75A14.94 14.94 0 0148 70.5c2.399 0 4.658.56 6.661 1.556a3 3 0 003.999-4.066 12 12 0 00-10.662-6.49 11.955 11.955 0 00-7.974 3.032c1.11 2.37 1.917 4.876 1.972 7.217z" fill="currentColor"></path>
                    </svg>
                    <h2>Oops!</h2>
                    <h5 class="mb-4">
                        Browser yang kamu gunakan tidak kompatibel.
                    </h5>
                    <p>Beberapa fungsi undangan ini mungkin tidak dapat berjalan dengan baik. Kami merekomendasikan Chrome. Klik tombol dibawah ini untuk mendownload.</p>
                    <div class="d-flex justify-content-center">
                        <a href="https://apps.apple.com/id/app/google-chrome/id535886823" class="btn p-1" target="_BLANK">
                            <img src="<?= baseurl ?>/static/themes/qs1/btn_app_store.png" alt="AppStore" height="40px">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.android.chrome&amp;hl=in&amp;gl=US" class="btn p-1" target="_BLANK">
                            <img src="<?= baseurl ?>/static/themes/qs1/btn_play_store.png" alt="PlayStore" height="40px">
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary btn-block rounded-pill" onclick="closeModal(notSupport)">Tetap Akses</button>
                </div>
            </div>
        </div>
    </div>
    <!-- not support modal -->

    <!-- start script -->
    <!-- <script src="<?= baseurl ?>/static/themes/qs1/app.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="<?= baseurl ?>/static/themes/qs1/splide.min.js"></script>
    <script src="<?= baseurl ?>/static/themes/qs1/themev2.js"></script>
    <script>
        $(document).on('click', '.btnQRCode', function() {
            $('#QRCode').modal('show');
            showModal(QRCode)
        });

        var notSupport = document.getElementById('notSupport');

        function checkBrowser() {
            if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1) {} else if (navigator.userAgent.indexOf("Edg") != -1) {} else if (navigator.userAgent.indexOf("UCBrowser") != -1) {
                showModal(notSupport);
                if (loader) {
                    loader.style.display = "none";
                }
                // Qondangan.style.display = "none";
                // notSupport.style.display = "flex";
            } else if (navigator.userAgent.indexOf("MiuiBrowser") != -1) {
                showModal(notSupport);
                if (loader) {
                    loader.style.display = "none";
                }
                // Qondangan.style.display = "none";
                // notSupport.style.display = "flex";
            } else if (navigator.userAgent.indexOf("Chrome") != -1) {} else if (navigator.userAgent.indexOf("Safari") != -1) {} else if (navigator.userAgent.indexOf("Firefox") != -1) {} else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) {} else {
                //
            }
        }
        checkBrowser()
    </script>
    <!-- end script -->
    <script>

    </script>


</body>

</html>
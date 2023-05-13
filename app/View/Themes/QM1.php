<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <meta name="csrf-token" content="RTvWDNP4LoL79w5Vqx0IURsquC39GBfB4V8bS4ur">
    <meta name="description" content="Undangan Pernikahan Jessi & Maudy">
    <meta property="og:site_name" content="Undangan Pernikahan Jessi & Maudy">
    <meta property="og:title" content="Undangan Pernikahan Jessi & Maudy">
    <meta property="og:description" content="Undangan Pernikahan Jessi & Maudy">
    <meta property="og:url" content="">
    <meta property="og:image" itemprop="image" content="">
    <link itemprop="thumbnailUrl" href="">
    <meta property="og:type" content="website" />
    <meta property="og:image:width" content="256">
    <meta property="og:image:height" content="256">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:updated_time" content="1674203743">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Undangan Pernikahan <?= $model['undangan']['title']; ?></title>
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="<?= baseurl ?>/static/example/css/splide.min.css">
    <link rel="stylesheet" href="<?= baseurl; ?>/static/example/css/animate.min.css">
    <link href="<?= baseurl ?>/static/example/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= baseurl ?>/static/example/css/toastr.min.css">
    <link rel="stylesheet" href="<?= baseurl ?>/static/example/css/main.css">
    <style></style>
</head>

<body>
    <main id="app">
        <div id="modalOverlay" class="modal-backdrop fade" style="display: none;"></div>
        <div id="loader" class="loader-wrapper">
            <div class="wrapper">
                <span></span>
                <span></span>
                <span></span>
                <span class="shadow"></span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="love">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="love" />
                        <feBlend in="SourceGraphic" in2="love" />
                    </filter>
                </defs>
            </svg>
        </div>
        <div id="ajakanMe" class="splide not-open " data-guest data-group>
            <div class="splide__track invitation__track">
                <ul class="splide__list invitation__list">
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); background-size: cover;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%">
                                    <div>
                                        <div class="text-center animate__animated animate__fadeInDown animate__slower">
                                            <div class="editable mb-2" style="font-size: 14.4px; color: rgb(36, 58, 52);">Undangan Pernikahan
                                            </div>
                                            <div class="editable font-accent color-accent h3 mb-3" style="font-size: 25.2px;font-weight: bold !important;">Jessi &amp;
                                                Maudy</div>
                                            <div class="animate__animated animate__fadeInDown animate__slower image-editable" style="height: 160px; width: 160px; margin: auto; border-radius: 100%; overflow: hidden; margin-bottom: 20px;">
                                                <img src="<?= baseurl ?>/static/example/images/4.jpg" style="width: 100%;height: 100%;object-fit: cover;">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <div class="editable mb-4 animate__animated animate__fadeInUp animate__slower">
                                                Kepada Yth.<br> Bapak/Ibu/Saudara/i:
                                            </div>
                                            <div id="guestNameSlot" class="editable color-accent h5 font-weight-bold mb-4 animate__animated animate__fadeInUp animate__slower" style="font-size: 18px;">
                                                <?= $model['tamu'] ?> </div>
                                            <button type="button" onclick="playMusic()" class="btn-open-invitation btn btn-primary rounded-pill mb-4 animate__animated animate__fadeInUp animate__slow">
                                                Buka Undangan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%;">
                                    <div style="height: 230px;width: 100%;margin: auto;overflow: hidden;margin-bottom: 20px;border: 4px solid var(--inv-border);border-radius: 10px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                        <img class="mb-4" src="<?= baseurl ?>/static/example/images/5.jpg" style="width: 100%;height: 100%;object-fit: cover;" draggable="false">
                                    </div>
                                    <div class="bg-desc-custom text-center animate__animated animate__fadeInUp animate__slower">
                                        <div class="mb-3 editable quotes" style="font-size: 14.4px;">Every love story is
                                            beautiful, but ours is the best one. I loved her since the first time I saw
                                            her. My mother told me to pick the very best one, and I did. True love
                                            stories never have endings.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide append-element-mempelai">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center flex-column" style="height: 100%; overflow: hidden; margin-top: -30px;">
                                <div class="mx-auto image-editable animate__animated animate__fadeInDown animate__slower" style="height: 75%; width: 90%; overflow: hidden; margin-top: -40px; margin-bottom: auto; border: 3px solid var(--inv-border); border-radius: 0px 0px 250px 250px; padding: 10px;">
                                    <img src="<?= baseurl ?>/static/example/images/6.jpg" draggable="false" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0px 0px 250px 250px;">
                                </div>
                                <div class="mb-auto" style="width: 100%;">
                                    <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                        <div class="title-weight-custom mb-3 editable font-italic" style="font-size: 14.4px;">Selamat Datang Nama Tamu </div>
                                        <div class="bg-desc-custom editable quotes" style="font-size: 14.4px;">Tanpa
                                            mengurangi rasa hormat, kami memberikan kabar bahagia ini dan memohon restu
                                            dari rekan sekalian untuk senantiasa mendoakan kelancaran acara pernikahan
                                            kami.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" id="mempelai-is" style="
                                height: 100%;
                                ">
                                <div style="width: 100%">
                                    <div>
                                        <div class="image-editable animate__animated animate__fadeInLeft animate__slower" style="
                                      height: 90px;
                                      width: 90px;
                                      margin: auto;
                                      border-radius: 100%;
                                      overflow: hidden;
                                      margin-bottom: 20px;
                                      ">
                                            <img src="<?= baseurl ?>/static/example/images/3.jpg" style="width: 100%;height: 100%;object-fit: cover;">
                                        </div>
                                        <div class="text-center mb-4 animate__animated animate__fadeInLeft animate__slower">
                                            <div class="editable font-latin color-accent h4 mb-2">Maudy Ayunda</div>
                                            <div class="editable">Anak Ketiga Dari Bapak Hendra dan Ibu Yaselin</div>
                                        </div>
                                        <div class="image-editable animate__animated animate__fadeInRight animate__slower" style="
                                      height: 90px;
                                      width: 90px;
                                      margin: auto;
                                      border-radius: 100%;
                                      overflow: hidden;
                                      margin-bottom: 20px;
                                      ">
                                            <img src="<?= baseurl ?>/static/example/images/2.jpg" style="width: 100%;height: 100%;object-fit: cover;">
                                        </div>
                                        <div class="text-center animate__animated animate__fadeInRight animate__slower">
                                            <div class="editable font-latin color-accent h4 mb-2">Jessi Choi</div>
                                            <div class="editable ">Anak Pertama Dari Bapak Roni dan Ibu Ridha</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%;">
                                    <div class="mb-4 text-center animate__animated animate__fadeInLeft animate__slower">
                                        <div class="mb-2 editable font-latin color-accent h4">Akad Nikah</div>
                                        <div class="editable " style="font-size: 14.4px;">Senin, 27 Maret 2023</div>
                                        <div class="editable " style="font-size: 14.4px;">09:00 - 11:00 WIB</div>
                                        <div class="editable " style="font-size: 14.4px;">Istana Merdeka Jakarta Pusat
                                        </div>
                                    </div>
                                    <div class="mb-4 text-center animate__animated animate__fadeInRight animate__slower">
                                        <div class="mb-2 editable font-latin color-accent h4">Resepsi Pernikahan</div>
                                        <div class="editable " style="font-size: 14.4px;">Senin, 27 Maret 2023</div>
                                        <div class="editable " style="font-size: 14.4px;"> 13:00 - 17:00 WIB</div>
                                        <div class="editable " style="font-size: 14.4px;">Istana Merdeka Jakarta Pusat
                                        </div>
                                    </div>
                                    <div class="countdown-wrapper d-flex flex-column animate__animated animate__fadeInUp animate__slower" data-datetime="2023-07-01">
                                        <div class="text-center countdown">
                                            <div class="countdown-item day">
                                                <div class="number">00</div>
                                                <div class="text editable">Days</div>
                                            </div>
                                            <div class="countdown-item hour">
                                                <div class="number">00</div>
                                                <div class="text editable">Hours</div>
                                            </div>
                                            <div class="countdown-item minute">
                                                <div class="number">00</div>
                                                <div class="text editable">Minutes</div>
                                            </div>
                                            <div class="countdown-item second">
                                                <div class="number">00</div>
                                                <div class="text editable">Seconds</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Reminder+Undangan+Pernikahan&details=Jangan+lupa+menghardiri+pernikahan+Jessi+dan+Maudy&dates=20230701T003000Z%2F20230701T083000Z" target="_blank" class="my-3 btn-reminder btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" draggable="false">Tambahkan ke Kalender</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%;">
                                    <div class="mb-4 text-center animate__animated animate__fadeInDown animate__slower">
                                        <div class="mb-2 editable font-latin color-accent h4">Special Guest</div>
                                        <div class="editable " style="font-size: 14.4px;">
                                            ✔ Ir. H. Joko Widodo <br> ✔ Prof. Dr. (H.C.) K. H. Ma'ruf Amin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%;">
                                    <div>
                                        <div style="width: 100%;margin: auto;border-radius: 10px;overflow: hidden;margin-bottom: 20px;padding-bottom: 100%;position: relative;" class="animate__animated animate__fadeInDown animate__slow">
                                            <iframe width="100%" height="100%" style="border:0;position: absolute;" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB8yt5w4P6NitG8K6xSb_IJ5y2AKUwpDWA%0A%20%20%20%20&amp;q=-6.170386,106.824205&amp;language=id" class="maps-embed"></iframe>
                                        </div>
                                        <div class="text-center animate__animated animate__fadeInUp animate__slow">
                                            <a href="https://maps.google.com/?q=-6.170386,106.824205&amp;amp;dir_action=navigate" class="mb-4 btn-maps-link btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" target="_blank" draggable="false">Arahkan ke Lokasi</a>
                                            <div class="mb-3 editable" style="font-size: 16px;">Informasi Tambahan</div>
                                            <div class="bg-desc-custom mb-3 editable" style="font-size: 14.4px;">Tamu
                                                yang hadir diharapkan memakai masker dan tidak membawa bayi</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%;">
                                    <div>
                                        <div class="mt-auto" style="width: 100%;">
                                            <div class="text-center animate__animated animate__fadeInDown animate__slower">
                                                <div class="mb-2 editable font-latin h4 color-accent">Story</div>
                                            </div>
                                        </div>
                                        <div class="animate__animated animate__fadeInRight animate__slower">
                                            <div class="image-editable" style="
                                                    width: 248px;
                                                    height: 195px;
                                                    margin: auto;
                                                    overflow: hidden;
                                                    transform: translate(15px, 24px) rotate(356deg);
                                                    border: 4px solid var(--inv-border);">
                                                <img src="<?= baseurl ?>/static/example/images/3.jpg" style="width: 100%; height: 100%; object-fit: cover" draggable="false">
                                            </div>
                                        </div>
                                        <div class="animate__animated animate__fadeInLeft animate__slower">
                                            <div class="image-editable" style="
                                                    width: 248px;
                                                    height: 195px;
                                                    margin: auto;
                                                    overflow: hidden;
                                                    margin-bottom: 20px;
                                                    transform: translate(-7px, 0px) rotate(2deg);
                                                    border: 4px solid var(--inv-border);">
                                                <img src="<?= baseurl ?>/static/example/images/2.jpg" style="width: 100%; height: 100%; object-fit: cover" draggable="false">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <a href="#" href="#" data-toggle="modal" data-target="#storyModal" class="mb-4 btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow">
                                                Cerita Kami
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%;">
                                    <div class="mb-4 text-center animate__animated animate__fadeInDown animate__slower">
                                        <div class="mb-2 font-latin color-accent h4 editable">Gallery</div>
                                    </div>
                                    <div class="flex-wrap image-editable d-flex" style="justify-content: center;">
                                        <div style="width: 33.333%;overflow: hidden;padding: 4px;" class="animate__animated animate__zoomIn animate__slower">
                                            <div class="light" style=" overflow: hidden; width: 100%; height: 100px; ">
                                                <img src="<?= baseurl ?>/static/example/images/4.jpg" style="width: 100%;height: 100%;object-fit: cover;" class="lightbox" draggable="false">
                                            </div>
                                        </div>
                                        <div style="width: 33.333%;overflow: hidden;padding: 4px;" class="animate__animated animate__zoomIn animate__slower">
                                            <div class style=" overflow: hidden; width: 100%; height: 100px; ">
                                                <img src="<?= baseurl ?>/static/example/images/5.jpg" style="width: 100%;height: 100%;object-fit: cover;" class="lightbox" draggable="false">
                                            </div>
                                        </div>
                                        <div style="width: 33.333%;overflow: hidden;padding: 4px;" class="animate__animated animate__zoomIn animate__slower">
                                            <div class style="overflow: hidden; width: 100%; height: 100px;">
                                                <img src="<?= baseurl ?>/static/example/images/6.jpg" style="width: 100%;height: 100%;object-fit: cover;" class="lightbox" draggable="false">
                                            </div>
                                        </div>
                                        <div style="width: 33.33%;overflow: hidden;padding: 4px;" class="animate__animated animate__zoomIn animate__slower">
                                            <div class style="overflow: hidden;width: 100%;height: 129px;">
                                                <img src="<?= baseurl ?>/static/example/images/7.jpg" style="width: 100%;height: 100%;object-fit: cover;" class="lightbox" draggable="false">
                                            </div>
                                        </div>
                                        <div style="width: 66.67%;overflow: hidden;padding: 4px;" class="animate__animated animate__zoomIn animate__slower">
                                            <div class style="overflow: hidden;width: 100%;height: 129px;">
                                                <img src="<?= baseurl ?>/static/example/images/8.jpg" style="width: 100%;height: 100%;object-fit: cover;" class="lightbox" draggable="false">
                                            </div>
                                        </div>
                                        <div style="width: 66.67%;overflow: hidden;padding: 4px;" class="animate__animated animate__zoomIn animate__slower">
                                            <div class style="overflow: hidden;width: 100%;height: 129px;">
                                                <img src="<?= baseurl ?>/static/example/images/1.jpg" style="width: 100%;height: 100%;object-fit: cover;" class="lightbox" draggable="false">
                                            </div>
                                        </div>
                                        <div style="width: 33.33%;overflow: hidden;padding: 4px;" class="animate__animated animate__zoomIn animate__slower">
                                            <div class style="overflow: hidden;width: 100%;height: 129px;">
                                                <img src="<?= baseurl ?>/static/example/images/2.jpg" style="width: 100%;height: 100%;object-fit: cover;" class="lightbox" draggable="false">
                                            </div>
                                        </div>
                                        <div style="width: 33.333%;overflow: hidden;padding: 4px;" class="animate__animated animate__zoomIn animate__slower">
                                            <div class style=" overflow: hidden; width: 100%; height: 100px; ">
                                                <img src="<?= baseurl ?>/static/example/images/3.jpg" style="width: 100%;height: 100%;object-fit: cover;" class="lightbox" draggable="false">
                                            </div>
                                        </div>
                                        <div style="width: 33.333%;overflow: hidden;padding: 4px;" class="animate__animated animate__zoomIn animate__slower">
                                            <div class style=" overflow: hidden; width: 100%; height: 100px; ">
                                                <img src="<?= baseurl ?>/static/example/images/6.jpg" style="width: 100%;height: 100%;object-fit: cover;" class="lightbox" draggable="false">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%">
                                    <div>
                                        <div style="width: 100%;margin: auto;overflow: hidden;margin-bottom: 20px;padding-bottom: 57%;position: relative;" class="embed-video animate__animated animate__fadeInDown animate__slower">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/eg1dkoB92CA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                        <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                            <img width="50" src="/themes/assets/images/logo/youtube-logo.png" class="mb-3 attachment-large size-large animate__animated animate__fadeInUp animate__slow" /><br>
                                            <a href="https://www.youtube.com/watch?v=eg1dkoB92CA" class="mb-4 btn-maps-link btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" target="_blank" draggable="false">Link Streaming Youtube</a>
                                        </div>
                                        <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                            <img width="50" src="/themes/assets/images/logo/instagram-logo.png" class="mb-3 attachment-large size-large animate__animated animate__fadeInUp animate__slow" /><br>
                                            <a href="null" class="mb-4 btn-maps-link btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" target="_blank" draggable="false">Link Streaming Instagram</a>
                                        </div>
                                        <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                            <img width="50" src="/themes/assets/images/logo/tiktok-logo.png" class="mb-3 attachment-large size-large animate__animated animate__fadeInUp animate__slow" /><br>
                                            <a href="https://www.youtube.com/watch?v=eg1dkoB92CA" class="mb-4 btn-maps-link btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" target="_blank" draggable="false">Link Streaming Tiktok</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%; ">
                                <div style="width: 100%;" class="text-center">
                                    <div class="mb-3 font-latin color-accent h4 editable">Wallet</div>
                                    <div class="flex-wrap d-flex justify-content-center">
                                        <div id="inner-slider" class="splide w-100 px-3" aria-labelledby="carousel-heading">
                                            <div class="splide__track">
                                                <ul class="splide__list">
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;text-align: center;white-space: nowrap;height:100px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <span class="helper" style="display: inline-block;
                                                                  height: 100%;
                                                                  vertical-align: middle;"></span>
                                                                <img src="/themes/assets/images/logo/bank/DKI.svg" style="width: 95%; vertical-align: middle;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom mb-0 editable account-number font-weight-bold h3" style="font-size: 15px;">2139812398 <br> Farel Addison
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;text-align: center;white-space: nowrap;height:100px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <span class="helper" style="display: inline-block;
                                                                  height: 100%;
                                                                  vertical-align: middle;"></span>
                                                                <img src="/themes/assets/images/logo/bank/BCA syariah.svg" style="width: 95%; vertical-align: middle;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom mb-0 editable account-number font-weight-bold h3" style="font-size: 15px;">0612839123 <br> Farel Addison
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;text-align: center;white-space: nowrap;height:100px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <span class="helper" style="display: inline-block;
                                                                  height: 100%;
                                                                  vertical-align: middle;"></span>
                                                                <img src="/themes/assets/images/logo/bank/Sinarmas.svg" style="width: 95%; vertical-align: middle;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom mb-0 editable account-number font-weight-bold h3" style="font-size: 15px;">72183812381238 <br> Farel
                                                                Addison </div>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;text-align: center;white-space: nowrap;height:100px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <span class="helper" style="display: inline-block;
                                                                  height: 100%;
                                                                  vertical-align: middle;"></span>
                                                                <img src="/themes/assets/images/logo/bank/Permata.svg" style="width: 95%; vertical-align: middle;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom bg-desc-custom mb-0 editable account-number font-weight-bold h3" style="font-size: 15px;">3231231 <br> Farel Addison
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <img class="mt-2 mb-1" title="Dana.svg" src="/themes/assets/images/logo/dompet_digital/Dana.svg" style="width: 100%; height:100px;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom mb-0 editable account-number-not-rek font-weight-bold h3" style="font-size: 15px;">6281216621623</div>
                                                            <button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text="6281216621623" onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Copy
                                                                Dana</button>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <img class="mt-2 mb-1" src="/themes/assets/images/logo/dompet_digital/Spay.svg" title="Spay.svg" style="width: 100%; height:100px;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom mb-0 editable account-number-not-rek font-weight-bold h3" style="font-size: 15px;">6281216621623</div>
                                                            <button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text="6281216621623" onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Copy
                                                                Shopeepay</button>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <img class="mt-2 mb-1" src="/themes/assets/images/logo/dompet_digital/Ovo.svg" title="Ovo.svg" style="width: 100%; height:100px;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom mb-0 editable account-number-not-rek font-weight-bold h3" style="font-size: 15px;">6281216621623</div>
                                                            <button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text="6281216621623" onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Copy
                                                                Ovo</button>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <img class="mt-2 mb-1" src="/themes/assets/images/logo/dompet_digital/Gopay.svg" title="Gopay.svg" style="width: 100%; height:100px;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom mb-0 editable account-number-not-rek font-weight-bold h3" style="font-size: 15px;">6281216621623</div>
                                                            <button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text="6281216621623" onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Copy
                                                                Gopay</button>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <img class="mt-2 mb-1" src="/themes/assets/images/logo/dompet_digital/Link Aja.svg" title="Link Aja.svg" style="width: 100%; height:100px;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom mb-0 editable account-number-not-rek font-weight-bold h3" style="font-size: 15px;">6281216621623</div>
                                                            <button type='button' class='btn btn-sm btn-primary mt-2 mb-2 animate__animated animate__fadeInUp animate__slow delay-5' data-text="6281216621623" onclick='copyText(event)' style='font-family: sans-serif; border-radius: 4px'>Copy
                                                                Link Aja</button>
                                                        </div>
                                                    </li>
                                                    <li class="splide__slide gift-1 position-relative">
                                                        <div class="mb-3">
                                                            <div style="max-width: 150px; margin: auto; overflow: hidden; margin-bottom: 20px; border-radius: 10px;" class="image-editable animate__animated animate__fadeInDown animate__slower">
                                                                <img class="mt-2 mb-1" src="/themes/assets/images/logo/whatsapp.svg" title="whatsapp.svg" style="width: 100%; height:100px;" draggable="false">
                                                            </div>
                                                            <div class="text-center animate__animated animate__fadeInUp animate__slower">
                                                            </div>
                                                            <div class="bg-desc-custom mb-0 editable account-number-not-rek font-weight-bold h3" style="font-size: 15px;">6281216621623</div>
                                                            <a onclick="window.open('https://wa.me/6281216621623','_blank');" type='button' class='btn btn-sm btn-primary mt-2 mb-2 text-white animate__animated animate__fadeInUp animate__slow delay-5' data-text="6281216621623" style='font-family: sans-serif; border-radius: 4px'>Chat
                                                                via Whatsapp</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%; ">
                                <div style="width: 100%;" class="text-center">
                                    <div class="mb-2 font-latin color-accent h4 editable animate__animated animate__fadeInDown animate__slower">
                                        Gift</div>
                                    <div class="bg-desc-custom mb-4 editable animate__animated animate__fadeInDown animate__slower">
                                        Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Namun jika Anda
                                        ingin memberi hadiah kami sediakan fitur berikut
                                    </div>
                                    <div style="display: flex;">
                                        <button type="button" class="btn-catalog btn btn-block btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow" style="max-width: 150px;margin: auto;">🎁 Kirim Hadiah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%;">
                                    <div class="bg-desc-custom text-center">
                                        <div class="mb-2 font-latin color-accent h4 editable animate__animated animate__fadeInDown animate__slow">
                                            Health Protocol</div>
                                        <div class="mb-4 editable animate__animated animate__fadeInUp animate__slower">
                                            Mengingat kondisi pandemi saat ini, kami menghimbau Bapak/Ibu/Saudara/i tamu
                                            undangan agar tetap memperhatikan protokol kesehatan dalam rangka upaya
                                            pencegahan penyebaran virus Covid-19.
                                        </div>
                                    </div>
                                    <div class="text-center d-flex justify-content-center">
                                        <div style="width: 50%;" class="p-4 animate__animated animate__fadeInLeft animate__slow delay-4">
                                            <div class="color-accent">
                                                <svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.5 30v1.25a8.75 8.75 0 0 0 0 17.5V50a27.504 27.504 0 0 0 54.502 5.237l-2.455-.474a24.9 24.9 0 0 1-3.297 8.405V48.982l3.75-9.75V47.5s-.038 4.096-.112 4.883l2.489.234c.082-.863.123-3.867.123-3.867a8.75 8.75 0 0 0 0-17.5V22.5a20.023 20.023 0 0 0-20-20H10a1.25 1.25 0 0 0-1.25 1.25v5h2.5V5H47.5A17.52 17.52 0 0 1 65 22.5v6.357l-6.513-8.375A1.249 1.249 0 0 0 57.5 20h-35a11.28 11.28 0 0 1-11.025-8.999l-2.45.498a13.678 13.678 0 0 0 4.051 7.249A12.476 12.476 0 0 0 12.5 22.5V30Zm0 16.25a6.25 6.25 0 0 1 0-12.5v12.5Zm55-12.5a6.25 6.25 0 0 1 0 12.5v-12.5ZM40 75a24.843 24.843 0 0 1-10.915-2.5h21.83A24.842 24.842 0 0 1 40 75Zm18.75-8.469A25.078 25.078 0 0 1 54.997 70H25.003a25.073 25.073 0 0 1-3.753-3.469V65h37.5v1.531Zm0-11.531h-25v2.5h25v5h-37.5v-5h10V55h-10v-5h37.5v5ZM25.518 22.5h31.37l7.942 10.21L59.14 47.5H37.775l.95-4.755-2.45-.49-1.05 5.245H20.86l-5.65-14.69L25.517 22.5ZM15 22.5c0-.704.075-1.406.222-2.095a13.708 13.708 0 0 0 6.771 2.084L15 29.482V22.5Zm0 16.732 3.75 9.75V63.17A25.017 25.017 0 0 1 15 50V39.232Zm4.357-7.804a13.373 13.373 0 0 1 13.786 0l-1.286 2.144a10.878 10.878 0 0 0-11.214 0l-1.286-2.144Zm28.786 2.144-1.286-2.144a13.373 13.373 0 0 1 13.786 0l-1.286 2.144a10.878 10.878 0 0 0-11.214 0ZM26.25 36.25a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5Zm0 5a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Zm27.5-5a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5Zm0 5a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="editable">Menggunakan masker</div>
                                        </div>
                                        <div style="width: 50%;" class="p-4 animate__animated animate__fadeInRight animate__slow delay-4">
                                            <div class="color-accent">
                                                <svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M73.272 25h3.271v2.5H72.84c-.28 0-.552-.096-.771-.273l-.7-.566a51.79 51.79 0 0 0-11.6-7.102l-10.857-4.36-.039-.015a2.123 2.123 0 0 0-1.538-.071c-.504.17-.928.523-1.19.99a2.197 2.197 0 0 0-.229 1.542c.115.525.418.989.85 1.3l9.465 6.259a1.24 1.24 0 0 1 .534.799 16.127 16.127 0 0 0 2.61 5.667c2.589 3.512 6.247 5.055 10.872 4.587l.246 2.487c-.63.064-1.235.095-1.817.094-5.854 0-9.371-3.051-11.337-5.752a18.798 18.798 0 0 1-2.735-5.586H33.796V25h17.611l-6.01-3.974a4.65 4.65 0 0 1-1.299-1.372 4.71 4.71 0 0 1-.566-3.603 4.7 4.7 0 0 1 .788-1.681 4.611 4.611 0 0 1 2.505-1.713 4.56 4.56 0 0 1 3.016.226l10.858 4.36.04.016a54.243 54.243 0 0 1 12.173 7.449l.36.292Zm-45.88-7.5 5.197 25.255 2.417-.51-5.378-26.132a13.85 13.85 0 0 0-4.029-9.63 13.51 13.51 0 0 0-9.55-3.983H2.47V5h13.58a11.05 11.05 0 0 1 7.405 2.869A11.314 11.314 0 0 1 27.093 15h-7.496a5.014 5.014 0 0 0-1.76-2.701 4.908 4.908 0 0 0-3.022-1.049H2.469v2.5h12.346c.637.001 1.25.251 1.709.699.459.447.73 1.057.755 1.702l-6.144 31.104 2.421.49L19.531 17.5h7.861Zm35.643 27.208a54.273 54.273 0 0 0-12.172-7.448l-.028-.012L45.411 35h2.737v-2.5H36.163V35h1.042a4.699 4.699 0 0 0-1.013 1.955 4.73 4.73 0 0 0 .556 3.592c.324.53.751.99 1.254 1.351L42.022 45H19.753c-.94 0-1.861.271-2.654.783a4.978 4.978 0 0 0-1.823 2.105 5.053 5.053 0 0 0 .699 5.328 4.983 4.983 0 0 0-2.043 2.433 5.058 5.058 0 0 0-.172 3.188 5.002 5.002 0 0 0 1.77 2.643c.86.662 1.909 1.02 2.989 1.02h19.753V60H18.519a2.454 2.454 0 0 1-1.746-.732 2.516 2.516 0 0 1-.724-1.768c0-.663.26-1.299.724-1.768A2.454 2.454 0 0 1 18.519 55h19.753v-2.5H19.753a2.454 2.454 0 0 1-1.746-.732A2.516 2.516 0 0 1 17.284 50c0-.663.26-1.299.723-1.768a2.454 2.454 0 0 1 1.746-.732H45.68c.258 0 .51-.082.72-.234a1.264 1.264 0 0 0 .028-2.01l-6.947-5.36a2.175 2.175 0 0 1-.9-1.327 2.198 2.198 0 0 1 .222-1.547c.26-.47.684-.824 1.188-.996a2.122 2.122 0 0 1 1.542.068l.027.011 8.328 3.452a51.812 51.812 0 0 1 11.606 7.104c.437.353.868.839 1.47.839h13.58V45H63.396l-.36-.292Zm.61 25.424C60.755 71.596 53.371 75 47.275 75H24.692a2.454 2.454 0 0 1-1.747-.732 2.516 2.516 0 0 1-.723-1.768c0-.663.26-1.299.723-1.768A2.454 2.454 0 0 1 24.692 70h13.58v-2.5H20.988a2.457 2.457 0 0 1-1.745-.733A2.519 2.519 0 0 1 18.519 65h-2.47a5.042 5.042 0 0 0 1.258 3.33 4.925 4.925 0 0 0 3.127 1.639 5.046 5.046 0 0 0-.029 5.016 4.97 4.97 0 0 0 1.81 1.841 4.89 4.89 0 0 0 2.477.674h22.582c2.713 0 8.538-.654 17.214-5h12.055V70H64.198c-.192 0-.381.045-.552.132Zm-41.27-30.844.926-16.875-2.466-.138-.925 16.875 2.465.138Zm2.475-10.281 1.08 13.594 2.461-.2-1.08-13.595-2.461.201ZM11.11 52.5c0 .742-.217 1.467-.624 2.083a3.713 3.713 0 0 1-1.662 1.382 3.66 3.66 0 0 1-2.14.213 3.689 3.689 0 0 1-1.896-1.026 3.764 3.764 0 0 1-1.014-1.92 3.794 3.794 0 0 1 .21-2.167 3.74 3.74 0 0 1 1.365-1.683 3.67 3.67 0 0 1 2.058-.632 3.685 3.685 0 0 1 2.617 1.1 3.778 3.778 0 0 1 1.086 2.65Zm-2.469 0c0-.247-.072-.489-.208-.694a1.238 1.238 0 0 0-.554-.46 1.22 1.22 0 0 0-1.345.27 1.255 1.255 0 0 0-.268 1.362c.093.229.252.424.455.561a1.223 1.223 0 0 0 1.558-.156 1.26 1.26 0 0 0 .362-.883Zm27.16-30a3.67 3.67 0 0 1-2.057-.632 3.74 3.74 0 0 1-1.364-1.683 3.794 3.794 0 0 1-.211-2.167 3.765 3.765 0 0 1 1.014-1.92 3.689 3.689 0 0 1 1.896-1.026 3.66 3.66 0 0 1 2.14.214 3.714 3.714 0 0 1 1.662 1.38 3.783 3.783 0 0 1-.462 4.734 3.685 3.685 0 0 1-2.617 1.1Zm0-2.5c.245 0 .483-.073.687-.21a1.266 1.266 0 0 0 .187-1.923 1.23 1.23 0 0 0-1.346-.272 1.238 1.238 0 0 0-.554.46 1.261 1.261 0 0 0 .154 1.579c.231.234.545.366.873.366Zm12.346 45a3.67 3.67 0 0 1-2.057-.632 3.74 3.74 0 0 1-1.364-1.683 3.793 3.793 0 0 1-.211-2.167 3.765 3.765 0 0 1 1.013-1.92 3.689 3.689 0 0 1 1.897-1.026 3.66 3.66 0 0 1 2.14.213 3.714 3.714 0 0 1 1.662 1.382 3.784 3.784 0 0 1-.462 4.733 3.685 3.685 0 0 1-2.618 1.1Zm0-2.5c.244 0 .483-.073.686-.21a1.265 1.265 0 0 0 .187-1.923 1.23 1.23 0 0 0-1.345-.272 1.238 1.238 0 0 0-.554.46 1.262 1.262 0 0 0 .154 1.578c.231.235.545.367.872.367Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="editable">Mencuci tangan</div>
                                        </div>
                                    </div>
                                    <div class="text-center d-flex justify-content-center">
                                        <div style="width: 50%;" class="p-4 animate__animated animate__fadeInLeft animate__slow delay-8">
                                            <div class="color-accent">
                                                <svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M45.568 33.312a1.172 1.172 0 1 0-1.657 1.657l1.515 1.515H34.574l1.515-1.515a1.172 1.172 0 1 0-1.657-1.657l-3.516 3.516a1.172 1.172 0 0 0 0 1.657L34.432 42a1.17 1.17 0 0 0 1.657 0c.458-.458.458-1.2 0-1.658l-1.515-1.515h10.852l-1.515 1.515A1.172 1.172 0 1 0 45.57 42l3.515-3.515c.458-.458.458-1.2 0-1.657l-3.516-3.516ZM22.37 23.516H5.86A5.866 5.866 0 0 0 0 29.375a1.172 1.172 0 1 0 2.344 0 3.52 3.52 0 0 1 3.515-3.516h16.51a3.52 3.52 0 0 1 3.517 3.516v18.984c0 .624-.505 1.094-1.173 1.094s-1.171-.47-1.171-1.094V29.453a1.172 1.172 0 1 0-2.344 0v41.732c0 .924-.817 1.706-1.784 1.706-.984 0-1.784-.8-1.784-1.784V48.28c0-.647-.524-1.172-1.172-1.172h-4.687c-.648 0-1.172.525-1.172 1.172v22.826c0 .983-.8 1.784-1.784 1.784-.967 0-1.784-.782-1.784-1.706V29.453a1.172 1.172 0 1 0-2.343 0v18.828a1.173 1.173 0 0 1-2.344 0V34.063a1.172 1.172 0 1 0-2.344 0V48.28a3.52 3.52 0 0 0 4.688 3.314v19.59c0 2.233 1.851 4.05 4.127 4.05a4.132 4.132 0 0 0 4.128-4.128V49.453h2.343v21.654a4.132 4.132 0 0 0 4.128 4.127c2.276 0 4.128-1.816 4.128-4.05V51.608c.365.123.758.19 1.171.19 1.972 0 3.516-1.51 3.516-3.438V29.375c0-3.23-2.628-5.86-5.86-5.86ZM14.063 21.172c4.523 0 8.203-3.68 8.203-8.203 0-4.524-3.68-8.203-8.203-8.203S5.86 8.446 5.86 12.969s3.68 8.203 8.203 8.203Zm0-14.063a5.866 5.866 0 0 1 5.86 5.86c0 3.23-2.629 5.86-5.86 5.86a5.866 5.866 0 0 1-5.86-5.86 5.866 5.866 0 0 1 5.86-5.86ZM74.14 23.516H57.63a5.866 5.866 0 0 0-5.86 5.859v18.906a3.52 3.52 0 0 0 4.688 3.314v19.59c0 2.233 1.852 4.05 4.128 4.05a4.132 4.132 0 0 0 4.127-4.128V49.453h2.344v21.654a4.132 4.132 0 0 0 4.128 4.127c2.276 0 4.127-1.816 4.127-4.05V51.608c.366.123.76.19 1.172.19 1.972 0 3.516-1.51 3.516-3.438V29.375c0-3.23-2.629-5.86-5.86-5.86Zm3.516 24.843c0 .624-.504 1.094-1.172 1.094-.668 0-1.171-.47-1.171-1.094V29.453a1.172 1.172 0 1 0-2.344 0v41.732c0 .924-.817 1.706-1.784 1.706-.984 0-1.784-.8-1.784-1.784V48.28c0-.647-.525-1.172-1.172-1.172h-4.688a1.172 1.172 0 0 0-1.171 1.172v22.826c0 .983-.8 1.784-1.784 1.784-.967 0-1.784-.782-1.784-1.706V29.453a1.172 1.172 0 1 0-2.344 0V48.28a1.173 1.173 0 0 1-2.344.002V29.374a3.52 3.52 0 0 1 3.516-3.516h16.51a3.52 3.52 0 0 1 3.516 3.516v18.984ZM65.834 21.172c4.523 0 8.203-3.68 8.203-8.203 0-4.524-3.68-8.203-8.203-8.203s-8.203 3.68-8.203 8.203 3.68 8.203 8.203 8.203Zm0-14.063a5.866 5.866 0 0 1 5.86 5.86c0 3.23-2.629 5.86-5.86 5.86a5.866 5.866 0 0 1-5.86-5.86 5.866 5.866 0 0 1 5.86-5.86Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="editable">Menjaga jarak</div>
                                        </div>
                                        <div style="width: 50%;" class="p-4 animate__animated animate__fadeInRight animate__slow delay-8">
                                            <div class="color-accent">
                                                <svg width="80" height="80" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m49.42 37.347.214-.213a1.25 1.25 0 0 0-1.768-1.768l-.213.214a3.748 3.748 0 0 1-5.306 0l-.213-.214a1.25 1.25 0 0 0-1.768 1.768l.214.213a6.25 6.25 0 0 0 8.84 0ZM27.5 30H5a1.25 1.25 0 0 0-1.237 1.075l-1.25 8.75a1.257 1.257 0 0 0 .287 1 1.296 1.296 0 0 0 .95.425h2.063l-2.05 12.3c-.048.336.037.676.237.95l3.75 5a1.267 1.267 0 0 0 1 .5h5A1.25 1.25 0 0 0 15 58.75v-4.9l1.262-7.6H20A1.25 1.25 0 0 0 21.25 45v-5h6.25a1.25 1.25 0 0 0 1.25-1.25v-7.5A1.25 1.25 0 0 0 27.5 30ZM5.188 38.75l.9-6.25h1.187l-1.037 6.25h-1.05Zm13.562 5h-2.063l.625-3.75h1.438v3.75Zm2.5-6.25h-5a1.25 1.25 0 0 0-1.238 1.05l-2.5 15c-.01.066-.014.133-.012.2v3.75H9.375l-3.05-4.075L9.813 32.5H21.25v5Zm5 0h-2.5v-5h2.5v5Z">
                                                    </path>
                                                    <path d="M77.5 13.75a11.25 11.25 0 0 0-22.425-1.25H31.25A1.25 1.25 0 0 0 30 13.75v2.5a11.269 11.269 0 0 0 7.025 10.425A6.201 6.201 0 0 0 35 31.25v4.7l-3.95 7.8h-2.3a1.276 1.276 0 0 0-.938.413 1.21 1.21 0 0 0-.3.975l2.5 22.5a1.236 1.236 0 0 0 1.238 1.112h7.5a13.779 13.779 0 0 0 2.5-.237v7.737a1.25 1.25 0 0 0 1.25 1.25H65a1.25 1.25 0 0 0 1.25-1.25v-9.325l4.013-2.688A16.173 16.173 0 0 0 77.5 50.725V31.25c.006-3.538-1-7.003-2.9-9.988a11.186 11.186 0 0 0 2.9-7.512ZM66.25 5a8.75 8.75 0 1 1-8.75 8.75A8.76 8.76 0 0 1 66.25 5ZM37.362 36.813a1.25 1.25 0 0 0 .138-.563v-5a3.761 3.761 0 0 1 3.75-3.75H55a6.25 6.25 0 0 1 6.25 6.25v6.462l-18.975 3.563v.025c-.337-.025-.675-.05-1.025-.05h-7.4l3.512-6.938ZM38.75 66.25h-6.375l-2.225-20h11.1A8.76 8.76 0 0 1 50 55a11.267 11.267 0 0 1-11.25 11.25Zm25 8.75h-20v-7.2a14.47 14.47 0 0 0 3.138-1.737v.012L63.75 55.962V75ZM65 52.5c-.22.026-.435.084-.638.175l-13.012 7.8A13.547 13.547 0 0 0 52.5 55a11.216 11.216 0 0 0-5.4-9.587L62.612 42.5h6.138A1.25 1.25 0 0 1 70 43.75v5a3.762 3.762 0 0 1-3.75 3.75H65Zm10-21.25v19.475a13.715 13.715 0 0 1-6.112 11.438l-2.638 1.75V55a6.25 6.25 0 0 0 6.25-6.25v-5A3.761 3.761 0 0 0 68.75 40h-5v-6.25A8.76 8.76 0 0 0 55 25H41.25a8.76 8.76 0 0 1-8.75-8.75V15h22.575A11.27 11.27 0 0 0 66.25 25a11.117 11.117 0 0 0 6.463-2.063A16.151 16.151 0 0 1 75 31.25ZM14.734 27.32c.496.12 1.005.18 1.516.18A6.25 6.25 0 0 0 20 16.25v-10a3.75 3.75 0 0 0-7.5 0v10a6.261 6.261 0 0 0-2.311 6.554 6.182 6.182 0 0 0 4.545 4.516Zm-.359-9.311A1.25 1.25 0 0 0 15 16.925V6.25a1.25 1.25 0 0 1 2.5 0h-1.25v2.5h1.25V10h-1.25v2.5h1.25v1.25h-1.25v2.5h1.25v.675a1.25 1.25 0 0 0 .625 1.084 3.75 3.75 0 1 1-3.75 0Z">
                                                    </path>
                                                    <path d="M16.25 23.75a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM63.965 18.535a1.25 1.25 0 0 0 1.767 0l7.072-7.071a1.25 1.25 0 1 0-1.768-1.768l-6.187 6.188-2.653-2.651A1.25 1.25 0 1 0 60.43 15l3.536 3.535Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="editable">Cek suhu tubuh</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div style="width: 100%;">
                                    <div class="text-center">
                                        <div class="mb-2 font-latin color-accent h4 editable animate__animated animate__fadeInDown animate__slow">
                                            Guest Book</div>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                                        <div style="width: 100%;">
                                            <div>
                                                <div class="mb-5 animate__animated animate__fadeInRight animate__slower">
                                                    <div class="image-editable" style="
                                                            width: 248px;
                                                            height: 195px;
                                                            margin: auto;
                                                            overflow: hidden;
                                                            transform: translate(15px, 24px) rotate(356deg);
                                                            border: 4px solid var(--inv-border);">
                                                        <img src="<?= baseurl ?>/static/example/images/6.jpg" style="width: 100%; height: 100%; object-fit: cover" draggable="false">
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#" data-toggle="modal" data-target="#rsvpModal" class="mb-4 btn-rsvp btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow">Kirimkan
                                                        Ucapan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                                <div style="width: 100%;">
                                    <div>
                                        <div class="text-center">
                                            <div class="mb-4 font-latin color-accent h4 editable animate__animated animate__fadeInDown animate__slow">
                                                RSVP</div>
                                        </div>
                                        <div class="img-wrapper d-flex justify-content-center" style="margin-bottom: 50px;">
                                            <div id="qrcode" class="d-flex justify-content-center animate__animated animate__fadeInDown " style="width:100%;"></div>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-4 editable animate__animated animate__fadeInUp animate__slower">
                                                Konfirmasi Kehadiran </div>
                                            <a href="#=" class="mb-4 btn btn-primary rounded-pill animate__animated animate__fadeInUp animate__slow">
                                                Kirim RSVP</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide invitation__slide">
                        <div class="container-mobile" style="background-image: url(<?= baseurl ?>/static/example/images/bg-v2.jpg); ;">
                            <div class="frame">
                                <img class="frame-tl animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tl-v2.png" alt="frame">
                                <img class="frame-tr animate__animated animate__fadeInDown animate__slower" src="<?= baseurl ?>/static/example/images/frame-tr-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-bl animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-bl-v2.png" alt="frame" style="width: 30%;">
                                <img class="frame-br animate__animated animate__fadeInUp animate__slower" src="<?= baseurl ?>/static/example/images/frame-br-v2.png" alt="frame" style="width: 45%;">
                            </div>
                            <div class="watermark d-flex justify-content-center align-items-center" style="height: 100%;">
                                <div swtyle="width: 100%">
                                    <div class="text-center">
                                        <div class="bg-desc-custom mb-3 editable quotes animate__animated animate__fadeInDown animate__slower">
                                            Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila
                                            Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do'a restu kepada kedua
                                            mempelai.</div>
                                        <div class="editable font-italic animate__animated animate__fadeInDown animate__slow">
                                            Hormat Kami Yang Mengundang</div>
                                        <div class="mt-2 editable font-accent h4 color-accent animate__animated animate__fadeInDown animate__slow" style="font-size: 21.6px;">Jessi &amp; Maudy</div>
                                        <div class="mt-5 watermark-placeholder"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="menuSlider" class="splide">
            <div class="splide__track menu-track">
                <ul class="splide__list menu-list">
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="10mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1000 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <path fill="currentColor" d="M180 562c2,61 1,124 1,186 -1,44 -1,88 -1,132l0 3c1,27 1,53 40,53 27,0 54,0 81,0 16,0 33,0 49,0 0,-14 0,-29 0,-43 0,-53 0,-105 0,-158 0,-6 0,-13 0,-20 -1,-37 -2,-73 26,-101 29,-30 61,-29 99,-28 8,0 15,0 22,0 6,0 13,0 20,0 38,-1 73,-3 103,26 30,28 29,65 28,104 -1,6 -1,12 -1,17 0,53 0,107 0,160 0,14 0,29 0,43 16,0 32,0 48,0 27,0 54,0 80,0 23,0 33,-3 36,-9 6,-9 6,-27 6,-47 0,-44 0,-88 -1,-132 0,-63 -1,-127 1,-189 1,-17 15,-31 32,-31 7,0 14,0 21,0 25,1 49,1 57,-7 20,-23 -16,-56 -46,-85 -6,-6 -11,-11 -17,-17 -8,-8 -14,-14 -19,-19 -13,-12 -19,-18 -24,-29 -5,-11 -5,-19 -4,-35 0,-6 0,-14 0,-23 0,-20 0,-40 0,-60 0,-20 0,-39 0,-59 0,-4 0,-8 0,-11 0,-28 0,-46 -13,-54 -5,-3 -21,-4 -38,-5 -19,-1 -37,0 -44,3 -15,6 -16,23 -17,53l0 3c0,18 -15,32 -32,31 -7,0 -12,-2 -17,-5l0 0c-9,-6 -43,-40 -76,-73 -26,-26 -52,-52 -63,-62 -24,-22 -60,18 -93,53 -7,8 -14,15 -22,23l0 1 0 0 -269 268c-5,5 -11,10 -17,16 -22,22 -51,49 -52,63 -2,22 16,28 35,30 12,1 25,1 35,0 7,0 14,0 14,0 18,0 32,14 32,32 0,1 0,1 0,2zm-63 186c1,-52 1,-104 0,-156 -8,0 -16,0 -24,0 -50,-5 -99,-24 -93,-99 4,-38 42,-75 72,-104 6,-6 12,-11 16,-15l0 0 0 0 269 -268 0 0c6,-6 13,-14 20,-22 53,-58 112,-121 183,-57 11,10 38,37 65,64 8,8 16,16 24,23 7,-19 20,-34 49,-46 15,-6 43,-9 70,-8 27,1 54,6 68,14 45,26 45,59 45,109 0,4 -1,7 -1,11 0,20 0,39 0,59 0,20 0,40 1,59 0,12 -1,20 -1,26 0,6 -2,6 -1,7 0,1 3,3 10,9 5,5 11,11 20,20 5,5 11,10 16,16 51,48 111,105 49,174 -25,26 -59,28 -94,28 -1,52 0,104 0,156 1,44 1,88 1,133 -1,28 -1,54 -14,78 -15,25 -42,41 -92,41 -26,0 -53,0 -80,0 -26,0 -53,0 -80,0 -17,0 -31,-14 -31,-32 0,-25 -1,-50 -1,-75 0,-53 0,-107 0,-160 1,-7 1,-13 1,-19 1,-24 1,-47 -8,-56 -11,-10 -33,-9 -57,-8 -7,0 -13,0 -21,0 -9,0 -17,0 -24,0 -23,-1 -43,-2 -53,9 -9,9 -8,31 -8,55 1,7 1,14 1,22 -1,52 0,105 0,157 0,25 0,50 0,75 0,18 -14,32 -32,32 -27,0 -54,0 -81,0 -27,0 -54,0 -81,0 -102,0 -103,-57 -103,-117l0 -2c-1,-45 0,-89 0,-133z" />
                            </g>
                        </svg>
                        <span>Opening</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="8.86mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 886 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_680943552">
                                    <path fill="currentColor" d="M654 915c1,-6 5,-19 8,-29 5,-22 -4,-93 73,-108 11,-2 23,-1 35,-2 12,-2 16,-5 30,-7 -9,46 -99,134 -146,146zm-598 -763c0,-37 2,-50 24,-72 18,-18 37,-25 69,-25l588 0c32,0 53,7 71,26 21,22 22,35 22,71l0 475c0,32 -1,42 -17,63 -10,14 -25,26 -47,31 -37,7 -71,-2 -116,42 -46,46 -34,86 -43,118 -10,39 -42,64 -91,64l-367 0c-31,0 -53,-7 -71,-26 -21,-22 -22,-35 -22,-71l0 -696zm-56 -6l0 708c0,83 59,146 142,146l384 0c200,0 360,-162 360,-367l0 -487c0,-82 -58,-146 -142,-146l-600 0c-86,0 -144,63 -144,146z" />
                                    <path fill="currentColor" d="M256 499l374 0c47,0 46,-54 -3,-54l-368 0c-49,0 -50,54 -3,54z" />
                                    <path fill="currentColor" d="M256 332l374 0c22,0 36,-7 33,-30 -2,-21 -17,-24 -40,-24l-360 0c-23,0 -38,3 -40,24 -3,23 11,30 33,30z" />
                                    <path fill="currentColor" d="M256 664l263 0c51,0 43,-53 -3,-53l-253 0c-53,0 -56,53 -7,53z" />
                                </g>
                            </g>
                        </svg>
                        <span>Quotes</span>
                    </li>
                    <li class="splide__slide menu-item" id="append-nav-mempelai">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="9.94mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 994 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_680963040">
                                    <path fill="currentColor" d="M214 933c0,-36 2,-78 0,-112 -1,-18 -10,-28 -20,-36 -243,-212 -144,-627 188,-713 239,-61 481,69 545,321 33,129 -18,267 -80,344 -36,43 -66,72 -119,105 -104,62 -246,79 -364,41 -74,-25 -64,9 -150,50zm246 -932c-268,16 -493,253 -456,548 13,102 63,186 125,255 33,37 27,5 27,99 -1,42 -4,83 32,95 32,10 66,-20 88,-33 59,-37 43,-35 84,-22 30,9 75,16 109,17 89,4 139,-5 216,-32 86,-30 167,-99 215,-165 18,-24 34,-49 48,-78 32,-68 46,-123 46,-208 0,-212 -141,-378 -314,-445 -67,-26 -140,-36 -220,-31z" />
                                    <path fill="currentColor" d="M277 472c-17,6 -30,21 -19,42 9,18 30,15 54,15 48,0 392,3 408,-1 17,-5 29,-26 17,-44 -11,-16 -33,-14 -55,-14 -63,0 -390,-3 -405,2z" />
                                    <path fill="currentColor" d="M274 343c-16,7 -28,24 -15,43 11,17 32,13 56,13 45,0 90,0 136,0 35,1 256,4 271,-1 16,-6 26,-29 14,-45 -12,-16 -33,-13 -56,-13 -61,1 -394,-2 -406,3z" />
                                    <path fill="currentColor" d="M491 602c-22,9 -25,39 -7,51 14,10 57,6 76,6 26,0 146,3 161,-2 22,-6 27,-37 10,-50 -14,-11 -58,-7 -78,-7 -25,0 -149,-2 -162,2z" />
                                </g>
                            </g>
                        </svg>
                        <span>Guest</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="13.2546mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1325 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <style>
                                .fil1 {
                                    fill-rule: nonzero
                                }
                            </style>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_370662888">
                                    <path fill="currentColor" d="M461 1000c62,-24 228,-164 271,-206 109,-108 266,-316 149,-487 -98,-143 -335,-132 -406,53 -6,16 -7,36 -14,48 -8,-16 -6,-45 -32,-87 -136,-220 -482,-93 -422,180 40,180 235,357 382,454 17,11 54,38 72,45zm-203 -696c42,0 80,20 108,52 -23,-16 -50,-25 -79,-25 -84,0 -152,79 -152,176 0,48 17,92 44,123 -44,-30 -73,-86 -73,-150 0,-97 68,-176 152,-176z" />
                                    <path class="fil1" fill="currentColor" d="M871 735c22,-12 54,-34 87,-59 59,-45 122,-100 145,-122 57,-57 130,-145 158,-238 19,-62 18,-126 -22,-184 -22,-32 -51,-54 -85,-67 -28,-11 -60,-15 -91,-12 -30,4 -60,14 -86,32 -30,21 -55,51 -71,92 -2,5 -3,11 -5,17 -2,11 -4,21 -9,30 -7,13 -22,18 -35,11 -6,-2 -10,-7 -12,-13 -4,-7 -6,-15 -8,-24 -3,-14 -7,-32 -21,-54 -35,-57 -87,-85 -140,-91 -32,-3 -65,2 -94,14 -30,12 -57,31 -77,55 -25,31 -41,71 -41,119 -9,8 -21,13 -33,11l0 0c-7,-1 -14,-4 -19,-9 -1,-61 20,-113 53,-154 26,-32 60,-56 97,-71 38,-15 79,-21 119,-17 68,7 135,44 180,116 3,5 6,10 8,15 20,-39 47,-68 78,-90 34,-23 72,-36 111,-40 39,-5 79,1 115,15 43,16 81,45 109,85 51,74 52,154 29,230 -31,102 -110,197 -171,259 -24,23 -90,80 -151,127 -34,26 -68,49 -93,63 -9,-3 -15,-8 -20,-15l0 0c-6,-9 -7,-20 -5,-31z" />
                                </g>
                            </g>
                        </svg>
                        <span>Couple</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="10.87mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1087 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_680965752">
                                    <path fill="currentColor" d="M58 357l972 0c0,178 -1,355 0,533 0,64 -25,55 -82,55l-805 0c-55,0 -86,12 -86,-51 1,-179 1,-358 1,-537zm109 -196c2,75 32,95 106,95 75,0 103,-22 106,-96l329 -1c3,76 32,97 106,97 75,0 104,-21 106,-96 127,-16 117,18 109,142l-971 0c-1,-21 -3,-108 2,-124 10,-27 74,-23 107,-17zm597 -72c0,-27 6,-34 33,-34 68,0 67,-4 67,55 0,61 9,91 -33,91 -78,0 -67,10 -67,-112zm-541 0c0,-28 6,-34 34,-34 37,0 22,-3 59,4 4,10 8,18 8,34 0,79 10,108 -34,108 -47,0 -67,6 -67,-32l0 -80zm-56 12c-70,11 -117,-13 -152,44 -22,36 -13,136 -13,187 0,56 -4,571 2,601 15,64 62,67 135,67l805 0c171,0 141,-49 141,-261 0,-134 0,-268 0,-403 0,-48 8,-154 -11,-188 -32,-58 -84,-38 -154,-47 0,-78 -28,-101 -106,-101 -77,0 -105,23 -105,102l-331 1c0,-78 -28,-103 -105,-103 -78,0 -106,22 -106,101z" />
                                    <path fill="currentColor" d="M714 828c-16,-9 -102,-81 -110,-97 -14,-31 2,-60 27,-67 38,-10 56,20 83,21 24,0 43,-29 78,-22 28,6 46,38 31,68 -7,16 -96,90 -109,97zm-95 -218c-99,29 -93,138 -20,198 30,25 62,44 86,73 37,46 66,-12 94,-35 45,-37 150,-98 87,-196 -19,-29 -65,-55 -116,-39 -32,10 -23,23 -57,7 -25,-12 -48,-15 -74,-8z" />
                                    <path fill="currentColor" d="M117 450c0,148 -19,127 131,127 48,0 36,-36 36,-127 0,-52 -29,-40 -124,-40 -33,0 -43,6 -43,40z" />
                                    <path fill="currentColor" d="M736 450c0,149 -22,127 133,127 46,0 34,-45 34,-127 0,-52 -36,-40 -127,-40 -31,0 -40,7 -40,40z" />
                                    <path fill="currentColor" d="M530 450c0,149 -21,127 133,127 46,0 33,-51 33,-127 0,-52 -35,-40 -125,-40 -32,0 -41,7 -41,40z" />
                                    <path fill="currentColor" d="M324 651c0,35 -5,93 6,124 28,10 87,6 124,6 49,0 36,-40 36,-130 0,-49 -40,-37 -129,-37 -30,0 -37,6 -37,37z" />
                                    <path fill="currentColor" d="M338 574l143 2c15,-28 9,-81 9,-118 0,-62 -23,-48 -83,-48 -55,0 -84,-14 -84,48 0,35 -10,95 15,116z" />
                                    <path fill="currentColor" d="M134 778l135 2c24,-23 15,-84 15,-121 0,-58 -33,-45 -86,-45 -56,0 -81,-14 -81,49 0,38 -10,97 17,115z" />
                                </g>
                            </g>
                        </svg>
                        <span>Event</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="12.33mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1233 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <path fill="currentColor" d="M623 577c36,-51 115,-100 185,-107 99,-9 171,2 235,51 51,39 97,88 118,173 10,38 17,88 -3,122 -31,53 -89,44 -154,44l-264 0c-5,-72 -6,-106 -34,-166 -11,-25 -22,-44 -36,-64 -15,-20 -39,-43 -47,-53zm87 -341c-9,-89 60,-160 138,-167 89,-8 163,61 168,140 7,88 -58,159 -138,166 -90,8 -161,-59 -168,-139zm56 178c-31,19 -91,13 -190,124 -9,-1 -40,-19 -53,-25 -14,-7 -48,-16 -57,-23 85,-35 142,-147 115,-251 -22,-88 -104,-164 -215,-163 -108,2 -189,79 -210,169 -20,90 17,179 89,228 8,6 21,12 28,18 -99,33 -170,78 -223,170 -46,78 -84,229 -2,298 46,38 81,40 156,40 66,0 132,0 197,0 62,0 136,3 197,-1 29,-2 55,-12 74,-25 10,-7 19,-15 26,-23 3,-3 8,-8 11,-12 4,-6 6,-10 11,-16 104,-4 217,-1 322,0 61,0 89,-3 131,-32 113,-80 43,-272 -19,-348 -25,-31 -49,-54 -84,-78 -53,-36 -101,-45 -111,-52 73,-33 146,-132 117,-247 -58,-224 -373,-216 -426,0 -22,92 16,180 87,231 9,6 23,13 29,18z" />
                            </g>
                        </svg>
                        <span>Special Guest</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="7.06mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 706 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_683094048">
                                    <path fill="currentColor" d="M169 385c-19,-111 60,-200 152,-215 245,-39 301,327 63,367 -114,19 -200,-59 -215,-152zm118 -379c-198,39 -360,246 -253,479 42,91 104,171 157,239l91 107c36,37 57,102 112,33 65,-82 102,-115 178,-219 44,-60 119,-170 132,-267 28,-219 -191,-416 -417,-372z" />
                                    <path fill="currentColor" d="M451 849c-81,107 -118,104 -199,0 -59,4 -192,49 -119,105 80,61 356,61 437,0 75,-57 -62,-99 -119,-105z" />
                                </g>
                            </g>
                        </svg>
                        <span>Location</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="9.75mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 975 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_680948376">
                                    <path fill="currentColor" d="M502 635c14,-6 55,-40 65,-50 27,-26 65,-77 37,-118 -24,-35 -82,-32 -99,13 -2,3 -2,8 -3,11 -3,-4 -2,-11 -8,-21 -33,-53 -118,-22 -103,44 10,44 57,87 93,110 4,3 13,10 18,11z" />
                                    <g>
                                        <circle fill="currentColor" cx="911" cy="509" r="64" />
                                        <circle fill="currentColor" cx="790" cy="791" r="72" />
                                        <circle fill="currentColor" cx="504" cy="920" r="80" />
                                        <circle fill="currentColor" cx="210" cy="807" r="89" />
                                        <circle fill="currentColor" cx="97" cy="521" r="97" />
                                        <circle fill="currentColor" cx="218" cy="226" r="105" />
                                        <circle fill="currentColor" cx="496" cy="113" r="113" />
                                        <circle fill="currentColor" cx="785" cy="233" r="121" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Story</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="11.3998mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1140 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_609469232">
                                    <path fill="currentColor" d="M63 787c38,-23 148,-110 197,-145 72,-51 90,-5 159,52 15,13 28,24 45,41 91,87 138,81 235,23 38,-23 72,-41 109,-64 22,-12 95,-60 114,-59l0 244c-1,27 -8,42 -30,52 -22,11 -575,6 -647,6 -151,0 -183,18 -182,-66 0,-28 -1,-56 0,-84zm0 -84c-3,-108 0,-255 0,-367 0,-38 13,-68 53,-68l743 0c39,0 63,30 63,68 0,57 2,170 -2,220l-212 124c-164,95 -112,75 -307,-87 -98,-81 -165,-8 -233,39 -18,13 -85,67 -105,71zm921 98c-6,-93 6,-464 -3,-504 -8,-41 -47,-76 -87,-86 -41,-11 -586,-3 -680,-5 -2,-17 5,-88 9,-105 8,-32 33,-44 72,-39l622 72c214,24 161,1 136,277l-35 312c-4,25 -4,80 -34,78zm-984 -469l0 555c0,73 43,113 116,113l743 0c41,0 69,-12 92,-33 28,-27 30,-47 35,-96 43,-19 64,-21 83,-69 14,-34 58,-475 68,-554 16,-113 -29,-163 -140,-169 -79,-4 -186,-24 -277,-32 -47,-4 -97,-12 -144,-15 -70,-4 -197,-28 -279,-31 -56,-3 -84,3 -114,41 -30,38 -19,76 -31,127 -9,42 10,37 -40,38 -68,0 -112,49 -112,125z" />
                                    <path fill="currentColor" d="M627 493c-36,68 -133,15 -100,-52 31,-62 136,-14 100,52zm-90 -137c-162,75 -50,276 80,225 99,-37 108,-164 23,-215 -21,-12 -70,-26 -103,-10z" />
                                </g>
                            </g>
                        </svg>
                        <span>Gallery</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="10.02mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1002 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <path fill="currentColor" d="M141 301c146,0 297,0 449,0 102,0 78,0 78,266 0,72 -9,66 -78,66 -154,1 -307,0 -461,1 -76,0 -60,-19 -60,-173 0,-160 -16,-160 72,-160zm595 210l-1 -88c14,-10 157,-92 184,-75 24,19 15,81 15,119 0,134 12,151 -112,89 -29,-14 -61,-27 -86,-45zm-368 -354c20,38 13,44 43,75l-85 2c30,-33 22,-39 42,-77zm69 -6c-20,-93 113,-114 129,-32 18,91 -112,110 -129,32zm-222 -78c82,-32 122,96 44,123 -43,15 -77,-10 -86,-38 -16,-48 11,-74 42,-85zm-71 159c-33,5 -119,-7 -139,78 -9,36 -3,171 -3,218 0,215 66,165 267,173l-110 140c-46,58 -111,116 -80,147 16,17 32,16 49,-1 39,-39 211,-286 240,-286 26,0 204,246 238,283 8,9 8,13 24,15 18,2 20,-3 27,-11 31,-31 -37,-93 -80,-147 -18,-23 -35,-45 -54,-68 -18,-23 -44,-51 -55,-72 139,-6 249,37 268,-111 54,17 125,82 192,66 83,-21 73,-104 73,-189 0,-34 4,-93 -5,-123 -9,-30 -37,-57 -69,-65 -64,-17 -140,47 -192,65 -7,-120 -90,-105 -143,-112 116,-120 -24,-284 -153,-216 -53,27 -46,49 -71,94 -24,-43 -16,-63 -67,-92 -38,-22 -94,-22 -132,0 -82,47 -84,154 -25,214z" />
                            </g>
                        </svg>
                        <span>Video Streaming</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="10mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1000 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_683069848">
                                    <path fill="currentColor" d="M897 492c0,164 -90,302 -224,366 -261,123 -564,-60 -569,-352 -5,-223 175,-399 390,-402 217,-4 403,174 403,388zm-448 -489c-260,28 -479,257 -446,554 21,191 153,351 330,415 70,25 147,33 227,25 253,-27 469,-263 437,-553 -28,-254 -260,-472 -548,-441z" />
                                    <path fill="currentColor" d="M533 531c72,26 58,115 -1,139l1 -139zm-70 -107c-56,-26 -24,-80 -14,-89 14,-12 -1,-1 14,-8l0 97zm-1 -171c-124,26 -142,209 0,248l1 176c-44,-5 -56,-31 -91,-26 -47,15 -23,85 88,96 7,30 0,61 35,63 38,3 37,-33 37,-66 63,-17 115,-66 119,-144 5,-108 -94,-129 -118,-146l-1 -134c17,5 83,56 87,-7 2,-36 -51,-57 -87,-65 -1,-32 0,-35 -18,-55 -51,-9 -50,17 -52,60z" />
                                </g>
                            </g>
                        </svg>
                        <span>Wallet</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="10.25mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1025 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <path fill="currentColor" d="M553 465l335 1 5 0 0 5c6,93 4,203 2,305 0,31 -1,61 -1,90 0,59 -18,66 -71,66 -8,0 -16,-1 -25,-1 -14,0 -29,-1 -48,-1l-58 0c-46,0 -93,0 -140,1l-5 0 0 -5 1 -456 0 -5 5 0zm-81 466c-48,-1 -95,-1 -143,-1 -23,0 -47,0 -60,0 -15,0 -28,1 -41,2 -10,0 -20,1 -29,1 -42,0 -68,-9 -68,-67 0,-33 -1,-67 -2,-102 -1,-99 -3,-204 3,-294l0 -5 5 0 336 0 5 0 0 5 -1 456 0 5 -5 0zm80 -664c17,0 43,-1 73,-1 110,-3 281,-6 319,13l2 1 0 2c8,26 15,53 11,74 -3,22 -17,37 -52,37l-305 0 -48 3 -5 0 0 -5 0 -119 0 -5 5 0zm-424 129c-24,-1 -38,-6 -47,-17l0 0c-8,-10 -11,-26 -10,-50 0,-28 5,-43 16,-52l0 0c11,-9 28,-10 53,-11l333 1 5 0 0 5 0 119 0 5 -5 0 -345 0 0 0zm420 -205c-1,-17 -3,-37 -1,-55 2,-18 7,-35 18,-47 22,-23 45,-26 65,-18 19,8 34,25 41,45 7,20 5,42 -9,59 -17,19 -51,30 -110,20l-3 0 -1 -4zm-76 4c-19,3 -41,4 -61,2 -17,-3 -32,-8 -42,-17 -22,-20 -25,-44 -17,-66l0 0c4,-9 9,-17 16,-24 7,-7 15,-13 24,-17 22,-9 47,-6 68,16 11,12 16,29 18,47 2,18 0,38 -1,55l-1 4 -4 0zm-187 3c-19,0 -39,-1 -58,-2 -80,-3 -156,-6 -199,44 -4,5 -8,11 -12,19 -11,24 -18,60 -15,94 2,35 13,68 38,90 6,5 12,9 20,13l3 1 0 3c0,17 -1,44 -2,78 -3,135 -8,366 17,405 36,57 89,57 167,57l0 0 18 0 500 0c179,0 206,-28 206,-211l0 0c0,-34 -1,-72 -2,-116 -1,-60 -3,-131 -3,-213l0 -3 3 -1c7,-4 14,-8 19,-13 25,-21 36,-54 39,-88 3,-35 -3,-71 -15,-95 -3,-8 -7,-15 -12,-20 -43,-50 -119,-47 -199,-44 -19,1 -39,1 -58,1l-6 0 1 -5c9,-49 6,-88 -6,-118 -10,-27 -28,-46 -49,-58 -21,-12 -46,-17 -72,-16 -31,3 -64,15 -92,37l-4 2 -3 -2c-28,-22 -61,-34 -92,-36 -26,-2 -51,3 -72,15 -22,12 -39,31 -49,57 -12,30 -15,69 -6,119l1 6 -6 0z" />
                            </g>
                        </svg>
                        <span>Gift</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="8.7mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 870 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_680934168">
                                    <path fill="currentColor" d="M662 80l0 -1 -76 -27 0 0c-53,-19 -137,-60 -167,-51 -30,10 -61,24 -91,35l-281 103c-55,19 -45,18 -46,80 0,199 -20,368 102,538 38,54 73,92 123,132 44,36 97,69 160,95 47,20 44,22 93,2 83,-33 131,-68 195,-122 10,-8 27,-26 8,-44 -22,-22 -51,16 -76,35 -39,29 -116,77 -164,91 -18,5 -72,-25 -89,-34 -176,-94 -295,-260 -300,-466 -2,-81 -3,-174 0,-256 41,-8 359,-137 382,-138 7,0 354,127 383,140 0,154 16,313 -42,446 -19,43 28,63 47,22 12,-25 23,-62 31,-91 19,-78 14,-142 15,-222l1 -63 -1 0c0,-138 14,-124 -56,-149 -23,-8 -49,-19 -75,-29l-64 -23c-4,-1 -8,-2 -12,-3z" />
                                    <path fill="currentColor" d="M162 268c14,-8 267,-100 273,-100 9,0 252,90 275,100 2,198 15,279 -93,427 -31,41 -141,131 -180,134 -12,1 -58,-27 -69,-33 -23,-14 -41,-30 -60,-45 -76,-60 -135,-168 -146,-273 -4,-46 -5,-165 0,-210zm261 -152c-87,30 -176,65 -261,96 -21,8 -49,12 -52,35 -4,22 -1,66 -1,91 0,55 -3,120 6,173 18,109 57,163 118,238 33,40 171,148 215,133 37,-13 136,-75 161,-104 20,-24 19,-17 44,-47 124,-152 106,-252 108,-424 1,-90 5,-75 -74,-103 -37,-13 -241,-96 -264,-88z" />
                                    <path fill="currentColor" d="M396 541c-20,-12 -66,-74 -87,-74 -28,0 -29,31 -15,46l81 81c23,22 38,5 51,-9l161 -161c9,-9 37,-28 23,-51 -16,-27 -41,-2 -52,8 -27,28 -52,53 -80,81 -17,17 -65,69 -82,79z" />
                                </g>
                            </g>
                        </svg>
                        <span>Health Protocol</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="10.65mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1065 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_680961576">
                                    <path fill="currentColor" d="M971 954l-877 1c18,-19 330,-239 373,-269 74,-51 90,-26 182,38 37,26 72,50 108,77 30,23 205,141 214,153zm-927 -507c16,3 33,20 47,29l301 211c-24,21 -333,240 -348,245l0 -485zm612 229l182 -117c23,-16 170,-112 183,-114l-1 487c-17,-4 -229,-161 -274,-191 -15,-10 -82,-55 -90,-65zm-225 -17c-22,-10 -210,-144 -235,-162 -41,-28 -46,-21 -46,-53 0,-86 -3,-219 1,-295l763 0 0 313c-18,7 -127,78 -151,94l-146 93c-30,-14 -45,-36 -97,-32 -41,3 -62,26 -89,42zm526 -294c7,3 19,13 23,15l22 21c-10,9 -31,25 -45,28l0 -64zm-896 36c10,-12 32,-28 47,-36l-1 69c-11,-5 -40,-24 -46,-33zm370 -295c12,-15 30,-27 46,-39 15,-12 29,-25 56,-24 33,1 89,50 98,63l-200 0zm626 887c13,-33 6,-314 6,-376 -2,-251 28,-206 -89,-294 -26,-20 -17,-38 -17,-78 -1,-149 12,-139 -57,-139l-190 0c-38,-6 -102,-104 -177,-106 -84,-2 -138,103 -186,106l-190 0c-59,0 -51,0 -49,143 1,69 13,49 -73,118 -26,21 -33,18 -33,64 -1,93 -6,534 5,563 38,9 1023,7 1050,-1z" />
                                    <path fill="currentColor" d="M525 856c-16,-14 -77,-62 -40,-85 20,-10 22,2 39,8 24,-3 23,-16 41,-10 39,11 0,68 -40,87zm-51 -127c-77,33 -39,114 31,164 28,20 40,4 60,-12 24,-19 80,-67 50,-123 -27,-51 -68,-25 -100,-31 -19,-4 -23,-5 -41,2z" />
                                    <path fill="currentColor" d="M291 410c8,26 58,18 84,17l202 0c27,0 79,8 70,-31 -6,-28 -56,-19 -84,-19l-203 0c-21,0 -82,-8 -69,33z" />
                                    <path fill="currentColor" d="M357 303l73 0c22,0 42,0 43,-23 2,-35 -50,-27 -87,-27 -43,0 -95,-10 -96,24 -1,33 41,26 67,26z" />
                                </g>
                            </g>
                        </svg>
                        <span>Guest Book</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="11.49mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1149 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <g id="_616279496">
                                    <path fill="currentColor" d="M927 376c-16,21 -190,192 -215,216 -29,28 -44,44 -72,72 -48,50 -96,94 -144,144 -12,13 -23,22 -36,35 -17,17 -28,24 -36,36 -5,6 -65,69 -74,72 -15,-13 -33,-32 -46,-46 -14,-15 -31,-31 -46,-45 1,-16 5,-30 3,-50 -1,-13 -9,-28 -15,-37 -18,-23 -40,-33 -75,-31 -38,1 -18,11 -67,-36l-46 -45c-6,-7 -3,-3 -6,-10 3,-7 305,-307 338,-341 13,-12 111,-112 116,-113 6,-1 38,17 37,-21 0,-9 -1,-9 0,-18 12,-12 76,-79 84,-82 17,6 56,56 56,56 7,6 37,23 37,41 0,16 -14,55 21,90 30,29 62,22 88,20 11,-1 15,7 23,15 15,15 71,66 75,78zm-190 -262c3,-8 55,-60 61,-63 15,5 76,78 93,90 1,16 -17,56 19,94 34,35 48,21 100,24 7,10 33,34 44,45 12,12 30,31 46,45 -3,7 -452,453 -541,542 -6,6 -30,33 -38,35 -8,-4 -32,-30 -36,-37 5,-10 285,-286 304,-306l51 -51c9,-8 16,-16 25,-25 49,-48 16,-13 52,-13 15,0 15,-5 22,-11 5,-30 -3,-21 -10,-37l19 -21c19,-20 29,-25 28,-54 -1,-28 -26,-44 -54,-72 -15,-16 -28,-27 -41,-40 -11,-11 -25,-35 -51,-24 -10,4 -15,10 -31,6 -59,-13 -28,-80 -28,-81 1,-17 -26,-36 -34,-46zm-38 -38c-25,-18 -43,-64 -89,-47 -18,7 -59,53 -74,68 -117,115 -241,244 -356,355 -22,21 -49,50 -72,72 -15,15 -95,91 -103,107 -11,22 -3,40 9,53 12,13 22,22 35,35 14,14 61,64 73,71 21,12 30,-10 61,-4 15,3 30,20 34,35 7,25 -17,38 -6,58 7,12 57,59 71,73 13,13 40,45 58,47 39,6 52,-18 88,-56 6,-6 13,-14 21,-17 25,13 43,63 89,48 18,-6 60,-53 76,-69 91,-88 190,-191 285,-285 52,-51 99,-99 144,-143 15,-16 97,-93 103,-110 8,-23 -2,-41 -15,-54 -11,-11 -98,-102 -108,-105 -22,-6 -29,18 -60,8 -25,-9 -39,-38 -26,-67 14,-29 -14,-44 -37,-67 -12,-12 -27,-27 -36,-37 -23,-22 -50,-61 -90,-38 -16,10 -60,66 -75,69z" />
                                    <path fill="currentColor" d="M819 467c2,-25 -2,-28 -16,-41 -11,-10 -33,-14 -41,1 -11,23 16,50 36,51 10,0 17,-7 21,-11z" />
                                    <path fill="currentColor" d="M622 289c-5,43 44,65 58,40 10,-18 -6,-32 -15,-40 -19,-18 -29,-8 -43,0z" />
                                    <path fill="currentColor" d="M702 352c-9,5 -12,4 -12,17 -1,11 3,15 8,21 43,44 68,-2 45,-23 -3,-3 -11,-12 -15,-15 -5,-3 -12,-5 -19,-4 -12,2 -4,2 -7,4z" />
                                    <path fill="currentColor" d="M611 261c1,-29 0,-28 -17,-43 -26,-23 -66,6 -24,43 15,13 25,12 41,0z" />
                                </g>
                            </g>
                        </svg>
                        <span>RSVP</span>
                    </li>
                    <li class="splide__slide menu-item">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" xml:space="preserve" width="9.92mm" height="10mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 992 1000" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <path fill="currentColor" d="M497 631c-30,-10 -132,-97 -152,-116 -31,-30 -91,-98 -108,-158 -38,-128 77,-222 185,-185 39,13 45,27 67,48l10 8c26,-50 112,-86 187,-46 51,27 97,98 66,181 -12,34 -31,58 -49,83 -6,9 -8,9 -15,17 -40,48 -139,143 -191,168zm-163 162c13,12 27,34 38,51l75 106c18,26 26,49 46,50 24,1 36,-29 48,-45 14,-19 26,-36 39,-56l77 -107c66,-2 135,0 201,0 164,0 131,-98 131,-270l0 -405c1,-34 -4,-56 -21,-78 -42,-56 -173,-35 -266,-35 -185,0 -435,-7 -606,0 -59,2 -94,44 -95,105 0,71 -4,580 3,608 16,70 73,75 125,75 66,0 139,-3 205,1z" />
                            </g>
                        </svg>
                        <span>Thanks</span>
                    </li>
                </ul>
            </div>
        </div>
        <div style="max-width: 500px; margin: auto; position:fixed; left: 0; right: 0; bottom: 0;">
            <button id="btnMusic" onclick="playMusic()" class="btn btn-music " style="display: none">
                <input type="hidden" value="1">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M18 3a1 1 0 0 0-1.196-.98l-10 2A1 1 0 0 0 6 5v9.114A4.369 4.369 0 0 0 5 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0 0 15 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                </svg>
            </button>
        </div>
        <div id="lightboxWrapper" class="lightbox-wrapper">
            <div class="lightbox-list"></div>
            <a href="#" id="lightboxCloseBtn" class="btn-lightbox">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 0 1 1.414 0L10 8.586l4.293-4.293a1 1 0 1 1 1.414 1.414L11.414 10l4.293 4.293a1 1 0 0 1-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 0 1-1.414-1.414L8.586 10 4.293 5.707a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <div class="lightbox-navigation">
                <a href="#" id="lightboxPrevBtn" class="lightbox-arrow" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7" />
                    </svg>
                </a>
                <a href="#" id="lightboxNextBtn" class="lightbox-arrow" data-index="0">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        <div id="storyModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal" aria-hidden="true" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="height: 100%;">
                    <div class="p-4 p-sm-5 rsvp-form success">
                        <div class="mb-4">
                            <div class="text-center font-accent h4">Story</div>
                        </div>
                        <hr>
                        <div class="story-list">
                            <div class="animate__animated animate__slower">
                                <div class="image-editable">
                                    <img src="<?= baseurl ?>/static/example/images/1.jpg" style="width: 100%; height: 100%; object-fit: cover" draggable="false">
                                </div>
                                <div class="text-center story-content">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity=".4" d="M11.776 21.837a36.258 36.258 0 0 1-6.328-4.957 12.668 12.668 0 0 1-3.03-4.805C1.278 8.535 2.603 4.49 6.3 3.288A6.282 6.282 0 0 1 12.007 4.3a6.291 6.291 0 0 1 5.706-1.012c3.697 1.201 5.03 5.247 3.893 8.787a12.67 12.67 0 0 1-3.013 4.805 36.58 36.58 0 0 1-6.328 4.957l-.25.163-.24-.163Z" fill="currentColor" />
                                        <path d="m12.01 22-.234-.163a36.316 36.316 0 0 1-6.337-4.957 12.667 12.667 0 0 1-3.048-4.805c-1.13-3.54.195-7.586 3.892-8.787a6.296 6.296 0 0 1 5.728 1.023V22ZM18.23 10a.719.719 0 0 1-.517-.278.818.818 0 0 1-.167-.592c.022-.702-.378-1.341-.994-1.59-.391-.107-.628-.53-.53-.948.093-.41.477-.666.864-.573a.384.384 0 0 1 .138.052c1.236.476 2.036 1.755 1.973 3.155a.808.808 0 0 1-.23.56.708.708 0 0 1-.537.213Z" fill="currentColor" />
                                    </svg>
                                    <div style="font-size: 110%"><b>Awal Cerita</b></div>
                                    <div class="mb-2 font-italic">Tahun 2016</div>
                                    <div class="mb-2" style="text-align: center;">Berawal dari teman kuliah bersama-sama
                                        memperjuangkan S1 Teknik Sipil, bertemu pada tahun 2016 hingga selalu bertemu
                                        untuk sesekali makan bersama, lalu menjalin hubungan pacaran 11 November 2017.
                                    </div>
                                </div>
                            </div>
                            <div class="animate__animated animate__slower">
                                <div class="image-editable">
                                    <img src="<?= baseurl ?>/static/example/images/4.jpg" style="width: 100%; height: 100%; object-fit: cover" draggable="false">
                                </div>
                                <div class="text-center story-content">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity=".4" d="M11.776 21.837a36.258 36.258 0 0 1-6.328-4.957 12.668 12.668 0 0 1-3.03-4.805C1.278 8.535 2.603 4.49 6.3 3.288A6.282 6.282 0 0 1 12.007 4.3a6.291 6.291 0 0 1 5.706-1.012c3.697 1.201 5.03 5.247 3.893 8.787a12.67 12.67 0 0 1-3.013 4.805 36.58 36.58 0 0 1-6.328 4.957l-.25.163-.24-.163Z" fill="currentColor" />
                                        <path d="m12.01 22-.234-.163a36.316 36.316 0 0 1-6.337-4.957 12.667 12.667 0 0 1-3.048-4.805c-1.13-3.54.195-7.586 3.892-8.787a6.296 6.296 0 0 1 5.728 1.023V22ZM18.23 10a.719.719 0 0 1-.517-.278.818.818 0 0 1-.167-.592c.022-.702-.378-1.341-.994-1.59-.391-.107-.628-.53-.53-.948.093-.41.477-.666.864-.573a.384.384 0 0 1 .138.052c1.236.476 2.036 1.755 1.973 3.155a.808.808 0 0 1-.23.56.708.708 0 0 1-.537.213Z" fill="currentColor" />
                                    </svg>
                                    <div style="font-size: 110%"><b>Pernikahan</b></div>
                                    <div class="mb-2 font-italic">Tahun 2019 - 2020</div>
                                    <div class="mb-2" style="text-align: center;">Pada tanggal 23 Maret 2019 kami
                                        mengikat diri pada pertunangan dan pada tanggal 29 Oktober 2020 kami pun
                                        mengadakan akad nikah. Alhamdulillah perjalanan ini sampai pada akhirnya,</div>
                                </div>
                            </div>
                            <div class="animate__animated animate__slower">
                                <div class="image-editable">
                                    <img src="<?= baseurl ?>/static/example/images/5.jpg" style="width: 100%; height: 100%; object-fit: cover" draggable="false">
                                </div>
                                <div class="text-center story-content">
                                    <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity=".4" d="M11.776 21.837a36.258 36.258 0 0 1-6.328-4.957 12.668 12.668 0 0 1-3.03-4.805C1.278 8.535 2.603 4.49 6.3 3.288A6.282 6.282 0 0 1 12.007 4.3a6.291 6.291 0 0 1 5.706-1.012c3.697 1.201 5.03 5.247 3.893 8.787a12.67 12.67 0 0 1-3.013 4.805 36.58 36.58 0 0 1-6.328 4.957l-.25.163-.24-.163Z" fill="currentColor" />
                                        <path d="m12.01 22-.234-.163a36.316 36.316 0 0 1-6.337-4.957 12.667 12.667 0 0 1-3.048-4.805c-1.13-3.54.195-7.586 3.892-8.787a6.296 6.296 0 0 1 5.728 1.023V22ZM18.23 10a.719.719 0 0 1-.517-.278.818.818 0 0 1-.167-.592c.022-.702-.378-1.341-.994-1.59-.391-.107-.628-.53-.53-.948.093-.41.477-.666.864-.573a.384.384 0 0 1 .138.052c1.236.476 2.036 1.755 1.973 3.155a.808.808 0 0 1-.23.56.708.708 0 0 1-.537.213Z" fill="currentColor" />
                                    </svg>
                                    <div style="font-size: 110%"><b>Resepsi Pernikahan</b></div>
                                    <div class="mb-2 font-italic">Juni 2020</div>
                                    <div class="mb-2" style="text-align: center;">Kami bisa melakukan acara resepsi yang
                                        insyAllah diadakan pada tanggal 27 Juni 2020.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="rsvpModal" tabindex="-1" role="dialog" aria-labelledby="rsvpModal" aria-hidden="true" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="height: 100%;">
                    <div class="p-4 p-sm-5 rsvp-form success">
                        <div class="mb-4">
                            <div class="text-center font-accent h4">Kirimkan Ucapan</div>
                        </div>
                        <form @submit.prevent="submitAdd">
                            <input type="hidden" v-model="form_add.ref_no" name="ref_no" value="" required>
                            <div class="form-group">
                                <input id="inputName" type="text" v-model="form_add.name" name="name" placeholder="Name..." class="form-control" required maxlength="20">
                            </div>
                            <div class="form-group">
                                <input id="inputPhone" type="text" v-model="form_add.write_as" name="write_as" placeholder="Your Best Friend.. (Optional)" class="form-control" maxlength="20">
                            </div>
                            <div class="form-group">
                                <input id="inputPhone" type="text" v-model="form_add.sosmed" name="sosmed" maxlength="20" placeholder="@socialmedia (Optional)" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea id="inputComment" v-model="form_add.comment" name="comment" rows="3" placeholder="Your Special Message.." class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="mt-4 mb-3 btn btn-primary btn-block"><span>Send</span></button>
                        </form>
                        <hr>
                        <div class="mt-4 comment" id="view_comment">
                            <div class="mb-3">
                                <div class="d-flex">
                                    <img src="https://ui-avatars.com/api/?background=random&amp;color=random&amp;name=Founder" alt="tes" class="avatar rounded-circle" style="height: 30px; width: 30px;">
                                    <div class="ml-2 text-left">
                                        <p class="mb-0">
                                            <b>Founder</b>
                                        </p>
                                        <p class="mb-0">Congratulations to the happy couple! We wish for you all the
                                            happiness your hearts could ever dream of, Happy Weddings!! &#128522;</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex">
                                    <img src="https://ui-avatars.com/api/?background=random&amp;color=random&amp;name=&
                                            Team" alt="tes" class="avatar rounded-circle" style="height: 30px; width: 30px;">
                                    <div class="ml-2 text-left">
                                        <p class="mb-0">
                                            <b>Qondangan &
                                                Team</b>
                                        </p>
                                        <p class="mb-0">Happy Weddings! Thanks for using our platform to your digital
                                            invitation
                                            <a href="https://qondangan.com">Qondangan</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-close">
                        <svg xmlns="http://www.w3.org/2000/svg" height="42px" width="42px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="waterMark" class="mt-5" style="display: none">
            <p class="mb-3 animate__animated animate__fadeInDown animate__slower small">Made with love by <a href="http://teriz.id" target="_blank">Teriz</a>
            </p>
            <div class="mt-2 text-center animate__animated animate__fadeInDown animate__slower">
                <a href="https://qondangan.com" target="_blank" rel="noopener noreferrer">
                    <img style="height: 20px" src="https://s3.ap-southeast-1.wasabisys.com/ajakan/photo/mitra_icon/16687796152658.png">
                </a>
            </div>
        </div>
    </main>
    <div class="modal fade" id="notSupport" tabindex="-1" role="dialog" aria-labelledby="notSupport" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: .8rem;">
                <div class="text-center modal-body justify-content-center align-items-center">
                    <svg width="90" height="90" fill="none">
                        undefined
                        <path d="M36 28.024A18.05 18.05 0 0025.022 39M59.999 28.024A18.05 18.05 0 0170.975 39" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        undefined
                        <ellipse cx="37.5" cy="43.5" rx="4.5" ry="7.5" fill="currentColor" />
                        undefined
                        <ellipse cx="58.5" cy="43.5" rx="4.5" ry="7.5" fill="currentColor" />
                        undefined
                        <path d="M24.673 75.42a9.003 9.003 0 008.879 5.563m-8.88-5.562A8.973 8.973 0 0124 72c0-7.97 9-18 9-18s9 10.03 9 18a9 9 0 01-8.448 8.983m-8.88-5.562C16.919 68.817 12 58.983 12 48c0-19.882 16.118-36 36-36s36 16.118 36 36-16.118 36-36 36a35.877 35.877 0 01-14.448-3.017" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        undefined
                        <path d="M41.997 71.75A14.94 14.94 0 0148 70.5c2.399 0 4.658.56 6.661 1.556a3 3 0 003.999-4.066 12 12 0 00-10.662-6.49 11.955 11.955 0 00-7.974 3.032c1.11 2.37 1.917 4.876 1.972 7.217z" fill="currentColor" />
                    </svg>
                    <h2>Oops!</h2>
                    <h5 class="mb-4"> Browser yang kamu gunakan tidak kompatibel. </h5>
                    <p>Beberapa fungsi undangan ini mungkin tidak dapat berjalan dengan baik. Kami merekomendasikan
                        Chrome. Klik tombol dibawah ini untuk mendownload.</p>
                    <div class="d-flex justify-content-center">undefined<a href="https://apps.apple.com/id/app/google-chrome/id535886823" class="p-1 btn" target="_BLANK">undefined<img src="<?= baseurl ?>/static/example/images/btn_app_store.png" alt="AppStore" height="40px">undefined</a>undefined<a href="https://play.google.com/store/apps/details?id=com.android.chrome&hl=in&gl=US" class="p-1 btn" target="_BLANK">undefined<img src="<?= baseurl ?>/static/example/images/btn_play_store.png" alt="PlayStore" height="40px">undefined</a>undefined</div>
                    undefined
                </div>
                undefined
                <div class="modal-footer">undefined<button class="btn btn-outline-secondary btn-block rounded-pill" onclick="closeModal(notSupport)">Tetap Akses</button>undefined</div>
            </div>
        </div>
    </div>


    <script>
        let sort_mempelai = 'pria';
        let mempelai_is_pria = `
            <div style="width: 100%">
                <div>
                    <div class="image-editable animate__animated animate__fadeInRight animate__slower" style="
                        height: 90px;
                        width: 90px;
                        margin: auto;
                        border-radius: 100%;
                        overflow: hidden;
                        margin-bottom: 20px;
                        ">
                        <img src="<?= baseurl ?>/static/example/images/2.jpg" style="width: 100%;height: 100%;object-fit: cover;">
                    </div>
                    <div class="text-center mb-4 animate__animated animate__fadeInRight animate__slower">
                        <div class="editable font-latin color-accent h4 mb-2">Jessi Choi</div>
                        <div class="editable ">Anak Pertama Dari Bapak Roni dan Ibu Ridha</div>
                                                <div class="d-flex justify-content-center mt-2">
                            <a href="https://instagram.com/null" class="color-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                </svg>
                            </a>
                        </div>
                                            </div>
                    <div class="image-editable animate__animated animate__fadeInLeft animate__slower" style="
                        height: 90px;
                        width: 90px;
                        margin: auto;
                        border-radius: 100%;
                        overflow: hidden;
                        margin-bottom: 20px;
                        ">
                        <img src="<?= baseurl ?>/static/example/images/3.jpg" style="width: 100%;height: 100%;object-fit: cover;">
                    </div>
                    <div class="text-center animate__animated animate__fadeInLeft animate__slower">
                        <div class="editable font-latin color-accent h4 mb-2">Maudy Ayunda</div>
                        <div class="editable">Anak Ketiga Dari Bapak Hendra dan Ibu Yaselin</div>
                                                <div class="d-flex justify-content-center mt-2">
                            <a href="https://instagram.com/null" class="color-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                </svg>
                            </a>
                        </div>
                                            </div> 
                </div>
            </div>`;
        let mempelai_is_wanita = `
            <div style="width: 100%">
                <div>
                    <div class="image-editable animate__animated animate__fadeInLeft animate__slower" style="
                        height: 90px;
                        width: 90px;
                        margin: auto;
                        border-radius: 100%;
                        overflow: hidden;
                        margin-bottom: 20px;
                        ">
                        <img src="<?= baseurl ?>/static/example/images/3.jpg" style="width: 100%;height: 100%;object-fit: cover;">
                    </div>
                    <div class="text-center mb-4 animate__animated animate__fadeInLeft animate__slower">
                        <div class="editable font-latin color-accent h4 mb-2">Maudy Ayunda</div>
                        <div class="editable">Anak Ketiga Dari Bapak Hendra dan Ibu Yaselin</div>
                                                <div class="d-flex justify-content-center mt-2">
                            <a href="https://instagram.com/null" class="color-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                </svg>
                            </a>
                        </div>
                                            </div>
                    <div class="image-editable animate__animated animate__fadeInRight animate__slower" style="
                        height: 90px;
                        width: 90px;
                        margin: auto;
                        border-radius: 100%;
                        overflow: hidden;
                        margin-bottom: 20px;
                        ">
                        <img src="<?= baseurl ?>/static/example/images/2.jpg" style="width: 100%;height: 100%;object-fit: cover;">
                    </div>
                    <div class="text-center animate__animated animate__fadeInRight animate__slower">
                        <div class="editable font-latin color-accent h4 mb-2">Jessi Choi</div>
                        <div class="editable ">Anak Pertama Dari Bapak Roni dan Ibu Ridha</div>
                                                <div class="d-flex justify-content-center mt-2">
                            <a href="https://instagram.com/null" class="color-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                                </svg>
                            </a>
                        </div>
                                          </div>
                </div>
            </div>`;
        document.querySelector("#mempelai-is").innerHTML = (sort_mempelai == 'pria' ? mempelai_is_pria :
            mempelai_is_wanita);
    </script>
    <script type="text/javascript" src="<?= baseurl ?>/static/example/js/jquery.min.js"></script>
    <script src="<?= baseurl ?>/static/example/js/popper.min.js"></script>
    <script src="<?= baseurl ?>/static/example/js/bootstrap.min.js"></script>
    <script src="<?= baseurl ?>/static/example/js/splide.min.js"></script>
    <script src="<?= baseurl ?>/static/example/js/splide-extension-grid.min.js">
    </script>
    <script src="<?= baseurl ?>/static/example/js/api.js" type="text/javascript"></script>
    <script src="<?= baseurl ?>/static/example/js/custom.js"></script>
    <script src="<?= baseurl ?>/static/example/js/axios.min.js"></script>
    <script src="<?= baseurl ?>/static/example/js/vue.min.js"></script>
    <script src="<?= baseurl ?>/static/example/js/toastr.min.js"></script>
    <script src="<?= baseurl ?>/static/example/js/qrcode.min.js"></script>
    <script type="text/javascript" src="<?= baseurl ?>/static/example/js/2.2.1-howler.min.js"></script>
    <script src="<?= baseurl ?>/static/example/js/vue.js"></script>
    <script src="<?= baseurl ?>/static/example/js/axios.min.js"></script>
    <script>
        const browser_allowed = '1';
        var notSupport = document.getElementById('notSupport');
        let ordered_by = "Guest";
        let music_path =
            'https://s3.ap-southeast-1.wasabisys.com/ajakan/music/Elvis Presley - Cant Help Falling In Love With You Saxophone.mp3';
        let order_url = "theme";
        let ref_no = '';
        'use strict';
        var _0x15d1 = ["qrcode", "getElementById", "?", "split", "href", "location", "/", "btoa", "#000000", "#ffffff", "H", "CorrectLevel", "#rsvpModal", "submitAdd", "log", "innerHTML", "view_comment", '<div class="mb-3">\r\n                                <div class="d-flex">\r\n                                    <img src="https://ui-avatars.com/api/?background=random&amp;color=random&amp;name=', "name", "form_add", '" alt="tes" class="avatar rounded-circle" style="height: 30px; width: 30px;">\r\n                                    <div class="ml-2 text-left">\r\n                                        <p class="mb-0">\r\n                                            <b>',
            '</b>\r\n                                            {{-- <span class="ml-1 badge badge-success">Hadir</span> --}}\r\n                                        </p>\r\n                                        <p class="mb-0">', "comment", "<br>\r\n                                            ", "write_as", "<b><small><i>", "</i></small></b><br>", "", "\r\n                                            ", "sosmed", "</i></small></b>", "\r\n                                        </p>\r\n                                        {{-- <small>1 detik yang lalu</small> --}}\r\n                                    </div>\r\n                                </div>\r\n                            </div>",
            "Successfully Send Comment", "success", "then", "/comment/store", "post", "Opera", "indexOf", "userAgent", "OPR", "Edg", "UCBrowser", "display", "style", "none", "MiuiBrowser", "Chrome", "Safari", "Firefox", "MSIE", "documentMode", "writeText", "clipboard", "Successfully copied account number from ", "!", "music", "1", "val", "input", "find", "#btnMusic", "Tess", "to mute", "0", "show", "addClass", ".plyr__control #plyr-mutedx", "hide", "removeClass", ".plyr__control #plyr-volumex", "pause", "to volume",
            "play", "#", "/gift/catalog?to=", "_blank", "open", "click", ".btn-catalog", "display:none;", "attr", "#modalOverlay", ".btn-close", "ready"
        ];
        if (document[_0x15d1[1]](_0x15d1[0])) {
            var qrcode = new QRCode(_0x15d1[0], {
                text: window[_0x15d1[5]][_0x15d1[4]][_0x15d1[3]](_0x15d1[2])[0] + _0x15d1[6] + window[_0x15d1[7]](ordered_by),
                width: 350,
                height: 350,
                colorDark: _0x15d1[8],
                colorLight: _0x15d1[9],
                correctLevel: QRCode[_0x15d1[11]][_0x15d1[10]]
            });
        }
        var vue = new Vue({
            el: _0x15d1[12],
            data: function data() {
                return {
                    form_add: {
                        ref_no: ref_no,
                        name: ordered_by
                    }
                };
            },
            mounted: function mounted() {},
            methods: {
                submitAdd: function dataFromControls() {
                    var _this = this;
                    console[_0x15d1[14]](_0x15d1[13]);
                    axios[_0x15d1[36]](_0x15d1[6] + order_url + _0x15d1[35], this[_0x15d1[19]])[_0x15d1[34]](function(actionPayload) {
                        console[_0x15d1[14]](actionPayload);
                        document[_0x15d1[1]](_0x15d1[16])[_0x15d1[15]] = "" + _0x15d1[17] + _this[_0x15d1[19]][_0x15d1[18]] + _0x15d1[20] + _this[_0x15d1[19]][_0x15d1[18]] + _0x15d1[21] + _this[_0x15d1[19]][_0x15d1[22]] + _0x15d1[23] + (_this[_0x15d1[19]][_0x15d1[24]] ? _0x15d1[25] + _this[_0x15d1[19]][_0x15d1[24]] + _0x15d1[26] : _0x15d1[27]) + _0x15d1[28] + (_this[_0x15d1[19]][_0x15d1[29]] ? _0x15d1[25] + _this[_0x15d1[19]][_0x15d1[29]] + _0x15d1[30] : _0x15d1[27]) + _0x15d1[31] + document[_0x15d1[1]](_0x15d1[16])[_0x15d1[15]] +
                            _0x15d1[27];
                        _this[_0x15d1[19]] = [{
                            name: ordered_by,
                            write_as: _0x15d1[27],
                            sosmed: _0x15d1[27],
                            comment: _0x15d1[27]
                        }];
                        toastr[_0x15d1[33]](_0x15d1[32]);
                    });
                }
            }
        });

        function checkBrowser() {
            if ((navigator[_0x15d1[39]][_0x15d1[38]](_0x15d1[37]) || navigator[_0x15d1[39]][_0x15d1[38]](_0x15d1[40])) != -1) {} else {
                if (navigator[_0x15d1[39]][_0x15d1[38]](_0x15d1[41]) != -1) {} else {
                    if (navigator[_0x15d1[39]][_0x15d1[38]](_0x15d1[42]) != -1) {
                        showModal(notSupport);
                        if (loader) {
                            loader[_0x15d1[44]][_0x15d1[43]] = _0x15d1[45];
                        }
                    } else {
                        if (navigator[_0x15d1[39]][_0x15d1[38]](_0x15d1[46]) != -1) {
                            showModal(notSupport);
                            if (loader) {
                                loader[_0x15d1[44]][_0x15d1[43]] = _0x15d1[45];
                            }
                        } else {
                            if (navigator[_0x15d1[39]][_0x15d1[38]](_0x15d1[47]) != -1) {} else {
                                if (navigator[_0x15d1[39]][_0x15d1[38]](_0x15d1[48]) != -1) {} else {
                                    if (navigator[_0x15d1[39]][_0x15d1[38]](_0x15d1[49]) != -1) {} else {
                                        if (navigator[_0x15d1[39]][_0x15d1[38]](_0x15d1[50]) != -1 || !!document[_0x15d1[51]] == true) {} else {}
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        checkBrowser();

        function copyBank(courseId, canCreateDiscussions) {
            navigator[_0x15d1[53]][_0x15d1[52]](courseId);
            toastr[_0x15d1[33]](_0x15d1[54] + canCreateDiscussions + _0x15d1[55]);
        }
        if (browser_allowed == 1) {
            var sound = new Howl({
                src: [music_path],
                loop: true,
                html5: true
            });
        } else {
            sound = document[_0x15d1[1]](_0x15d1[56]);
        }
        $(_0x15d1[61])[_0x15d1[60]](_0x15d1[59])[_0x15d1[58]](_0x15d1[57]);

        function playMusic() {
            console[_0x15d1[14]](_0x15d1[62]);
            var $realtime = $(_0x15d1[61]);
            if ($realtime[_0x15d1[60]](_0x15d1[59])[_0x15d1[58]]() == _0x15d1[57]) {
                console[_0x15d1[14]](_0x15d1[63]);
                $realtime[_0x15d1[60]](_0x15d1[59])[_0x15d1[58]](_0x15d1[64]);
                $(_0x15d1[67])[_0x15d1[66]](_0x15d1[65]);
                $(_0x15d1[67])[_0x15d1[69]](_0x15d1[68]);
                $(_0x15d1[70])[_0x15d1[66]](_0x15d1[68]);
                $(_0x15d1[70])[_0x15d1[69]](_0x15d1[65]);
                sound[_0x15d1[71]]();
            } else {
                if ($realtime[_0x15d1[60]](_0x15d1[59])[_0x15d1[58]]() == _0x15d1[64]) {
                    console[_0x15d1[14]](_0x15d1[72]);
                    $realtime[_0x15d1[60]](_0x15d1[59])[_0x15d1[58]](_0x15d1[57]);
                    $(_0x15d1[67])[_0x15d1[66]](_0x15d1[68]);
                    $(_0x15d1[67])[_0x15d1[69]](_0x15d1[65]);
                    $(_0x15d1[70])[_0x15d1[66]](_0x15d1[65]);
                    $(_0x15d1[70])[_0x15d1[69]](_0x15d1[68]);
                    sound[_0x15d1[73]]();
                }
            }
        }
        $(_0x15d1[79])[_0x15d1[78]](function() {
            var _0xc37axb = window[_0x15d1[5]][_0x15d1[4]][_0x15d1[3]](_0x15d1[6]);
            var _0xc37axc = _0xc37axb[3][_0x15d1[3]](_0x15d1[74]);
            var _0xc37axd = _0xc37axc[0][_0x15d1[3]](_0x15d1[2]);
            window[_0x15d1[77]](_0xc37axd[0] + _0x15d1[75] + ordered_by, _0x15d1[76]);
        });
        $(document)[_0x15d1[84]](function() {
            $(_0x15d1[83])[_0x15d1[78]](function() {
                $(_0x15d1[82])[_0x15d1[81]](_0x15d1[44], _0x15d1[80]);
            });
        });
    </script>
</body>

</html>
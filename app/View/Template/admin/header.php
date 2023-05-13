<!DOCTYPE html>
<html lang="en">

<head>
    <title>Buat Undangan Online dengan Mudah bersama Qondangan</title>
    <meta charset="utf-8" />
    <meta name="description" content="Qondangan.com menawarkan solusi praktis dan inovatif untuk pembuatan undangan online. Dengan layanan terpercaya dan mudah digunakan, Anda dapat membuat undangan digital yang indah dan berkualitas untuk acara apapun. Gunakan fitur-fitur kami seperti pemilihan desain, pengeditan teks, dan pengiriman undangan secara online untuk menciptakan undangan yang sempurna. Mulailah dengan Qondangan sekarang dan rasakan pengalaman membuat undangan online yang luar biasa." />
    <meta name="keywords" content="undangan online, pembuatan undangan digital, undangan digital indah, layanan undangan online, undangan online terpercaya, pembuatan undangan online mudah, fitur undangan digital, undangan online untuk acara apapun, solusi praktis undangan online, pengeditan undangan online, undangan digital personalisasi, undangan online untuk acara pernikahan, undangan online untuk acara ulang tahun, undangan online untuk acara kantor, undangan online untuk acara keluarga, undangan online berkualitas">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content=" " />
    <meta property="og:url" content=" " />
    <meta property="og:site_name" content=" " />
    <link rel="canonical" href=" " />
    <link rel="shortcut icon" href="<?= baseurl; ?>/static/qondangan.jpg" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="<?= baseurl ?>/static/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= baseurl ?>/static/admin/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= baseurl ?>/static/admin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= baseurl ?>/static/admin/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <style>
        .colours-outer {
            display: flex;
            overflow-y: auto;
            width: 100%
        }

        .colour-group {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px
        }

        .colours-outer .colour-group:first-of-type {
            margin-left: auto
        }

        .colours-outer .colour-group:last-of-type {
            margin-right: auto
        }

        .colour-group .bucket {
            width: auto;
            height: auto;
            padding: 2px;
            margin: 3px
        }

        .colour-group .bucket>input[name=colour] {
            display: none
        }

        .colour-group .bucket>.colour {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            cursor: pointer;
            background-color: var(--design-clr);
            position: relative;
            box-shadow: -1px 1px 6px rgba(0, 0, 0, .2)
        }

        .colour-group .bucket>.colour::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 0 solid var(--wood-clr);
            transition: all .25s ease-in-out
        }

        .colour-group .bucket>input[name=colour]:checked+.colour::before {
            border-width: 3px
        }

        .tox-statusbar__branding {
            display: none !important;
        }

        .pindahin {
            cursor: move;
        }

        #dataUrut.dragging {
            transform: scale(0.90);
        }

        .dataUrut {
            transition: transform 0.2s ease;
        }

        #previewEdit {
            display: none;
            margin-bottom: 20px;
        }

        .tampilinKonten {
            border: 1px solid #111;
            border-radius: 15px;
            padding: 10px;
        }
    </style>
</head>

<body id="kt_body" class="aside-enabled">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
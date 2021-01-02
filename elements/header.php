<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Thibault LAURENCE, Ostéopathe D.O.</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }

            .footer {
                text-align: center;
            }
        }

        .logo {
            max-width: 200px;
        }

        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }

        #map1 {
            height: 100%;
            width: 100%;
        }

        #map2 {
            height: 100%;
            width: 100%;
        }

        #map3 {
            height: 100%;
            width: 100%;
        }

        @media screen and (max-width: 800px) {
            #map3 {
                height: 300px;
                width: 100%;
            }

            #map2 {
                height: 300px;
                width: 100%;
            }

            #map1 {
                height: 300px;
                width: 100%;
            }
        }

        .footer {
            background-color: #E0E0E0;
        }
    </style>
</head>

<body style="background-color: #F3EDE3;">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="<?= $router->generate('home') ?>">Ostéopathe D.O.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item<?= Fonction::activeLink("", $_SERVER['REQUEST_URI']) ?>">
                        <a class="nav-link" href="<?= $router->generate('home') ?>">Accueil</a>
                    </li>
                    <li class="nav-item<?= Fonction::activeLink("ostepathie", $_SERVER['REQUEST_URI']) ?>">
                        <a class="nav-link" href="<?= $router->generate('osteopathie') ?>">Qu'est-ce que l'ostéopathie</a>
                    </li>
                    <li class="nav-item<?= Fonction::activeLink("tarif", $_SERVER['REQUEST_URI']) ?>">
                        <a class="nav-link" href="<?= $router->generate('tarif') ?>">Motifs de consultation</a>
                    </li>
                    <li class="nav-item<?= Fonction::activeLink("contact", $_SERVER['REQUEST_URI']) ?>">
                        <a class="nav-link" href="<?= $router->generate('contact') ?>">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main style="margin-bottom: 9rem !important;" role="main" class="flex-shrink-0">
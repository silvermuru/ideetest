<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDeeTest</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/helpers.css">
</head>
<body>
    <div class="container-custom hero">
        <header class="header">
            <div class="header__title">
                <i class="fa fa-lightbulb-o fa-4x header__icon" aria-hidden="true"></i><h2>iDeeTest</h2>
            </div>
            <div class="header__links">
                <a href="#" class="header__link text-white">Aktiivsed küsitlused</a>
                <a href="#" class="header__link text-white">Preemiapunktid</a>
                <a href="#" class="header__link text-white">Küsi meilt</a>
            </div>
        </header>
        <div class="content">
            <h1 class="hero__title">Sinu arvamus loeb!</h1>
            <h3 class="hero__subtitle">Aita luua uusi teenuseid ja tooteid ning kogu preemiapunkte.<br />Mida rohkem vastad, seda enam võidad.</h3>

            <h4 class="hero__ctasubtitle">Tundub huvitav? Jäta oma e-posti aadress ja oled esimene,<br /> kellele teenuse valmides sellest märku anname!</h4>
            <form action="backend.php" method="post">
                <div class="content__input margin-top-16">
                    <div class="row row--center">
                        <div class="col-sm-3">
                            <div class="text-left">
                                <label for="email" class="form-label">E-post:</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center margin-top-16">
                    <div class="row row--center">
                        <div class="col-sm-3">
                            <?php
                            if (isset($_GET['success'])) {
                                $buttonText = 'Salvestatud!';
                                $buttonColor = 'green';
                            } else {
                                $buttonText = 'Olen käpp!';
                                $buttonColor = 'yellow';
                            }
                            ?>
                            <button type="submit" class="btn btn--<?php echo $buttonColor; ?> btn-block" href="#">
                                <?php echo $buttonText; ?>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="content__body margin-top-32 text-center">
                <h4 class="hero__ctatitle">3 põhjust liitumiseks</h4>
                <div class="row row--center margin-top-32">
                    <div class="content__circle col-sm-4 col-md-2">
                        <div class="content__circle-outer">
                            <div class="content__circle-inner">
                                <div class="content__circle-icon">
                                    <i class="fa fa-cog fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="content__circle-text">
                            Katseta uusi teenuseid või tooteid enne teisi
                        </div>
                    </div>
                    <div class="content__circle col-sm-2 col-md-2">
                        <div class="content__circle-outer">
                            <div class="content__circle-inner">
                                <div class="content__circle-icon">
                                    <i class="fa fa-user-md fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="content__circle-text">
                            Mõjuta teenuse loomist sulle sobivas suunas
                        </div>
                    </div>
                    <div class="content__circle col-sm-2 col-md-2">
                        <div class="content__circle-outer">
                            <div class="content__circle-inner">
                                <div class="content__circle-icon">
                                    <i class="fa fa-star fa-3x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="content__circle-text">
                            Kogu preemiapunkte ja vaheta need auhindade vastu
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="block-container margin-top-64 margin-bottom-64">
            <h2 class="text-center text-big">Kuidas see töötab?</h2>
            <div class="row row--center content__items margin-top-16">
                <div class="content__item col-sm-3">
                    <div class="content__item-wrapper">
                        <h3 class="content__item-title">1. VALI</h3>
                        <div class="content__item-body">
                            Vali endale meelepärane küsitlus või kasutajatest.
                        </div>
                    </div>
                </div>
                <div class="content__item col-sm-3">
                    <div class="content__item-wrapper">
                        <h3 class="content__item-title">2. OSALE</h3>
                        <div class="content__item-body">
                            Vasta küsitlusele või kasutajatestile veebis või kohapeal.
                        </div>
                    </div>
                </div>
                <div class="content__item col-sm-3">
                    <div class="content__item-wrapper">
                        <h3 class="content__item-title">2. VÕIDA</h3>
                        <div class="content__item-body">
                            Kogu preemiapunkte, vaheta need auhindade vastu ning tunne rõõmu parematest teenusest.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid container--tests">
        <div class="margin-top-64 margin-bottom-64">
            <h2 class="text-big text-white text-center">Aktiivsed testid</h2>
            <div class="margin-bottom-32 text-center content__item-body">
                Vali meelepärane küsitlus või kasutajatest
            </div>
            <div class="row row--center margin-top-16">
                <div class="col-sm-4 col-md-2">
                    <div class="card">
                        <input type="radio" id="input-1" name="test" class="card__input">
                        <label for="input-1" class="card__label">
                            <a href="tests.html" class="card__link">
                                <div class="card__upper text-center">
                                    <h3 class="card__upper-title">Tagasiside iDeeTestile</h3>
                                    <h4 class="card__upper-subtitle">Kuidas kommenteerid iDeetesti teenust?</h4>
                                </div>
                                <div class="card__lower">
                                    <h2 class="card__lower-title">5 punkti</h2>
                                </div>
                            </a>
                        </label>
                    </div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="card">
                        <input type="radio" id="input-2" name="test" class="card__input">
                        <label for="input-2" class="card__label">
                            <a href="tests.html" class="card__link">
                                <div class="card__upper text-center">
                                    <h3 class="card__upper-title">Telia TV kasutajatest</h3>
                                    <h4 class="card__upper-subtitle">Tule ja hinda<br /> Telia TV<br /> kasutajamugavust!</h4>
                                </div>
                                <div class="card__lower">
                                    <h2 class="card__lower-title">10 punkti</h2>
                                </div>
                            </a>
                        </label>
                    </div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="card">
                        <input type="radio" id="input-3" name="test" class="card__input">
                        <label for="input-3" class="card__label">
                            <a href="tests.html" class="card__link">
                                <div class="card__upper text-center">
                                    <h3 class="card__upper-title">Telia E-poe menüütest</h3>
                                    <h4 class="card__upper-subtitle">Kas leiad e-poest sind huvitava kauba?</h4>
                                </div>
                                <div class="card__lower">
                                    <h2 class="card__lower-title">15 punkti</h2>
                                </div>
                            </a>
                        </label>
                    </div>
                </div>
            </div>
            <h4 class="hero__subtitle margin-top-64">30 preemiapunkti täitumisel saad need vahetada Telia e-poe kinkekaardi vastu väärtuses 30 €.</h4>
        </div>
    </div>

    <div class="container-fluid container--footer">
        <div class="margin-top-64 margin-bottom-64">
            <h2 class="text-big text-white text-center">Leiad meid</h2>
            <div class="info__items margin-top-32 margin-bottom-96 col-xs-9 col-xs-offset-3 no-padding">
                <div class="info__item col-xs-8">
                    <a class="info__circle" href="#">
                        <div class="info__icon">
                            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a class="info__circle" href="#">
                        <div class="info__icon">
                            <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a class="info__circle" href="#">
                        <div class="info__icon">
                            <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a class="info__circle" href="#">
                        <div class="info__icon">
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a class="info__circle" href="#">
                        <div class="info__icon">
                            <i class="fa fa-google fa-2x" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a class="info__circle" href="#">
                        <div class="info__icon">
                            <i class="fa fa-youtube fa-2x" aria-hidden="true"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.js"integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>

<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= App\Configuration::APP_NAME ?></title>
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
    <script src="<?= $link->asset('js/script.js') ?>"></script>
</head>
<body>
<div class="page-shell">
    <header class="site-header">
        <a class="brand" href="<?= $link->url('home.index') ?>">
            <strong>Real</strong><span>Estate</span>
        </a>

        <nav class="main-nav">
            <a href="<?= $link->url('home.index') ?>">Buy</a>
            <a href="#">Sell</a>
            <a href="#">Rent</a>
        </nav>

        <div class="header-actions">
            <a class="primary-button"
               href="<?= $link->url('property.create') ?>">
                + Add Listing
            </a>
            <div class="avatar">U</div>
        </div>
    </header>

    <?= $contentHTML ?>

    <footer class="site-footer">
        <section class="footer-column footer-intro">
            <h3>RealEstate</h3>

            <p>
                Jednoduchá platforma na prehliadanie
                a správu ponúk nehnuteľností.
            </p>

        </section>

        <section class="footer-column">
            <h3>Navigácia</h3>
            <a href="<?= $link->url('home.index') ?>">Buy</a>
            <a href="#">Sell</a>
            <a href="#">Rent</a>

        </section>

        <section class="footer-column">
            <h3>Môj účet</h3>

            <a href="#">Prihlásenie</a>
            <a href="#">Registrácia</a>
            <a href="#">Moje ponuky</a>
        </section>

        <section class="footer-column">
            <h3>Kontakt</h3>

            <p>info@realestate.sk</p>
            <p>+421 900 000 000</p>
        </section>
    </footer>
</div>
</body>
</html>

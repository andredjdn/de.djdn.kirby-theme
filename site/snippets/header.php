<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'de' ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover,minimal-ui">

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="djdn.de">

    <meta name="msapplication-config" content="<?= url('assets/xml/ieconfig.xml') ?>" />

    <title><?= $site->title()->html() ?> / <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="keywords" content="<?= $site->keywords()->html() ?>" />

    <meta name="geo.region" content="DE-NW" />
    <meta name="geo.placename" content="Essen" />
    <meta name="geo.position" content="51.47892;6.90373" />
    <meta name="ICBM" content="51.47892, 6.90373" />

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?= url('blog/feed') ?>" />

    <link rel="shortcut icon" href="<?= url('assets/images/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?= url('assets/images/favicon.ico') ?>" type="image/x-icon" />

    <link rel="icon" sizes="192x192" href="<?= url('assets/images/icon-192x192.png') ?>" />
    <link rel="manifest" href="<?= url('assets/json/manifest.json') ?>">

    <link rel="apple-touch-icon" size="114x114" href="<?= url('assets/images/apple-touch-icon-114x114.png') ?>" />
    <link rel="apple-touch-icon" size="180x180" href="<?= url('assets/images/apple-touch-icon-180x180.png') ?>" />
    <link rel="mask-icon" href="<?= url('assets/images/mask-icon.svg') ?>" color="#444444">

    <?= css('assets/css/normalize.min.css') ?>
    
    <?= css('assets/css/djdn.min.css') ?>

</head>
<body<?= ($page->isHomePage()) ? ' class="home"' : '' ?>>
<header>
    <div id="menubar">
        <a href="/" class="image-link"><img src="<?= url('assets/images/logo.svg') ?>" alt="<?= $site->title()->html() ?>" id="logo" /></a>
<?php if(!$page->isHomePage() && $page->hasChildren()) : ?>
        <span><a href="#"><?php echo html($page->title()); ?></a></span>
<?php endif; ?>
        <a id="menu-button" href="#">
<?= file_get_contents('assets/images/menu-icon.svg'); ?>

        </a>
    </div>

<?php snippet('menu') ?>

</header>
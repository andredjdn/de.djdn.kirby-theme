<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'de' ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover">

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
    <link rel="apple-touch-icon" href="<?= url('assets/images/apple-touch-icon.png') ?>" />

    <?= css('assets/css/normalize.css') ?>
    <?= css('assets/css/djdn.css') ?>

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
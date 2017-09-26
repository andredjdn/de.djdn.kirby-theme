<?php snippet('header') ?>

<main>
    <section id="page">  
        <article id="contact">

<?php snippet('pagecoverimage', $page) ?>

            <header class="wrap">
                <h1><?= $page->title()->html() ?></h1>      
                <div class="intro text">
<?= $page->intro()->kirbytext() ?>
                </div>
            </header>
            <div class="wrap">
                <h2>Kontaktmöglichkeiten</h2>
                <ul>
<?php foreach($page->contactoptions()->toStructure() as $item): ?>
                    <li class="<?= $item->level()->html() ?>">
                        <h3><?= kirbytextsans($item->title()) ?></h3>
                        <?php if ($item->link() != ''): ?>
                        <a href="<?= $item->link()->html() ?>"><?= $item->content()->kirbytext() ?></a>
<?php else: ?>
<?= $item->content()->kirbytext() ?>
<?php endif ?>
                    </li>
<?php endforeach ?>
                </ul>
            </div>
        </article>
    </section>
</main>

<?php snippet('social') ?>
<?php snippet('footer') ?>
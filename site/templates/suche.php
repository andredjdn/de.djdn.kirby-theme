<?php snippet('header') ?>

<main>
    <section id="search" class="wrap">
        <article>
            <header>
                <h1><?= $page->title()->html() ?></h1>
            </header>

<?php snippet('searchform') ?>

        </article>
<?php if($query): ?>
        <h2><?= $results->count() ?> Suchergebnis<?php if($results->count() > 1) { echo "se"; } ?> zu <i><?= esc($query) ?></i></h2>
<?php if ($results->count()): ?>
        <ul>
<?php foreach($results as $result): ?>
            <li>
                <time datetime="<?= $result->date('c') ?>"><?= $result->date('d.m.Y') ?></time>
                <h3><a href="<?= $result->url(); ?>"><?= $result->title()->html() ?></a></h3>
            </li>
<?php endforeach ?>
      </ul>
<?php else: ?>
<?= $page->noresult()->kirbytext() ?>
<?php endif ?>
<?php else: ?>
<?= $page->noquery()->kirbytext() ?>
<?php endif ?>
    </section>
</main>

<?php snippet('social') ?>
<?php snippet('footer') ?>
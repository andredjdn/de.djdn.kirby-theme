<?php snippet('header') ?>

<main>
    <section id="article">
        <article class="<?= str_replace('.', '-', $page->template()) ?>">
            <header class="wrap">
                <time datetime="<?= $page->date('c') ?>" itemprop="published"><?= $page->date('d.m.Y') ?></time>
                <h2 class="ext"><a href="<?= $page->link() ?>"><?= $page->title()->html() ?></a></h2>
            </header>
<?php snippet('coverimage', $page) ?>
            <div class="wrap text">
<?= $page->text()->kirbytext()->footnotes() ?>
            </div>
        </article>
    </section>
</main>

<?php snippet('social') ?>
<?php snippet('footer') ?>
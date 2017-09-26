<?php snippet('header') ?>

<main>
    <section id="article">
        <article class="<?= str_replace('.', '-', $page->template()) ?>">
            <header class="wrap">
                <time datetime="<?= $page->date('c') ?>" itemprop="published"><?= $page->date('d.m.Y') ?></time>
                <?php if($page->template() == 'article.link'): ?>
                <h2 class="ext"><a href="<?= $page->link() ?>"><?= $page->title()->html() ?></a></h2>
                <?php else: ?>
                <h2><?= $page->title()->html() ?></h2>
                <?php endif ?>
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
<?php snippet('header') ?>

<main>
    <section id="article">
        <article class="<?= str_replace('.', '-', $page->template()) ?>">
            <header class="wrap">
                <time datetime="<?= $page->date('c') ?>" itemprop="published"><?= $page->date('d.m.Y') ?></time>
                <h2><?= $page->title()->html() ?></h2>
            </header>
        
<?php snippet('coverimage', $page) ?>
        
            <div class="wrap text">
                <blockquote lang="<?= $page->lang() ?>">
                    <?= $page->text()->kirbytext()->footnotes(['bibliography' => false]) ?>
                    <cite><?= $page->by() ?></cite>
                </blockquote>
<?= KirbyFootnotes::bibliography($page->text()) ?>
            </div>
        </article>
    </section>
</main>

<?php snippet('social') ?>
<?php snippet('footer') ?>
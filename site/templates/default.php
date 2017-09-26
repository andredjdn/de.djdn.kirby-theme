<?php snippet('header') ?>

<main>
    <section id="page"<?php if($page->coverimage()->toFile()) { echo ' class="cover"'; } ?>>
        <article>
            <?php snippet('pagecoverimage', $page) ?>
            <header class="wrap">
                <h1><?= $page->title()->html() ?></h1>
            </header>
            <div class="text wrap">
<?= $page->text()->kirbytext()->footnotes() ?>
            </div>
        </article>
    </section>
</main>

<?php snippet('social') ?>
<?php snippet('footer') ?>
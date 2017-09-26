<?php snippet('header') ?>

<main>
    <section id="blog">
        <h6 class="hidden">Blog</h6>
<?php if($articles->count()): ?>
<?php foreach($articles as $article): ?>
        <article class="<?= str_replace('.', '-', $article->template()) ?>">
            <header class="wrap">
                <time datetime="<?= $article->date('c') ?>"><?= $article->date('d.m.Y') ?></time>
<?php if($article->template() == 'article.link'): ?>
                <h2 class="ext"><a href="<?= $article->link() ?>"><?= $article->title()->html() ?></a></h2>
<?php else: ?>
                <h2><a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a></h2>
<?php endif ?>
            </header>

<?php snippet('coverimage', $article) ?>

<?php if($article->template() == 'article.quote'): ?>
            <div class="wrap text">
                <blockquote lang="<?= $article->lang() ?>">
<?= $article->text()->kirbytext() ?>
                    <cite><?= $article->by() ?></cite>
                </blockquote>
            </div>
<?php else: ?>
            <div class="wrap text">
<?= $article->text()->kirbytext()->footnotes(false) ?>
            </div>
<?php endif ?>
            <footer class="wrap">
                <a href="<?= $article->url() ?>" class="permalink" title="Permalink">&infin; Permalink</a>
                <hr />
            </footer>
        </article>

<?php endforeach ?>
<?php else: ?>
        <p class="text">:(</p>
<?php endif ?>
    </section>

<?php snippet('pagination') ?>

</main>

<?php snippet('social') ?>
<?php snippet('footer') ?>
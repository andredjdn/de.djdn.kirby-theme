<?php 
$articles = page('blog')->children()->visible()->flip();
if(isset($limit)) $articles = $articles->limit($limit);
?>
<section id="teaser" class="wrap">
    <h2>Neu im Blog</h2>
    <ul>
<?php foreach($articles as $article): ?>
        <li>
            <time datetime="<?= $article->date('c') ?>"><?= $article->date('d.m.Y') ?></time>
            <h3><a href="<?= $article->url(); ?>"><?= $article->title()->html() ?></a></h3>
        </li>
<?php endforeach; ?>
    </ul>
</section>
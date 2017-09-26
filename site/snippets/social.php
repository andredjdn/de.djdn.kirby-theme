<section id="social">
    <h6 class="hidden">Socialmedia</h6>
    <ul class="wrap">
<?php foreach(page('social')->channels()->toStructure() as $channel): ?>
        <li>
            <a href="<?= $channel->url()->html() ?>" title="<?= $channel->linktext()->html() ?>" class="<?= $channel->style()->html() ?>"><?= $channel->title()->html() ?></a>
        </li>
<?php endforeach ?>
    </ul>
</section>
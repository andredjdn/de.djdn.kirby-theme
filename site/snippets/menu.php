<nav id="menu">
    <div class="wrap">
        <ul>
<?php foreach($pages->visible() as $item): ?>
            <li>
                <a href="<?= $item->url() ?>" class="<?= r($item->isOpen(), 'active') ?>"><?= $item->title()->html() ?></a>
            </li>
<?php endforeach ?>
        </ul>
    </div>
</nav>
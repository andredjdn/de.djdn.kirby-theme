<?php if($pagination->hasPages()): ?>
<section id="pagination">
    <h6 class="hidden">Seitennavigation</h6>
    <nav class="wrap">
        <ul>
            <li class="prev">
<?php if($pagination->hasPrevPage()): ?>
                <a href="<?= $pagination->prevPageURL() ?>" rel="prev" title="neuere Artikel">&larr;&nbsp;vor</a>
<?php endif ?>
            </li>
            <li class="next">
<?php if($pagination->hasNextPage()): ?>
                <a href="<?= $pagination->nextPageURL() ?>" rel="next" title="ältere Artikel">zurück&nbsp;&rarr;</a>
<?php endif ?>
            </li>
        </ul>
    </nav>
</section>
<?php endif ?>
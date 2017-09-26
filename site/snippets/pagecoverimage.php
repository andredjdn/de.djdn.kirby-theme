<?php if($image = $item->coverimage()->toFile()): ?>
<figure class="pagecoverimage">
    <img src="<?= $image->url() ?>" alt="<?= $image->alternate()->text()->html() ?>" title="<?= $image->alternate()->text()->html() ?>" />
</figure>
<?php endif ?>
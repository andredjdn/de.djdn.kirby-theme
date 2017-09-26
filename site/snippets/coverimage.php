<?php if($image = $item->coverimage()->toFile()): ?>
  <figure class="wrap">
    <img src="<?= $image->url() ?>" alt="<?= $image->alternate()->text()->html() ?>" title="<?= $image->alternate()->text()->html() ?>" />
    <figcaption>
        <?= $image->caption()->html() ?>

        <?php if($image->copyrightlink() != '' && $image->copyright() != ''): ?>
        <span class="copyright">&copy; <a href="<?= $image->copyrightlink()->text() ?>"><?= $image->copyright()->html() ?></a></span>
        <?php elseif($image->copyright() != ''): ?>
        <span class="copyright">&copy; <?= $image->copyright()->html() ?></span>
        <?php endif; ?>

        <?php if($image->licenselink() != '' && $image->license() != ''): ?>
        (<span class="license"><a href="<?= $image->licenselink()->text() ?>"><?= $image->license()->html() ?></a></span>)
        <?php elseif($image->license() != ''): ?>
        (<span class="license"><?= $image->license()->html() ?></span>)
        <?php endif; ?>
    </figcaption>
  </figure>
<?php endif ?>
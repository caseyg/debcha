<hr style="border-color: <?= $page->color(); ?>">
<section class="excerpt" style="color: <?= $page->color(); ?>">
  <div class="citation">
    <?= $data->date_text() ?>: <a href="<?= $data->link() ?>"><strong><?= $data->title() ?></a></strong>
  </div>
  <blockquote class="mt-3" style="color: <?= $page->color(); ?>; border-color: <?= $page->color(); ?>;">
    <?= $data->text() ?>
  </blockquote>
</section>

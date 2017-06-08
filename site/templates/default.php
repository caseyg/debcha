<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-12">
      <h3 class="heading--border"><?php echo $page->dates() ?></h3>
      <h1><?php echo $page->title() ?></h1>
      <?php echo $page->subtitle() ?>
      <?php echo $page->text()->kt() ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

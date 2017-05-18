<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="tags col-md-3 text-md-right">
      <?php foreach ($page->tags()->split($separator = ',') as $t): ?>
        <span class="text-hide symbol ml-md-3 mr-3 mr-md-0 <?php echo strtolower($t) ?>" title="<?php echo $t ?>"><?php echo $t ?></span>
      <?php endforeach; ?>
    </div>
    <div class="col-md-9">
      <h3 class="heading--border"><?php echo $page->dates() ?></h3>
      <h1><?php echo $page->title() ?></h1>
      <?php echo $page->subtitle() ?>
      <?php echo $page->text()->kt() ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

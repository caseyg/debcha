<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-12">
      <h3 class="heading--border"><?php echo $page->dates() ?></h3>
      <h1><?php echo $page->title() ?></h1>
      <h2><?php echo $page->subtitle() ?></h2>

      <?php foreach($page->builder()->toStructure() as $section): ?>
        <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
      <?php endforeach ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

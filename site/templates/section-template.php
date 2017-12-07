<?php snippet('header') ?>
<div class="container-fluid project-heading">
  <div class="container py-3">
    <div class="row py-3">
      <div class="col-12">
        <h1 class="heading--project p-3"><?php echo $page->title() ?></h1>
        <?php if ($page->subtitle()->isNotEmpty()): ?>
          <span class="arrow">&darr;</span>
          <h2 class="p-3"><?php echo $page->subtitle() ?></h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="container my-3">
  <div class="row my-3">
    <div class="col-12 col-md-8">
      <?php if ($page->text()->isNotEmpty()): ?>
        <?php echo $page->text()->kt() ?>
      <?php endif; ?>

      <?php foreach($page->builder()->toStructure() as $section): ?>
        <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
      <?php endforeach ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

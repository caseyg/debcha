<?php snippet('header') ?>
<div class="container-fluid" style="background: <?php echo $page->color() ?>;">
  <?php snippet('nav') ?>
  <div class="container py-3">
    <div class="row py-3">
      <div class="col">
        <?php $sections = $site->find("sections")->children()->visible(); ?>
        <?php foreach ($sections as $section): ?>
            <a href="<?php echo $section->url() ?>" <?php if($page->title() == $section->title()): ?>class="active"<?php endif; ?>>
              <?= $section->title() ?>
            </a> <?php if ($section->title() != $sections->last()->title()): ?> /<?php endif; ?>
        <?php endforeach; ?>
        <hr>
        <h1 class="pt-3" style="font-weight:900;"><?php echo $page->title()->kirbytextRaw() ?></h1>
        <h2 class="pb-3" style="font-weight:100;"><?php echo $page->subtitle()->kirbytextRaw() ?></h2>
      </div>
    </div>
  </div>
</div>
<div class="container my-3">

  <?php foreach($page->builder()->toStructure() as $section): ?>
    <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
  <?php endforeach ?>

</div>

<div class="container-fluid" style="background: <?php echo $page->color() ?>;">
  <div class="container py-3">
    <div class="row py-3">
      <div class="col">
        <?php foreach ($site->find("sections")->children()->visible() as $section): ?>
            <a href="<?php echo $section->url() ?>" <?php if($page->title() == $section->title()): ?>class="active"<?php endif; ?>>
              <?= $section->title() ?>
            </a> /
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

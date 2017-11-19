<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-12">

      <div class="waypoint__marker" style="background-color:<?php echo $page->color() ?>;">
        <div class="waypoint__hole"></div>
      </div>

      <h1><?php echo $page->title() ?></h1>
      <h2><?php echo $page->subtitle() ?></h2>

      <?php if ($page->text()->isNotEmpty()): ?>
        <?php echo $page->text()->kt() ?>
      <?php endif; ?>

      <?php foreach($page->builder()->toStructure() as $section): ?>
        <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
      <?php endforeach ?>

      <?php if ($page->tags()->isNotEmpty()): ?>
        <?php foreach ($page->tags()->split($separator = ',') as $t): ?>
          <a href="<?php echo url($page->parent()->uri() . '/' . url::paramsToString(['tag' => $t])) ?>">
            #<?php echo html($t) ?>
          </a>
        <?php endforeach; ?>
      <?php endif; ?>
      <div class="row">
        <?php foreach ($page->siblings()->visible()->flip() as $waypoint): ?>
          <a class="col text-center" href="<?php echo $waypoint->url() ?>" style="color:<?php echo $waypoint->color() ?>;">
            <div style="background-color:<?php echo $waypoint->color() ?>;" class="waypoint__marker waypoint__marker--small">
              <div class="waypoint__hole"></div>
            </div>
            <?php echo $waypoint->title() ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

<?php snippet('header') ?>
<div class="container-fluid" style="background: <?php echo $page->color() ?>;">
  <?php snippet('nav') ?>
  <div class="container py-3">
    <div class="row py-3">
      <div class="col-12 col-md-8 offset-md-2">
        <h1 class="pt-3" style="font-weight:900;color:#fff;"><?php echo $page->title()->kirbytextRaw() ?></h1>
        <h2 class="pb-3" style="font-weight:100;color:#fff;"><?php echo $page->subtitle()->kirbytextRaw() ?></h2>
        <hr style="border-color:#fff;">
      </div>
    </div>
  </div>
</div>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-12 col-md-8 offset-md-2">
      <?php if ($page->text()->isNotEmpty()): ?>
        <?php echo $page->text()->kt() ?>
      <?php endif; ?>

      <?php foreach($page->builder()->toStructure() as $section): ?>
        <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
      <?php endforeach ?>
    </div>
  </div>

  <hr>

  <div class="row nav--page">
    <div class="col">
      <?php if($page->hasNextVisible()): ?>
        <a href="<?php echo $page->nextVisible()->url() ?>">
          <small>&larr; Previous Project</small><br>
          <?php echo $page->nextVisible()->title() ?>
        </a>
      <?php endif ?>    </div>
    <div class="col text-center"><small><a href="/projects">&uarr; Back to Projects</a></small></div>
    <div class="col text-right">
      <?php if($page->hasPrevVisible()): ?>
        <a href="<?php echo $page->prevVisible()->url() ?>">
          <small>&rarr; Next Project</small><br>
          <?php echo $page->prevVisible()->title() ?>
        </a>
      <?php endif ?>
    </div>
  </div>
<!--
  <hr>

  <div class="row">
    <div class="col">
      <h3>Section</h3>
      <?php foreach ($page->sections()->toStructure() as $section): ?>
        <a href="<?php echo $pages->find("Materials Science")->url() ?>"><?php $section ?></a>
      <?php endforeach; ?>
    </div>
    <div class="col">
      <h3>Tags</h3>
      <?php foreach ($page->tags()->split($separator = ',') as $t): ?>
        <a class="text-muted mr-1 p-1" style="border:1px solid darkgray;" href="<?php echo url($page->url() . '/' . url::paramsToString(['tag' => $t])) ?>">
          #<?php echo html($t) ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>
-->
<?php snippet('footer') ?>

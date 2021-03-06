<?php snippet('header') ?>

<?php snippet('nav') ?>

<div class="container-fluid project__banner" style="background-color: <?= $page->color() ?>; background-image: <?php if($page->bannerbackground()->isNotEmpty()): ?>url('<?php echo $page->bannerbackground()->toFile()->url(); ?>'), url('<?php echo $page->bannerforeground()->toFile()->url(); ?>')<?php endif; ?>;">
  <div class="container">
    <div class="title">
      <h1 class="project__title" style="text-shadow: 3px 3px 2px  <?= $page->color() ?>;"><?php echo $page->title()->kirbytextRaw() ?></h1>
      <h2 class="project__subtitle" style="text-shadow: 3px 3px 2px  <?= $page->color() ?>;"><?php echo $page->subtitle()->kirbytextRaw() ?></h2>
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
</div>
<?php snippet('footer') ?>

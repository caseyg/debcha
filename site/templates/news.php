<?php snippet('header') ?>

<div class="container py-3">
  <div class="row py-3">
    <div class="col-12">
      <h1 class="pt-3"><?php echo $page->title()->kirbytextRaw() ?></h1>
      <p class="lead pb-3"><?php echo $page->date('F j, Y', 'dates') ?></p>
      <hr>
    </div>
  </div>
</div>

<div class="container my-3">
  <div class="row my-3">
    <div class="lead col-12 col-sm-10 offset-sm-1 col-lg-8 offset-lg-2">
      <?php if ($page->image()): ?>
        <figure>
          <img src="<?php echo $page->image()->url() ?>" alt="<?php echo $page->image()->caption() ?> <?php if ($page->image()->credit()): ?>(<?php echo $page->image()->credit() ?>)<?php endif; ?>">
          <?php if ($page->image()->caption() or $page->image()->credit()): ?>
            <figcaption>
              <?php if ($page->image()->credit()->isNotEmpty()): ?>
                <small class="d-block text-right"><?php echo $page->image()->credit()->kt() ?></small>
              <?php endif; ?>
              <?php echo $page->image()->caption()->kt() ?>
            </figcaption>
          <?php endif; ?>
        </figure>
      <?php endif; ?>

      <?php if ($page->text()->isNotEmpty()): ?>
        <?php echo $page->text()->kt() ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="container py-3">
  <div class="row py-3">
    <div class="col-12 text-center">
      <?php if ($page->tags()->isNotEmpty()): ?>
        <hr>
        <small>More posts tagged:
          <?php foreach ($page->tags()->split($separator = ',') as $t): ?>
            <a class="mr-1" href="<?php echo url($page->parent()->uri() . '/' . url::paramsToString(['tag' => $t])) ?>">
              #<?php echo html($t) ?>
            </a>
          <?php endforeach; ?>
        </small>
      <?php endif; ?>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php if($page->hasNextVisible()): ?>
        <a href="<?php echo $page->nextVisible()->url() ?>">
          <small>&larr; Previous Post</small><br>
          <?php echo $page->nextVisible()->title() ?>
        </a>
      <?php endif ?>    </div>
    <div class="col text-center"><small><a href="/news">&uarr; Back to News</a></small></div>
    <div class="col text-right">
      <?php if($page->hasPrevVisible()): ?>
        <a href="<?php echo $page->prevVisible()->url() ?>">
          <small>&rarr; Next Post</small><br>
          <?php echo $page->prevVisible()->title() ?>
        </a>
      <?php endif ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-12">
      <h2>News</h2>
      <ul class="list-unstyled">
        <?php foreach ($page->children() as $p): ?>
          <li class="mb-4">
              <h2>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
              </h2>
              <?php echo $p->dates() ?>
              <?php if ($p->image()->isNotEmpty()): ?>
                <figure>
                  <img src="<?php echo $p->image()->url() ?>" class="img-fluid">
                </figure>
              <?php endif; ?>
              <?php echo $p->text()->kt() ?>
              <?php foreach ($p->tags()->split($separator = ',') as $t): ?>
                <span class="ml-3 <?php echo strtolower($t) ?>" title="<?php echo $t ?>">#<?php echo $t ?></span>
              <?php endforeach; ?>
              <?php echo $p->subtitle() ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

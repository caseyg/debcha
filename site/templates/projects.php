<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-6">
      <h2>Projects</h2>
      <ul class="list-unstyled">
        <?php foreach ($page->children() as $p): ?>
          <li class="mb-4">
              <h2>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
              </h2>
              <?php if ($p->tags()->isNotEmpty()): ?>
              <?php foreach ($p->tags()->split($separator = ',') as $t): ?>
                <span class="ml-3 <?php echo strtolower($t) ?>" title="<?php echo $t ?>">#<?php echo $t ?></span>
              <?php endforeach; ?>
            <?php endif; ?>
            <?php if ($p->subtitle()->isNotEmpty()): ?>              
              <?php echo $p->subtitle() ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

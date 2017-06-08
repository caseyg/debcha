<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-6">
      <h2><?php echo $page->title() ?></h2>
      <ul class="list-unstyled">
        <?php foreach ($page->children() as $p): ?>
          <li class="mb-4">
              <a href="<?php echo $p->url() ?>">
                <h3><?php echo $p->title() ?></h3>
                <?php if ($p->subtitle()->isNotEmpty()): ?>
                  <h4><?php echo $p->subtitle() ?></h4>
                <?php endif; ?>
              </a>

              <?php if ($p->tags()->isNotEmpty()): ?>
                <?php foreach ($p->tags()->split($separator = ',') as $t): ?>
                  <a href="<?php echo url($page->url() . '/' . url::paramsToString(['tag' => $t])) ?>">
                    #<?php echo html($t) ?>
                  </a>
                <?php endforeach; ?>
              <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

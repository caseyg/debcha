<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="container py-3">
  <div class="row py-3">
    <div class="col-12">
      <h1 class="pt-3"><?php echo $page->title() ?></h1>

      <hr>

      <?php if ($tag = param('tag')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <a class="close" href="/projects">
            <span aria-hidden="true">&times;</span>
          </a>
          Viewing <?php echo html($projects->count()) ?> project(s) tagged "<?php echo html($tag) ?>"
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>


<div class="container my-3">
  <div class="row my-3">
    <div class="col">
      <div class="card-columns">
        <?php foreach ($projects as $p): ?>
          <div class="card mb-3">
            <div class="card-block">
                <?php if($p->disc()->isNotEmpty()): ?>
                  <a href="<?php echo $p->url() ?>">
                    <figure class="icon">
                      <img class="icon__disc" src="<?php echo $p->disc()->toFile()->url(); ?>">
                      <img class="icon__background" src="<?php echo $p->background()->toFile()->url(); ?>">
                      <img class="icon__foreground" src="<?php echo $p->foreground()->toFile()->url(); ?>">
                    </figure>
                  </a>
                <?php endif; ?>
<!--
                <h4 class="card-title pt-3 mb-1"><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></h4>
                <?php if ($p->subtitle()->isNotEmpty()): ?>
                  <p class="card-text"><?php echo $p->subtitle() ?></p>
                <?php endif; ?>
-->
<!--
              <?php if ($p->tags()->isNotEmpty()): ?>
                <p class="card-text pb-1">
                  <small>
                    <?php foreach ($p->tags()->split($separator = ',') as $t): ?>
                      <a class="text-muted mr-1 p-1" style="border:1px solid darkgray;" href="<?php echo url($page->url() . '/' . url::paramsToString(['tag' => $t])) ?>">
                        #<?php echo html($t) ?>
                      </a>
                    <?php endforeach; ?>
                  </small>
                </p>
              <?php endif; ?>
-->
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <?php if ($tag = param('tag')): ?>
        <?php if ($news->count() > 0): ?>
          <hr>
          <h3 class="mb-4">Related News</h3>
          <ul>
            <?php foreach ($news as $p): ?>
              <li><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>, <?php if ($p->dates()->isNotEmpty()): ?><?php echo $p->date('F j, Y', 'dates') ?><?php endif; ?></li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

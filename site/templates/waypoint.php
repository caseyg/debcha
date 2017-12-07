<?php snippet('header') ?>

    <div class="container my-3 text-center">
      <div class="row my-3">
        <div class="col-12">

          <div class="waypoint__marker">
            &darr;
          </div>

          <h1><?php echo $page->title() ?></h1>
          <h2><?php echo $page->subtitle() ?></h2>
        </div>
      </div>
      <div class="row">
        <?php if ($page->text()->isNotEmpty()): ?>
          <div class="lead col-md-8 offset-md-2">
            <?php echo $page->text()->kt() ?>

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
          </div>
        <?php endif; ?>
      </div>
      <div class="row">
        <?php if($page->hasNextVisible()): ?>
          <a class="col text-center" href="<?php echo $page->nextVisible()->url() ?>" style="color:<?php echo $page->nextVisible()->color() ?>;">
            <div style="background-color:<?php echo $page->nextVisible()->color() ?>;" class="waypoint__marker waypoint__marker--small">
              &darr;
            </div>
            <?php echo $page->nextVisible()->title() ?>
          </a>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

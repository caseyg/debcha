<?php snippet('header') ?>

    <div class="container my-3 text-center">
      <div class="row my-3">
        <div class="col-12">

          <h1><?php echo $page->title() ?></h1>
          <h2><?php echo $page->subtitle() ?></h2>
        </div>
      </div>
      <div class="row">
          <div class="lead col-md-8 offset-md-2">
            <?php if ($page->text()->isNotEmpty()): ?>
              <?php echo $page->text()->kt() ?>
            <?php endif; ?>
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
      </div>
      <div class="row">
        <?php if($page->hasPrevVisible()): ?>
          <a class="col text-center" href="<?php echo $page->prevVisible()->url() ?>" style="color:<?php echo $page->prevVisible()->color() ?>;">
            <div style="background-color:<?php echo $page->prevVisible()->color() ?>;" class="waypoint__marker waypoint__marker--small">
              &darr;
            </div>
            <?php echo $page->prevVisible()->title() ?>
          </a>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

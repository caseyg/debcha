<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-12">
      <h1>waypoints</h1>
      <div class="row">
        <?php foreach ($page->children()->visible()->flip() as $waypoint): ?>
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

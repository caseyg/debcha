<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-12">
      <h1>Coordinates</h1>
      <div class="row">
        <?php foreach ($page->children()->visible()->flip() as $coordinate): ?>
          <a class="col text-center" href="<?php echo $coordinate->url() ?>" style="color:<?php echo $coordinate->color() ?>;">
            <div style="background-color:<?php echo $coordinate->color() ?>;" class="coordinate__marker coordinate__marker--small">
              <div class="coordinate__hole"></div>
            </div>
            <?php echo $coordinate->title() ?>
          </a>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>

<?php snippet('footer') ?>

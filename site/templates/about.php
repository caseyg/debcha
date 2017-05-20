<?php snippet('header') ?>

<div class="container mt-4">
  <div class="row">
    <div class="col-6">
      <figure>
        <img src="<?php echo $page->portrait()->toFile()->resize('900')->url() ?>" class="img-fluid">
      </figure>
    </div>
    <div class="col-6 lead">
      <?php echo $page->about()->kt() ?>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-12">
      <h2>Intersections</h2>
    </div>
  </div>

</div>
</div>
<?php snippet('footer') ?>

<?php snippet('header') ?>

<div class="container mt-4">
  <div class="row">
    <div class="col-sm-6 lead">
      <?php echo $page->welcome()->kt() ?>
    </div>
<!--    <div class="col-sm-6">
      <?php echo $page->coordinates()->kt() ?>
    </div>-->
  </div>

  <hr>

  <div class="row">
    <div class="col-12">
      <h2>Intersections</h2>
      <ul class="list-unstyled mb-4">
        <?php foreach ($page->intersections()->toStructure() as $i): ?>
          <li>
            <?php if ($i->link()->isNotBlank()): ?>
              <a href="<?php echo $i->link() ?>">
                <?php if ($i->image()->isNotEmpty()): ?>
                  <figure>
                    <img src="<?php echo $i->image()->toFile()->url() ?>" class="img-fluid">
                  </figure>
                <?php endif; ?>
                <?php echo $i->title() ?>
              </a>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <section class="coordinates text-center">
    <h2>Coordinates</h2>
    <?php foreach ($site->find("coordinates")->children()->visible()->limit(1) as $coordinate): ?>
        <a href="<?php echo $coordinate->url() ?>" style="color:<?php echo $coordinate->color() ?>;">
          <div class="coordinate__marker" style="background-color:<?php echo $coordinate->color() ?>;">
            <div class="coordinate__hole"></div>
          </div>
          <?= $coordinate->title() ?>
        </a>
    <?php endforeach; ?>
  </section>

</div>
<?php snippet('footer') ?>

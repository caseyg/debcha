<?php snippet('header') ?>
<section class="home__collage">
  <?php snippet('nav') ?>

  <div class="container py-3">
    <div class="row py-3">
      <div class="col-12">
        <h1 class="pt-3 h3">
          <br><br><br><br><br><br><br>
          <br><br><br>
          <?php echo $page->welcome()->kt() ?>
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="home__sections mt-1">
  <div class="container">
    <div class="row">
      <?php foreach ($site->find("sections")->children()->visible() as $section): ?>
          <div class="col-12 col-md-6 p-3">
            <a href="<?php echo $section->url() ?>" class="h3 card sections__card" style="background-color:<?php echo $section->color() ?>;color:#fff;">
              <?= $section->title() ?>
            </a>

          </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="container my-4 pb-3 text-center">
  <div class="row">
    <div class="col-sm-6">
      <section id="sections" class="text-center">
      </section>
    </div>
    <div class="col-sm-6">
      <section class="waypoints text-center">
        <h2>Waypoints</h2>
        <?php foreach ($site->find("waypoints")->children()->sortBy('dates', 'desc')->visible()->limit(1) as $waypoint): ?>
            <a href="<?php echo $waypoint->url() ?>" style="color:<?php echo $waypoint->color() ?>;">
              <div class="waypoint__marker" style="background-color:<?php echo $waypoint->color() ?>;">
                &darr;
              </div>
              <figure>
                <img src="<?php echo $waypoint->image()->url() ?>" alt="">
              </figure>
              <?= $waypoint->title() ?>
            </a>
        <?php endforeach; ?>
      </section>
    </div>
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

</div>
<?php snippet('footer') ?>

<?php snippet('header') ?>

<div class="container my-4 pb-3 text-center">
    <div class="lead col-sm-6 offset-sm-3">
      <?php echo $page->welcome()->kt() ?>
    </div>

  <hr>

  <div class="row">
    <div class="col">
      <section id="sections" class="text-center">
        <h2>Sections</h2>
          <?php foreach ($site->find("sections")->children()->visible() as $section): ?>
              <a href="<?php echo $section->url() ?>" style="color:<?php echo $section->color() ?>;">
                <?= $section->title() ?>
              </a><br>
          <?php endforeach; ?>
        </ol>
      </section>
    </div>
    <div class="col">
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

  <!--
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
  -->

</div>
<?php snippet('footer') ?>

<?php snippet('header') ?>
<section class="home__collage">
  <?php snippet('nav') ?>

  <div class="container py-3">
    <div class="row py-3">
      <div class="col-12">
        <br><br><br><br><br><br><br>
        <br><br><br>
        <h1>Debbie Chachra</h1>
        <hr>
        <h1 class="pt-3 h3">
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
            <a href="<?php echo $section->url() ?>" class="h3 card sections__card" style="background-color:<?php echo $section->color() ?>;">
              <?= $section->title() ?>
            </a>

          </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="container my-4 pb-3">
  <div class="row">
    <div class="col-sm-6">
      <section class="home__news">
        <h2><a href="/news">News</a></h2>
        <ul class="list-unstyled">
        <?php foreach ($site->find("news")->children()->sortBy('dates', 'desc')->visible()->limit(5) as $news): ?>
          <li class="media mb-1">
            <div class="media-body">
              <h5 class="mt-0 mb-1 pt-3"><a href="<?php echo $news->url() ?>"><?= $news->title() ?></a></h5>
              <?php if ($news->dates()->isNotEmpty()): ?>
                <p class="lead"><?php echo $news->date('F j, Y', 'dates') ?></p>
              <?php endif; ?>
            </div>
            <?php if ($news->image()): ?><img class="ml-3 mb-3 pt-3 img-fluid" src="<?php echo $news->image()->crop(100,100)->url() ?>"><?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
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

<!--  <hr>

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
                      <img src="<?php echo $i->image()->toFile()->crop(500,500)->url() ?>" class="img-fluid rounded-circle">
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

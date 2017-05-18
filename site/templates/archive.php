<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-6">
      <h2>Projects</h2>
      <h3 class="heading--border">Current &amp; Ongoing</h3>
      <ul class="list-unstyled">
        <?php foreach ($page->children()->filterBy('ongoing', '==', 'true') as $p): ?>
          <li class="mb-4">
              <h2>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
                <?php foreach ($p->tags()->split($separator = ',') as $t): ?>
                  <span class="text-hide symbol ml-3 <?php echo strtolower($t) ?>" title="<?php echo $t ?>"><?php echo $t ?></span>
                <?php endforeach; ?>
              </h2>
              <?php echo $p->subtitle() ?>
          </li>
        <?php endforeach; ?>
      </ul>

      <h3 class="heading--border mt-4">Archive</h3>
      <ul class="list-unstyled">
        <?php foreach ($page->children()->filterBy('ongoing', '==', 'false') as $p): ?>
          <li class="mb-4">
              <div class="tags mb-1">
                <?php foreach ($p->tags()->split($separator = ',') as $t): ?>
                  <span class="text-hide symbol mr-3 <?php echo strtolower($t) ?>" title="<?php echo $t ?>"><?php echo $t ?></span>
                <?php endforeach; ?>
              </div>
              <h2><a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a></h2>
              <?php echo $p->subtitle() ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="col-6">
      <h2>Sightings</h2>
      <?php foreach ($site->find('home')->sightings()->toStructure()->filterBy('type', '!=', '')->groupBy('type') as $t => $items): ?>
        <h3 class="heading--border"><?php echo ucwords($t) ?></h3>
        <ul class="list-unstyled mb-4">
            <?php foreach ($items as $s): ?>
              <li>
                <?php if ($s->link()->isNotBlank()): ?>
                  <a href="<?php echo $s->link() ?>"><?php echo $s->title() ?></a>
                <?php else: ?>
                  <?php echo $s->title() ?>
                <?php endif; ?>
                <?php if ($s->affiliation()->isNotBlank()): ?>
                  | <?php echo $s->affiliation() ?>
                <?php endif; ?>
                <?php if ($s->dates()->isNotBlank()): ?>
                  | <?php echo $s->dates() ?>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

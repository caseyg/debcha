<?php snippet('header') ?>

<div class="container mt-4">
  <div class="row">
    <div class="col-sm-6 lead">
      <?php echo $page->welcome()->kt() ?>
    </div>
    <div class="col-sm-6">
      <?php echo $page->coordinates()->kt() ?>
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
              <a href="<?php echo $i->link() ?>"><?php echo $i->title() ?></a>
            <?php else: ?>
              <?php echo $i->title() ?>
            <?php endif; ?>
            <?php if ($i->affiliation()->isNotBlank()): ?>
              | <?php echo $i->affiliation() ?>
            <?php endif; ?>
            <?php if ($i->dates()->isNotBlank()): ?>
              | <?php echo $i->dates() ?>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

</div>
<?php snippet('footer') ?>

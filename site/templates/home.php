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

<?php snippet('header') ?>
<?php snippet('nav') ?>

<section class="home__sections mt-1">
<div class="container my-3">
  <h1><?php echo $page->title() ?></h1>
  <div class="row my-3">
  <?php foreach ($site->find("sections")->children()->visible() as $section): ?>
    <div class="col-12 p-3 m-t-3">
      <a href="<?php echo $section->url() ?>" class="h3 card sections__card" style="background-color:<?php echo $section->color() ?>;">
        <span class-"section__title"><?= $section->title() ?></span>
        <span class="section__subtitle"><?= $section->subtitle() ?></span>
      </a>
    </div>
  <?php endforeach; ?>
  </disv>
</div>
</section>

<?php snippet('footer') ?>

<?php snippet('header') ?>
<?php snippet('nav') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-6">
      <h1><?php echo $page->title() ?></h1>
      <ol>
        <?php foreach ($page->children() as $p): ?>
          <li>
              <h3>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
              </h3>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

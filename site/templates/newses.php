<?php snippet('header') ?>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-sm-8">
        <h2>News</h2>
      <?php if ($tag = param('tag')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <a class="close" href="/news">
            <span aria-hidden="true">&times;</span>
          </a>
          Viewing <?php echo html($news->count()) ?> post(s) tagged "<?php echo html($tag) ?>"
        </div>
      <?php endif; ?>
      <ul class="list-unstyled">
        <?php foreach ($news as $p): ?>
          <li class="mb-4">
              <h2>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
              </h2>
              <?php if ($p->dates()->isNotEmpty()): ?>
                <?php echo $p->dates() ?>
              <?php endif; ?>

              <?php if ($p->image() != null): ?>
                <figure>
                  <img src="<?php echo $p->image()->url() ?>" class="img-fluid">
                </figure>
              <?php endif; ?>

              <?php if ($p->text()->isNotEmpty()): ?>
                <?php echo $p->text()->kt() ?>
              <?php endif; ?>

              <?php if ($p->tags()->isNotEmpty()): ?>
                <?php foreach ($p->tags()->split($separator = ',') as $t): ?>
                  <a href="<?php echo url($page->url() . '/' . url::paramsToString(['tag' => $t])) ?>">
                    #<?php echo html($t) ?>
                  </a>
                <?php endforeach; ?>
              <?php endif; ?>

              <?php if ($p->subtitle()->isNotEmpty()): ?>
                <?php echo $p->subtitle() ?>
              <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="col-sm-4">
      <h3>Tags</h3>
      <ul class="tags">
        <?php foreach($tags as $tag): ?>
        <li>
          <a href="<?php echo url($page->url() . '/' . url::paramsToString(['tag' => $tag])) ?>" class="<?php if ($tag == param('tag')): ?>active<?php endif; ?> ?>">
            <?php echo html($tag) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <nav class="pagination">
        <?php if($pagination->hasPrevPage()): ?>
        <a href="<?php echo $pagination->prevPageUrl() ?>">previous posts</a>
        <?php endif ?>

        <?php if($pagination->hasNextPage()): ?>
        <a href="<?php echo $pagination->nextPageUrl() ?>">next posts</a>
        <?php endif ?>
      </nav>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

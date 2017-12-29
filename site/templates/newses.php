<?php snippet('header') ?>

<div class="container py-3">
  <div class="row py-3">
    <div class="col-12">
      <h1 class="pt-3"><?php echo $page->title() ?></h1>
      <hr>
    </div>
  </div>
</div>

<div class="container my-3">
  <div class="row mb-3">
    <div class="col-sm-7">
      <?php if ($tag = param('tag')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <a class="close" href="/news">
            <span aria-hidden="true">&times;</span>
          </a>
          Viewing <?php echo html($news->count()) ?> post(s) tagged "<?php echo html($tag) ?>"
          <?php if ($projects->count() > 0): ?>
            <hr>
              <h3 class="mb-4 h5">Related Projects</h3>
              <ul class="list-unstyled list-inline">
                <?php foreach ($projects as $p): ?>
                  <li class="list-inline-item">
                    <a class="btn btn-outline" href="<?php echo $p->url() ?>">
                      <?php echo $p->title() ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
          <?php endif; ?>
        </div>
      <?php endif; ?>
        <?php foreach ($news as $p): ?>
          <div class="mb-4">
              <h2>
                <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
              </h2>
              <?php if ($p->dates()->isNotEmpty()): ?>
                <p class="lead"><?php echo $p->date('F j, Y', 'dates') ?></p>
              <?php endif; ?>

              <?php if ($p->image()): ?>
                <figure>
                  <img src="<?php echo $p->image()->url() ?>" alt="<?php echo $p->image()->caption() ?> <?php if ($p->image()->credit()): ?>(<?php echo $p->image()->credit() ?>)<?php endif; ?>">
                  <?php if ($p->image()->caption() or $p->image()->credit()): ?>
                    <figcaption>
                      <?php if ($p->image()->credit()->isNotEmpty()): ?>
                        <small class="d-block text-right"><?php echo $p->image()->credit()->kt() ?></small>
                      <?php endif; ?>
                      <?php echo $p->image()->caption()->kt() ?>
                    </figcaption>
                  <?php endif; ?>
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
          </div>
          <hr class="my-4">
        <?php endforeach; ?>
    </div>
    <div class="col-sm-4 offset-sm-1">
      <p class="lead">Tags</p>
      <ul class="tags list-unstyled">
        <?php foreach($tags as $tag): ?>
        <li>
          <a href="<?php echo url($page->url() . '/' . url::paramsToString(['tag' => $tag])) ?>" class="<?php if ($tag == param('tag')): ?>active<?php endif; ?> ?>">
            #<?php echo html($tag) ?>
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

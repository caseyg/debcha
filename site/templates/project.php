<?php snippet('header') ?>
<div class="container-fluid" style="background: <?php echo $page->color() ?>;">
  <?php snippet('nav') ?>
  <div class="container py-3">
    <div class="row py-3">
      <div class="col-12 col-md-8 offset-md-2">
        <h1 class="pt-3" style="font-weight:900;color:#fff;"><?php echo $page->title()->kirbytextRaw() ?></h1>
        <h2 class="pb-3" style="font-weight:100;color:#fff;"><?php echo $page->subtitle()->kirbytextRaw() ?></h2>
        <hr style="border-color:#fff;">
      </div>
    </div>
  </div>
</div>

<div class="container my-3">
  <div class="row my-3">
    <div class="col-12 col-md-8 offset-md-2">
      <?php if ($page->text()->isNotEmpty()): ?>
        <?php echo $page->text()->kt() ?>
      <?php endif; ?>

      <?php foreach($page->builder()->toStructure() as $section): ?>
        <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
      <?php endforeach ?>
    </div>
  </div>

  <div class="row nav--page">
    <div class="col">
      <?php if($page->hasNextVisible()): ?>
        <a href="<?php echo $page->nextVisible()->url() ?>">
          <small>&larr; Previous Project</small><br>
          <?php echo $page->nextVisible()->title() ?>
        </a>
      <?php endif ?>    </div>
    <div class="col text-center"><small><a href="/projects">&uarr; Back to Projects</a></small></div>
    <div class="col text-right">
      <?php if($page->hasPrevVisible()): ?>
        <a href="<?php echo $page->prevVisible()->url() ?>">
          <small>&rarr; Next Project</small><br>
          <?php echo $page->prevVisible()->title() ?>
        </a>
      <?php endif ?>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <h3 class="table-heading">Sections</h3>
      <table class="sections" style="margin:auto;">
        <?php foreach($pages->find('sections')->children()->visible() as $section): ?>
          <tr>
            <td><?php if(str::contains($page->sections(), $section->title())): ?>
              X
            <?php endif; ?></td>
            <td><a href="<?php echo $section->url() ?>"><?php echo $section->title() ?></a></td>
          </tr>
        <?php endforeach; ?>
        <?php if ($page->tags()->isNotEmpty()): ?>
        <tr>
          <td colspan="2" style="text-align:center; text-transform:none;"><strong>See also, projects tagged:</strong><br>
            <?php foreach ($page->tags()->split($separator = ',') as $t): ?>
              <a href="<?php echo url($page->parent()->uri() . '/' . url::paramsToString(['tag' => $t])) ?>">
                #<?php echo html($t) ?>
              </a>
            <?php endforeach; ?>
          </td>
        </tr>
      <?php endif; ?>
      </table>
    </div>
  </div>
</div>

<?php snippet('footer') ?>

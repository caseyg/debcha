<?php snippet('header') ?>
<div class="container-fluid project-heading">
  <div class="container py-3">
    <div class="row py-3">
      <div class="col-12">
        <h1 class="heading--project p-3"><?php echo $page->title() ?></h1>
        <?php if ($page->subtitle()->isNotEmpty()): ?>
          <span class="arrow">&darr;</span>
          <h2 class="p-3"><?php echo $page->subtitle() ?></h2>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="container my-3">
  <div class="row my-3">
    <div class="col-12 col-md-8">
      <?php if ($page->text()->isNotEmpty()): ?>
        <?php echo $page->text()->kt() ?>
      <?php endif; ?>

      <?php foreach($page->builder()->toStructure() as $section): ?>
        <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
      <?php endforeach ?>
    </div>
    <div class="col-12 col-md-4">
      <h3 class="table-heading">Sections</h3>
      <table class="sections">
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

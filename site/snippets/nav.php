<nav class="container text-right py-3" id="topnav">
  <a href="/" class="nav__title"><strong>Debbie Chachra</strong>, PhD</a>
  <ul class="list-inline">
    <?php foreach($pages->visible() as $p): ?>
    <li class="list-inline-item <?php e($p->isOpen(), 'active') ?>">
      <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?> <?php e($p->isOpen(), '<span class="sr-only">(current)</span>') ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>

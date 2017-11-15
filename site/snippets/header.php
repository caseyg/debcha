<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $page->title() ?> | Deb Chachra</title>
    <meta name="description" content="<?php echo str::unhtml($site->description()) ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <?php echo css('assets/css/index.css') ?>
  </head>
<body id="<?php echo $page->slug() ?>" class="parent-<?php echo $page->parent()->slug() ?>">

<header>
    <nav id="topnav" class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/"><?php echo $site->title() ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <?php foreach($pages->visible() as $p): ?>

          <li class="nav-item <?php e($p->isOpen(), 'active') ?>">
            <a class="nav-link" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?> <?php e($p->isOpen(), '<span class="sr-only">(current)</span>') ?></a>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
    </nav>
</header>

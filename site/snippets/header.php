<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $page->title() ?> | Deb Chachra</title>
    <meta name="description" content="<?php echo str::unhtml($site->description()) ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <?php echo css('assets/css/index.css') ?>
  </head>
<body>

<header>
    <div class="container py-3">
      <div class="row">
        <div class="col-sm-4">
          <h1><a href="/"><?php echo $site->title() ?></a></h1>
        </div>
        <ul class="col-sm-8 nav justify-content-end">
            <?php foreach($pages->visible() as $p): ?>
              <li class="nav-item">
                <a class="nav-link <?php e($p->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
              </li>
            <?php endforeach ?>
        </nav>
      </div>
    </div>
</header>

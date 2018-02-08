<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?php echo $page->title() ?> | Deb Chachra</title>
    <meta name="description" content="<?php echo str::unhtml($site->description()) ?>">
    <?php echo css('/assets/css/bootstrap.min.css') ?>
    <?php echo css('/assets/css/index.css') ?>
  </head>
<body id="<?php echo $page->slug() ?>" class="parent-<?php echo $page->parent()->slug() ?>">

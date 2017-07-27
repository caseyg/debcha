<?php

return function($site, $pages, $page) {

  // fetch the basic set of pages
  $projects = $pages->find('projects')->children()->visible();

  // add the tag filter
  if($tag = param('tag')) {
    $projects = $projects->filterBy('tags', $tag, ',');
  }

  // fetch all tags
  $tags = $pages->find('projects')->children()->visible()->pluck('tags', ',', false);


  // related news

  if($tag = param('tag')) {
    $news = $pages->find('news')->children()->visible()->filterBy('tags', $tag, ',');
  }

  return compact('projects', 'news', 'tags', 'tag');

};

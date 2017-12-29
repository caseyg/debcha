<?php

return function($site, $pages, $page) {

  // fetch the basic set of pages
  $news = $pages->find('news')->children()->visible();

  // add the tag filter
  if($tag = param('tag')) {
    $news = $news->filterBy('tags', $tag, ',');
  }

  // fetch all tags
  $tags = $pages->find('news')->children()->visible()->pluck('tags', ',', true);

  // apply pagination
  $news   = $news->paginate(10);
  $pagination = $news->pagination();

  // related projects

  if($tag = param('tag')) {
    $projects = $pages->find('projects')->children()->visible()->filterBy('tags', $tag, ',');
  }

  return compact('news', 'tags', 'tag', 'pagination', 'projects');

};

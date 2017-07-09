<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

// return function($site, $pages, $page) {
// 
//   $perpage  = $page->perpage()->int();
//   $articles = $page->children()
//                    ->visible()
//                    ->flip()
//                    ->paginate(($perpage >= 1)? $perpage : 5);
// 
//   return [
//     'articles'   => $articles,
//     'pagination' => $articles->pagination()
//   ];
// 
// };

return function($site, $pages, $page) {

  // get all articles and add pagination
  $articles = $page->children()->visible()->sortBy('date', 'desc')->paginate(20);

  // add a tag filter
  if($tag = param('tag')) {
    $articles = $articles->filterBy('tags', '=', urldecode($tag), ',');
  }

  // create a shortcut for pagination
  $pagination = $articles->pagination();

  // pass $articles and $pagination to the template
  return compact('articles', 'pagination');

};
<?php
return function($site, $pages, $page, $kirby) {

  $query   = get('q');
    // Selected fields, search options, stopwords still need to be adjusted!
  $results = $site->find('info', 'howtodo', 'contact')->search($query, ['words' => false], ['minlength' => 3]);
  $resultsPos = $site->index()->listed()->search($query, ['words' => false], ['minlength' => 3], 'title|declaration|implementation|references');
  $resultsPart = $kirby->users()->role('participants')->search($query, 'name');
  
  return [
    'query'   => $query,
    'results' => $results,
    'resultsPos' => $resultsPos,
    'resultsPart' => $resultsPart,
  ];

};



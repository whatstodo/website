<?php
return function($site, $kirby) {

  $query = get('q');
  $results = $site->index()->find('info','howtodo','contact')->search($query);
  $resultsPos = $site->index()->listed()->search($query,'title|declaration|implementation|references|notes');
  $resultsPart = $kirby->users()->role('participants')->search($query,'name');
  
  return [
    'query'   => $query,
    'results' => $results,
    'resultsPos' => $resultsPos,
    'resultsPart' => $resultsPart,
  ];
};

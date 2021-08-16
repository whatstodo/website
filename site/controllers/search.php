<?php

return function ($site, $kirby) {
  $query = get('q');
  $resultsPos = $site
    ->index()
    ->listed()
    ->search($query, 'title|declaration|implementation|references|notes');
  $resultsPart = $kirby
    ->users()
    ->role('participants')
    ->search($query, 'name');

  return [
    'query' => $query,
    'resultsPos' => $resultsPos,
    'resultsPart' => $resultsPart,
  ];
};

// Adjustment in file: kirby/config/components
// Line 230-233 commented out: Result two search words are not splitted
// Line 161: 'minlength' => 1,

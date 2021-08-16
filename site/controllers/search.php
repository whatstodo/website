<?php

return function ($kirby) {
  $query = get('q');

  $positions = search(
    page('positions')->children(),
    $query,
    'title|declaration|implementation|references|notes'
  );

  $participants = $kirby
    ->users()
    ->role('participants')
    ->search($query, 'name');

  return [
    'query' => $query,
    'results' => [
      'positions' => $positions,
      'participants' => $participants,
    ],
    'hasResults' => $positions->isNotEmpty() || $participants->isNotEmpty(),
  ];
};
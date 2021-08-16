<?php

use Kirby\Toolkit\Str;
use Kirby\Toolkit\A;

/**
 * https://forum.getkirby.com/t/how-to-use-search-to-include-multiple-words/2400/43
 */
function search($collection, $query, $params = []) {
  if (is_string($params)) {
    $params = ['fields' => str::split($params, '|')];
  }

  $defaults = [
    'minlength' => 2,
    'fields' => [],
    'words' => false,
    'score' => [],
  ];

  $options = array_merge($defaults, $params);

  if (empty($query)) {
    return $collection->limit(0);
  }

  $results = $collection->filter(function ($page) use ($query, $options) {
    $data = $page->content()->toArray();
    $keys = array_keys($data);

    if (!empty($options['fields'])) {
      $keys = array_intersect($keys, $options['fields']);
    }

    $page->searchHits = 0;
    $page->searchScore = 0;

    foreach ($keys as $key) {
      $score = a::get($options['score'], $key, 1);

      // check for full matches
      if (
        $matches = preg_match_all(
          '!' . preg_quote($query) . '!i',
          $data[$key],
          $r
        )
      ) {
        $page->searchHits += $matches;
        $page->searchScore += $matches * $score;
      }
    }

    return $page->searchHits > 0 ? true : false;
  });

  $results = $results->sortBy('searchScore', SORT_DESC);

  return $results;
}

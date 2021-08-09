<?php
return function($site, $kirby) {

  $query = get('q');
  // Searching in general pages 
  $results = $site->index()->find('info','howtodo','contact')->search($query);
  // Searching in positions
  $resultsPos = $site->index()->listed()->search($query,'title|declaration|implementation|references|notes');
  // Searching in Participants
  $resultsPart = $kirby->users()->role('participants')->search($query,'name');
  
  return [
    'query'   => $query,
    'results' => $results,
    'resultsPos' => $resultsPos,
    'resultsPart' => $resultsPart,
  ];
};

// funtion to display the textarea where the searchterm was found
// Only works on the general pages because it only uses the "text" Field
function getResultText(Kirby\Cms\Field $text, $query) 
{
    if (stripos($text, $query)) {
      $text        = strip_tags($text->kt());
      $startQ      = stripos($text, $query);
      $queryLength = strlen($query);
      $preText     = substr($text, $startQ-150, 150);
      $afterText   = substr($text, $startQ+$queryLength, 150);
      $queryText   = substr($text, stripos($text, $query), $queryLength);
      $text        = '…' . $preText . '<span class="searchterm-highlight">' . $queryText . '</span>' . $afterText . '…';
    } else {
        $text      = $text->kt()->excerpt(250);
    }
    return $text;
}
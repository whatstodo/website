<?php

return [
  'debug' => true,
  'languages' => true,
  'languages.detect' => true,
  // Deactivate Kirbys Cache because of "Kirby Uniform"
  'cache' => [
    'pages' => [
      'active' => false,
      'ignore' => function ($page) {
        return $page->title()->value() === 'Do not cache me';
      },
    ],
  ],
];

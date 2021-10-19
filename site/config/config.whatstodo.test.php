<?php

return [
  'debug' => true,
  'languages' => true,
  'languages.detect' => true,
  'route' => [
    'home' => '/',
  ],
  'email' => [
    'transport' => [
      'type' => 'smtp',
      'host' => 'localhost',
      'port' => 1025,
      'security' => false,
    ],
  ],
];

<?php

return [
  'languages' => true,
  'languages.detect' => true,
  'routes' => [
    [
      'pattern' => 'logout',
      'language' => '*',
      'action' => function () {
        // For the logout we don’t need a real page. A simple URL to send
        // logged-in users to is enough.

        if ($user = kirby()->user()) {
          $user->logout();
        }

        go('login');
      },
    ],
  ],
];
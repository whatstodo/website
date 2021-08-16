<?php
return function ($kirby, $site, $pages, $page) {
  $alert = null;

  if ($kirby->request()->is('POST') && get('submit')) {
    // check the honeypot
    if (empty(get('website')) === false) {
      go($page->url());
      exit();
    }

    $data = [
      'title' => get('title'),
      'declaration' => get('declaration'),
      'implementation' => get('implementation'),
      'references' => get('references'),
      'name' => get('name'),
      'email' => get('email'),
      'comment' => get('comment'),
    ];

    $rules = [
      'title' => ['required', 'maxLength' => 40],
      'declaration' => ['required'],
      'implementation' => ['required'],
      'references' => [],
      'name' => ['required'],
      'email' => ['required', 'email'],
      'comment' => [],
    ];

    $messages = [
      'title' => 'Please enter a text between 3 and 40 characters',
      'declaration' => 'Please enter a declaratin',
      'implementation' => 'Please enter a implementation',
      'references' => '',
      'name' => 'Please enter a valid name',
      'email' => 'Please enter a valid email address',
      'comment' => '',
    ];

    // some of the data is invalid
    if ($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;

      // the data is fine, let's send the email
    } else {
      try {
        $kirby->impersonate('kirby');
        // we store registrations as subpages of the current page
        $addposition = $site->createChild([
          'slug' => date('y-m-d-H-i') . '-' . esc($data['title']),
          'template' => 'position',
          'content' => $data,
          'content' => [
            'title' => esc($data['title']),
            'declaration' => esc($data['declaration']),
            'implementation' => esc($data['implementation']),
            'references' => esc($data['references']),
          ],
        ]);

        if ($addposition) {
          // store referer and name in session
          $kirby->session()->set([
            'referer' => $page->uri(),
            'regName' => esc($data['name']),
          ]);
        }

        // Email mit smtp bei Manitu einrichten.
        // Vorsicht: Beim Testen aus lokaler Testumgebung wird der Manitu Server gesperrt!

        $kirby->email([
          'template' => 'respond',
          'from' => 'position@whatstodo.test',
          'replyTo' => 'position@whatstodo.test',
          'to' => $data['email'],
          'subject' =>
            'Your position "' . esc($data['title']) . '" has arrived',
          'data' => [
            'title' => esc($data['title']),
            'declaration' => esc($data['declaration']),
            'implementation' => esc($data['implementation']),
            'references' => esc($data['references']),
            'name' => esc($data['name']),
            'email' => esc($data['email']),
            'comment' => esc($data['comment']),
          ],
        ]);

        $kirby->email([
          'template' => 'internal',
          'from' => 'noreply@whatstodo.test',
          'replyTo' => $data['email'],
          'to' => 'position@whatstodo.test',
          'subject' => 'New Position:' . esc($data['name']),
          'data' => [
            'title' => esc($data['title']),
            'declaration' => esc($data['declaration']),
            'implementation' => esc($data['implementation']),
            'references' => esc($data['references']),
            'name' => esc($data['name']),
            'email' => esc($data['email']),
            'comment' => esc($data['comment']),
          ],
        ]);

        // Redirect to home
        // go('/');
        //}
      } catch (Exception $error) {
        if (option('debug')):
          $alert['error'] =
            $page->addpositionfail()->kirbytext() . $error->getMessage();
        else:
          $alert['error'] = $page->addpositionfail()->kirbytext();
        endif;
      }

      // no exception occurred, let's send a success message
      if (empty($alert) === true) {
        $success = $page->addpositionsuccess()->kirbytext();
        $data = [];
      }
    }
  }

  return [
    'alert' => $alert,
    'data' => $data ?? false,
    'success' => $success ?? false,
  ];
};

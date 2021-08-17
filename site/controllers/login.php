<?php

use Uniform\Form;

return function ($kirby) {
  // Don't show the login screen to already logged in users.
  if ($kirby->user()) {
    go('/');
  }

  $form = new Form([
    'email' => ['rules' => ['required', 'email']],
    'password' => ['rules' => ['required']],
  ]);

  if ($kirby->request()->is('POST')) {
    $form
      // We don't need spam protection (guards) since this is only a login form.
      ->withoutGuards()
      // By default, uniform uses a `username` field to login the user, in our
      // case the `email` field is the username.
      ->loginAction(['user-field' => 'email']);

    if ($form->success()) {
      // Login was successful, redirect the user to the home page.
      go('/');
    }
  }

  return compact('form');
};

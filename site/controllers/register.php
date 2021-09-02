<?php

require_once __DIR__ . '/../actions/RegisterAction.php';

use Uniform\Form;

return function ($kirby) {
  // Don't show the register screen to already logged in users.
  if (kirby()->user()) {
    go('/');
  }

  $form = new Form([
    'name' => ['rules' => ['required']],
    'website' => ['rules' => ['required']],
    'email' => ['rules' => ['required']],
    'password' => ['rules' => ['required']],
  ]);

  if ($kirby->request()->is('POST')) {
    $form->honeypotGuard(['field' => 'url'])->registerAction();
  }

  return compact('form');
};
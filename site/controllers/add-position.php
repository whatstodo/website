<?php

require_once __DIR__ . '/../actions/SavePositionAction.php';

use Uniform\Form;

return function ($kirby) {
  $form = new Form([
    'title' => [
      'rules' => ['required', 'maxLength' => 40],
      'message' => 'Please enter a text between 3 and 40 characters',
    ],
    'declaration' => [
      'rules' => ['required'],
      'message' => 'Please enter a declaration',
    ],
    'implementation' => [
      'rules' => ['required'],
      'message' => 'Please enter a implementation',
    ],
    'references' => [],
    'name' => [
      'rules' => ['required'],
      'message' => 'Please enter a valid name',
    ],
    'email' => [
      'rules' => ['required', 'email'],
      'message' => 'Please enter a valid email address',
    ],
    'comment' => [],
  ]);

  if ($kirby->request()->is('POST')) {
    $form
      ->savePositionAction()
      ->emailAction([
        'template' => 'respond',
        'from' => 'position@whatstodo.test',
        'replyTo' => 'position@whatstodo.test',
        'to' => $form->data('email'),
        'subject' => 'Your position "{{title}}" has arrived',
      ])
      ->emailAction([
        'template' => 'internal',
        'from' => 'noreply@whatstodo.test',
        'replyTo' => $form->data('email'),
        'to' => 'position@whatstodo.test',
        'subject' => 'New Position: "{{name}}"',
      ]);
  }

  return compact('form');
};
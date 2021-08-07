<?php

use Uniform\Form;

return function ($kirby)
{
    $form = new Form([
        'titel' => [
            'rules' => ['required'],
        ],
        'declaration' => [
            'rules' => ['required'],
        ],
        'implementation' => [
            'rules' => ['required'],
        ],
        'references' => [
            'rules' => ['required'],
        ],
        'comments' => [
            'rules' => ['required'],
        ],
        'name' => [
            'rules' => ['required'],
        ],
        'email' => [
            'rules' => ['required', 'email'],
        ],
        'comment' => [
            'rules' => [],
        ],
    ]);

    if ($kirby->request()->is('POST')) {
        $form->emailAction([
            'to' => 'bela.meiers@posteo.de',
            'from' => 'info@whatstodo.design',
            // Dynamically generate the subject with a template.
            'subject' => 'A new position has arrived: {{titel}}!',
        ]);
    }
    return compact('form');
};





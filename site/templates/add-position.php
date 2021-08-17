<?php snippet('header'); ?>

<h2><?= $page->title() ?></h2>
<div><?= $page->add_position_hint() ?></div>

<?php snippet('form', [
  'form' => $form,
  'submit' => t('submit'),
  'fields' => [
    'title' => ['type' => 'textarea', 'label' => t('add_title')],
    'declaration' => ['type' => 'textarea', 'label' => t('declaration')],
    'implementation' => ['type' => 'textarea', 'label' => t('implementation')],
    'references' => ['type' => 'textarea', 'label' => t('references')],
    'name' => ['type' => 'text', 'label' => t('name')],
    'email' => ['type' => 'email', 'label' => t('email')],
    'comment' => ['type' => 'textarea', 'label' => t('comment')],
  ],
]); ?>

<?php snippet('footer'); ?>

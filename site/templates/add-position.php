<?php snippet('header'); ?>

<h2><?= $page->title() ?></h2>
<?php snippet('hint', ['default' => 'add_position_hint']); ?>

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

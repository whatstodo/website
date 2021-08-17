<?php snippet('header'); ?>

<h1><?= $page->title() ?></h1>

<?php
// When the user couldn't login, uniform stores a (translated) error
// message in the user-field (in our case this is the `email` field).
?>
<?php if ($form->error('email')): ?>
<div><?= $form->error('email')[0] ?></div>
<?php endif; ?>


<?php snippet('form', [
  'form' => $form,
  'honeypot' => false,
  'submit' => t('login'),
  'fields' => [
    'email' => ['type' => 'email', 'label' => t('email')],
    'password' => ['type' => 'password', 'label' => t('password')],
  ],
]); ?>

<?php snippet('footer'); ?>

<?php snippet('header'); ?>

<h1><?= $page->title() ?></h1>

<?php if (
  $registrationErrors = $form->error(Uniform\Actions\RegisterAction::class)
): ?>
  <div><?= $registrationErrors[0] ?></div>
<?php endif; ?>

<?php snippet('form', [
  'form' => $form,
  'submit' => t('register'),
  // Use a different honeypot field, as we're actually using a field called
  // `website` (which is uniforms default honeypot name). If you change the
  // honeypot name make sure to also change it in the controller!
  'honeypotName' => 'url',
  'fields' => [
    'name' => ['type' => 'text', 'label' => t('studio_name')],
    'website' => ['type' => 'text', 'label' => t('website')],
    'email' => ['type' => 'email', 'label' => t('email')],
    'password' => ['type' => 'password', 'label' => t('password')],
  ],
]); ?>

<?php snippet('footer'); ?>

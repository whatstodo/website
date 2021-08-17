<?php snippet('header'); ?>

<h1><?= $page->title() ?></h1>

<?php
// When the user couldn't login, uniform stores a (translated) error
// message in the user-field (in our case this is the `email` field).
?>
<?php if ($form->error('email')): ?>
<div><?= $form->error('email')[0] ?></div>
<?php endif; ?>

<form method="post" action="<?= $page->url() ?>">
  <div class="field">
    <label for="field-email"><?= t('email') ?></label>
    <?php snippet('form/email', [
      'form' => $form,
      'name' => 'email',
      'placeholder' => t('email'),
    ]); ?>
  </div>

  <div class="field">
    <label for="field-password"><?= t('password') ?></label>
    <?php snippet('form/password', [
      'form' => $form,
      'name' => 'password',
      'placeholder' => t('password'),
    ]); ?>
  </div>

  <?php echo csrf_field(); ?>
  <input type="submit" name="login" value="<?= t('login') ?>">
</form>

<?php snippet('footer'); ?>

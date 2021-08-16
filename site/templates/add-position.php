<?php snippet('header'); ?>

<h2><?= $page->title() ?></h2>
<div><?= $page->add_position_hint() ?></div>

<form action="<?= $page->url() ?>" method="POST">
  <div class="field">
    <label for="field-title"><?= t('add_title') ?></label>
    <?php snippet('form/textarea', [
      'form' => $form,
      'name' => 'title',
      'placeholder' => t('add_title'),
    ]); ?>
  </div>

  <div class="field">
    <label for="field-declaration"><?= t('add_title') ?></label>
    <?php snippet('form/textarea', [
      'form' => $form,
      'name' => 'declaration',
      'placeholder' => t('declaration'),
    ]); ?>
  </div>

  <div class="field">
    <label for="field-implementation"><?= t('add_title') ?></label>
    <?php snippet('form/textarea', [
      'form' => $form,
      'name' => 'implementation',
      'placeholder' => t('implementation'),
    ]); ?>
  </div>

  <div class="field">
    <label for="field-references"><?= t('add_title') ?></label>
    <?php snippet('form/textarea', [
      'form' => $form,
      'name' => 'references',
      'placeholder' => t('references'),
    ]); ?>
  </div>

  <div class="field">
    <label for="field-name"><?= t('name') ?></label>
    <?php snippet('form/text', [
      'form' => $form,
      'name' => 'name',
      'placeholder' => t('name'),
    ]); ?>
  </div>

  <div class="field">
    <label for="field-email"><?= t('email') ?></label>
    <?php snippet('form/text', [
      'form' => $form,
      'name' => 'email',
      'placeholder' => t('email'),
    ]); ?>
  </div>

  <div class="field">
    <label for="field-comment"><?= t('add_title') ?></label>
    <?php snippet('form/textarea', [
      'form' => $form,
      'name' => 'comment',
      'placeholder' => t('comment'),
    ]); ?>
  </div>

  <?php echo csrf_field(); ?>
  <?php echo honeypot_field(); ?>
  <input type="submit" value="<?= t('submit') ?>">
</form>

<?php snippet('footer'); ?>
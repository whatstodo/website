<?php
$attributes = [
  'class' => $form->error($name) ? 'error' : null,
  'id' => $id,
  'name' => $name,
  'placeholder' => $placeholder,
]; ?>

<textarea <?= attr($attributes) ?>><?= $form->old($name) ?></textarea>
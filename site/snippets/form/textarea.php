<?php
$attributes = [
  'class' => $form->error($name) ? 'error' : null,
  'id' => "field-$name",
  'name' => $name,
  'placeholder' => $placeholder,
]; ?>

<textarea <?= attr($attributes) ?>><?= $form->old($name) ?></textarea>
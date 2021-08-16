<?php
$attributes = [
  'class' => $form->error($name) ? 'error' : null,
  'id' => "field-$name",
  'name' => $name,
  'type' => 'text',
  'placeholder' => $placeholder,
]; ?>

<input <?= attr($attributes) ?>><?= $form->old($name) ?></textarea>
<?php
$attributes = [
  'class' => $form->error($name) ? 'error' : null,
  'id' => "field-$name",
  'name' => $name,
  'type' => 'text',
  'value' => $form->old($name),
  'placeholder' => $placeholder,
]; ?>

<input <?= attr($attributes) ?>>
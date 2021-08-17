<?php
$attributes = [
  'class' => $form->error($name) ? 'error' : null,
  'id' => "field-$name",
  'name' => $name,
  'type' => 'password',
  'placeholder' => $placeholder,
]; ?>

<input <?= attr($attributes) ?>>
<?php
$attributes = [
  'class' => $form->error($name) ? 'error' : null,
  'id' => $id,
  'name' => $name,
  'type' => 'password',
  'placeholder' => $placeholder,
]; ?>

<input <?= attr($attributes) ?>>
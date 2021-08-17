<?php
$attributes = [
  'class' => $form->error($name) ? 'error' : null,
  'id' => $id,
  'name' => $name,
  'type' => 'text',
  'value' => $form->old($name),
  'placeholder' => $placeholder,
]; ?>

<input <?= attr($attributes) ?>>
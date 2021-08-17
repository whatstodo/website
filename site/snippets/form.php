<?php
$action = $action ?? $page->url();
$honeypot = $honeypot ?? true;
$submit = $submit ?? 'Submit';
?>

<form method="POST" action="<?= $action ?>">
  <?php foreach ($fields as $name => $field): ?>
    <?php
    $id = "field-$name";
    $type = $field['type'] ?? 'text';
    $label = $field['label'] ?? '';
    ?>

    <div class="field">
      <label for="<?= $id ?>"><?= $label ?></label>
      <?php snippet("form-input/$type", [
        'form' => $form,
        'id' => $id,
        'name' => $name,
        'placeholder' => $label,
      ]); ?>
    </div>
  <?php endforeach; ?>

  <?php echo csrf_field(); ?>

  <?php if ($honeypot): ?>
    <?php echo honeypot_field(); ?>
  <?php endif; ?>

  <input type="submit" value="<?= $submit ?>">
</form>
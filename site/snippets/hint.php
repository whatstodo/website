<?php
$hint = param('hint') ?? ($default ?? null);

if (!$hint) {
  return;
}

$hintFieldName = str_replace('-', '_', "$hint");
$content = $site->content();
?>

<?php if ($content->has($hintFieldName)): ?>
<div class="hint"><?= $content->get($hintFieldName) ?></div>
<?php endif; ?>

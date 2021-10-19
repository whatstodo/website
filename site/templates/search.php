<?php snippet('header'); ?>



<?php if (!$hasResults): ?>
  <?= $url = url('home', ['params' => ['hint' => 'search_fail']]) ?>
  <?= go($url) ?>
<?php else: ?>

<?php if ($results['positions']->isNotEmpty()): ?>
<h3><?= t('positions') ?></h3>
<ul>
  <?php foreach ($results['positions'] as $result): ?>
  <li>
    <a href="<?= $result->url() ?>">
      <?= $result->title() ?>
    </a><br>
  </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>

<?php if ($results['participants']->isNotEmpty()): ?>
<h3><?= t('participants') ?></h3>
<ul>
  <?php foreach ($results['participants'] as $result): ?>
  <li>
    <a href="<?= $result->url() ?>">
      <?= $result->name() ?>
    </a>
  </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>
<?php endif; ?>

<?php snippet('footer'); ?>

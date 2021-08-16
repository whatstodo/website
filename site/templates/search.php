<?php snippet('header'); ?>

<?php if (!$hasResults): ?>
<h2><?= $page->search_unsuccess()->kirbytext() ?></h2>
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
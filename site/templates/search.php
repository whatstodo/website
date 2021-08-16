<?php snippet('header'); ?>

<!-- Display "no result" for unseccesfull searches -->
<?php if ($resultsPos->isEmpty() && $resultsPart->isEmpty()): ?>

<h2><?= $page->searchUnsuccess()->kirbytext() ?></h2>

<?php else: ?>

<!-- Searchresults in positions  -->
<?php if ($resultsPos->isNotEmpty()): ?>
<h3><?php echo t('positions'); ?></h3>
<ul>
  <?php foreach ($resultsPos as $result): ?>
  <li>
    <a href="<?= $result->url() ?>">
      <?= $result->title() ?>
    </a><br>
  </li>
  <?php endforeach; ?>
</ul>
<?php endif; ?>

<!-- Searchresults in Participants  -->

<?php if ($resultsPart->isNotEmpty()): ?>
<h3><?php echo t('participants'); ?></h3>
<ul>
  <?php foreach ($resultsPart as $result): ?>
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

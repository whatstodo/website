<?php snippet('header'); ?>

<h2><?= $page->title() ?></h2>

<h3><?php echo t('title') ?></h3>
<?= $page->declaration()->kirbytext() ?>

<h3><?php echo t('implementation') ?></h3>
<?= $page->implementation()->kirbytext() ?>

<button> <?php echo t('sign') ?> </button>

<!-- If statement einbauen! -->
<h3><?php echo t('signed') ?></h3>
<ul>
    <li>Beispiel Name</li>
</ul> 

<?php if($page->references()->isNotEmpty()): ?>
    <h3><?php echo t('references') ?></h3>
    <?= $page->references()->kirbytext() ?>
<?php endif ?>

<!-- If statement einbauen! -->
<h3><?php echo t('notes') ?></h3>
<ul>
    <li>Beispiel Notiz</li>
</ul> 

<?php snippet('footer'); ?>
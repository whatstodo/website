<?php snippet('header'); ?>
<h2><?= $page->title() ?></h2>

<h3><?= $site->declaration() ?></h3>
<?= $page->declaration()->kirbytext() ?>

<h3><?= $site->implementation() ?></h3>
<?= $page->implementation()->kirbytext() ?>

<button> <?= $site->sign()?> </button>

<h3><?= $site->signing()?></h3>
<ul>
    <li>Beispiel Name</li>
</ul> 

<h3><?= $site->references()?></h3>
<?= $page->references()->kirbytext() ?>

<h3><?= $site->notes()?></h3>
<ul>
    <li>Beispiel Notiz</li>
</ul> 

<?php snippet('footer'); ?>
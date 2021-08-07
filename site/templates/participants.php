

<?php snippet('header'); ?>

<h2><?= $page->title() ?></h2>
<?= $page->text()->kirbytext() ?>


<section>
  <ul>
    <?php foreach($kirby->users()->role('participants')->sortBY('name', 'asc') as $user): ?>
      <!-- Hier noch Link zum Userprofil einfügen -->
      <li> <?= $user->name() ?> </li>
    <?php endforeach ?>
  </ul>
</section>





<?php snippet('footer'); ?>


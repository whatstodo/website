<?php snippet('header'); ?>

<section>
  <ul>
    <li>
      <a href="<?= $site->find('add-position')->url() ?>"><?= $site
  ->find('add-position')
  ->title() ?></a>
    </li>
  </ul>
</section>

<!-- Liste aller Positionen  -->
<!-- Wenn Nutzer Intaktion möglich: Sortieren nach letzter Interaktion -->
<section>
  <ul>
    <?php foreach ($site->children()->listed() as $child): ?>
    <li>
      <a href="<?= $child->url() ?>"><?= $child->title() ?></a>
    </li>
    <?php endforeach; ?>
  </ul>
</section>


<?php snippet('footer'); ?>

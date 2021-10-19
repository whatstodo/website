<?php snippet('header'); ?>

<?php snippet('hint'); ?>

<section>
  <ul>
    <li>
      <a href="<?= page('add-position')->url() ?>">
        <?= page('add-position')->title() ?>
      </a>
    </li>
  </ul>
</section>

<!-- Liste aller Positionen  -->
<section>
  <ul>
    <?php foreach (page('positions')->children() as $child): ?>
    <li>
      <a href="<?= $child->url() ?>"><?= $child->title() ?></a>
    </li>
    <?php endforeach; ?>
  </ul>
</section>


<?php snippet('footer'); ?>

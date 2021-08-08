<?php snippet('header'); ?>


<?php if ($query == ''): ?> 

  <h2>Suche</h2> 

  <form action="<?= page('search')->url() ?>">
      <input type="search" name="q" value="<?= (!empty($query)) ? esc($query) : '' ?>">
      <input type="submit" value="&#8629;">
  </form>

<?php else: ?>

  <?php if ($results->isEmpty() && $resultsPos->isEmpty() && $resultsPart->isEmpty()): ?> 

    <h2>Es konnten leider keine Ergebnisse für "<?= html($query) ?>" gefunden werden!</h2>

    <?php else: ?>

      <h2><?= $page->title() ?> für <?= html($query) ?> </h2>

      <?php if ($results->isNotEmpty()): ?>
        <h3>Allgemein</h3>
        <ul>
          <?php foreach ($results as $result): ?>
            <li>
              <a href="<?= $result->url() ?>">
                <?= $result->title() ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

      <?php if ($resultsPos->isNotEmpty()): ?>
        <h3>Positionen</h3>
        <ul>
          <?php foreach ($resultsPos as $result): ?>
            <li>
              <a href="<?= $result->url() ?>">
                <?= $result->title() ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

      <?php if ($resultsPart->isNotEmpty()): ?>
        <h3>Teilnehmende</h3>
        <ul>
          <?php foreach ($resultsPart as $result): ?>
            <li>
              <!-- Link needs to be adjusted! -->
              <a href="<?= $result->url() ?>">
                <?= $result->name() ?>
              </a>
            </li>
          <?php endforeach ?>
        </ul>
      <?php endif ?>

  <?php endif ?>
    
<?php endif ?>

<?php snippet('footer'); ?>


<?php snippet('header'); ?>


<?php if (strlen($query) <= 2): ?> 

  <div class="caption">Mindestens 2 Buchstaben</div>

  <?php else: ?>

  <?php if ($results->isEmpty() && $resultsPos->isEmpty() && $resultsPart->isEmpty()): ?> 

    <div class="caption">Es konnten leider keine Ergebnisse für "<span><?= html($query) ?> </span>" gefunden werden!</div>

    <?php else: ?>

      <div class="caption"><h2><?= $page->title() ?></h2> für "<span><?= html($query) ?> </span>"</div>

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
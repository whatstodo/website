<?php snippet('header'); ?>


<!-- Only display a result for search terms more than 2 characters -->
<?php if (strlen($query) <= 2): ?> 

    <div class="caption">Mindestens 2 Buchstaben</div>

  <?php else: ?>

    <!-- Display "no result" for unseccesfull searches -->
    <?php if ($results->isEmpty() && $resultsPos->isEmpty() && $resultsPart->isEmpty()): ?> 

      <div class="caption">Es konnten leider keine Ergebnisse für "<span><?= html($query) ?> </span>" gefunden werden!</div>

      <?php else: ?>

        <!-- Display results for searches categorised in 3 Parts-->
        <div class="caption"><h2><?= $page->title() ?></h2> für "<span><?= html($query) ?> </span>"</div>

        <!-- Searchresults in general pages  -->
        <?php if ($results->isNotEmpty()): ?>
          <h3>Allgemein</h3>
          <ul>
            <?php foreach ($results as $result): ?>
              <li>
                <a href="<?= $result->url() ?>">
                  <?= $result->title() ?>
                </a>
                <!-- Display the textarea where the searchterm was found -->
                <?= getResultText($result->text(), $query) ?>
              </li>
            <?php endforeach ?>
          </ul>
        <?php endif ?>

        <!-- Searchresults in positions  -->
        <?php if ($resultsPos->isNotEmpty()): ?>
          <h3>Positionen</h3>
          <ul>
            <?php foreach ($resultsPos as $result): ?>
              <li>
                <a href="<?= $result->url() ?>">
                  <?= $result->title() ?>
                </a><br>
              </li>
            <?php endforeach ?>
          </ul>
        <?php endif ?>

        <!-- Searchresults in Participants  -->
        <?php if ($resultsPart->isNotEmpty()): ?>
          <h3>Teilnehmende</h3>
          <ul>
            <?php foreach ($resultsPart as $result): ?>
              <li>
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
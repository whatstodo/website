<nav class="menu">
  <ul>
    <li>
      <h1><a href="<?= $site->find('home')->url() ?>">whatstodo.design</a></h1>
    </li>
    <li>
      <a href="<?= $site->find('info')->url() ?>"><?= $site->find('info')->title() ?></a>
    </li>
    <li>
      <a href="<?= $site->find('howtodo')->url() ?>"><?= $site->find('howtodo')->title() ?></a>
    </li>
    <li>
      <a href="<?= $site->find('participants')->url() ?>"><?= $site->find('participants')->title() ?></a>
    </li>
    <li>
      <a href="<?= $site->find('contact')->url() ?>"><?= $site->find('contact')->title() ?></a>
    </li>
  </ul> 
</nav>

<nav class="languages">
  <ul>
    <?php foreach($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"') ?>>
      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
        <?= html($language->name()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>


<nav class="search">
  <ul>
    <li>Suche</li>
  </ul>
</nav>



<nav class="menu">
  <ul>
    <li>
      <h1><a href="<?= page('home')->url() ?>">whatstodo.design</a></h1>
    </li>
    <?php foreach ($site->children()->listed() as $child): ?>
    <li>
      <a href="<?= $child->url() ?>"><?= $child->title() ?></a>
    </li>
    <?php endforeach; ?>
  </ul>
</nav>

<nav class="languages">
  <ul>
    <?php foreach ($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"'); ?>>
      <a href="<?= $page->url(
        $language->code()
      ) ?>" hreflang="<?= $language->code() ?>">
        <?= html($language->name()) ?>
      </a>
      </li>
      <?php endforeach; ?>
  </ul>
</nav>


<nav class="search">
  <form action="<?= page('search')->url() ?>">
    <input type="search" name="q" value="<?= !empty($query)
      ? esc($query)
      : '' ?>" required placeholder="<?php echo t('search'); ?>">
    <input type="submit" value="&#8629;">
  </form>
</nav>
<h1>Studio Superfuture</h1>

<nav class="menu">
  <ul>
    <?php foreach (page('member')->children() as $child): ?>
    <li>
      <a href="<?= $child->url() ?>"><?= $child->title() ?></a>
    </li>
    <?php endforeach; ?>
  </ul>
</nav>
<nav class="site-navigation">
  <ul class="menu">
    <?php foreach($pages->visible() as $item): ?>
    <li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
      <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
      <?php if($item->title() == 'Services'): ?>
        <ul class="dropdown">
        <?php foreach($item->children()->visible() as $items): ?>
          <li class="menu-item">
            <a href="<?= $items->url() ?>"><?= $items->title()->html() ?></a>
          </li>
        <?php endforeach ?>
        </ul>
      <?php endif ?>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
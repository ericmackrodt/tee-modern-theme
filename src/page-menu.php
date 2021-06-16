<h2>Contents</h2>
<div class="page-menu">
  <ul>
    <?php foreach ($items as $item) : ?>
      <li>
        <a href="<?= $this->e($item->url) ?>">
          <?= trim($item->content); ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
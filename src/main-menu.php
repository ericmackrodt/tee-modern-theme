<mobile-menu>
  <?php foreach ($mainMenu as $key => $item) : ?>
    <a class="menuitem" href="<?= $item->path ?>" class="menuitem">
      <?= $item->label ?>
    </a>
  <?php endforeach; ?>
</mobile-menu>
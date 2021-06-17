<div id="mainmenu">
  <div class="mainmenu-content">
    <div class="mainmenu-row">
      <img src="/templates/modern/public/anibar.gif">
    </div>
    <div class="mainmenu-row">
      <?php foreach ($mainMenu as $key => $item) : ?>
        <a class="menuitem" href="<?= $item->path ?>">
          <img src="<?= $item->icon ?>">
          <?= $item->label ?>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="mainmenu-row">
      <img src="/templates/modern/public/anibar.gif">
    </div>
  </div>
</div>
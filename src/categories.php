<window window-id="categories" v-bind:desktop="sidePanelDesk" title="Categories" icon="/templates/modern/public/folder-icon.png">
  <div id="categories-widget">
    <?php foreach ($categories as $id => $category) : ?>
      <a href="/category?id=<?= $category->id ?>">
        <?= $this->e($category->name) ?>
      </a>
    <?php endforeach; ?>
    <span>C:\><span class="cursor">_</span></span>
  </div>
</window>
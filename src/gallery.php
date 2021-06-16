<div class="gallery-container">
  <gallery>
    <ul>
      <?php foreach ($images as $i => $image) : ?>
        <li><img src="<?= $image->url ?>" /></li>
      <?php endforeach; ?>
    </ul>
  </gallery>
</div>
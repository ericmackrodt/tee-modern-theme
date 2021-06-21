<div class="gallery-container">
  <?php foreach ($images as $i => $image) : ?>
    <a href="<?= $image->url ?>" title=""><img src="/img.php?p=<?= $image->url ?>&w=150" alt="" /></a>
  <?php endforeach; ?>
</div>
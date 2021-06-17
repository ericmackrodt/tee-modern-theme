<div id="post-list">

  <?php foreach ($posts as $post) : ?>
    <?php $image = $post->full_path . $post->image; ?>
    <a href="/post/<?= $post->slug ?>" class="post-item">
      <div class="item-inner">
        <div class="post-image">
          <img src="/img.php?p=<?= $image ?>&w=480&fit=cover&aspectRatio=16:9" border="0" alt="<?= $post->title ?>" />
        </div>
        <div class="post-content">
          <div class="post-title">
            <?= $post->title ?>
          </div>
          <div class="description">
            <?= $post->description ?>
          </div>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</div>
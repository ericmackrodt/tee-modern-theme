<h4>Tags</h4>
<div id="tags">
  <?php foreach ($tags as $id => $tag) : ?>
    <a href="/tag?id=<?= $tag->id ?>" class="tag">
      <?= $this->e($tag->name) ?> (<?= count($tag->slugs) ?>)
    </a>
  <?php endforeach; ?>
</div>
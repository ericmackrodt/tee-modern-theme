<?php $this->layout(withVariant('layout'), ['title' => $this->e($name), 'showSideContent' => true]) ?>
<div class="content">
  <h2>Category: <?= $this->e($name) ?></h2>
  <?php $this->insert('modern::post-list', ['posts' => $posts]) ?>
</div>
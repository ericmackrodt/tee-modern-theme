<div class="file-download">
  <div class="file-download-header">
    <h4 id="<?= $data->id ?>"><?= $this->e($data->name) ?></h4>
    <div class="download-link">
      <a class="download-link" href="<?= $data->url ?>" target="_blank">
        <img src="/img.php?p=/templates/modern/public/floppy.png&w=14" alt="Download">
        <?= $data->file ?>
      </a>
    </div>
  </div>
  <?= $data->description ?>
</div>
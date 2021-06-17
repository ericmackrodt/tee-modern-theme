<?php $this->layout(withVariant('layout'), ['showSideContent' => true]) ?>
<?php $this->push('seo') ?>
<meta name="description" content="This is the website where you can check out the projects I have worked on, the stuff I have been attempting and more.">
<meta name="keywords" content="Retro gaming, Retro computing, Windows 3.11, Windows 3.x, DOS, MS-DOS, Playstation, Dreamcast, Mega Drive, Nintendo Gameboy, Nintendo 64">
<link rel="canonical" href="http://www.theericexperiment.com/" />
<?php $this->end(); ?>

<div class="content">
  <div id="welcome">
    <div class="profile">
      <div class="avatar">
        <img src="/templates/modern/public/profile.jpg" alt="MEEEEE!!!">
      </div>
    </div>
    <div class="content">
      <img src="/templates/modern/public/welcome.gif">
      <?= $intro ?>
      <div class="social-icons">
        <a href="https://twitter.com/ericmackrodt" target="_blank" class="social-icon twitter">
        </a>

        <a href="https://www.facebook.com/ericmackrodt" target="_blank" class="social-icon facebook">
        </a>

        <a href="https://www.youtube.com/c/TheEricExperiment?sub_confirmation=1" target="_blank" class="social-icon youtube">
        </a>

        <a href="https://github.com/ericmackrodt" target="_blank" class="social-icon github">
        </a>

        <a href="https://www.instagram.com/ericmackrodt/" target="_blank" class="social-icon instagram">
        </a>

        <a href="https://www.linkedin.com/in/ericmackrodt/" target="_blank" class="social-icon linkedin">
        </a>
      </div>
    </div>
  </div>
  <img src="/templates/modern/public/anibar2.gif" class="separator" />
  <h1>Latest parts of the experiment</h1>
  <?php $this->insert('modern::post-list', ['posts' => $posts]) ?>
</div>
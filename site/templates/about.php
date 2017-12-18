<?php snippet('header') ?>

  <main class="main">

    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>');">
      <div class="wrapper">
        <div class="banner-content">
          <h1 class="intro-large"><?= $page->title()->html() ?></h1>
        </div>
      </div>
    </div>
    
    <section class="content-section">
      <div class="wrapper">
          <?= $page->text()->html() ?>
    </div>
    </section>

  </main>

<?php snippet('footer') ?>
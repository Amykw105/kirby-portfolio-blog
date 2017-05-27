<?php snippet('header') ?>

  <main class="main" role="main">
    
    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>');">
      <div class="overlay"></div>
      <div class="wrapper">
        <div class="banner-content">
          <p class="intro-large"><?= $page->title()->html() ?></p>
        </div>
      </div>
    </div>
    <section class="service-content content-section">
    <div class="wrapper">
      <h1 class="content-heading"><?= $page->sectionheading() ?></h1>
      <?= $page->text()->kirbytext() ?>
      
    </div>
  </section>
  
    <?php snippet('call-to-action') ?>
  

   <?php snippet('related-posts', ['category' => $page->category()]) ?>

  
  </main>

<?php snippet('footer') ?>
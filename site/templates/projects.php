<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>');">
      <div class="overlay"></div>
      <div class="wrapper">
        <div class="banner-content">
          <h1 class="intro-large"><?= $page->heading()->html() ?></h1>
        </div>
      </div>
    </div>
      
    <section class="content-section services-section">
      <div class="wrapper"> 
        <?php snippet('showcase') ?>
      </div>
    </section>
    
    <section class="content-section call-to-action">
      <div class="wrapper">
          <p class="section-heading">Not sure where to start? <a href="" class="hire-me-call-to-action" title="Contact me to improve your online strategy">Get in touch!</a></p>
      </div>
    </section>
  </main>

<?php snippet('footer') ?>
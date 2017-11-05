<?php snippet('header') ?>

  <main class="main" role="main">
    
    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>'); background-position: center center;">
      <div class="overlay"></div>
      <div class="wrapper">
        <div class="banner-content">
          <h1 class="intro-large"><?= $page->heading()->html() ?></h1>
          <p class="intro-small"><?= $page->intro()->kirbytext() ?></p>
          <a href="<?= $page->calltolink()->html() ?>" class="intro-cta"><?= $page->calltoactionlabel()->html() ?></a>
        </div>
      </div>
    </div>

    
    <section class="text-section" id="more-info">
      
      <div class="wrapper">
          <h2 class="page-title">Why your pub needs a website</h2>
          <?= $page->text()->kirbytext() ?>
      </div>
    </section> 
    
    <section class="content-section">
          <div class="wrapper"> 
              <h3 class="page-title">Pub website examples</h3>
    <ul class="clients-listing">
      
        <li class="clients-item">
            <a href="https://a-web-strategy.co.uk/clients/the-dartmouth-inn" class="client-link">
              <img src="https://a-web-strategy.co.uk/content/2-clients/1-the-dartmouth-inn/dartmouth-inn-websites-for-pubs.png">
            </a>
        </li>
    
      
        <li class="clients-item">
            <a href="https://a-web-strategy.co.uk/clients/king-william-iv" class="client-link">
              <img src="https://a-web-strategy.co.uk/content/2-clients/2-king-william-iv/king-william-website.png">
            </a>
        </li>
    
        <div class="clearfix"></div>
    </ul>      </div>
        </section>
    <div class="clearfix"></div>

    <?php snippet('call-to-action') ?>


  </main>

<?php snippet('footer') ?>
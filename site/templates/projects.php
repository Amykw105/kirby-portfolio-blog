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
    
    <section class="text-section">
      
      <div class="wrapper">
        <br/>
          <h2 class="page-title">Your brand is unique.<br/>Your website should be too. </h2>
          <p class="greeting-intro animated fadeInUp">We don't believe in putting your logo onto a template and calling it a day. We take pride in our custom designs and hand-written code. </p>
          <div class="greeting-wrapper">
            <div class="greeting-icon gi-pc">
              <img src="assets/images/web-design-planning.png" alt="Plymouth Web Design - Planning stage"/>
              <p class="greeting-header">Planning & Consultancy</p>
            </div>
            <div class="greeting-icon gi-d">
              <img src="assets/images/web-design-template.png" alt="Plymouth Web Design - Design stage"/>
              <p class="greeting-header">Design</p>
            </div>
            <div class="greeting-icon gi-dd">
              <img src="assets/images/web-design-development.png" alt="Plymouth Web Design - Development stage"/>
              <p class="greeting-header">Development</p>
            </div>
            <div class="greeting-icon gi-m">
              <img src="assets/images/web-design-systems.png" alt="Plymouth Web Design - Maintenance stage"/>
              <p class="greeting-header">Care & Maintenance</p>
            </div>
            <div class="clearfix"></div>
          </div>
      </div>
    </section> 
      
    <section class="content-section services-section">
      <div class="wrapper"> 
        <?php snippet('showcase') ?>
      </div>
    </section>
    
    <section class="content-section call-to-action">
      <div class="wrapper">
          <p class="section-heading">Not sure where to start? <a href="/contact" class="hire-me-call-to-action" title="Contact me to improve your online strategy">Get in touch!</a></p>
      </div>
    </section>
  </main>

<?php snippet('footer') ?>
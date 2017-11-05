<?php snippet('header') ?>

  <main class="main" role="main">

    
    <section class="content-section">
      <div class="wrapper"> 
        <center>
          <br/><br/>
          <h1 class="section-heading"><?= $page->heading()->html() ?></h1>
        </center>
      </div>
    </section>
      
    <section class="content-section">
      <div class="large-wrapper"> 
        <?php snippet('clients') ?>
      </div>
    </section>
    
    <section class="content-section">
      <div class="wrapper"> 
        <center>
          <h2><?= $page->text()->html() ?></h2>
        </center>
      </div>
    </section>
    
    <section class="content-section call-to-action">
      <div class="wrapper">
          <p class="section-heading">Not sure where to start? <a href="/find-out-more-web-design-plymouth" class="hire-me-call-to-action" title="Contact me to improve your online strategy">Get in touch!</a></p>
      </div>
    </section>
  </main>

<?php snippet('footer') ?>
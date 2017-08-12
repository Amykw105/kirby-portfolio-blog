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
      
      <!-- <?php if($page->class() == 'wdd'): ?>
        <center>
          <br/>
          <h3 class="content-heading">Website Packages</h3>
          <p>Website packages do not include pricing for domain names and hosting.</p>
          <p>All websites will be mobile friendly and work across the most popular devices.</p>
        </center>
        <?php snippet('web-pricing') ?>
      <?php endif ?> -->
      
      <!-- <?php if($page->class() == 'smm'): ?>
        <center>
          <br/>
          <h3 class="content-heading">Social Media Marketing Set Up Packages</h3>
          <p>Only the social networks most relevant to your business will be worked with, this will likely be Facebook, Twitter, Google+ and either Pinterest, Instagram, LinkedIn or YouTube.</p>
        </center>
        <div class="social-package"><b>£200</b> - I set up four social media accounts professionally with your business logo, custom graphic banner, full company search engine optimised descriptions, contact details, website link, email.</div>
        <div class="social-package"><b>£300</b> - I set up four social media accounts as above and follow up to 40 of your industry leaders and local competitors to start expanding your potential outreach. Training will be given in how to use each account to maximise your audience reach.</div>
        
        <center>
          <br/>
          <h3 class="content-heading">Social Media Marketing Maintenance Packages</h3>
          <p>If you've got social networks but not enough time to keep them maintained, these packages are for you.</p>
          <p>From writing and posting status updates to full-service engagement and community-growing campaigns, we can create a solution to fit your budget.</p>
        </center>
        <div class="social-package"><b>£50 per month</b> - 3 custom prescheduled posts each week on each platform. Response to customer enquiries. </div>
        <div class="social-package"><b>£80 per month</b> - 4 custom posts each week, optimised for each platform. Response, customer encouragement and stats analysis. </div>
        <div class="social-package"><b>£?? per month</b> - Based on your business needs we can discuss a custom package to manage your social media presence. </div>
      <?php endif ?> -->
    </div>
    </section>
  
    <?php snippet('call-to-action') ?>
  

   <?php snippet('related-posts', ['category' => $page->category()]) ?>

  
  </main>

<?php snippet('footer') ?>
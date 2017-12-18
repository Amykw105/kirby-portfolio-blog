<?php snippet('header') ?>

  <main class="main" role="main">
    
    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>'); background-position: center center;">
      <div class="overlay"></div>
      <div class="wrapper">
        <div class="banner-content">
          <p class="intro-large"><?= $page->title()->html() ?></p>
        </div>
      </div>
    </div>

    <section class="text-section">
      
      <div class="wrapper">
          <h2 class="page-title">Totnes Web Design &amp; Development</h2>
          <p class="greeting-intro animated fadeInUp">We take care of the whole <b>web design process</b>, from planning and designing to development and maintenance, to make your business stand out online.</p>
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
    
    <section class="client-showcase">
      <div class="wrapper">
          <p class="page-title">Featured Totnes Client</p>
          <img src="/content/2-clients/2-king-william-iv/king-william-website.png" alt="King William IV Totnes, Web Design"/>
          <p class="showcase-copy">King William IV <br/>
          <span>Integrated Facebook Feed<br/></span>
          Bespoke Design & Development<br/>
        <a href="/clients/king-william-iv">View case study</a></p>
          
          <div class="clearfix"></div>
      </div>
    </section> 
    
    <section class="text-section">
      
      <div class="wrapper">
          <h3 class="page-title">Web Design with a personal touch</h3>
          <p class="cols">I design and build custom responsive websites and assist with search engine optimisation for small to medium sized businesses. <br/><br/>
          Our <b>web design & development</b> services are not just limited to Plymouth, Devon. I have worked remotely with small companies in Australia, New Zealand, and also businesses closer to home in Devon.</p>
          <p class="cols"><b>Bespoke web solutions to promote your business and products online.</b> Each website is designed and built just for your business - no cookie-cutter templates or frameworks - your website will stand out to reach both loyal and new, potential customers. <br/><br/>
          You'll also get your own custom content management system so you'll be able to update your website as often as you like. </p>
      </div>
    </section> 
    
    <section class="testimonials ">
      <div class="overlay"></div>
      <div class="wrapper">
          <h3 class="page-title">Don't just take our word for it..</h3>
          <div class="main-carousel">
              <div class="carousel-cell">
                <p>"Great person to work with. Communication was great and all messages were responded to very quickly. Amy did a great job of <b>building our website exactly how we wanted</b>. We will definitely hire her again in the future."</p>
                <a href="/clients/jamul-wireless" class="name" title="Web design for Jamul Wireless">Jamul Wireless</a>
              </div>
              <div class="carousel-cell">
            <p>"It's been a pleasure to work with Amy. She <b>created my website from scratch</b> exactly in the way I asked her. She exactly understood what I was looking for and delivered a <b>high quality product</b>. Communication has been excellent and the job completed in a <b>short timeline</b>."</p>
            <a href="/clients/fabrizio-fusco-web-design" class="name" title="Web design for Fabrizio Fusco">Fabrizio Fusco</a>
          </div>
        </div>
      </div>
    </section> 
    
    
    <section class="blog-section content-section">
      <div class="wrappers">
        <div class="text-section">
        <p class="page-title">Latest Blog posts</p>
      </div>
        <!-- <p class="section-heading">the latest from my blog</p> -->
        <div class="blog-flex-wrapper wrapper">
        <?php  $articles = page('blog')->children()->visible()->sortBy('date', 'desc')->paginate(6); ?>
        <?php foreach($articles as $article): ?>
          <div class="home-blog-posts">
            <a class="home-blog-title" href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
            <p><?= excerpt($article->text(), 250) ?></p>
            <a class="home-blog-link" href="<?= $article->url() ?>">Read article</a>
          </div>
        <?php endforeach ?>
      </div>
        <div class="clearfix"></div>
      <br/>

    </div>
    </section>
    <div class="clearfix"></div>

    <?php snippet('call-to-action') ?>


  </main>

<?php snippet('footer') ?>
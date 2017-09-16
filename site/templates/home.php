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
    <!-- testing ftp server -->
    <section class="services-section">
      <div class="wrappers">
          <?php snippet('showcase', ['limit' => 3]) ?>
      </div>
    </section> 
    
    <section class="text-section">
      
      <div class="wrapper">
          <h2 class="page-title">Plymouth Web Design &amp; Development</h2>
          <p class="cols">I design and build custom responsive websites and assist with search engine optimisation for small to medium sized businesses. <br/><br/>
          Web design & development services are not just limited to Plymouth, Devon. I have worked remotely with small companies in Australia and New Zealand and also businesses closer to home in Devon.</p>
          <p class="cols"><b>Bespoke web solutions to promote your business and products online.</b> Each website is designed and built just for your business - no templates or frameworks - your website will stand out to reach both loyal and new, potential customers. <br/><br/>
          You'll also get your own custom content management system so you'll be able to update your website as often as you like. </p>
      </div>
    </section> 
    
    <section class="services-section">
      <div class="wrappers">
          <?php snippet('showcase', ['offset' => 3]) ?>
      </div>
    </section> 
    
    <section class="blog-section content-section">
      <div class="wrappers">
        <div class="text-section">
        <p class="page-title">Latest Blog posts</p>
      </div>
        <!-- <p class="section-heading">the latest from my blog</p> -->
        <div class="blog-flex-wrapper">
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
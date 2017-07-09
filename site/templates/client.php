<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="home-banner" style="background-image: url('<?= $page->banner()->toFile()->url() ?>');">
      <div class="overlay"></div>
      <div class="wrapper">
        <div class="banner-content">
          <h1 class="intro-large"><?= $page->heading()->html() ?></h1>
        </div>
      </div>
    </div>
      
    <section class="content-section ">
      <div class="wrapper"> 
        
        <div class="client-content">
          <center><h2 class="content-heading"><?= $page->sectionheading() ?></h2>
          <?= $page->text()->kirbytext() ?>
        </center>
          <br/>
          <img src="<?= $page->mainimage()->toFile()->url() ?>" class="client-image"/>
          <br/>
            <center>Technical skills used: </center>
          <?php $category = str::split($page->category(),','); ?>
          <ul itemprop="articleSection" class="blog-tags">
            <?php foreach($category as $tag): ?>
              <li>
                <?php echo html($tag) ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
        <div class="clearfix"></div>
        <?php if($page->secondsectionheading()->isNotEmpty()): ?>
          <center>
            <h3 class="content-heading"><?= $page->secondsectionheading() ?></h3>
          </center>
        <div class="third">
          <p class="social-heading">Facebook</p>
          <span class="count"><?= $page->fblikes()->kirbytext() ?></span> Likes<br/>
          <span class="count"><?= $page->fbchecks()->kirbytext() ?></span> Check-ins
        </div>
        <div class="third">
          <p class="social-heading">Twitter</p>
          <span class="count"><?= $page->twfollowers()->kirbytext() ?></span> Followers<br/>
          <span class="count"><?= $page->twtweets()->kirbytext() ?></span> Tweets
        </div>
        <div class="third">
          <p class="social-heading">Instagram</p>
          <span class="count"><?= $page->igfollowers()->kirbytext() ?></span> Followers<br/>
          <span class="count"><?= $page->iglikes()->kirbytext() ?></span> Average likes per post
        </div>
      <?php endif ?>
      <div class="clearfix"></div>
      </div>
    </section>
    
    <section class="content-section call-to-action">
      <div class="wrapper">
          <p class="section-heading">Not sure where to start? <a href="" class="hire-me-call-to-action" title="Contact me to improve your online strategy">Get in touch!</a></p>
      </div>
    </section>
  </main>

<?php snippet('footer') ?>
<?php snippet('header') ?>

  <main class="main" role="main">
    
    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>'); background-position: center top;">
      <div class="overlay"></div>
      <div class="wrapper">
        <div class="banner-content">
          <h1 class="intro-large"><?= $page->heading()->html() ?></h1>
          <h2 class="intro-small"><?= $page->intro()->kirbytext() ?></h2>
          <a href="<?= $page->calltolink()->html() ?>" class="intro-cta"><?= $page->calltoactionlabel()->html() ?></a>
        </div>
      </div>
    </div>
    <!-- testing ftp server -->
    <section class="content-section services-section">
      <div class="wrapper">
          <?php snippet('showcase', ['limit' => 3]) ?>
      </div>
    </section> 
    
    <section class="blog-section content-section">
      <div class="wrapper">
        <p class="section-heading">the latest from my blog</p>
        <div class="blog-flex-wrapper">
        <?php  $articles = page('blog')->children()->visible()->sortBy('date', 'desc')->paginate(4); ?>
        <?php foreach($articles as $article): ?>
          <div class="home-blog-posts">
            <?php if($article->coverimage()->isNotEmpty()): ?>
            <div class="image" style="background-image:url(<?= $article->coverimage()->toFile()->url() ?>);"></div>
            <?php endif ?>
              <a class="home-blog-title" href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
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
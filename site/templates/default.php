<?php snippet('header') ?>

  <main class="main">

    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>');">
      <div class="overlay"></div>
      <div class="wrapper">
        <div class="banner-content">
          <p class="intro-large"><?= $page->title()->html() ?></p>
        </div>
      </div>
    </div>
      
    <div class="wrapper">
      <center>
      <?= $page->text()->kirbytext() ?>
    </center>
    </div>
    
    <section class="blog-section content-section">
      <div class="wrapper">
        <p class="section-heading">How about one of these blog posts instead?</p>
        <div class="blog-flex-wrapper">
        <?php  $articles = page('blog')->children()->visible()->flip()->paginate(6); ?>
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

  </main>

<?php snippet('footer') ?>
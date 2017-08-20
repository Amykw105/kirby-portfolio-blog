<?php snippet('header') ?>

  <main class="main" role="main">
    
    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>');">
      <div class="overlay"></div>
      <div class="wrapper">
        <div class="banner-content">
          <h1 class="intro-large"><?= $page->text()->html() ?></h1>
        </div>
      </div>
    </div>

    <section class="blog-section content-section">
      <div class="wrapper blog-flex-wrapper">
      <?php if($articles->count()): ?>
        <?php foreach($articles as $article): ?>
          <div class="home-blog-posts">
            <?php if($article->coverimage()->isNotEmpty()): ?>
            <div class="image" style="background-image:url(<?= $article->coverimage()->toFile()->url() ?>);"></div>
            <?php endif ?>
            <div class="overlay"></div>
              <a class="home-blog-title" href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
              <a class="home-blog-link" href="<?= $article->url() ?>">Read article</a>
          </div>
        <?php endforeach ?>
        <div class="clearfix"></div>
      <?php else: ?>
        <p>This blog does not contain any articles yet.</p>
      <?php endif ?>
      <br/>
      <?php snippet('pagination') ?>

    </div>
    </section>

  </main>

<?php snippet('footer') ?>
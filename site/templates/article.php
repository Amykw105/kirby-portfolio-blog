<?php snippet('header') ?>

  <main class="main blog-article" role="main">
    
    <article class="article single wrap">
      <?php if($page->coverimage()->isNotEmpty()): ?>
        <div class="home-banner" style="background-image: url('<?= $page->coverimage()->toFile()->url() ?>');">
      <?php else : ?>    
          <div class="home-banner" style="background-image: url('https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?dpr=1&auto=format&fit=crop&w=1500&h=996&q=80&cs=tinysrgb&crop=&bg=');">
      <?php endif ?>
      <div class="overlay"></div>
        <div class="wrapper">
          <div class="banner-content">
            <h1 class="intro-large"><?= $page->title()->html() ?></h1>
          </div>
        </div>
      </div>
      
      <section class="content-section article-section">
        <div class="blog-wrapper">
        <div class="intro text">
          <!-- <?= $page->date('F jS, Y') ?><br/> -->
          <?php $tags = str::split($page->tags(),','); ?>
          <ul class="blog-tags">
            <?php foreach($tags as $tag): ?>
              <li>
                <?php echo html($tag) ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
            
        <?= $page->text()->kirbytext() ?>
      </div>
    </section>
    </article>
    <?php snippet('related-posts', ['category' => $page->category()]) ?>

        <?php snippet('call-to-action') ?>
  </main>

<?php snippet('footer') ?>
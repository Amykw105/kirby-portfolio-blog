<?php snippet('header') ?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?= $page->url() ?>"
  },
  "headline": "<?= $page->SEOtitle()->html() ?>",
  "image": {
    "@type": "ImageObject",
    "url": "<?= $page->pinterestImage()->toFile()->url() ?>",
    "height": 2800,
    "width": 2000
  },
  "datePublished": "<?= $page->date('Y-m-d') ?>",
  "dateModified": "<?= $page->date('Y-m-d') ?>",
  "author": {
    "@type": "Person",
    "name": "Amy Westlake"
  },
   "publisher": {
    "@type": "Organization",
    "name": "A Web Strategy",
    "logo": {
      "@type": "ImageObject",
      "url": "https://a-web-strategy.co.uk/assets/images/a-web-strategy-web-development-social-media-marketing.png"
    }
  },
  "description": "<?= $page->SEOdescription()->html() ?>"
}
</script>
  <main class="main blog-article" role="main">
    
    <article itemscope itemtype="http://schema.org/Article" class="article single wrap">
      <?php if($page->coverimage()->isNotEmpty()): ?>
        <div class="home-banner" style="background-image: url('<?= $page->coverimage()->toFile()->url() ?>');">
      <?php else : ?>    
          <div class="home-banner" style="background-image: url('/content/home/website-strategy-and-social-media-management.jpg');">
      <?php endif ?>
      <div class="overlay"></div>
        <div class="wrapper">
          <div class="banner-content">
            <h1 itemprop="name" class="intro-large"><?= $page->title()->html() ?></h1>
          </div>
        </div>
      </div>
      
      <section class="content-section article-section">
        <div class="blog-wrapper">
        <div class="intro text">
          <span style="visibility:hidden;font-size:0;" itemprop="description"><?= $page->SEOdescription()->html() ?></span>
          <span style="visibility:hidden;font-size:0;" itemprop="datePublished" content="<?= $page->date('Y-m-d') ?>"><?= $page->date('F jS, Y') ?></span>
          <span style="visibility:hidden;font-size:0;" itemprop="author">Amy Westlake</span>
          <?php if($page->pinterestImage()->isNotEmpty()): ?>
          <div style="display:none;" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
              <meta itemprop="height" content="2800px">
              <meta itemprop="width" content="2000px">
              <meta itemprop="url" content="<?= $page->pinterestImage()->toFile()->url() ?>">
              <img src="<?= $page->pinterestImage()->toFile()->url() ?>" alt="<?= $page->title()->html() ?>">
          </div>
          <?php endif ?>
          <?php $tags = str::split($page->tags(),','); ?>
          <ul itemprop="articleSection" class="blog-tags">
            <?php foreach($tags as $tag): ?>
              <li>
                <?php echo html($tag) ?>
              </li>
            <?php endforeach ?>
          </ul>
        </div>
            
      <span itemprop="articleBody">  <?= $page->text()->kirbytext() ?> </span>
      
      <?php snippet('social-buttons') ?>
      </div>
    </section>
    </article>
    <?php snippet('related-posts', ['category' => $page->category()]) ?>

        <?php snippet('call-to-action') ?>
  </main>

<?php snippet('footer') ?>
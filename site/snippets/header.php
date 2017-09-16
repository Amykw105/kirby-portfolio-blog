<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="cleartype" content="on" />
  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="author" content="AW" />
  <meta name="distribution" content="GLOBAL" />
  <meta name="revisit-after" content="1 day" />
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="language" content="en-GB" />
  <meta name="rating" content="General" />
  <meta name="copyright" content="2017" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta name="keywords" content=""/> <!----- ENTER SITE KEY WORDS HERE ----->
  <title><?= $page->SEOtitle()->html() ?></title>
  <?php if($page->SEOdescription()->isNotEmpty()): ?>
    <meta name="description" content="<?= $page->SEOdescription()->html() ?>">
  <?php else : ?>    
    <meta name="description" content="<?= $site->SEOdescription()->html() ?>">
  <?php endif ?>
  <link rel="canonical" href="<?= $page->url() ?>">

  <!-- Verifications -->
  <meta name="google-site-verification" content="<?= $site->googleValidate()->html() ?>" />
  <meta name="msvalidate.01" content="<?= $site->bingValidate()->html() ?>" />
  <meta name="p:domain_verify" content="2cb4535555a74c5bb09bfa2d9fe7ab06"/>
  <link rel="shortcut icon" href="/favicon.ico">

  <!-- Mobile icons -->
  <meta name="apple-mobile-web-app-title" content="<?= $site->title()->html() ?>">

  <!-- Google -->
  <meta itemprop="name" content="<?= $page->SEOtitle()->html() ?> | <?= $site->SEOtitle()->html() ?>">
  <meta itemprop="description" content="<?= $page->SEOdescription()->html() ?>">
  <?php if($page->googleImage()->isNotEmpty()): ?>
  <meta name="image" content="<?= $page->googleImage()->toFile()->url() ?>">
  <?php else : ?>    
  <meta name="image" content="<?= $site->googleImage()->toFile()->url() ?>">
  <?php endif ?>

  <!-- Facebook -->
  <meta property="og:description" content="<?= $page->SEOdescription()->html() ?>">
  <?php if($page->facebookImage()->isNotEmpty()): ?>
  <meta name="og:image" content="<?= $page->facebookImage()->toFile()->url() ?>">
  <?php else : ?>    
  <meta name="og:image" content="<?= $site->facebookImage()->toFile()->url() ?>">
  <?php endif ?>
  <meta property="og:title" content="<?= $page->SEOtitle()->html() ?> | <?= $site->SEOtitle()->html() ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $page->url() ?>">
  <meta property="og:locale" content="en_GB" />
  <meta property="og:site_name" content="A Web Strategy" />

  <!-- Twitter -->
  <meta name="twitter:description" content="<?= $page->SEOdescription()->html() ?>">
  <?php if($page->twitterImage()->isNotEmpty()): ?>
  <meta name="twitter:image:src" content="<?= $page->twitterImage()->toFile()->url() ?>">
  <?php else : ?>    
  <meta name="twitter:image:src" content="<?= $site->twitterImage()->toFile()->url() ?>">
  <?php endif ?>
  <meta name="twitter:title" content="<?= $page->SEOtitle()->html() ?> | <?= $site->SEOtitle()->html() ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@aWebStrategy">
  <meta name="twitter:creator" content="@aWebStrategy">
  
  <!-- <link href="https://fonts.googleapis.com/css?family=Copse|Muli" rel="stylesheet"> -->
  <?= css('assets/css/styles.css') ?>
  
  <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Copse|Muli' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  
  
  <script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Person",
  "name": "Amy Westlake",
  "jobTitle": "Web Developer",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Plymouth",
    "addressRegion": "Devon"
  }
}
</script>
</head>
<body class="<?= $page->class() ?>">

  <header class="main-header">
    <div class="wrapper">

      <div class="branding">
        <a href="<?= url() ?>" rel="home"><img src="https://a-web-strategy.co.uk/assets/images/a-web-strategy-social-web.png" alt="Bespoke web design & development for small businesses in Plymouth, Devon."/></a>
      </div>

      <?php snippet('menu') ?>
      <div class="clearfix"></div>
    </div>
  </header>

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
  <meta name="classification" content="Restaurant" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta name="keywords" content=""/> <!----- ENTER SITE KEY WORDS HERE ----->
  <title><?= $page->SEOtitle()->html() ?></title>
  <?php if($page->SEOdescription()->isNotEmpty()): ?>
    <meta name="description" content="<?= $page->SEOdescription()->html() ?>">
  <?php else : ?>    
    <meta name="description" content="<?= $site->SEOdescription()->html() ?>">
  <?php endif ?>
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
  <meta itemprop="image" content="http://dartmouthinntotnes.co.uk/images/socials/google-share.jpg">

  <!-- Facebook -->
  <meta property="og:description" content="<?= $page->SEOdescription()->html() ?>">
  <meta property="og:image" content="http://dartmouthinntotnes.co.uk/images/socials/facebook-share.jpg">
  <meta property="og:title" content="<?= $page->SEOtitle()->html() ?> | <?= $site->SEOtitle()->html() ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $page->url() ?>">
  <meta property="og:locale" content="en_GB" />

  <!-- Twitter -->
  <meta name="twitter:description" content="<?= $page->SEOdescription()->html() ?>">
  <meta name="twitter:image:src" content="http://dartmouthinntotnes.co.uk/images/socials/twitter-share.jpg">
  <meta name="twitter:title" content="<?= $page->SEOtitle()->html() ?> | <?= $site->SEOtitle()->html() ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?= $site->Twittertitle()->html() ?>">
  <meta name="twitter:creator" content="<?= $site->Twittertitle()->html() ?>">
  
  <link href="https://fonts.googleapis.com/css?family=Copse|Muli" rel="stylesheet">
  <?= css('assets/css/styles.css') ?>
  
</head>
<body class="<?= $page->class() ?>">

  <header class="main-header">
    <div class="wrapper">

      <div class="branding">
        <a href="<?= url() ?>" rel="home"><img src="/assets/images/a-web-strategy-web-development-social-media-marketing.png" alt="A Web Strategy - Web development and social media management"/></a>
      </div>

      <?php snippet('menu') ?>
      <div class="clearfix"></div>
    </div>
  </header>

<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="home-banner" style="background-image: url('<?= $page->files()->first()->url() ?>');">
      <div class="wrapper">
        <div class="overlay"></div>
        <div class="banner-content">
          <h1 class="intro-large"><?= $page->intro()->kirbytext() ?></h1>
        </div>
      </div>
    </div>

    <section class="content-section">

    <div class="wrapper">
      <div class="left">
      <h2 class="content-heading"><?= $page->subheading()->html() ?></h2>



      <?= $page->text()->kirbytext() ?>
    </div>
    <div class="right">
      <h3 class="content-heading">Let's get started..</h3>
      <p>Tell me a bit about your business..</P>

      <form method="post" class="contact-form">

     <?php if($alert): ?>
     <div class="<?php echo $class ?>">
       <ul>
         <?php foreach($alert as $message): ?>
         <li><?php echo html($message) ?></li>
         <?php endforeach ?>
       </ul>
     </div>
     <?php endif ?>

     <div class="field">
       <label for="name">Name <abbr title="required">*</abbr></label>
       <input type="text" id="name" name="name" placeholder="Your name">
     </div>

     <div class="field">
       <label for="email">Email <abbr title="required">*</abbr></label>
       <input type="email" id="email" name="email" required placeholder="Your email">
     </div>

     <div class="field">
       <label for="text">Text <abbr title="required">*</abbr></label>
       <textarea id="text" name="text" required placeholder="Tell me about your business"></textarea>
     </div>

     <input type="submit" name="submit" value="Submit" class="submit-button">

   </form>
</div>
<div class="clearfix"></div>
    </div>
  </section>

  </main>

<?php snippet('footer') ?>

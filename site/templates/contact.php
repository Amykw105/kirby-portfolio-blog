<?php snippet('header') ?>

  <main class="main">

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

      <center>
        <h2 class="content-heading">How can I help?</h2>
        <p>Tell me about your business and what you'd like to achieve with your online strategy.<br/><br/>
        You'll get an initial response within 24 hours.</p>
        <br/><br/>
      </center>
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
       <label for="website">Website <abbr title="required">*</abbr></label>
       <input type="website" id="website" name="website" placeholder="Your existing website">
     </div>
     
     <div class="field">
       <label for="budget">Budget <abbr title="required">*</abbr></label>
       <input type="budget" id="budget" name="budget" placeholder="Do you have a budget for your project?">
     </div>

     <div class="field">
       <label for="text">Text <abbr title="required">*</abbr></label>
       <textarea id="text" name="text" required placeholder="Tell me about your business."></textarea>
     </div>

     <input type="submit" name="submit" value="Submit" class="submit-button">

   </form>
<div class="clearfix"></div>
    <br/><br/>
    <center>
      <h3 class="content-heading"><?= $page->subheading()->html() ?></h3>
      <?= $page->text()->kirbytext() ?>
    </center>
    <br/><br/>
    </div>
    
  </section>

  </main>

<?php snippet('footer') ?>

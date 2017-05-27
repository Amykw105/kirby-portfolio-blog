<section class="content-section call-to-action">
  <div class="wrapper">
    <?php if(!$page->calltoaction()->empty()): ?>
      <p class="section-heading"><?= $page->calltoaction() ?> <a href="/contact" class="hire-me-call-to-action" title="Contact me to improve your online strategy">Lets get started</a></p>
    <?php else: ?>
      <p class="section-heading">Need help? <a href="/contact" class="hire-me-call-to-action" title="Contact me to improve your online strategy">Lets get started</a></p>
    <?php endif ?>
    
  </div>
</section>
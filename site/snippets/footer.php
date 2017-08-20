  <footer class="site-footer" role="contentinfo">
    <div class="wrapper">
      <div class="third">
        <div class="footer-navigation">
          <ul>
            <?php foreach($pages->visible() as $item): ?>
            <li class="menu-item">
              <a href="<?= $item->url() ?>" title="<?= $item->title()->html() ?>"><?= $item->title()->html() ?></a>
            </li>
            <?php endforeach ?>
            <li class="menu-item">
              <a href="https://twitter.com/aWebStrategy" rel="nofollow" title="A Web Strategy on Twitter">Twitter</a>
            </li>
            <li class="menu-item">
              <a href="https://uk.pinterest.com/aWebStrategy/" rel="nofollow" title="A Web Strategy on Pinterest">Pinterest</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="third">
        <div class="footer-navigation">
          <ul>
            <?php $services = page('services')->children()->visible(); ?>
            <?php foreach($services as $service): ?>
            <li class="menu-item">
              <a href="<?= $service->url() ?>"><?= $service->title()->html() ?></a>
            </li>
            <?php endforeach ?>
          </ul>
        </div>
      </div>
      <div class="third">
        <div class="footer-copy">
          <p class="title">Let me take care of your Website, Social Media and Email Marketing.</p>
          <p class="copy">Web Design & Development services in Plymouth, Devon. Affordable bespoke web sites, search engine optimisation and social media management for small businesses. <a href="/contact" title="Get in touch to find out how I can help your business grow online">Get in touch to find out how I can help your business grow online.</a></p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="footer-copyright">&copy; 2017 A Web Strategy</div>
  </footer>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
  <script type="text/javascript" src="/assets/js/libs.min.js"></script>
  <script type="text/javascript" src="/assets/js/scripts.min.js"></script>
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-99674919-1', 'auto');
    ga('send', 'pageview');
  
  </script>
  <!-- End Google Analytics -->
</body>
</html>
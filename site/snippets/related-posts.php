<?php

$posts = page('blog')->children()->visible()->filterBy('category', $category)->limit(4);


?>

<?php if($posts->count() > 0): ?>
<section class="content-section blog-section">
  <div class="wrapper">
    <p class="section-heading">Related Blog Posts</p>
      <div class="services-listing blog-flex-wrapper">

        <?php foreach($posts as $post): ?>
          <div class="home-blog-posts">
            <a class="home-blog-title" href="<?= $post->url() ?>"><?= $post->title()->html() ?></a>
            <p><?= excerpt($post->text(), 250) ?></p>
            <a class="home-blog-link" href="<?= $post->url() ?>">Read article</a>
          </div>
        <?php endforeach ?>
        <div class="clearfix"></div>
      </div>

</div>
</section>
<?php endif ?>
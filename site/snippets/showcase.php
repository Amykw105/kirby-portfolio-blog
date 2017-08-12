<?php

$services = page('services')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of services:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $services = $services->limit($limit);

?>

<ul class="services-listing">
  <p class="section-heading">What your business needs for a successful online strategy</p>
  <?php foreach($services as $service): ?>

    <li class="services-item">
        <a href="<?= $service->url() ?>" class="service-link">
          <div class="svg-icon <?= $service->class()->html() ?>">
          </div>
          <div class="service-caption">
            <h3 class="service-title"><?= $service->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>
  <div class="clearfix"></div>
</ul>
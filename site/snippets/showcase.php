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
if(isset($offset)) $services = $services->offset($offset);

?>

<ul class="services-listing">
  <?php foreach($services as $service): ?>

    <li class="services-item" style="background-image:url(<?= $service->files()->first()->url() ?>);">
      <div class="overlay"></div>
        <a href="<?= $service->url() ?>" class="service-link">
          
          <div class="service-caption">
            <h3 class="service-title"><?= $service->title()->html() ?></h3>
          </div>
        </a>
    </li>

  <?php endforeach ?>
  
</ul>
<div class="clearfix"></div>
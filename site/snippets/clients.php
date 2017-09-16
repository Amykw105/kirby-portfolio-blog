<?php

$clients = page('clients')->children()->visible();

/*

The $limit parameter can be passed to this snippet to
display only a specified amount of clients:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $clients = $clients->limit($limit);

?>

<ul class="clients-listing">
  <?php foreach($clients as $client): ?>

    <li class="clients-item">
        <a href="<?= $client->url() ?>" class="client-link">
          <img src="<?= $client->mainimage()->toFile()->url() ?>" />
        </a>
    </li>

  <?php endforeach ?>
  <div class="clearfix"></div>
</ul>
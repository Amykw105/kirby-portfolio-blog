<?php 

$kirby = kirby();
// configuration goes here

$domain  = server::get('localhost/kirby/');
$kirby->urls->index    = url::scheme() . '://localhost/kirby/' . $domain;

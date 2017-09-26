<?php

$perfeed = $page->perfeed()->int();
echo page('blog')->children()->visible()->flip()->limit(($perfeed >= 1)? $perfeed : 5)->feed(array(
    'title'       => $page->title(),
    'description' => $page->description(),
    'link'        => 'blog',
    'url'         => $page->url()
));
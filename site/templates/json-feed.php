<?php

$perfeed = $page->perfeed()->int();

echo page('blog')->children()->visible()->flip()->limit(($perfeed >= 1)? $perfeed : 5)->jsonfeed(array(
	'title' => $page->title()->value(),
	'feed' => $page->url()
));
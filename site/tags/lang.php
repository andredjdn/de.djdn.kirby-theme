<?php
kirbytext::$tags['lang'] = array(
    'attr' => array(
        'content'
    ),
    'html' => function($tag) {
        $lang = $tag->attr('lang');
        $value = $tag->attr('content', 'lang');

        return '<i lang="' . $lang . '" class="lang">' . $value . '</i>';
    }
);
?>
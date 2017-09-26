<?php
kirbytext::$tags['abbr'] = array(
    'attr' => array(
        'title'
    ),
    'html' => function($tag) {
        $value = $tag->attr('abbr');
        $title = $tag->attr('title', 'abbr');

        return '<abbr title="' . $title . '">' . $value . '</abbr>';
    }
);
?>
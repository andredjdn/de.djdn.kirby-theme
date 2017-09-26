<?php
kirbytext::$tags['xmpp'] = array(
    'attr' => array(
        'text'
    ),
    'html' => function($tag) {
        $value = $tag->attr('xmpp');
        $text = $tag->attr('text', 'xmpp');

        return '<a href="xmpp:' . $value . '">' . $text . '</a>';
    }
);
?>
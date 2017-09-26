<?php

/*
 * Add support to remove p tags from around kirby formatted text
 *
 * Author: Rob James
 * License: MIT License
 *
 */
function kirbytextsans($text='') {
    $text = kirbytext($text, true);
    return preg_replace('/<p>(.*)<\/p>/', '$1', $text);
}
<?php
/**
 * Banner V1 template part
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GAMR
 * @subpackage GAMR  
 * @since 1.0
 * @version 1.0
 */

 $settings = [
    'title' => null,
    'image' => null,
];

if (!empty($args)) {
    $settings = array_merge($settings,$args);
}
var_dump($settings);
?>
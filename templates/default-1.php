<?php
if(!defined('ABSPATH')) exit;
/**
 * Template con la estructura de la pagina "Default 1"
 * 
 * Template Name: Default 1
 * Template Post Type: page
 * 
 * @package Wordpress
 * @subpackage GAMR
 * @since 1.0
 * @version 1.0
 */
get_header();
$post = get_post();
$settings = gamrGetTplSettings('settings_defult_1', 'GamrSettingsTplDefaultV1', $post->ID, true);
?>
<main>
    <div class="gamr-defult-1" id="gamr-defult-1">
        <?php if(!$settings['banner']['args']['hide']):?>
            <section class="gamr-section">
                <?php get_template_part('template-parts/banner/banner','1', $settings['banner']['args']);?>
            </section>
        <?php endif;?>
    </div>
</main>

<?php get_footer()?>
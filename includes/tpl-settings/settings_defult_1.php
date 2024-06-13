<?php
if(!defined('ABSPATH')) exit;

/**
 * Default V1 settings class
 * @version 1.0.0
 */
class GamrSettingsTplDefaultV1
{
    /**
     * Return the template settings
     * @param $postID in Post ID
     * @return array Template settings
     */
    public static function getSettings(int $postID = 0):array
    {
        $settings =[
            'banner' => [
                'args'=> [
                    'hide'=>null,
                    'title'=>null,
                    'image'=>null,
                ]
            ]
        ];
        if(class_exists('ACF')){
            $settings['banner']['args']['hide'] = get_field('banner_hidde');
            $settings['banner']['args']['title'] = get_field('banner_title');
            $settings['banner']['args']['image'] = get_field('banner_image');
        }
        return $settings;
    }
}
?>
<?php

namespace Alekhin\Devin;

use const ss_version;
use const WP_DEBUG;
use function __;
use function add_action;
use function add_filter;
use function add_theme_support;
use function get_bloginfo;
use function get_post_thumbnail_id;
use function get_stylesheet_directory_uri;
use function register_nav_menu;
use function set_post_thumbnail_size;
use function wp_enqueue_style;
use function wp_get_attachment_image_src;
use function wp_title;

if (!defined('ABSPATH')) {
    echo 'really?';
    exit;
}

define('ss_version', '1.0.0.201707041335' . (WP_DEBUG ? '.' . time() : ''));

class DevinTheme {

    static function get_admin_gravatar() {
        return 'https://www.gravatar.com/avatar/' . md5(strtolower(get_bloginfo('admin_email'))) . '?s=160&d=mm';
    }

    static function get_post_thumbnail_source($post_id) {
        if (($sources = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'post-thumbnail')) === false) {
            return '';
        }
        if (!is_array($sources)) {
            return '';
        }
        if (count($sources) < 1) {
            return '';
        }
        return trim($sources[0]);
    }

}

add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(756, 426, true);

    register_nav_menu('primary', __('Primary Menu', 'devin'));
});
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('dvn-boilerplate', get_stylesheet_directory_uri() . '/css/boilerplate.css', [], ss_version);
    wp_enqueue_style('dvn-google-fonts', 'https://fonts.googleapis.com/css?family=Domine|Open+Sans');
    wp_enqueue_style('dvn-main', get_stylesheet_directory_uri() . '/css/main.css', [], ss_version);
});
add_filter('excerpt_more', function ($more) {
    return '&hellip;';
});

if (!function_exists('_wp_render_title_tag')) {
    add_action('wp_head', function () {
        echo '<title>';
        wp_title('|', true, 'right');
        echo '</title>';
    });
}

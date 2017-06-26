<?php

namespace Alekhin\Devin;

use Alekhin\WebsiteHelpers\Address;

class DevinTheme {

    static function get_ss_version() {
        return ss_version;
    }

    static function get_dir($to_what = '') {
        return dir . $to_what;
    }

    static function get_url($to_what = '') {
        return url . $to_what;
    }

    static function get_admin_gravatar() {
        $a = new Address('https://www.gravatar.com/avatar/' . md5(strtolower(get_bloginfo('admin_email'))));
        $a->query['s'] = 160;
        $a->query['d'] = 'mm';
        return $a->url();
    }

    static function on_wp_enqueue_scripts() {
        wp_enqueue_style('dvn-boilerplate', self::get_url('/styles/boilerplate.css'), [], self::get_ss_version());
        wp_enqueue_style('dvn-google-fonts', 'https://fonts.googleapis.com/css?family=Domine|Open+Sans');
        wp_enqueue_style('dvn-main', self::get_url('/styles/main.css'), [], self::get_ss_version());

        wp_enqueue_script('dvn-jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', [], self::get_ss_version(), TRUE);
        // integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        // crossorigin="anonymous"
        wp_enqueue_script('dvn-plugins', self::get_url('/scripts/plugins.js'), ['dvn-jquery',], self::get_ss_version(), TRUE);
        wp_enqueue_script('dvn-main', self::get_url('/scripts/main.js'), ['dvn-jquery', 'dvn-plugins',], self::get_ss_version(), TRUE);
    }

    static function initialize() {
        add_action('wp_enqueue_scripts', [__CLASS__, 'on_wp_enqueue_scripts',]);
    }

}

<?php

namespace Alekhin\Devin;

class CompatibilityPre4P1 {

    static function on_wp_head() {
        ?>
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
    }

    static function initialize() {
        add_action('wp_head', [__CLASS__, 'on_wp_head',]);
    }

}

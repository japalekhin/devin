<?php

use Alekhin\Devin\DevinTheme;
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="site-brand">
            <div class="limiter">
                <header class="site-header">
                    <h1 class="site-name">
                        <a href="<?php bloginfo('url'); ?>">
                            <span class="site-logo" style="background-image: url('<?php echo DevinTheme::get_admin_gravatar(); ?>');"></span>
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <ul class="site-social">
                        <li><a href="https://www.facebook.com/japalekhin" target="_blank" class="social social-facebook">Facebook</a></li>
                        <li><a href="https://twitter.com/japalekhin" target="_blank" class="social social-twitter">Twitter</a></li>
                        <li><a href="https://www.instagram.com/japalekhin/" target="_blank" class="social social-instagram">Instagram</a></li>
                        <li><a href="https://www.strava.com/athletes/japalekhin" target="_blank" class="social social-strava">Strava</a></li>
                        <li><a href="https://github.com/japalekhin" target="_blank" class="social social-github">GitHub</a></li>
                        <li><a href="https://profiles.wordpress.org/japalekhin" target="_blank" class="social social-wordpress-org">WordPress.org</a></li>
                    </ul>
                    <p class="site-description"><?php bloginfo('description'); ?></p>
                </header>
            </div>
        </header>
        <nav class="site-navigation">
            <div class="limiter">
                <div class="nav-bar">
                    <?php wp_nav_menu(['theme_location' => 'primary', 'depth' => 1,]); ?>
                </div>
            </div>
        </nav>
        <section class="site-body">
            <div class="limiter">
                <div class="site-content">

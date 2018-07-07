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
                    <span class="site-identity">
                        <div class="site-logo" style="background-image: url('<?php echo DevinTheme::get_admin_gravatar(); ?>');"></div>
                        <div class="site-info">
                            <h1 class="site-title">
                                <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                            </h1>
                            <p class="site-description"><?php bloginfo('description'); ?></p>
                            <ul class="site-social">
                                <li><a href="https://github.com/japalekhin" target="_blank" title="GitHub" class="social social-github">GitHub</a></li>
                                <li><a href="https://profiles.wordpress.org/japalekhin" target="_blank" title="GitHub" class="social social-wordpress-org">WordPress.org</a></li>
                                <li><a href="https://www.strava.com/athletes/japalekhin" target="_blank" title="Strava" class="social social-strava">Strava</a></li>
                                <li><a href="https://www.linkedin.com/in/japa-alekhin-llemos-400641167/" target="_blank" class="social social-linked-in">LinkedIn</a>
                                <li><a href="https://www.facebook.com/japalekhin" target="_blank" title="Facebook" class="social social-facebook">Facebook</a></li>
                                <li><a href="https://twitter.com/japalekhin" target="_blank" title="Twitter" class="social social-twitter">Twitter</a></li>
                                <li><a href="https://www.instagram.com/japalekhin/" target="_blank" title="Instagram" class="social social-instagram">Instagram</a></li>
                            </ul>
                        </div>
                    </span>
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

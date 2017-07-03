<?php

namespace Alekhin\Devin;

if (!defined('ABSPATH')) {
    echo 'really?';
    exit;
}

define(__NAMESPACE__ . '\ss_version', '1.0.0.201707041335' . (WP_DEBUG ? '.' . time() : ''));
define(__NAMESPACE__ . '\dir', get_stylesheet_directory());
define(__NAMESPACE__ . '\url', get_stylesheet_directory_uri());

require_once dir . '/classes/vendor/autoload.php';
$symfony_loader = new \Symfony\Component\ClassLoader\Psr4ClassLoader();
$symfony_loader->addPrefix('Alekhin\\Devin\\', dir . '/classes/Alekhin/Devin');
$symfony_loader->register();

DevinTheme::initialize();

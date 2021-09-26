<?php

/**
 * Plugin Name:       Genie Test Suite
 * Plugin URI:        https://geniepress.org
 * Description:       Test Suite for GeniePress framwork
 * Version:           1.0.0
 * Requires at least: 5.5
 * Author:            Sunil Jaiswal
 * Author URI:        https://geniepress.org
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

namespace GenieTest;

use GeniePress\Genie;
use GenieTest\PostTypes\Sample;
use GenieTest\PostTypes\Testimonial;

include_once('vendor/autoload.php');

Genie::createPlugin()
    ->enableAjaxHandler()
    ->enableApiHandler()
    ->enableBackgroundJobs()
    ->enableCacheBuster()
    ->enableDeploymentHandler()
    ->setHookPrefix('testimonials/')
    ->withComponents([

        // Our main Plugin
        Plugin::class,

        // Our Post Types
        Testimonial::class,
        Sample::class,

        // utilities
        Shortcodes::class,
    ])
    ->start();

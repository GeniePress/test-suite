<?php

namespace GenieTest;

use GeniePress\Fields\DateField;
use GeniePress\Fields\DateTimeField;
use GeniePress\Genie;
use GeniePress\Interfaces\GenieComponent;
use GeniePress\Utilities\CreateTaxonomy;
use GeniePress\Utilities\HookInto;
use GenieTest\PostTypes\Testimonial;
use PHPUnit\Runner\Hook;

class Plugin implements GenieComponent
{

    public static function setup() : void
    {

        HookInto::action(Genie::hookName('activation'))->run(function(){
            update_option('genie_installed', 'activated');
        });

        HookInto::action(Genie::hookName('deactivation'))->run(function(){
            update_option('genie_installed', 'deactivation');
        });

        /**
         * Make sure we load jQuery
         */
        HookInto::action('init')
            ->run(function () {
                wp_enqueue_script('jquery');
            });

    }

}

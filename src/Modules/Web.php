<?php

namespace MeestShipping\Modules;

class Web
{
    public function init()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);
    }

    public function enqueueScripts()
    {
        if (is_page('checkout') || has_shortcode(get_the_content(), 'woocommerce_checkout')) {
            Asset::load(['meest', 'jquery-select2', 'meest-address', 'meest-checkout']);
            Asset::localize('meest-checkout');
        }
    }
}

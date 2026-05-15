<?php
function wjct_enqueue_styles() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Palette+Mosaic&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
add_action('wp_enqueue_scripts', 'wjct_enqueue_styles');

function wjct_footer_text() {
    echo '<p class="wjct-footer-credit">Built for WJCT skills test</p>';
}
add_action('wp_footer', 'wjct_footer_text');
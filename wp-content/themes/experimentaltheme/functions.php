<?php 

function university_assets() {
    wp_enqueue_style('university-style-sheet', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_assets');
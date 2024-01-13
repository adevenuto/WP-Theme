<?php 

function experimental_theme_assets() {
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), ['jquery'], '1.0', true);
    
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university-style-sheet', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university-style-sheet-index', get_theme_file_uri('/build/index.css'));
    
}

add_action('wp_enqueue_scripts', 'experimental_theme_assets');
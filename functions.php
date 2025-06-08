<?php

function balls_files() {
  wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  // wp_enqueue_style('custom-google-fonts', '@import url('//fonts.googleapis.com/css2?family=Jersey+15&family=Press+Start+2P&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap');');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'balls_files');
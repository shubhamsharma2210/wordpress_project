<?php

// Parent theme ki styles ko load karne ka sahi tarika
function ws_cube_tech_child_enqueue_styles() {
    wp_enqueue_style('ws-cube-tech-parent-style', get_template_directory_uri() . '/css/custom-css.css');
    wp_enqueue_script('ws-cube-tech-parent-script', get_template_directory_uri() . '/js/parent-script.js');
}
add_action('wp_enqueue_scripts', 'ws_cube_tech_child_enqueue_styles');

add_theme_support('post-thumbnails');

// Internal Database URL-:  postgresql://wscubetech_user:8QDbbsLAlMoELR8GR8XGnL8XMmv4fUJJ@dpg-cuunl45svqrc73dod33g-a/wscubetech

// External Database URL-: postgresql://wscubetech_user:8QDbbsLAlMoELR8GR8XGnL8XMmv4fUJJ@dpg-cuunl45svqrc73dod33g-a.oregon-postgres.render.com/wscubetech
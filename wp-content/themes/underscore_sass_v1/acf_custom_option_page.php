<?php

if( function_exists('acf_add_options_page') ) {

    $page = acf_add_options_page(array(
        'page_title'    => 'Social header',
        'menu_title'    => 'Réseaux sociaux',
        'menu_slug'     => 'acf_reseaux',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));
 
}

?>
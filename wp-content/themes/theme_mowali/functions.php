<?php
register_nav_menus( array(
'menu-principal' => 'Menu principal'
) );


// stop wp removing div tags
function magnium_tinymce_fix( $init )
{
    // html elements being stripped
    $init['extended_valid_elements'] = 'div[*], article[*]';
    // don't remove line breaks
    $init['remove_linebreaks'] = false;
    // convert newline characters to BR
    $init['convert_newlines_to_brs'] = true;
    // don't remove redundant BR
    $init['remove_redundant_brs'] = false;
    // pass back to wordpress
    return $init;
}
add_filter('tiny_mce_before_init', 'magnium_tinymce_fix');

?>
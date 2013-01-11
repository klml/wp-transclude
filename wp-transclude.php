<?php
/*
Plugin Name: WP-Transclude
Plugin URI: https://github.com/klml/wp-transclude
Description: Transcludes only the content of posts or pages within another page or post. Add [page title="myniceslug"] to your post or page. Inspired by http://www.mediawiki.org/wiki/Help:Templates
Version: 0.9
Author: mg & klml
*/
function transclude($atts) { // http://codex.wordpress.org/Template_Tags/get_posts
    $args=array(
        'name' => $atts['title'],
        'post_type' => array('page','post'),
        'post_status' => 'publish',
        'numberposts' => 1
    );
    $content = get_posts($args);
    if( $content ) {
        $rawtext = $content[0]->post_content ;
        foreach ($atts as $variableword => $variablevalue ) {
            $rawtext =  str_replace( '{{'.$variableword.'}}', $variablevalue , $rawtext);
        }
        return $rawtext ;
    };
}
add_shortcode('page', 'transclude');

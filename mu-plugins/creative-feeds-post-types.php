<?php

//Custom Post Types
function creative_feeds_post_type(){
    register_post_type('author', array(
        'public' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'labels' => array(
            'name' => 'Authors'
        )
    ));
}

add_action('init', 'creative_feeds_post_type');

?>
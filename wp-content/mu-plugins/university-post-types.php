<?php
function university_post_types() {
    // Event Post Type
    register_post_type('event', array(
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'labels' => array(
            'name' => 'Events',
            'add_new' => 'Add New Event',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    // Program Post Type
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new' => 'Add New Program',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards'
    ));
}
  
add_action('init', 'university_post_types');

// function change_custom_post_label() {
//     global $menu, $submenu;
//     $post_type = 'event'; //여기에 당신이 만든 커스텀 포스트 타입 이름을 넣으세요
//     $submenu["edit.php?post_type={$post_type}"][10][0] = 'Add New Event';
// }

// add_action( 'admin_menu', 'change_custom_post_label' );

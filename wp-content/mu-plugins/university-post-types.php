<?php
function university_post_types() {
  // Campus Post Type
  register_post_type('campus', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'campuses'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Campuses',
      'add_new' => 'Add New Campus',
    //   'add_new_item' => 'Add New Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus'
    ),
    'menu_icon' => 'dashicons-location-alt'
  ));

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
        'supports' => array('title'),
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

    // Professor Post Type
    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Professors',
            'add_new' => 'Add New Professor',
            // 'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}
// Maximum upload file size
add_action('init', 'university_post_types');

// function change_custom_post_label() {
//     global $menu, $submenu;
//     $post_type = 'event'; //여기에 당신이 만든 커스텀 포스트 타입 이름을 넣으세요
//     $submenu["edit.php?post_type={$post_type}"][10][0] = 'Add New Event';
// }

// add_action( 'admin_menu', 'change_custom_post_label' );

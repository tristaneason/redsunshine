<?php
// Add stylesheet and scripts file
function add_theme_scripts() {
    wp_enqueue_style('style', get_template_directory_uri() . '/styles/style.css', [], time());
    wp_enqueue_script('script', get_template_directory_uri() . '/scripts/scripts.js', [], time(), 1);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

// Add widgets
function widget_blog_sidebar() {
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog_sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ]);
}
add_action('widgets_init', 'widget_blog_sidebar');

// Add thumbnail support
add_theme_support('post-thumbnails', ['post', 'page']);

// Convert excerpt [...] to linked Read More
function wpdocs_excerpt_more($more) {
    if (!is_single()) {
        $more = sprintf(
            '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink(get_the_ID()), __(' Read more <i class="fas fa-angle-double-right"></i>', 'redsunshine')
        );
    }
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>

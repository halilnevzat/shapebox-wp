<?php
/*
Template Name: only content
*/



// Remove WordPress CSS
function remove_wp_css() {
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'remove_wp_css', 100);

// Display post content
while ( have_posts() ) : the_post();
  the_content();
endwhile;
?>
<?php //DO NOT INCLUDE THIS LINE

function custom_meta_tags() {
  if (is_singular()) {
    global $post;

    $meta_title = get_post_meta($post->ID, 'custom_meta_title', true);
    $meta_description = get_post_meta($post->ID, 'custom_meta_description', true);
    $meta_keywords = get_post_meta($post->ID, 'custom_meta_keywords', true);

    if ($meta_title) {
      echo '<meta name="title" content="' . esc_attr($meta_title) . '">';
    }
    if ($meta_description) {
      echo '<meta name="description" content="' . esc_attr($meta_description) . '">';
    }
    if ($meta_keywords) {
      $meta_keywords = preg_replace('/\s*,\s*/', ', ', $meta_keywords);
      echo '<meta name="keywords" content="' . esc_attr($meta_keywords) . '">';
    }
  }
}
add_action('wp_head', 'custom_meta_tags');

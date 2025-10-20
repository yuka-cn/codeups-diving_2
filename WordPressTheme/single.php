<?php get_header(); ?>

<?php
if(is_single()) {
    set_post_views(get_the_ID());
}
?>

<?php get_footer(); ?>
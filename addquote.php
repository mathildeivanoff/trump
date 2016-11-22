<?php get_header(); ?>

<?php
/*
Template Name: addquote
*/
?>
<h2><?php the_title(); ?></h2>
<?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Full Width Template
 *
 * @package IDM250: Fei Young's Portfolio Template Theme
 */
?>

<?php get_header(); ?>

<?php if (has_post_thumbnail()) : ?>
<div class="featured-image">
    <?php the_post_thumbnail(); ?>
</div>
<?php endif; ?>

<?php get_template_part('components/content'); ?>
</div>

<?php get_footer(); ?>
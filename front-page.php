<?php get_header(); ?>    

    <!-- <h1>IDM 250</h1>
    <h1><?php echo 'This is the Home Page';?></h1> -->

    <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-thumbnail">
        <?php the_post_thumbnail('medium'); ?>
    </div>
    <?php endif; ?>

    <h1>
    <?php 
    echo get_the_title();
    ?>
    </h1>

    <div class="main-content">
        <?php 
        echo get_the_content();
        ?>
    </div>
    <div>
    <?php get_template_part('components/latest-projects'); ?>
    </div>
<?php get_footer(); ?>    

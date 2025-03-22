<article class="project-card">
  <a href="<?php the_permalink(); ?>" class="project-cardlink">
    <?php if (has_post_thumbnail()) : ?>
    <div class="project-cardimage-wrapper">
      <?php the_post_thumbnail('large', ['class' => 'project-cardimage']); ?>
      <div class="project-cardoverlay"></div>
      <div class="project-cardmeta">
        <time datetime="<?php echo get_the_date('c'); ?>" class="project-carddate">
          <?php echo get_the_date(); ?>
        </time>
        <?php
                    $tags = get_the_terms(get_the_ID(), 'project-categories');
        if (!empty($tags) && !is_wp_error($tags)) :
            $tag_names = wp_list_pluck($tags, 'name');
            echo '<span class="project-cardtags">' . implode(', ', $tag_names) . '</span>';
        endif;
        ?>
      </div>
      <h3 class="project-cardtitle"><?php the_title(); ?></h3>
    </div>
    <?php endif; ?>
  </a>
</article>
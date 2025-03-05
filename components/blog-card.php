<article class="blog-card">
    <a href="<?php the_permalink(); ?>" class="blog-cardlink">
        <?php if (has_post_thumbnail()) : ?>
        <div class="blog-cardimage-wrapper">
        <?php the_post_thumbnail('large', ['class' => 'blog-cardimage']); ?>
        </div>
        <?php endif; ?>

        <div class="blog-cardcontent">
            <div class="blog-cardmeta">

                <?php
                $categories = get_the_category();
                if (!empty($categories)) :
                    ?>
                <a href="<?php echo get_category_link($categories[0]->term_id); ?>" class="blog-cardcategory">
                <?php echo $categories[0]->name; ?>
                </a>
                <?php endif; ?>
            </div>

            <h3 class="blog-cardtitle"><?php the_title(); ?></h3>
            <p class="blog-cardexcerpt">
                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
            </p>
        </div>
    </a>
</article>
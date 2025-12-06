<?php 
get_header(); ?>

<main role="main">

    <!-- section -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row news-post-content">
                    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <div class="col-md-12 news-post-description events-page-description">
                        <div class="row news-post-desc">
                            <div class="col-md-5 news-post-img">
                                <a href="<?php the_permalink($id); ?>"><?php the_post_thumbnail("thumbnail");?></a>
                            </div>
                            <div class="col-md-7 news-post-text">
                                <a href="<?php the_permalink($id); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <p> <?php echo wp_trim_words(get_the_content(), 30, '...');?></p>
                                <a class="read_more_button" href="<?php the_permalink($id); ?>">Learn
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?phpendwhile; ?>
            </div>
            <?php else: ?>

            <!-- article -->
            <article>
                <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
            </article>
            <!-- /article -->

            <?php endif; ?>

            <?php get_template_part('pagination'); ?>

        </div>
    </div>

</main>

<?php get_footer(); ?>
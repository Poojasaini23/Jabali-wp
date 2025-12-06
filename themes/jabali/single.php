<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="single-page news-section-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 single-page-content">
                <div class="single-page-image">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="news-post-description">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php endwhile;
endif; ?>
<?php get_footer() ?>
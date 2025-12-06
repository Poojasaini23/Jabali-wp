<?php
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="student-section">
    <section>
        <div class="title-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto title-content-section-description">
                        
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php endwhile;
endif; ?>
<?php get_footer() ?>
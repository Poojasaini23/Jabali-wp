<?php /* Template Name: About Us */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="scroll-animation">
    <div class="about-section-1-bg">
        <div class="container">
            <div class="row about-section-1">
                <div class="col-lg-4 col-md-6 ml-auto about-section-1-top">
                    <h2><?php the_field("jabali_academy_title");?></h2>
                    <?php the_field("jabali_academy_content");?>
                    <?php the_content();?>
                </div>
                <div class="col-lg-3 col-md-4 mr-auto about-section-1-right-image">
                    <?php $alt_text = get_field('jabali_academy_image');
                        if (!empty($alt_text)) : ?>
                        <img src="<?php echo esc_url($alt_text['url']); ?>" title="<?php echo esc_attr($alt_text['title']); ?>" alt="<?php echo esc_attr($alt_text['caption']); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <img src="<?php the_field("jabali_academy_lion_image");?>" alt="" class="about-section-1-image"/>
    </div>
</div>

<div class="scroll-animation">
    <div class="about-mission-section" style="background-image: url('<?php the_field("our_mission_background_image");?>');">
        <img src="<?php the_field("our_mission_background_image");?>" alt="" style="visibility: hidden; width: 100%;"/>
        <div class="about-mission-descritpion">
            <div class="container">
                <div class="row about-mission-desc">
                    <div class="col-md-10 mx-auto about-mission-content">
                        <h2><?php the_field("our_mission_title");?></h2>
                        <?php the_field("our_mission_content");?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile;
endif; ?>
<?php get_footer() ?>
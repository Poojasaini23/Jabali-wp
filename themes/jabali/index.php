<?php /* Template Name: Home page */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="scroll-animation">
    <div class="home-discover-section" style="background-image: url('<?php the_field("discover_background_image")?>');">
        <img src="<?php the_field("discover_background_image")?>" alt="" style="visibility: hidden; width: 100%;"/>
        <div class="home-discover-description">
            <div class="container">
                <siv class="row">
                    <div class="col-md-6 col-sm-8 ml-auto home-discover-content">
                        <?php the_field("discover_content")?>
                    </div>
                </siv>
            </div>
        </div>
    </div> 
</div>

<div class="scroll-animation scroll-animation-remove">
    <div class="home-service-section">
        <div class="container-fluid">
            <div class="row home-service-repeater">
                <?php if (have_rows('service_repeater')) : ?>
                <?php while (have_rows('service_repeater')) : the_row(); ?>
                <div class="col-md-4 home-service-description">
                    <div class="home-service-repeater-description">
                        <?php $alt_text = get_sub_field('service_repeater_image');
                            if (!empty($alt_text)) : ?>
                            <img src="<?php echo esc_url($alt_text['url']); ?>" title="<?php echo esc_attr($alt_text['title']); ?>" alt="<?php echo esc_attr($alt_text['caption']); ?>" />
                        <?php endif; ?>
                    
                        <div class="home-service-content">
                            <h2><?php the_sub_field("service_repeater_title");?></h2>
                            <?php the_sub_field("service_repeater_content");?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 home-service-button">
                        <?php
                            $link = get_field('service_button');
                            if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <div class="header-green-button">
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php endwhile;
endif; ?>
<?php get_footer() ?>
<?php /* Template Name: Student */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="student-section">
    <?php
        if (have_rows('page_contents')) :
            while (have_rows('page_contents')) : the_row(); ?>
    <?php if (get_row_layout() == 'image_with_content') : ?>

    <section>
        <div class="container">
            <div class="row student-image-with-repeater">
                <?php if (have_rows('image_with_content_repeater')) : ?>
                <?php while (have_rows('image_with_content_repeater')) : the_row(); ?> 
                <div class="col-md-10 mx-auto student-image-with-repeater-description scroll-animation scroll-animation-remove">
                    <div class="student-image-with-repeater-desc">
                        <div class="student-image-with-repeater-image">
                            <?php $alt_text = get_sub_field('image_with_content_repeater_image');
                                            if (!empty($alt_text)) : ?>
                            <img class="inner-img" src="<?php echo esc_url($alt_text['url']); ?>"
                                title="<?php echo esc_attr($alt_text['title']); ?>"
                                alt="<?php echo esc_attr($alt_text['caption']); ?>" />
                            <?php endif; ?>
                            <h2 class="student-image-with-repeater-title">
                                <?php the_sub_field("image_with_content_repeater_title");?></h2>
                        </div>
                        <div class="student-image-with-repeater-content">

                            <?php if (!empty(get_sub_field('image_with_content_repeater_content'))) : ?>
                            <?php the_sub_field("image_with_content_repeater_content");?>
                            <?php endif; ?>

                            <?php
                                        $link = get_sub_field('image_with_content_repeater_button');
                                        if ($link) :
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                            <div class="header-green-button">
                                <a aria-label="<?php the_sub_field("title"); ?>"
                                    href="<?php echo esc_url($link_url); ?>"
                                    target="<?php echo esc_attr($link_target); ?>">
                                    <?php echo esc_html($link_title); ?>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <?php elseif (get_row_layout() == 'title_with_content') : ?>

    <div class="scroll-animation">
        <section>
            <div class="title-content-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mx-auto title-content-section-description">
                            <?php if (!empty(get_sub_field('title_with_content_section_title'))) : ?>
                            <h2 class="common-heading"><?php the_sub_field("title_with_content_section_title");?></h2>
                            <?php endif; ?>

                            <?php if (!empty(get_sub_field('title_with_content_section_content'))) : ?>
                            <?php the_sub_field("title_with_content_section_content");?>
                            <?php endif; ?>

                            <?php $buttons = get_sub_field("title_with_content_section_option_button");
                                if ($buttons == "Left Side") { ?>
                            <div class="title-content-section-button-left">
                                <?php
                                            $link = get_sub_field('title_with_content_section_button');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                <div class="header-green-button">
                                    <a aria-label="<?php the_sub_field("title"); ?>"
                                        href="<?php echo esc_url($link_url); ?>"
                                        target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php }
                                if ($buttons == "Right Side") {?>
                            <div class="title-content-section-button-right">
                                <?php
                                            $link = get_sub_field('title_with_content_section_button');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
                                <div class="header-bg-green-button">
                                    <a aria-label="<?php the_sub_field("title"); ?>"
                                        href="<?php echo esc_url($link_url); ?>"
                                        target="<?php echo esc_attr($link_target); ?>">
                                        <?php echo esc_html($link_title); ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <?php elseif (get_row_layout() == '2_column_content_and_image') : ?>

    <div class="scroll-animation">
        <div class="2-column-content-image-section">
            <div class="container">
                <div class="row 2-column-content-image-description">
                    <div class="col-md-6 2-column-content-image-section-left">
                        <?php if (!empty(get_sub_field('2_column_content_and_image_section_title'))) : ?>
                        <h2><?php the_sub_field("2_column_content_and_image_section_title");?></h2>
                        <?php endif; ?>

                        <?php if (!empty(get_sub_field('2_column_content_and_image_section_content'))) : ?>
                        <?php the_sub_field("2_column_content_and_image_section_content");?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6 2-column-content-image-section-right">
                        <?php $alt_text = get_sub_field('2_column_content_and_image_section__image');
                        if (!empty($alt_text)) : ?>
                        <img src="<?php echo esc_url($alt_text['url']); ?>"
                            title="<?php echo esc_attr($alt_text['title']); ?>"
                            alt="<?php echo esc_attr($alt_text['caption']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php elseif (get_row_layout() == 'faq') : ?>
    <section>
        <div class="container">
            <div class="faq ul-list-img row">
                <div class="col-md-11 mx-auto">
                    <div class="scroll-animation">
                        <?php $cn2 = get_sub_field("faq_title");
                            if (!empty($cn2)) { ?>
                        <h2><?php echo $cn2; ?> </h2>
                        <?php } ?>

                        <div class="accordionExample" id="accordion">
                            <?php if (have_rows('faq_repeater')) : ?>
                            <?php $cn = 0;
                                    while (have_rows('faq_repeater')) : the_row(); ?>
                            <div class="card">
                                <div class="card-header p-0" id="heading<?php echo $cn; ?>">
                                    <h4 class="mb-0">
                                        <ul class="ul-list-img">
                                            <button class="btn btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapse<?php echo $cn; ?>"
                                                aria-expanded="false" aria-controls="collapse<?php echo $cn; ?>"
                                                title="">
                                                <li><?php the_sub_field('faq_repeater_question'); ?></li>
                                                <div class="faq-icon">
                                                    <i class="float-right fas fa-angle-down"></i>
                                                </div>
                                            </button>
                                        </ul>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $cn ?>" class="collapse"
                                    aria-labelledby="heading<?php echo $cn; ?>" data-parent="#accordion">
                                    <div class="card-body">
                                        <?php the_sub_field('faq_repeater_answer'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php $cn++;
                                    endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php elseif (get_row_layout() == 'gallery') : ?>
    <div class="scroll-animation">
        <div class="gallery-repeater">
            <?php if (have_rows('gallery_repeater')) : ?>
            <?php while (have_rows('gallery_repeater')) : the_row(); ?>
            <div class="gallery-repeater-content student-image-with-repeater-image">
                <?php $alt_text = get_sub_field('gallery_repeater_image');
            if (!empty($alt_text)) : ?>
                <img src="<?php echo esc_url($alt_text['url']); ?>" title="<?php echo esc_attr($alt_text['title']); ?>"
                    alt="<?php echo esc_attr($alt_text['caption']); ?>" />
                <?php endif; ?>
                <h2><?php the_sub_field("gallery_repeater_title");?></h2>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>


    <?php endif;
            endwhile;
        else :
        endif;
        ?>
</div>


<?php endwhile;
endif; ?>
<?php get_footer() ?>
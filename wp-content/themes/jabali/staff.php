<?php
/* Template Name: Staff */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="section-1">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 mx-auto">
                <div class="row staff-section-1">
                    <?php if (have_rows('staff_repeater')) : $i = 0; ?>
                    <?php while (have_rows('staff_repeater')) : the_row(); $i++; ?>

                    <div class="col-md-6 staff-item">
                        <div class="staff-item-description">
                            <div class="row">
                                <div class="col-sm-4 staff-left-image">
                                    <img src="<?php the_sub_field('staff_repeater_image'); ?>" alt="">
                                </div>
                                <div class="col-sm-8">
                                    <div class="staff-repeater-content">
                                        <h4><?php the_sub_field('staff_repeater_title'); ?></h4>
                                        <?php the_sub_field('staff_repeater_content'); ?>
                                        <a href="" class="read-bio" data-bio-id="bio-<?php echo $i; ?>">Read Bio</a>

                                        <div class="staff-mail-section">
                                            <a href="mailto:<?php the_sub_field('staff_repeater_email'); ?>">
                                                <?php the_sub_field('staff_repeater_email_icon'); ?>
                                                <h6><?php the_sub_field('staff_repeater_email_text'); ?></h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hidden bio content -->
                    <div id="bio-<?php echo $i; ?>" class="bio-popup-content" style="display:none;">
                        <?php the_sub_field('staff_repeater_bio_content'); ?>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ✅ Add Modal Here -->
<div id="bioModal" class="bio-modal">
    <div class="bio-modal-content">
        <span class="bio-close">&times;</span>
        <div id="bioModalBody"></div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('bioModal');
    const modalBody = document.getElementById('bioModalBody');
    const closeBtn = document.querySelector('.bio-close');

    document.querySelectorAll('.read-bio').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const bioId = this.getAttribute('data-bio-id');
            const bioContent = document.getElementById(bioId).innerHTML;
            modalBody.innerHTML = bioContent;
            modal.style.display = 'block';
        });
    });

    closeBtn.onclick = function() {
        modal.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }
});
</script>




<?php endwhile; endif; ?>

<?php get_footer(); ?>
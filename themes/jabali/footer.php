<!-- footer -->
<?php wp_footer(); ?>


<div class="scroll-animation">
    <div class="footer-welcome-section">
        <div class="container">
            <div class="row footer-welcome-description">
                <div class="col-md-12 footer-welcome-content">
                    <h2><?php the_field("welcome_title", "option");?></h2>
                    <img src="<?php the_field("welcome_image", "option");?>" alt="" />
                    <div class="footer-welcome-repeater">
                        <?php if (have_rows('welcome_repeater', "option")) : ?>
                        <?php while (have_rows('welcome_repeater', "option")) : the_row(); ?>
                        <?php
                                $link = get_sub_field('welcome_repeater_button', "option");
                                if ($link) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        <div class="home-buttons footer-welcome-repeater-button">
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                <?php echo esc_html($link_title); ?>
                                <img src="<?php the_sub_field("welcome_repeater_button_arrow", "option");?>" alt="" />
                            </a>
                        </div>
                        <?php endif; ?>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 mx-auto">
                <div class="row footer-top-section">

                    <div class="col-md-8">
                        <div class="row footer-center-top">
                            <div class="col-md-6 footer-logo footer-section">
                                <h2><?php the_field("middle_school_title", "option"); ?></h2>
                                <?php the_field("middle_school_content", "option"); ?>
                            </div>
                            <div class="col-md-6 footer-section">
                                <h2><?php the_field("key_title", "option"); ?></h2>
                                <div class="footer-link-description-left">
                                    <?php
                                    $defaults = array(
                                        'menu' => 'footer menu',
                                        'menu_class' => 'nav navbar-nav'
                                    );
                                    wp_nav_menu($defaults);
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="row footer-center-bottom">
                            <div class="col-md-6 footer-logo footer-section">
                                <a class="footer-navbar-brand" href="<?php echo get_home_url(); ?>">
                                    <img src="<?php the_field("footer_logo", "options"); ?>" alt="" />
                                </a>
                            </div>
                            <div class="col-md-6 footer-section">
                                <h2><?php the_field("right_title", "option"); ?></h2>
                                <div class="socia-site-icons row">
                                    <?php $Case = get_field('social_media_repeater', "options");
                                    if (is_array($Case)) {
                                        foreach ($Case as $Case_list) {
                                ?>
                                    <div class="social-icon-app">
                                        <a target="_blank"
                                            href="<?php echo $Case_list['social_media_repeater_icon']; ?>">
                                            <?php echo $Case_list['social_media_repeater_text']; ?>
                                        </a>
                                    </div>
                                    <?php
                                    }
                                    }
                                ?>
                                </div>
                                <?php
                                $defaults = array(
                                'menu' => 'footer menu 1',
                                'menu_class' => 'nav navbar-nav'
                                );
                                wp_nav_menu($defaults);
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-link-description-right">
                        <img src="<?php the_field("footer_image", "option"); ?>" alt="">
                    </div>

                </div>
            </div>
        </div>
        <div class="row footer-bottom-section">
            <div class="col-xl-8 col-lg-10 mx-auto footer-bottom-section-desc">
                <?php the_field("footer_bottom_content", "option"); ?>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Select all menu items with children
    const menuItems = document.querySelectorAll(".menu-item.menu-has-children");

    menuItems.forEach((menuItem) => {
        menuItem.addEventListener("click", function(e) {
            e.stopPropagation(); // Prevent event from bubbling up

            // Close all other submenus at the same level
            const siblings = this.parentElement.querySelectorAll(".menu-item.active");
            siblings.forEach((sibling) => {
                if (sibling !== this) {
                    sibling.classList.remove("active");
                }
            });

            // Toggle active class on the clicked menu item
            this.classList.toggle("active");
        });
    });

    // Close submenus when clicking outside
    document.body.addEventListener("click", function() {
        menuItems.forEach((menuItem) => menuItem.classList.remove("active"));
    });
});




document.addEventListener("scroll", function() {
    const sections = document.querySelectorAll(".scroll-animation");
    let activeSection = null;

    sections.forEach((section) => {
        const rect = section.getBoundingClientRect();
        // Check if the section is at the top of the viewport
        if (rect.top <= 0 && rect.bottom > 0) {
            activeSection = section;
        }
    });

    // Remove the class from all sections and add to the active section
    sections.forEach((section) => {
        if (section === activeSection) {
            section.classList.add("scrolled");
        } else {
            section.classList.remove("scrolled");
        }
    });
});



document.addEventListener("DOMContentLoaded", function() {
    const topSection = document.getElementById("top-section");
    let lastScrollY = window.scrollY;

    document.addEventListener("scroll", function() {
        const currentScrollY = window.scrollY;

        // Check if the user is at the top of the page
        if (currentScrollY <= 0) {
            topSection.classList.remove("scrolled");
        } else {
            // If scrolling down and not at the top
            if (currentScrollY > lastScrollY) {
                topSection.classList.add("scrolled");
            }
            // If scrolling up and back to the top section
            else if (topSection.getBoundingClientRect().top >= 0) {
                topSection.classList.remove("scrolled");
            }
        }

        lastScrollY = currentScrollY;
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const menu = document.querySelector('.navbar-collapse');
    const menuItems = menu.querySelectorAll('.menu-item a');

    const applySlideEffect = (show) => {
        if (show) {
            menu.classList.add('show');
            menu.classList.remove('hide');
            menuItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = 1;
                    item.style.transform = 'translateX(0)';
                }, index * 100); // Staggered animation
            });
        } else {
            menu.classList.remove('show');
            menu.classList.add('hide');
            menuItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.opacity = 0;
                    item.style.transform = 'translateX(-100%)';
                }, index * 100);
            });
        }
    };

});
</script>


</body>

</html>
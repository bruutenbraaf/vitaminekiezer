<nav>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <?php wp_nav_menu(array('theme_location' => 'top_bar')); ?>
            </div>
        </div>
    </div>
    <div class="container the_nav">
        <div class="row">
            <div class="logo">
                <?php if (have_rows('gegevens', 'option')) : ?>
                    <?php while (have_rows('gegevens', 'option')) : the_row(); ?>
                        <?php $logo = get_sub_field('logo'); ?>
                        <?php if ($logo) { ?>
                            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></a>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="main-nav">
                <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
            </div>
            <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</nav>
<div class="nav-spacer">
</div>
<div class="mobile-menu">
    <?php wp_nav_menu(array('theme_location' => 'mobile_menu')); ?>
</div>
<?php get_template_part('template-parts/content', 'count'); ?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sx-6 col-12">
                <?php if (have_rows('gegevens', 'option')) : ?>
                    <?php while (have_rows('gegevens', 'option')) : the_row(); ?>
                        <?php $logo_wit = get_sub_field('logo_wit'); ?>
                        <?php if ($logo_wit) { ?>
                            <a class="footer-logo" href="<?php echo get_home_url(); ?>"><img src="<?php echo $logo_wit['url']; ?>" alt="<?php echo $logo_wit['alt']; ?>" /></a>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if (is_active_sidebar('footer_first')) {
                    dynamic_sidebar('footer_first');
                } ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sx-6 col-12">
                <?php if (is_active_sidebar('footer_second')) {
                    dynamic_sidebar('footer_second');
                } ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sx-6 col-12">
                <?php if (is_active_sidebar('footer_third')) {
                    dynamic_sidebar('footer_third');
                } ?>
            </div>
        </div>
    </div>
</footer>
<div class="socket">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="centred">
                    <div class="copyright">© Vitaminekiezer</div> <?php wp_nav_menu(array('theme_location' => 'socket_menu')); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>
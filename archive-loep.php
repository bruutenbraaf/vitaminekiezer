<?php get_header(); ?>
<?php if (get_field('titel', 'option')) { ?>
    <div class="si-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                    <h1> <?php _e('Onder de loep', 'viki'); ?> </h1>
                    <?php if (have_rows('header')) : ?>
                        <?php while (have_rows('header')) : the_row(); ?>
                            <p><?php the_field('subtitel', 'option'); ?></p>
                            <?php $knop = get_field('knop', 'option'); ?>
                            <?php if ($knop) { ?>
                                <a class="btn" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                            <?php } ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 sidebar">
                <?php get_template_part('template-parts/content', 'adv'); ?>
                <div class="inner si-in">
                    <?php if (is_active_sidebar('loep')) {
                        dynamic_sidebar('loep');
                    } ?>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <?php $loop = new WP_Query(array(
                        'post_type' => 'loep',
                        'posts_per_page' => 10,
                        'order' => 'DESC',
                        'paged' => $paged,
                    )); ?>
                    <?php if ($loop->have_posts()) : ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="col-xl-3 col-lg-6 col-md-6 single-p">
                                <div class="inner">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php $afbeelding_bericht = get_field('afbeelding_bericht'); ?>
                                        <?php if ($afbeelding_bericht) { ?>
                                            <div class="s-image" style="background-image:url(<?php echo $afbeelding_bericht['sizes']['medium']; ?>);">
                                            </div>
                                        <?php } ?>
                                        <span class="title"><?php the_title(); ?></span>
                                        <?php if (have_rows('header')) : ?>
                                            <?php while (have_rows('header')) : the_row(); ?>
                                                <p><?php the_sub_field('subtitel'); ?></p>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php previous_posts_link('&laquo; Nieuwer');
                        next_posts_link('Ouder &raquo;', $loop->max_num_pages); ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
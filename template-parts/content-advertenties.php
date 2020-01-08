<?php $loop = new WP_Query(array(
    'post_type' => 'advertenties',
    'posts_per_page' => 1,
    'orderby' => 'rand',
    'order' => 'DESC'
)); ?>
<?php if ($loop->have_posts()) : ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php the_title(); ?>
        <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
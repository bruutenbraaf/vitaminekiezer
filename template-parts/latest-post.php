<?php $loop = new WP_Query(array(
    'post_type' => 'loep',
    'posts_per_page' => 3,
    'order' => 'DESC'
)); ?>
<?php if ($loop->have_posts()) : ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="post">
            <a href="<?php echo the_permalink() ?>">
                <span class="latest-title"><?php the_title(); ?></span>
                <p><?php echo excerpt(10); ?></p>
            </a>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
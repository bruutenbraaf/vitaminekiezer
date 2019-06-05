<div class="viki-results">
    <?php
    $vitamines = get_vitamines();
    $loop = new WP_Query(array(
        'post_type' => array('multivitaminen', 'mineralen', 'vitaminen'),
        'post__in' => $vitamines,
        'posts_per_page' => -1,
        'order' => 'DESC'
    )); ?>
    <?php if ($loop->have_posts()) : ?>
        <?php $count = 0; ?>
        <div class="in-results">
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php $count++ ?>
                <div class="item">
                    <div class="row">
                        <?php if (have_rows('header_vitamine')) : ?>
                            <?php while (have_rows('header_vitamine')) : the_row(); ?>
                                <?php $logo = get_sub_field('logo'); ?>
                                <div class="col-6">
                                    <?php if ($logo) { ?>
                                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                                    <?php } ?>
                                </div>
                                <div class="col-6">
                                    <div class="a-score">
                                        <span class="the_score"><?php the_sub_field('algemene_score'); ?></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php $productafbeelding = get_sub_field('productafbeelding'); ?>
                                        <div class="product-image" <?php if ($productafbeelding) { ?>style="background-image:url(<?php echo $productafbeelding['url']; ?>);" <?php } ?>>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-9">
                                    <a href="<?php the_permalink(); ?>">
                                        <span class="product-title"><?php the_title(); ?></span>
                                        <span class="product-merk"><?php the_sub_field('merk'); ?></span>
                                    </a>
                                </div>
                                <div class="col-3">
                                    <?php echo do_shortcode('[add_vitamine]'); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php $vergelijker_pagina = get_field('vergelijker_pagina', 'option'); ?>
        <?php if ($vergelijker_pagina) { ?>
            <a href="<?php echo $vergelijker_pagina['url']; ?>" target="<?php echo $vergelijker_pagina['target']; ?>">
                <div class="vitamin-widget">
                    <div class="count">
                        <?php echo $count; ?>
                    </div>
                    <?php _e('In vergelijker', 'viki'); ?>
                </div>
            </a>
        <?php } ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
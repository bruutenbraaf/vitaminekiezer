<?php $product_placeholder = get_field('product_placeholder', 'option'); ?>
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
                    <div class="inner">
                        <div class="row productinfo">
                            <?php $logo = get_field('logo_header'); ?>
                            <div class="col-6 logo-product">
                                <?php if ($logo) { ?>
                                    <img src="<?php echo $logo; ?>" />
                                <?php } else { ?>
                                    <span class="product-merk"><?php the_field('merk_header'); ?></span>
                                <?php } ?>
                            </div>
                            <div class="col-6">
                                <div class="a-score">
                                    <span class="the_score"><?php the_field('kwaliteit_score_header'); ?></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="<?php the_permalink(); ?>">
                                    <?php $productafbeelding = get_the_post_thumbnail_url('', 'medium'); ?>
                                    <?php $product_placeholder = get_field('product_placeholder', 'option'); ?>
                                    <div class="product-image" style="background-image:url( <?php if ($productafbeelding) { ?> <?php echo $productafbeelding; ?> <?php } else { ?> <?php echo $product_placeholder['url']; ?> <?php } ?>);">
                                    </div>
                                </a>
                            </div>

                            <div class="col-9">
                                <a href="<?php the_permalink(); ?>">
                                    <span class="product-title"><?php the_title(); ?></span>
                                </a>
                            </div>
                            <div class="col-3">
                                <?php echo do_shortcode('[add_vitamine]'); ?>
                            </div>

                        </div>
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
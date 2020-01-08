<section class="related">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php _e('Andere interessante producten om mee te vergelijken', 'viki') ?></h2>
                </div>
                <?php $loop = new WP_Query(array(
                    'post_type' => 'multivitaminen',
                    'posts_per_page' => 4,
                    'orderby'   => 'rand',
                )); ?>
                <?php if ($loop->have_posts()) : ?>
                    <?php $postcount = 0 ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 product">
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
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php

// Template name: Vergelijker

get_header(); ?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('');
                } ?>
            </div>
        </div>
    </div>
</div>

<section class="product-images">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $vitamines = get_vitamines();
                $loop = new WP_Query(array(
                    'post_type' => array('multivitaminen', 'mineralen', 'vitaminen'),
                    'post__in' => $vitamines,
                    'posts_per_page' => -1,
                    'order' => 'DESC'
                )); ?>
                <?php if ($loop->have_posts()) : ?>
                    <div class="v-carousel">
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="v-product product">
                                <div class="inner">
                                    <div class="row productinfo">
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
                                                <div class="col-12">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <span class="product-title"><?php the_title(); ?></span>
                                                    </a>
                                                </div>
                                                <div class="row addproduct">
                                                    <div class="col-9">
                                                        <span class="product-merk"><?php the_sub_field('merk'); ?></span>
                                                    </div>
                                                    <div class="col-3">
                                                        <?php echo do_shortcode('[add_vitamine]'); ?>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <div class="v-prev"></div>
                <div class="v-next"></div>
            </div>
        </div>
    </div>
</section>

<section class="product-in">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $vitamines = get_vitamines();
                $loop = new WP_Query(array(
                    'post_type' => array('multivitaminen', 'mineralen', 'vitaminen'),
                    'post__in' => $vitamines,
                    'posts_per_page' => -1,
                    'order' => 'DESC'
                )); ?>
                <?php if ($loop->have_posts()) : ?>
                    <div class="v-content">
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="item-i">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php get_template_part('template-parts/content', 'scores'); ?>
                                            <span class="advice-price"><?php _e('Adviesprijs per maanddosis:', 'viki'); ?> <?php the_field('adviesprijs_per_maanddosis'); ?></span>
                                            <?php if (have_rows('header_vitamine')) : ?>
                                                <?php while (have_rows('header_vitamine')) : the_row(); ?>
                                                    <?php $link_om_te_bestellen = get_sub_field('link_om_te_bestellen'); ?>
                                                    <?php if ($link_om_te_bestellen) { ?>
                                                        <a class="btn cta-btn" href="<?php echo $link_om_te_bestellen['url']; ?>" target="<?php echo $link_om_te_bestellen['target']; ?>"><?php echo $link_om_te_bestellen['title']; ?></a>
                                                    <?php } ?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                            <div class="ingredient-list">
                                                <?php get_template_part('template-parts/content', 'vitaminen'); ?>
                                                <?php get_template_part('template-parts/content', 'mineralen'); ?>
                                                <?php get_template_part('template-parts/content', 'vitamineachtige'); ?>
                                                <?php get_template_part('template-parts/content', 'superfoods'); ?>
                                                <?php get_template_part('template-parts/content', 'nietsuperfoods'); ?>
                                                <?php get_template_part('template-parts/content', 'aminozuren'); ?>
                                                <?php get_template_part('template-parts/content', 'vetten'); ?>
                                                <?php get_template_part('template-parts/content', 'koolhydraten'); ?>
                                                <?php get_template_part('template-parts/content', 'probiotica'); ?>
                                            </div>
                                            <a class="btn full--btn" href="<?php the_permalink();?>">Naar product review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function() {
        $('.v-carousel').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            accessibility: false,
            arrows: true,
            focusOnSelect: true,
            prevArrow: $('.v-prev'),
            nextArrow: $('.v-next'),
            asNavFor: '.v-content',
        });
        $('.v-content').slick({
            slidesToShow: 4,
            arrows: false,
            accessibility: false,
            prevArrow: $('.v-prev'),
            nextArrow: $('.v-next'),
            asNavFor: '.v-carousel',
        });
    });
</script>


<?php get_footer(); ?>
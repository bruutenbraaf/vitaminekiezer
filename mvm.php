<?php

// Template name: MVM

get_header(); ?>

<!-- Google review pop up -->
<?php get_template_part('template-parts/content', 'reviewpopup'); ?>

<?php $product_placeholder = get_field('product_placeholder', 'option'); ?>
<div class="header-page d-flex justify-content-center align-items-center">
    <div class="inner">
        <h1><?php _e('Vergelijk hier je producten', 'vitaminekiezer'); ?></h1>
        <?php if (have_rows('usps', 'option')) : ?>
            <ul>
                <?php while (have_rows('usps', 'option')) : the_row(); ?>
                    <li> <?php the_sub_field('usp'); ?> </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('');
                } ?>
            </div>
            <div class="col-md-4 d-flex justify-content-end p-2">
                <a href="<?php echo get_home_url(); ?>/multivitaminen-en-mineralen" class="back btn">Naar overzicht</a>
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
                    'post_type' => array('multivitaminen'),
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
                    <?php wp_reset_postdata(); ?>
                    <div class="v-prev"></div>
                    <div class="v-next"></div>
                    <?php else: ?>
                    <h3>Geen producten geselecteerd</h3>
                    <p>Ga terug naar het overzicht en voeg producten toe doormiddel van het '+' icoon</p>
                <?php endif; ?>
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
                    'post_type' => array('multivitaminen'),
                    'post__in' => $vitamines,
                    'posts_per_page' => -1,
                    'order' => 'DESC'
                )); ?>
                <?php if ($loop->have_posts()) : ?>
                    <div class="v-content">
                        <?php $i = 0; ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <?php $i++; ?>
                            <div class="item-i <?php if($i == 1) {?> max <?php } ?>">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php get_template_part('template-parts/content', 'scores-vergelijker'); ?>
                                            <span class="advice-price"><?php _e('Prijs maanddosering:', 'viki'); ?> € <?php the_field('adviesprijs_per_maanddosis'); ?></span>
                                            <?php if (get_field('actietekst')) { ?>
                                                <div class="actiecode">
                                                    <span class="promo-text"><?php the_field('actietekst'); ?></span>
                                                </div>
                                            <?php } else { ?>
                                                <div class="nopromo">
                                                </div>
                                            <?php } ?>
                                            <?php $bestellen = get_field('link_om_te_bestellen_header'); ?>
                                            <?php if ($bestellen) { ?>
                                                <br> <a class="btn order-btn" href="<?php the_field('link_om_te_bestellen_header'); ?>" target="_blank">Bestel bij leverancier</a>
                                            <?php } else { ?>
                                                <br> <a class="btn order-btn disabled" href="<?php the_field('link_om_te_bestellen_header'); ?>" target="_blank">Bestel bij leverancier</a>
                                            <?php } ?>
                                            <h2>Ingrediënten info:</h2>
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
                                            <a class="btn full--btn" href="<?php the_permalink(); ?>">Naar product review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                    <?php if ($i == 1) { ?>
                        <script>
                            jQuery(document).ready(function() {
                                $('v-product').addClass('max');
                                $('.v-carousel').slick({
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    centermode: true,
                                    accessibility: false,
                                    arrows: true,
                                    focusOnSelect: false,
                                    prevArrow: $('.v-prev'),
                                    nextArrow: $('.v-next'),
                                    asNavFor: '.v-content, .titels',
                                });
                                $('.v-content, .titels').slick({
                                    slidesToShow: 1,
                                    arrows: false,
                                    centermode: true,
                                    accessibility: false,
                                    prevArrow: $('.v-prev'),
                                    nextArrow: $('.v-next'),
                                    asNavFor: '.v-carousel',
                                });
                            });
                        </script>
                    <?php } elseif ($i == 2) { ?>
                        <script>
                            jQuery(document).ready(function() {
                                $('v-product').removeClass('max');
                                $('.v-carousel').slick({
                                    slidesToShow: 2,
                                    slidesToScroll: 1,
                                    accessibility: false,
                                    arrows: true,
                                    focusOnSelect: true,
                                    prevArrow: $('.v-prev'),
                                    nextArrow: $('.v-next'),
                                    asNavFor: '.v-content, .titels',
                                    responsive: [{
                                        breakpoint: 736,
                                        settings: {
                                            slidesToShow: 1,
                                            slidesToScroll: 1
                                        }
                                    }]
                                });
                                $('.v-content, .titels').slick({
                                    slidesToShow: 2,
                                    arrows: false,
                                    accessibility: false,
                                    prevArrow: $('.v-prev'),
                                    nextArrow: $('.v-next'),
                                    asNavFor: '.v-carousel',
                                    responsive: [{
                                        breakpoint: 736,
                                        settings: {
                                            slidesToShow: 1,
                                            slidesToScroll: 1
                                        }
                                    }]
                                });
                            });
                        </script>
                    <?php } elseif ($i == 3) { ?>
                        <script>
                            jQuery(document).ready(function() {
                                $('v-product').removeClass('max');
                                $('.v-carousel').slick({
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                    accessibility: false,
                                    arrows: true,
                                    focusOnSelect: true,
                                    prevArrow: $('.v-prev'),
                                    nextArrow: $('.v-next'),
                                    asNavFor: '.v-content, .titels',
                                    responsive: [{
                                            breakpoint: 1280,
                                            settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 1,
                                            }
                                        },
                                        {
                                            breakpoint: 736,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                        }
                                    ]
                                });
                                $('.v-content, .titels').slick({
                                    slidesToShow: 3,
                                    arrows: false,
                                    accessibility: false,
                                    prevArrow: $('.v-prev'),
                                    nextArrow: $('.v-next'),
                                    asNavFor: '.v-carousel',
                                    responsive: [{
                                            breakpoint: 1280,
                                            settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 1,
                                            }
                                        },
                                        {
                                            breakpoint: 736,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                        }
                                    ]
                                });
                            });
                        </script>
                    <?php } else { ?>
                        <script>
                            jQuery(document).ready(function() {
                                $('v-product').removeClass('max');
                                $('.v-carousel').slick({
                                    slidesToShow: 4,
                                    slidesToScroll: 1,
                                    accessibility: false,
                                    arrows: true,
                                    focusOnSelect: true,
                                    prevArrow: $('.v-prev'),
                                    nextArrow: $('.v-next'),
                                    asNavFor: '.v-content, .titels',
                                    responsive: [{
                                            breakpoint: 1760,
                                            settings: {
                                                slidesToShow: 3,
                                                slidesToScroll: 1,
                                            }
                                        },
                                        {
                                            breakpoint: 1280,
                                            settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 1,
                                            }
                                        },
                                        {
                                            breakpoint: 736,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                        },
                                    ]
                                });
                                $('.v-content, .titels').slick({
                                    slidesToShow: 4,
                                    arrows: false,
                                    accessibility: false,
                                    prevArrow: $('.v-prev'),
                                    nextArrow: $('.v-next'),
                                    asNavFor: '.v-carousel',
                                    responsive: [{
                                            breakpoint: 1760,
                                            settings: {
                                                slidesToShow: 3,
                                                slidesToScroll: 1,
                                            }
                                        },
                                        {
                                            breakpoint: 1280,
                                            settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 1,
                                            }
                                        },
                                        {
                                            breakpoint: 736,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                        },
                                    ]
                                });
                            });
                        </script>
                    <?php } ?>
                    <script>
                        var ingredients = jQuery('.ingredient-list').find('.ingredient');
                        if(ingredients.length > 0) {
                            for (i = 0; i < ingredients.length; i++) {
                                if(jQuery(ingredients[i]).find('ul > li').length > 0) {
                                    // found list items in ingredient catgory
                                } else {
                                    jQuery(ingredients[i]).addClass('disabled');
                                }
                            }
                        }
                    </script>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<div class="v-mobiletitels">
    <div class="container">
        <div class="row">
            <div class="titels">
                <?php
                $vitamines = get_vitamines();
                $loop = new WP_Query(array(
                    'post_type' => array('multivitaminen'),
                    'post__in' => $vitamines,
                    'posts_per_page' => -1,
                    'order' => 'DESC'
                )); ?>
                <?php if ($loop->have_posts()) : ?>
                    <?php $i = 0; ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php $i++; ?>

                        <div class="titlesproduct">
                            <?php the_title(); ?>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
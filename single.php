<?php get_header(); ?>

<!-- Google review pop up -->
<?php get_template_part('template-parts/content', 'reviewpopup'); ?>

<?php $product_placeholder = get_field('product_placeholder', 'option'); ?>
<?php $productafbeelding = get_field('productafbeelding_header'); ?>
<div class="header-page si-header d-flex justify-content-center align-items-center">
    <div class="inner">
        <h1>Product review: <?php the_title(); ?></h1>
    </div>
</div>

<section id="s-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="breadcrumbs">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-6 btn-right">
                <a href="<?php echo get_post_type_archive_link('multivitaminen'); ?>" class="btn v-btn"><?php _e('Terug naar overzicht'); ?></a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="s-title">
                            <h1 class="title"><?php the_title(); ?></h1>
                            <div class="row">
                                <div class="col-md-4">
                                    <?php $productafbeelding = get_the_post_thumbnail_url('', 'medium'); ?>
                                    <?php if ($productafbeelding) { ?><img class="singleimg" src="<?php echo $productafbeelding; ?>"><?php } else { ?><img src="<?php echo $product_placeholder['sizes']['medium']; ?>"><?php } ?>
                                </div>
                                <?php $logo = get_field('logo_header'); ?>
                                <div class="col-8 d-flex align-items-end flex-wrap">
                                    <div>
                                        <?php if ($logo) { ?>
                                            <img class="single-logo" src="<?php echo $logo; ?>" />
                                        <?php } else { ?>
                                            <span class="product-merk"><?php the_field('merk_header'); ?></span>
                                        <?php } ?>
                                        <?php if (get_field('actietekst')) { ?>
                                            <div class="actiecode-single">
                                                <span class="promo-text"><?php the_field('actietekst'); ?></span>
                                            </div>
                                        <?php } ?>
                                        <?php $bestellen = get_field('link_om_te_bestellen_header'); ?>
                                        <?php if ($bestellen) { ?>
                                            <br> <a class="btn order-btn" href="<?php the_field('link_om_te_bestellen_header'); ?>" target="_blank">Bestel bij leverancier</a>
                                        <?php } else { ?>
                                            <br> <a class="btn order-btn disabled" href="<?php the_field('link_om_te_bestellen_header'); ?>" target="_blank">Bestel bij leverancier</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 scores-s">
                <?php get_template_part('template-parts/content', 'scores'); ?>
                <div class="price-pm"><b><?php _e('Adviesprijs per maanddosis:', 'viki') ?><span class="adviceprice">€ <?php the_field('adviesprijs_per_maanddosis'); ?></span></b></div>
            </div>
        </div>
    </div>
</section>

<section id="review">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2><?php _e('Viki’s product review:', 'viki'); ?></h2>
                <p><?php the_field('review_content'); ?></p>
                <?php echo do_shortcode('[add_vitamine_single]'); ?>
            </div>
            <div class="col-md-6">
                <h2><?php _e('Ingrediënten:', 'viki'); ?></h2>
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
                <h2>Kenmerken:</h2>
                <div class="kenmerken">
                    <?php
                    $terms = get_the_terms($post->ID, array('kenmerken', 'doelgroepen', 'leeftijd_of_levensfase', 'allergenen', 'ingredienten', 'toedieningsvorm'));
                    $i = 1;
                    if (!empty($terms)) {
                        foreach ($terms as $term) {
                            $term_link = get_term_link($term, array('kenmerken', 'doelgroepen', 'leeftijd_of_levensfase', 'allergenen', 'ingredienten', 'toedieningsvorm'));
                            if (is_wp_error($term_link))
                                continue;
                            echo '<div class="ken-label">' . $term->name . '</div>';
                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
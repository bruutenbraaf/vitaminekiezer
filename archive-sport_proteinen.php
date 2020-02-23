<?php get_header(); ?>
<!-- Google review pop up -->
<?php get_template_part('template-parts/content', 'reviewpopup'); ?>

<div class="header-page d-flex justify-content-center align-items-center">
    <div class="inner">
        <h1><?php the_field('header_titel_pro', 'option'); ?></h1>
        <?php if (have_rows('usps_pro', 'option')) : ?>
            <ul>
                <?php while (have_rows('usps_pro', 'option')) : the_row(); ?>
                    <li> <?php the_sub_field('usp'); ?> </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
<main id="archive-product">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('');
                    } ?>
                </div>
                <div class="col-md-4 d-flex justify-content-end p-2 desktop-btn">
                    <a href="<?php echo get_site_url() ?>/vergelijker-proteinen/" class="back btn compare">Naar vergelijker</a>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container" id="products">
            <div class="row">
                <div class="col-lg-3 col-md-3 sidebar">
                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="mobile-toggle">
                                <button class="btn filter-toggle info-widget">
                                    <b><span class="down-info">Klik hier voor Filteren</span></b>
                                </button>

                                <div class="filters-overlay">
                                </div>
                                <button class="close-filters">
                                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0)">
                                            <path d="M8.27455 6.48529L11.686 3.07381C12.1047 2.65518 12.1047 1.97643 11.686 1.55745L10.9278 0.799268C10.5092 0.380631 9.83045 0.380631 9.41148 0.799268L6 4.21075L2.58852 0.799268C2.16989 0.380631 1.49114 0.380631 1.07216 0.799268L0.313977 1.55745C-0.104659 1.97609 -0.104659 2.65484 0.313977 3.07381L3.72545 6.48529L0.313977 9.89677C-0.104659 10.3154 -0.104659 10.9942 0.313977 11.4131L1.07216 12.1713C1.4908 12.59 2.16989 12.59 2.58852 12.1713L6 8.75984L9.41148 12.1713C9.83011 12.59 10.5092 12.59 10.9278 12.1713L11.686 11.4131C12.1047 10.9945 12.1047 10.3157 11.686 9.89677L8.27455 6.48529Z" fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="12" height="12" fill="white" transform="translate(0 0.485291)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <div class="filters">
                                    <div class="info-widget">
                                        <b><span class="down-info">Klik hier voor Filteren</span> </b>
                                    </div>
                                    <div class="inner">
                                        <div class="widget">
                                            <?php echo do_shortcode('[searchandfilter id="3979"]'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <button href="#" class="btn orderbtn openbtn">Introductie video</button>
                            <div class="popup">
                                <div class="close"></div>
                                <div class="innerpop">
                                    <?php if (is_active_sidebar('verlijker_boven')) {
                                        dynamic_sidebar('verlijker_boven');
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <?php if (is_active_sidebar('vergelijker_reviews')) {
                                dynamic_sidebar('vergelijker_reviews');
                            } ?>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'order' => 'ASC',
                            );
                            $args['search_filter_id'] = 3979;
                            $query = new WP_Query($args);
                            $total = $query->found_posts;
                            ?>
                            <div class="resultscount">
                                <b> Zoekresultaat: <?php echo $total; ?> <?php if ($total == 1) { ?> product. Om te vergelijken klik op <div class="add"></div> <?php } else { ?> producten. Om te vergelijken klik op <div class="add"></div> <?php } ?></b>
                            </div>
                        </div>
                        <?php if ($total == 0) { ?>
                            <div class="col-md-12">
                                <div class="error">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.25C3.72009 0.25 0.25 3.72134 0.25 8C0.25 12.2812 3.72009 15.75 8 15.75C12.2799 15.75 15.75 12.2812 15.75 8C15.75 3.72134 12.2799 0.25 8 0.25ZM8 3.6875C8.72487 3.6875 9.3125 4.27513 9.3125 5C9.3125 5.72487 8.72487 6.3125 8 6.3125C7.27513 6.3125 6.6875 5.72487 6.6875 5C6.6875 4.27513 7.27513 3.6875 8 3.6875ZM9.75 11.625C9.75 11.8321 9.58209 12 9.375 12H6.625C6.41791 12 6.25 11.8321 6.25 11.625V10.875C6.25 10.6679 6.41791 10.5 6.625 10.5H7V8.5H6.625C6.41791 8.5 6.25 8.33209 6.25 8.125V7.375C6.25 7.16791 6.41791 7 6.625 7H8.625C8.83209 7 9 7.16791 9 7.375V10.5H9.375C9.58209 10.5 9.75 10.6679 9.75 10.875V11.625Z" fill="white" />
                                    </svg>
                                    Deze combinatie van filters geeft 0 resultaten! Gebruik de <b>"wis filter"</b> knop en pas je filterselectie aan.
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="row products">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6 product">
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
                        <section id="pagination">
                            <div class="pagination d-flex justify-content-center align-items-center">
                                <a href="<?php echo get_home_url(); ?>/vergelijker/" class="back btn mobile-btn">Naar vergelijker</a>
                                <?php echo paginate_links(array(
                                    'prev_text' => '
				        <span class="prev">
				            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				            <path d="M9.19719 14.9731L8.40442 15.7525C8.06874 16.0826 7.52595 16.0826 7.19384 15.7525L0.251758 8.93032C-0.0839192 8.60027 -0.0839192 8.06657 0.251758 7.74003L7.19384 0.914286C7.52952 0.584235 8.07231 0.584235 8.40442 0.914286L9.19719 1.69377C9.53644 2.02733 9.52929 2.57156 9.1829 2.8981L4.87981 6.92894H15.143C15.6179 6.92894 16 7.30464 16 7.77163V8.8952C16 9.36219 15.6179 9.73789 15.143 9.73789H4.87981L9.1829 13.7687C9.53286 14.0953 9.54001 14.6395 9.19719 14.9731Z" fill="black"/>
				            </svg>        
				        </span>',
                                    'next_text' => '<span class="next"> 
				            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				            <path d="M6.80281 14.9731L7.59558 15.7525C7.93126 16.0826 8.47405 16.0826 8.80616 15.7525L15.7482 8.93032C16.0839 8.60027 16.0839 8.06657 15.7482 7.74003L8.80616 0.914286C8.47048 0.584235 7.92769 0.584235 7.59558 0.914286L6.80281 1.69377C6.46356 2.02733 6.47071 2.57156 6.8171 2.8981L11.1202 6.92894H0.857047C0.3821 6.92894 0 7.30464 0 7.77163V8.8952C0 9.36219 0.3821 9.73789 0.857047 9.73789H11.1202L6.8171 13.7687C6.46714 14.0953 6.45999 14.6395 6.80281 14.9731Z" fill="black"/>
				            </svg>            
				        </span>'
                                )); ?>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>

<script>
    jQuery(document).on("click", '.searchandfilter li h4', function(event) {
        jQuery(this).next('ul').slideToggle(300);
    });

    jQuery(document).on("click", '.searchandfilter li h4', function(event) {
        jQuery(this).next('.sf-meta-range').slideToggle(300);
    });

    jQuery(document).on("click", '.searchandfilter li h4', function(event) {
        jQuery(this).next('label').slideToggle(300);
    });

    jQuery(".widget ul li ul").append("<div class='more'>Toon alles</div>");

    jQuery('.more').on("click", function() {

        $.fn.toggleText = function(t1, t2) {
            if (this.text() == t1) this.text(t2);
            else this.text(t1);
            return this;
        };

        $(this).toggleText('Toon alles', 'Toon minder');
        $(this).toggleClass('full-visible');
        jQuery(this).parent('ul').toggleClass('everything');
    });

    jQuery(document).on("click", '.filter-toggle', function(event) {
        $('.filters').fadeToggle(300);
        $('.close-filters').fadeToggle(300);
        $('.filters-overlay').fadeToggle(300);
    });

    jQuery(document).on("click", '.close-filters', function(event) {
        $(this).fadeToggle(300);
        $('.filters').fadeToggle(300);
        $('.filters-overlay').fadeToggle(300);
    });

    // Video
    jQuery('.openbtn').on('click', function() {
        jQuery('.popup').addClass('open');
    });
    jQuery('.popup .close').on('click', function() {
        jQuery('.popup').removeClass('open');
    });

    // // Random order
    // $(function() {
    //     var parent = $(".products");
    //     var divs = parent.children();
    //     while (divs.length) {
    //         parent.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
    //     }
    // });
</script>


<?php $product_placeholder = get_field('product_placeholder', 'option'); ?>
<div class="viki-results">
    <?php
    $vitamines = get_vitamines();
    $loop = new WP_Query(array(
        'post_type' => array('sport_proteinen'),
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
            <a href="<?php echo get_home_url(); ?>/vergelijker-proteinen/">
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

<?php get_footer(); ?>
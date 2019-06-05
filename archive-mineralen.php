<?php get_header(); ?>
<?php if (get_field('header_inschakelen', 'option') == 1) { ?>
    <?php $afbeelding = get_field('afbeelding', 'option'); ?>
    <?php if ($afbeelding) { ?>
        <div class="header <?php if (get_field('toon_overlay', 'option') == 1) { ?>overlay<?php } ?>" style="background-image:url(<?php echo $afbeelding['sizes']['slide']; ?>);">
            <div class="slideItem">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?php the_field('titel', 'option'); ?></h1>
                            <p><?php the_field('content', 'option'); ?></p>
                            <?php $knop = get_field('knop', 'option'); ?>
                            <?php if ($knop) { ?>
                                <a class="btn" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if (have_rows('unique_selling_points', 'option')) : ?>
                        <ul>
                            <?php while (have_rows('unique_selling_points', 'option')) : the_row(); ?>
                                <li><?php the_sub_field('usp'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 sidebar">
                <?php get_template_part('template-parts/content', 'postcount'); ?>
                <?php get_template_part('template-parts/content', 'adv'); ?>
                <div class="inner">
                    <?php if (is_active_sidebar('vergelijker')) {
                        dynamic_sidebar('vergelijker');
                    } ?>
                    <script>
                        var obj = new Array();
                        jQuery('.searchandfilter > ul li').on("click", "h4", function() {
                            jQuery(this).closest('li').toggleClass('open');
                            jQuery(this).toggleClass('open');
                        });
                        jQuery(document).on("sf:ajaxstart", ".searchandfilter", function() {
                            jQuery('.searchandfilter .open').each(function() {
                                target = jQuery(this).attr("class").split(' ');
                                var index = target.indexOf('open');
                                if (index > -1) {
                                    target.splice(index, 1);
                                }
                                if (obj.indexOf(target.join(' .')) > -1) {} else {
                                    obj.push(target.join(' .'));
                                }
                            });
                        });
                        jQuery(document).on("sf:ajaxfinish", ".searchandfilter", function() {
                            jQuery.each(obj, function() {
                                jQuery('.' + this + '').addClass('open');
                                //console.log('.'+ this + '');
                            });
                            //console.log(obj);
                            setTimeout(function() {
                                obj = [];
                            }, 500);
                            cleanupFilter();
                        });

                        function cleanupFilter() {
                            if (jQuery('.sf-field-taxonomy-product_cat li.sf-level-0 > input:checked').length > 0) {
                                var checkboxes = jQuery('.sf-field-taxonomy-product_cat li.sf-level-0')
                                var len = checkboxes.length,
                                    i = 0;
                                for (i; i < len; i++) {
                                    if (jQuery(checkboxes[i]).find('> input:checked').length) {

                                    } else {
                                        checkboxes[i].remove();
                                    }
                                }
                            } else if (jQuery('.sf-field-taxonomy-product_cat li > input:checked').length > 0) {
                                jQuery('.sf-field-taxonomy-product_cat li > input:checked').closest('li.sf-level-0').find('> input').prop("checked", true)
                                var checkboxes = jQuery('.sf-field-taxonomy-product_cat li.sf-level-0')
                                var len = checkboxes.length,
                                    i = 0;
                                for (i; i < len; i++) {
                                    if (jQuery(checkboxes[i]).find('> input:checked').length) {

                                    } else {
                                        checkboxes[i].remove();
                                    }
                                }
                            } else {

                            }
                        }
                        cleanupFilter();
                        function cleanupFilter() {
							if (jQuery('li[class^="sf-field-taxonomy-"]').length > 0) {
                                jQuery('li[class^="sf-field-taxonomy-"]').each(function() {
                                    if (jQuery(this).find('li').length > 0) {
                                        console.log(jQuery(this));
                                    } else {
                                        jQuery(this).remove();
                                    }
                                });
							} 
						}
						cleanupFilter();
                    </script>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    <?php $loop = new WP_Query(array(
                        'post_type' => 'multivitaminen',
                        'posts_per_page' => 15,
                        'order' => 'DESC'
                    )); ?>
                    <?php if ($loop->have_posts()) : ?>
                        <?php $postcount = 0 ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <?php $postcount++ ?>
                            <div class="col-xl-3 col-md-4 product">
                                <div class="inner">
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
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
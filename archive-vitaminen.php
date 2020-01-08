<?php get_header(); ?>
<div class="header-page d-flex justify-content-center align-items-center">
    <div class="inner">
        <h1><?php _e('Vergelijk hier je Vitaminen', 'vitaminekiezer'); ?></h1>
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
            <div class="col-md-12">
                <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('');
                } ?>
            </div>
        </div>
    </div>
</div>
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
                    <?php if (have_posts()) : ?>
                        <?php $postcount = 0 ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php $postcount++ ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 product">
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
                                                        <div class="product-image" style="background-image:url(<?php echo get_the_post_thumbnail_url($post, 'medium'); ?>);">
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
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="pagination">
    <div class="d-flex justify-content-center align-items-center">
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

<?php get_footer(); ?>
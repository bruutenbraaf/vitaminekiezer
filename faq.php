<?php

// Template name: Faq

get_header(); ?>
<div class="si-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<?php if (have_rows('faq')) : ?>
    <?php while (have_rows('faq')) : the_row(); ?>
        <?php if (get_row_layout() == 'section') : ?>
            <section id="faq">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php the_sub_field('sectie_titel'); ?></h2>
                        </div>
                        <div class="col-md-6">
                            <?php if (have_rows('veelgestelde_vragen_links')) : ?>
                                <ul>
                                    <?php while (have_rows('veelgestelde_vragen_links')) : the_row(); ?>
                                        <li>
                                            <span class="faq_title"><?php the_sub_field('faq_titel'); ?> <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.10211 11.2297L5.69669 11.8143C5.94844 12.0619 6.35554 12.0619 6.60462 11.8143L11.8112 6.69768C12.0629 6.45014 12.0629 6.04986 11.8112 5.80496L6.60462 0.685654C6.35286 0.438115 5.94576 0.438115 5.69669 0.685654L5.10211 1.27027C4.84767 1.52044 4.85303 1.92861 5.11282 2.17352L8.34014 5.19665L0.642786 5.19665C0.286575 5.19665 0 5.47842 0 5.82866V6.67134C0 7.02158 0.286575 7.30335 0.642786 7.30335L8.34014 7.30335L5.11282 10.3265C4.85035 10.5714 4.845 10.9796 5.10211 11.2297Z" fill="#BDBDBD" />
                                                </svg>
                                            </span>
                                            <div class="the_faq"><?php the_sub_field('faq_content'); ?></span>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if (have_rows('veelgestelde_vragen_rechts')) : ?>
                                <ul>
                                    <?php while (have_rows('veelgestelde_vragen_rechts')) : the_row(); ?>
                                        <li>
                                            <span class="faq_title"><?php the_sub_field('faq_titel'); ?> <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5.10211 11.2297L5.69669 11.8143C5.94844 12.0619 6.35554 12.0619 6.60462 11.8143L11.8112 6.69768C12.0629 6.45014 12.0629 6.04986 11.8112 5.80496L6.60462 0.685654C6.35286 0.438115 5.94576 0.438115 5.69669 0.685654L5.10211 1.27027C4.84767 1.52044 4.85303 1.92861 5.11282 2.17352L8.34014 5.19665L0.642786 5.19665C0.286575 5.19665 0 5.47842 0 5.82866V6.67134C0 7.02158 0.286575 7.30335 0.642786 7.30335L8.34014 7.30335L5.11282 10.3265C4.85035 10.5714 4.845 10.9796 5.10211 11.2297Z" fill="#BDBDBD" />
                                                </svg>
                                            </span>
                                            <div class="the_faq"><?php the_sub_field('faq_content'); ?></span>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<script>
    jQuery('#faq li').click(function() {
        jQuery(this).toggleClass('open');
        jQuery(this).find('.the_faq').slideToggle(300);
    });
</script>

<?php get_footer(); ?>
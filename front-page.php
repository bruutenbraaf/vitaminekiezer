<?php get_header(); ?>

<?php if (have_rows('carousel')) : ?>
    <div class="carousel">
        <?php while (have_rows('carousel')) : the_row(); ?>
            <?php $afbeelding = get_sub_field('afbeelding'); ?>
            <div class="slideItem <?php if (get_sub_field('toon_overlay') == 1) { ?>overlay<?php } ?>" <?php if ($afbeelding) { ?>style="background-image:url(<?php echo $afbeelding['sizes']['slide']; ?>);" <?php } ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2><?php the_sub_field('hoofdtitel'); ?></h2>
                            <p><?php the_sub_field('subtitel'); ?></p>
                            <?php $knop = get_sub_field('knop'); ?>
                            <?php if ($knop) { ?>
                                <a class="btn" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                    <?php if (have_rows('usps')) : ?>
                        <ul>
                            <?php while (have_rows('usps')) : the_row(); ?>
                                <li><?php the_sub_field('usp'); ?></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <script>
        jQuery(document).ready(function() {
            jQuery('.carousel').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                infinite: true,
                fade: true,
                accessibility: false,
            });
        });
    </script>
<?php endif; ?>

<?php if (have_rows('builder')) : ?>
    <?php while (have_rows('builder')) : the_row(); ?>
        <?php if (get_row_layout() == 'intro_tekst') : ?>
            <section id="intro">
                <div class="container">
                    <div class='row'>
                        <div class="col-md-6 offset-md-2">
                            <h2 class="title"><?php the_sub_field('titel'); ?>
                                <span class="behind"><?php the_sub_field('achtergrond_titel'); ?></span></h2>
                            <?php the_sub_field('content'); ?>
                            <?php $knop = get_sub_field('knop'); ?>
                            <?php if ($knop) { ?>
                                <a class="btn" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == 'over_ons') : ?>
            <section id="about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <?php $afbeelding = get_sub_field('afbeelding'); ?>
                            <?php if ($afbeelding) { ?>
                                <img src="<?php echo $afbeelding['url']; ?>" alt="<?php echo $afbeelding['alt']; ?>" />
                            <?php } ?>
                        </div>
                        <?php if (have_rows('content')) : ?>
                            <?php while (have_rows('content')) : the_row(); ?>
                                <div class="col-md-5 offset-md-1">
                                    <h2><?php the_sub_field('titel'); ?></h2>
                                    <span class="subtitle"><?php the_sub_field('subtitel'); ?></span>
                                    <?php the_sub_field('content'); ?>
                                    <?php $knop = get_sub_field('knop'); ?>
                                    <?php if ($knop) { ?>
                                        <a class="btn btn-secondair" href="<?php echo $knop['url']; ?>" target="<?php echo $knop['target']; ?>"><?php echo $knop['title']; ?></a>
                                    <?php } ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
            </section>
        <?php elseif (get_row_layout() == 'contactformulier') : ?>
            <section id="feedback">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 feedback">
                            <div class="inner">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <h3><?php the_sub_field('titel'); ?></h3>
                                        <?php the_sub_field('content'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
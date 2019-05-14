<?php 

// Template name: Vergelijker

get_header(); ?>

<?php if ( get_field( 'coming_soon_inschakelen' ) == 1 ) { ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h1>Binnenkort online</h1>
                    <p>Ons excuses, deze pagina is nog niet beschikbaar.</p>
                    <a class="btn" href="<?php echo get_home_url(); ?>">Terug naar homepagina</a>
                </div>
            </div>
        <div>
    </section>
<?php } else { ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                $vitamines = get_vitamines();
                $loop = new WP_Query( array(
                    'post_type' => array('multivitaminen', 'mineralen', 'vitaminen'),
                    'post__in' => $vitamines,
                    'posts_per_page' => -1,
                    'order'=> 'DESC'
                ) ); ?>
                <?php if ( $loop->have_posts() ) : ?>
                    <div class="v-carousel">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="v-product">
                                <?php if ( have_rows( 'header_vitamine' ) ) : ?>
                                    <?php while ( have_rows( 'header_vitamine' ) ) : the_row(); ?>
                                        <?php $productafbeelding = get_sub_field( 'productafbeelding' ); ?>
                                        <div class="v-productimage"<?php if ( $productafbeelding ) { ?>style="background-image:url(<?php echo $productafbeelding['url']; ?>)"<?php } ?>>
                                            <?php $logo = get_sub_field( 'logo' ); ?>
                                            <div class="s-productlogo"> 
                                                <?php if ( $logo ) { ?>
                                                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                                                <?php } ?>
                                            </div>
                                            <div class="a-score s-productscore">
                                                <span class="the_score"><?php the_sub_field( 'algemene_score' ); ?></span>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
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

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php 
                $vitamines = get_vitamines();
                $loop = new WP_Query( array(
                    'post_type' => array('multivitaminen', 'mineralen', 'vitaminen'),
                    'post__in' => $vitamines,
                    'posts_per_page' => -1,
                    'order'=> 'DESC'
                ) ); ?>
                <?php if ( $loop->have_posts() ) : ?>
                    <div class="v-content">
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="item-i">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php get_template_part( 'template-parts/content', 'scores' ); ?>
                                            <h2><?php _e('Ingrediënten','viki');?></h2>
                                            <div class="ingredient-list">
                                                <?php get_template_part( 'template-parts/content', 'vitaminen' ); ?>
                                                <?php get_template_part( 'template-parts/content', 'mineralen' ); ?>
                                            </div>
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
	jQuery(document).ready(function () {	
            $('.v-carousel').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 4,
                slidesToScroll: 1,
                accessibility: false,
                arrows:true,
                focusOnSelect: true,
                prevArrow: $('.v-prev'),
                nextArrow: $('.v-next'),
                asNavFor: '.v-content',
            });
            $('.v-content').slick({
                slidesToShow: 2,
                arrows:false,
                accessibility: false,
                centerMode: true,
                centerPadding: '0px',
                prevArrow: $('.v-prev'),
                nextArrow: $('.v-next'),
                asNavFor: '.v-carousel',
            });
	});
</script>

<?php } ?>


<?php get_footer(); ?>
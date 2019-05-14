<?php get_header(); ?>

<section id="s-header">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <div class="breadcrumbs">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    }
                    ?>
                </div>
                <div class="s-title">
                    <h1><?php the_title();?></h1>
                    <?php if ( have_rows( 'header_vitamine' ) ) : ?>
                        <?php while ( have_rows( 'header_vitamine' ) ) : the_row(); ?>
                            <span class="s-merk"><?php the_sub_field( 'merk' ); ?></span>
                            <?php echo do_shortcode('[add_vitamine_single]');?>
                            <?php $link_om_te_bestellen = get_sub_field( 'link_om_te_bestellen' ); ?>
                            <?php if ( $link_om_te_bestellen ) { ?>
                               <br> <a class="btn order-btn" href="<?php echo $link_om_te_bestellen['url']; ?>" target="<?php echo $link_om_te_bestellen['target']; ?>"><?php echo $link_om_te_bestellen['title']; ?></a>
                            <?php } ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6 s-productheader">
                <?php if ( have_rows( 'header_vitamine' ) ) : ?>
                    <?php while ( have_rows( 'header_vitamine' ) ) : the_row(); ?>
                        <?php $productafbeelding = get_sub_field( 'productafbeelding' ); ?>
                        <div class="s-productimage"<?php if ( $productafbeelding ) { ?>style="background-image:url(<?php echo $productafbeelding['url']; ?>)"<?php } ?>>
                        </div>
                        <?php $logo = get_sub_field( 'logo' ); ?>
                        <div class="s-productlogo"> 
                            <?php if ( $logo ) { ?>
                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                            <?php } ?>
                        </div>
                        <div class="a-score s-productscore">
                            <span class="the_score"><?php the_sub_field( 'algemene_score' ); ?></span>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="score">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="title"><?php the_field( 'titel_score' ); ?>
                <span class="behind"><?php the_field( 'achtergrond_titel_score' ); ?></span></h2>
                
                <?php get_template_part( 'template-parts/content', 'scores' ); ?>
  
                <b><?php _e('Adviesprijs per maanddosis:','viki')?><span class="adviceprice"><?php the_field( 'adviesprijs_per_maanddosis' ); ?></span></b>
            </div>
        </div>
    </div>
</section>

<section id="review">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2><?php the_field( 'review_titel' ); ?></h2>
                <?php the_field( 'review_content' ); ?>
            </div>
        </div>
    </div>            
</section>

<section id="ingredients">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2><?php _e('Ingrediënten','viki');?></h2>
                <div class="ingredient-list">
                    <?php get_template_part( 'template-parts/content', 'vitaminen' ); ?>
                    <?php get_template_part( 'template-parts/content', 'mineralen' ); ?>
                </div>
            </div>
        </div>
    </div>   
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php _e('Andere interessante producten om mee te vergelijken', 'viki')?></h2>
            </div>
            <?php $loop = new WP_Query( array(
                'post_type' => 'multivitaminen',
                'posts_per_page' => 4,
                'orderby'   => 'rand',
            ) ); ?>
            <?php if ( $loop->have_posts() ) : ?>
            <?php $postcount = 0 ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php $postcount++ ?>
                    <div class="col-lg-3 col-md-4 product">
                        <div class="inner">
                            <div class="row">
                                <?php if ( have_rows( 'header_vitamine' ) ) : ?>
                                    <?php while ( have_rows( 'header_vitamine' ) ) : the_row(); ?>
                                        <?php $logo = get_sub_field( 'logo' ); ?>
                                        <div class="col-6">
                                            <?php if ( $logo ) { ?>
                                                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                                            <?php } ?>
                                        </div>
                                        <div class="col-6">
                                            <div class="a-score">
                                                <span class="the_score"><?php the_sub_field( 'algemene_score' ); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <a href="<?php the_permalink();?>">
                                                <?php $productafbeelding = get_sub_field( 'productafbeelding' ); ?>
                                                <div class="product-image" <?php if ( $productafbeelding ) { ?>style="background-image:url(<?php echo $productafbeelding['url']; ?>);" <?php } ?>>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-9">
                                            <a href="<?php the_permalink();?>">
                                                <span class="product-title"><?php the_title(); ?></span>
                                                <span class="product-merk"><?php the_sub_field( 'merk' ); ?></span>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <?php echo do_shortcode('[add_vitamine]');?>
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
</section>

<?php get_footer(); ?>
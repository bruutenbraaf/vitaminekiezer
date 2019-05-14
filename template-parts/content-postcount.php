
<div class="results">
    <?php 
        $loop = new WP_Query( array(
            'post_type' => array('multivitaminen', 'mineralen', 'vitaminen'),
            'posts_per_page' => -1,
            'order'=> 'DESC'
        ) ); ?>
    <?php if ( $loop->have_posts() ) { ?>
        <?php $countproduct = 0;?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php $countproduct++ ?>
            <?php endwhile; ?>    
            <?php echo $countproduct; ?> 
            <?php if ($countproduct == "1") { ?>
                <?php _e('Resultaat','viki')?>
            <?php } else { ?>
                <?php _e('Resultaten','viki')?>
            <?php } ?>
        <?php wp_reset_postdata(); ?>
    <?php } else { ?>
        <?php _e('Geen resultaten','viki')?>
    <?php } ?>
</div>
<?php get_header(); ?>


<div class="si-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
            <h1> <?php the_title();?> </h1>
                <?php if ( have_rows( 'header' ) ) : ?>
                    <?php while ( have_rows( 'header' ) ) : the_row(); ?>
                        <?php if (get_sub_field('subtitel')) {?><p><?php the_sub_field( 'subtitel' ); ?></p><?php } ?>
                        <?php $header_knop = get_sub_field( 'knop' ); ?>
                        <?php if ( $header_knop ) { ?>
                            <a class="btn" href="<?php echo $header_knop['url']; ?>" target="<?php echo $header_knop['target']; ?>"><?php echo $header_knop['title']; ?></a>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<?php if ( have_rows( 'builder' ) ): ?>
	<?php while ( have_rows( 'builder' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == 'volledige_breedte_tekst' ) : ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 <?php if ( get_sub_field( 'tekst_centreren' ) == 1 ) { ?>center<?php } ?>">
                        <h2><?php the_sub_field( 'titel' ); ?></h2>
                        <?php the_sub_field( 'content' ); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php elseif ( get_row_layout() == 'afbeelding_-_tekst' ) : ?>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php $afbeelding = get_sub_field( 'afbeelding' ); ?>
                        <?php if ( $afbeelding ) { ?>
                            <img src="<?php echo $afbeelding['sizes']['medium_large']; ?>" alt="<?php echo $afbeelding['alt']; ?>" />
                        <?php } ?>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <h2><?php the_sub_field( 'titel' ); ?></h2>
                        <?php the_sub_field( 'content' ); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php elseif ( get_row_layout() == 'tekst_-_afbeelding' ) : ?>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2><?php the_sub_field( 'titel' ); ?></h2>
                        <?php the_sub_field( 'content' ); ?>
                    </div>
                    <div class="col-md-6 offset-md-1">
                        <?php $afbeelding = get_sub_field( 'afbeelding' ); ?>
                        <?php if ( $afbeelding ) { ?>
                            <img src="<?php echo $afbeelding['url']; ?>" alt="<?php echo $afbeelding['alt']; ?>" />
                        <?php } ?>
                    </div>
                 </div>
            </div>
        </section>
        <?php elseif ( get_row_layout() == 'volledige_afbeelding' ) : ?>
        <section id="fullimage">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php $upload_een_afbeelding = get_sub_field( 'upload_een_afbeelding' ); ?>
                        <?php if ( $upload_een_afbeelding ) { ?>
                            <img src="<?php echo $upload_een_afbeelding['sizes']['big']; ?>" alt="<?php echo $upload_een_afbeelding['alt']; ?>" />
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <?php elseif ( get_row_layout() == 'contactformulier' ) : ?>
            <section id="feedback" <?php if ( get_sub_field( 'boven_footer' ) == 1 ) { ?>class="above--footer"<?php } ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 feedback">
                            <div class="inner">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <h3><?php the_sub_field( 'titel' ); ?></h3>
                                    <?php the_sub_field( 'content' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>			
        <?php elseif ( get_row_layout() == 'halve_halve' ) : ?>
            <section id="halve">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <?php the_sub_field( 'tekst' ); ?>
                        </div>
                        <div class="col-md-6">
                            <?php the_sub_field( 'tekst_rechts' ); ?>
                        </div>
                    </div>
                </div>
            </section>
		<?php elseif ( get_row_layout() == 'one_third' ) : ?>
            <section id="one-third">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <?php the_sub_field( 'links' ); ?>
                        </div>
                        <div class="col-md-4">
                            <?php the_sub_field( 'midden' ); ?>
                        </div>
                        <div class="col-md-4">
                            <?php the_sub_field( 'Rechts' ); ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif ( get_row_layout() == 'one-third-two-third' ) : ?>
            <section id="one-third">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <?php the_sub_field( 'links' ); ?>
                        </div>
                        <div class="col-md-4">
                            <?php the_sub_field( 'rechts' ); ?>
                        </div>
                    </div>
                </div>
            </section>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>


<?php get_footer(); ?>
<?php if ( get_field( 'inschakelen', 'option' ) == 1 ) { ?>
    <div class="adv">
        <?php if (get_field('soort_advertentie', 'option') == 'afbeelding' ){ ?>
            <?php if ( have_rows( 'afbeelding_adv', 'option' ) ) { ?>
                <?php while ( have_rows( 'afbeelding_adv', 'option' ) ) : the_row(); ?>
                    <?php $link = get_sub_field( 'link' ); ?>
                    <?php if ( $link ) { ?>
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                            <?php $afbeelding = get_sub_field( 'afbeelding' ); ?>
                            <?php if ( $afbeelding ) { ?>
                                <img src="<?php echo $afbeelding['url']; ?>" alt="<?php echo $afbeelding['alt']; ?>" />
                            <?php } ?>
                        </a>
                    <?php } ?>
                <?php endwhile; ?>
            <?php } ?>
        <?php } else { ?>
            <?php if ( have_rows( 'tekst_advertentie', 'option' ) ) { ?>
                <?php while ( have_rows( 'tekst_advertentie', 'option' ) ) : the_row(); ?>
                    <?php $link = get_sub_field( 'link' ); ?>
                    <?php if ( $link ) { ?>
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                        <div class="adv-title"><?php the_sub_field( 'titel' ); ?></div>
                        <div class="adv-content"><?php the_sub_field( 'content' ); ?></a></div>
                    <?php } ?>
                <?php endwhile; ?>
            <?php } ?>
        <?php } ?>
    </div>
<?php } ?>
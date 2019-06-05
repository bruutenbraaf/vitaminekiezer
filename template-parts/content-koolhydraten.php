
    <div class="ingredient">
        <div class="i-titel">Koolhydraten (nuttige suikers)
            <?php if (get_field('vitamines', 'option')) { ?>
                <div class="i">
                    <div class="i-u">
                        <?php the_field('vitamines', 'option'); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <ul>
        <li><div class="row"><div class="col"><span class="it-title">ẞ-Glucanen</span><span class="it-waarde"><?php the_field( 'ss-glucanen' ); ?></span></div></div></li>
    <li><div class="row"><div class="col"><span class="it-title">Inuline</span><span class="it-waarde"><?php the_field( 'inuline' ); ?></span></div></div></li>
    <li><div class="row"><div class="col"><span class="it-title">d-Ribose</span><span class="it-waarde"><?php the_field( 'd-ribose' ); ?></span></div></div></li>
    <li><div class="row"><div class="col"><span class="it-title">Fructo-oligosachariden (FOS)</span><span class="it-waarde"><?php the_field( 'fructo-oligosachariden_fos' ); ?></span></div></div></li>
        </ul>
    </div>




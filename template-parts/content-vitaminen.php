<?php if (get_field( 'titel_vitaminen' )) { ?>
    <div class="ingredient">
        <div class="i-titel"><?php the_field( 'titel_vitaminen' ); ?> 
            <?php if (get_field( 'vitamines', 'option' )){ ?>
                <div class="i">
                    <div class="i-u">
                        <?php the_field( 'vitamines', 'option' ); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <ul>
            <li><span class="it-title">Provitamine A</span> - <span class="it-waarde"><?php the_field( 'provitamine_a' ); ?></span></li>
            <li><span class="it-title">Vitamine A</span> - <span class="it-waarde"><?php the_field( 'vitamine_a' ); ?></span></li>
            <li><span class="it-title">Vitamine B1</span> - <span class="it-waarde"><?php the_field( 'vitamine_b1' ); ?></span></li>
            <li><span class="it-title">Vitamine B2</span> - <span class="it-waarde"><?php the_field( 'vitamine_b2' ); ?></span></li>
            <li><span class="it-title">Vitamine B3</span> - <span class="it-waarde"><?php the_field( 'vitamine_b3' ); ?></span></li>
            <li><span class="it-title">Vitamine B5</span> - <span class="it-waarde"><?php the_field( 'vitamine_b5' ); ?></span></li>
            <li><span class="it-title">Vitamine b6</span> - <span class="it-waarde"><?php the_field( 'vitamine_b6' ); ?></span></li>
            <li><span class="it-title">Vitamine B8</span> - <span class="it-waarde"><?php the_field( 'vitamine_b8' ); ?></span></li>
            <li><span class="it-title">Vitamine B11</span> - <span class="it-waarde"><?php the_field( 'vitamine_b11' ); ?></span></li>
            <li><span class="it-title">Vitamine B12</span> - <span class="it-waarde"><?php the_field( 'vitamine_b12' ); ?></span></li>
            <li><span class="it-title">Vitamine C</span> - <span class="it-waarde"><?php the_field( 'vitamine_c' ); ?></span></li>
            <li><span class="it-title">Vitamine D</span> - <span class="it-waarde"><?php the_field( 'vitamine_d' ); ?></span></li>
            <li><span class="it-title">Vitamine E</span> - <span class="it-waarde"><?php the_field( 'vitamine_e' ); ?></span></li>
            <li><span class="it-title">Vitamine K</span> - <span class="it-waarde"><?php the_field( 'vitamine_k' ); ?></span></li>
        </ul>
    </div>
<?php } ?>
<?php if (get_field( 'mineralen_titel' )) { ?>
    <div class="ingredient">
        <div class="i-titel"><?php the_field( 'mineralen_titel' ); ?> 
            <?php if (get_field( 'vitamines', 'option' )){ ?>
                <div class="i">
                    <div class="i-u">
                        <?php the_field( 'vitamines', 'option' ); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <ul>
            <li><span class="it-title">Mineralen</span> - <span class="it-waarde"><?php the_field( 'minerelen' ); ?></span></li>
            <li><span class="it-title">Borium boron</span> - <span class="it-waarde"><?php the_field( 'borium_boron' ); ?></span></li>
            <li><span class="it-title">Calcium</span> - <span class="it-waarde"><?php the_field( 'calcium' ); ?></span></li>
            <li><span class="it-title">Chloor</span> - <span class="it-waarde"><?php the_field( 'chloor' ); ?></span></li>
            <li><span class="it-title">Chroom</span> - <span class="it-waarde"><?php the_field( 'chroom' ); ?></span></li>
            <li><span class="it-title">Fosfor</span> - <span class="it-waarde"><?php the_field( 'fosfor' ); ?></span></li>
            <li><span class="it-title">IJzer</span> - <span class="it-waarde"><?php the_field( 'ijzer' ); ?></span></li>
            <li><span class="it-title">Jodium</span> - <span class="it-waarde"><?php the_field( 'jodium' ); ?></span></li>
            <li><span class="it-title">Kalium</span> - <span class="it-waarde"><?php the_field( 'kalium' ); ?></span></li>
            <li><span class="it-title">Koper</span> - <span class="it-waarde"><?php the_field( 'koper' ); ?></span></li>
            <li><span class="it-title">Magnesium</span> - <span class="it-waarde"><?php the_field( 'magnesium' ); ?></span></li>
            <li><span class="it-title">Mangaan</span> - <span class="it-waarde"><?php the_field( 'mangaan' ); ?></span></li>
            <li><span class="it-title">Molybdeen 4 MCG</span> - <span class="it-waarde"><?php the_field( 'molybdeen_4_mcg' ); ?></span></li>
            <li><span class="it-title">Selenium</span> - <span class="it-waarde"><?php the_field( 'selenium' ); ?></span></li>
            <li><span class="it-title">Silicium</span> - <span class="it-waarde"><?php the_field( 'silicium' ); ?></span></li>
            <li><span class="it-title">Zink</span> - <span class="it-waarde"><?php the_field( 'zink' ); ?></span></li>
        </ul>
    </div>
<?php } ?>
<div class="ingredient mkve">
    <div class="i-titel">Probiotica
        <?php if (get_field('probiotica_uitleg', 'option')) { ?>
            <div class="i">
                <div class="i-u">
                    <?php the_field('probiotica_uitleg', 'option'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <ul>
        <?php if (get_field('hoeveelheid_kiemvormende_eenheden_kve_x_mln')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title"><?php the_field('bacterie_stammen'); ?></span><span class="it-waarde"><?php the_field('hoeveelheid_kiemvormende_eenheden_kve_x_mln'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <!-- <?php if (get_field('bacterie_stammen')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Bacterie stammen</span><span class="it-waarde"><?php the_field('bacterie_stammen'); ?></span></div>
                </div>
            </li>
        <?php } ?> -->
    </ul>
</div>
<?php if (get_field('controviersiele_hulpstoffen_e-nummers')) { ?>
    <div class="ingredient junior">
        <div class="i-titel">Controversiële hulpstoffen (E-nummers):
            <?php if (get_field('controversiele_hulpstoffen_e-nummers_uitleg', 'option')) { ?>
                <div class="i">
                    <div class="i-u">
                        <?php the_field('controversiele_hulpstoffen_e-nummers_uitleg', 'option'); ?>
                    </div>
                </div>
            <?php } ?>
            <span class="aantal extra-result"><?php the_field('aantal_controversiele_hulpstoffen'); ?></span>
        </div>
        <ul>
            <li>
                <div class="row">
                    <div class="col"><span class="it-waarde-full"><?php the_field('controviersiele_hulpstoffen_e-nummers'); ?></span></div>
                </div>
            </li>
        </ul>
    </div>
<?php } ?>
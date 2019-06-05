<div class="ingredient">
        <div class="i-titel">Probiotica
            <?php if (get_field('vitamines', 'option')) { ?>
                <div class="i">
                    <div class="i-u">
                        <?php the_field('vitamines', 'option'); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <ul>
        <li><div class="row"><div class="col"><span class="it-title">Hoeveelheid kiemvormende eenheden (KVE) (x mln)</span><span class="it-waarde"><?php the_field( 'hoeveelheid_kiemvormende_eenheden_kve_x_mln' ); ?></span></div></div></li>
        <li><div class="row"><div class="col"><span class="it-title">Bacterie stammen</span><span class="it-waarde"><?php the_field( 'bacterie_stammen' ); ?></span></div></div></li>
        <li><div class="row"><div class="col"><span class="it-title">Controviersiële hulpstoffen (E-nummers)</span><span class="it-waarde"><?php the_field( 'controviersiele_hulpstoffen_e-nummers' ); ?></span></div></div></li>
        </ul>
    </div>


<div class="ingredient junior">
    <div class="i-titel">Vetten
        <?php if (get_field('vetten_vetzuren_lipiden', 'option')) { ?>
            <div class="i">
                <div class="i-u">
                    <?php the_field('vetten_vetzuren_lipiden', 'option'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <ul>
        <?php if (get_field('omega-3_niet_gedefinieerd')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">OMEGA-3 niet gedefinieerd</span><span class="it-waarde"><?php the_field('omega-3_niet_gedefinieerd'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('alfa-linoleenzuur_ala')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Alfa-Linoleenzuur (ALA)</span><span class="it-waarde"><?php the_field('alfa-linoleenzuur_ala'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('epa')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">EPA</span><span class="it-waarde"><?php the_field('epa'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('dha')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">DHA</span><span class="it-waarde"><?php the_field('dha'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('lijnzaadolie')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Lijnzaadolie</span><span class="it-waarde"><?php the_field('lijnzaadolie'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('linolzuur_la')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Linolzuur (LA)</span><span class="it-waarde"><?php the_field('linolzuur_la'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('zonnebloemolie')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Zonnebloemolie</span><span class="it-waarde"><?php the_field('zonnebloemolie'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('boragezaadolie')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Boragezaadolie</span><span class="it-waarde"><?php the_field('boragezaadolie'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('fosfatidylserine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Fosfatidylserine</span><span class="it-waarde"><?php the_field('fosfatidylserine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('lecithine_mg')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Lecithine</span><span class="it-waarde"><?php the_field('lecithine_mg'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('visolie__muv_omega_3_vetzuren')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Visolie m.u.v. Omega 3 vetzuren</span><span class="it-waarde"><?php the_field('visolie__muv_omega_3_vetzuren'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('palmitine-oliezuur')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Palmitine-oliezuur</span><span class="it-waarde"><?php the_field('palmitine-oliezuur'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('zonnebloem_fosfolipiden')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Zonnebloem fosfolipiden</span><span class="it-waarde"><?php the_field('zonnebloem_fosfolipiden'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('triglyceriden')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Triglyceriden</span><span class="it-waarde"><?php the_field('triglyceriden'); ?></span></div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
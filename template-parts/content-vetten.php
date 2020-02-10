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
        <?php if (get_field('totaal_omega-3')) { ?>
            <div class="extra-col"><u>Totaal omega 3:</u> <span class="extra-result"><?php the_field('totaal_omega-3'); ?> mg</span>
            </div>
        <?php } ?>
        <?php if (get_field('omega-3_niet_gedefinieerd')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Omega-3 niet gedefinieerd</span><span class="it-waarde"><?php the_field('omega-3_niet_gedefinieerd'); ?></span></div>
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
                    <div class="col"><span class="it-title">EPA (EcosaPentaeenZuur)</span><span class="it-waarde"><?php the_field('epa'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('dha')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">DHA (DocosaHexaeenZuur)</span><span class="it-waarde"><?php the_field('dha'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('dpa_docosapentateenzuur')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">DPA (DocosaPentateenZuur)</span><span class="it-waarde"><?php the_field('dpa_docosapentateenzuur'); ?></span></div>
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
        <?php if (get_field('algenolie_schizochytrium_sp')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Algenolie (schizochytrium sp)</span><span class="it-waarde"><?php the_field('algenolie_schizochytrium_sp'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('totaal_vetzuren_geen_omega-3')) { ?>
            <div class="extra-col"><u>Totaal vetzuren geen omega 3:</u> <span class="extra-result"><?php the_field('totaal_vetzuren_geen_omega-3'); ?> mg</span>
            </div>
        <?php } ?>
        <?php if (get_field('overige_vetzuren_zoals_omega')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Omega 6,7 & 9 ongespecificeerd</span><span class="it-waarde"><?php the_field('overige_vetzuren_zoals_omega'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('teunisbloemolie_oenothera_biennis_l')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Teunisbloemolie (Oenothera biennis L.)</span><span class="it-waarde"><?php the_field('teunisbloemolie_oenothera_biennis_l'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('arachide_olie_aa')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Arachide Olie (AA)</span><span class="it-waarde"><?php the_field('arachide_olie_aa'); ?></span></div>
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
                    <div class="col"><span class="it-title">Fosfolipiden & Fosfatidylserine</span><span class="it-waarde"><?php the_field('fosfatidylserine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('lecithine_mg')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Lecithine, Choline & fosfatidylcholine</span><span class="it-waarde"><?php the_field('lecithine_mg'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('visolie__muv_omega_3_vetzuren')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Visolie vetzuren zonder omega-3</span><span class="it-waarde"><?php the_field('visolie__muv_omega_3_vetzuren'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('olijfolie_olea_europaea')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Olijfolie (Olea europaea)</span><span class="it-waarde"><?php the_field('olijfolie_olea_europaea'); ?></span></div>
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
        <?php if (get_field('kokosolie_oleum_cocos')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Kokosolie (Oleum cocos)</span><span class="it-waarde"><?php the_field('kokosolie_oleum_cocos'); ?></span></div>
                </div>
            </li>
        <?php } ?>





        <!-- <?php // if (get_field('triglyceriden')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Triglyceriden</span><span class="it-waarde"><?php the_field('triglyceriden'); ?></span></div>
                </div>
            </li>
        <?php // } ?> -->
        <!-- <?php //  if (get_field('omega-3_ongespecificeerd')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Omega 3 ongespecificeerd</span><span class="it-waarde"><?php the_field('omega-3_ongespecificeerd'); ?></span></div>
                </div>
            </li>
        <?php // } ?> -->
    </ul>
</div>
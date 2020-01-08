<div class="ingredient junior">
    <div class="i-titel">Superfoods niet plantaardig
        <?php if (get_field('niet_plantaardige_superfoods', 'option')) { ?>
            <div class="i">
                <div class="i-u">
                    <?php the_field('niet_plantaardige_superfoods', 'option'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <ul>
        <?php if (get_field('astaxanthine_een_carotenoide_e161')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Astaxanthine uit algen, vis of schaaldieren</span><span class="it-waarde"><?php the_field('astaxanthine_een_carotenoide_e161'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('chlorella_pyrenoidosa_gebroken_celwand')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Chlorella pyrenoidosa</span><span class="it-waarde"><?php the_field('chlorella_pyrenoidosa_gebroken_celwand'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('cordyceps_cordyceps_sinensis')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Cordyceps (cordyceps sinensis)</span><span class="it-waarde"><?php the_field('cordyceps_cordyceps_sinensis'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('dunaliella_salina-alg_mg')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Dunaliella Salina-alg</span><span class="it-waarde"><?php the_field('dunaliella_salina-alg_mg'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('koninginnegelei')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Koninginnegelei</span><span class="it-waarde"><?php the_field('koninginnegelei'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('lithothamnium_calcareum_rode_alg_kalkhoudens_zeewier')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Lithothamnium calcareum,rode alg, kalkhoudend zeewier</span><span class="it-waarde"><?php the_field('lithothamnium_calcareum_rode_alg_kalkhoudens_zeewier'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('mytake_grifola_frondosa')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Mytake (grifola frondosa)</span><span class="it-waarde"><?php the_field('mytake_grifola_frondosa'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('rheishi_ganoderma_lucidum')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Rheishi (ganoderma lucidum)</span><span class="it-waarde"><?php the_field('rheishi_ganoderma_lucidum'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('shiitake_lentinula_edodes')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Shiitake (lentinula edodes)</span><span class="it-waarde"><?php the_field('shiitake_lentinula_edodes'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('spirulina_spirulina_platensis')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Spirulina (spirulina platensis)</span><span class="it-waarde"><?php the_field('spirulina_spirulina_platensis'); ?></span></div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
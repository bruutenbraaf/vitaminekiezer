<div class="ingredient junior">
    <div class="i-titel">Vitamine-achtige stoffen
        <?php if (get_field('vitamine-achtige_extra_ingredienten_uitleg', 'option')) { ?>
            <div class="i">
                <div class="i-u">
                    <?php the_field('vitamine-achtige_extra_ingredienten_uitleg', 'option'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <ul>
        <?php if (get_field('choline-bitartaat_mg') != "-") { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Choline-bitartaat</span><span class="it-waarde"><?php the_field('choline-bitartaat_mg'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('inositol_mg') != "-")) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Inositol</span><span class="it-waarde"><?php the_field('inositol_mg'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('paba_para-aminobenzoezuur_mg') != "-")) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">PABA (para-aminobenzoëzuur)</span><span class="it-waarde"><?php the_field('paba_para-aminobenzoezuur_mg'); ?></span></div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
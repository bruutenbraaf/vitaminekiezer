
<div class="ingredient">
    <div class="i-titel">Vitamine-achtige extra ingredienten
        <?php if (get_field('vitamine-achtige_extra_ingredienten_uitleg', 'option')) { ?>
            <div class="i">
                <div class="i-u">
                    <?php the_field( 'vitamine-achtige_extra_ingredienten_uitleg', 'option' ); ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <ul>
    <li><div class="row"><div class="col"><span class="it-title">Choline-bitartaat (mg)</span><span class="it-waarde"><?php the_field( 'choline-bitartaat_mg' ); ?></span></div></div></li>
    <li><div class="row"><div class="col"><span class="it-title">Inositol (mg)</span><span class="it-waarde"><?php the_field( 'inositol_mg' ); ?></span></div></div></li>
    <li><div class="row"><div class="col"><span class="it-title">PABA (para-aminobenzoëzuur) (mg)</span><span class="it-waarde"><?php the_field( 'paba_para-aminobenzoezuur_mg' ); ?></span></div></div></li>
    <li><div class="row"><div class="col"><span class="it-title">Totaal aantal extra ingredienten (superfoods, etc..)</span><span class="it-waarde"><?php the_field( 'totaal_aantal_extra_ingredienten_superfoods_etc' ); ?></span></div></div></li>
    </ul>
</div>

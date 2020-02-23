    <div class="ingredient junior">
        <div class="i-titel">Koolhydraten
            <?php if (get_field('koolhydraten_nuttige_suikers', 'option')) { ?>
                <div class="i">
                    <div class="i-u">
                        <?php the_field('koolhydraten_nuttige_suikers', 'option'); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <ul>
            <?php if (get_field('totaal_koolhydraten')) { ?>
                <div class="extra-col"><u>Totaal koolhydraten:</u> <span class="extra-result"><?php the_field('totaal_koolhydraten'); ?> mg</span>
                </div>
            <?php } ?>
            <?php if (get_field('ss-glucanen')) { ?>
                <li>
                    <div class="row">
                        <div class="col"><span class="it-title">ẞ-Glucanen</span><span class="it-waarde"><?php the_field('ss-glucanen'); ?></span></div>
                    </div>
                </li>
            <?php } ?>
            <?php if (get_field('inuline')) { ?>
                <li>
                    <div class="row">
                        <div class="col"><span class="it-title">Inuline</span><span class="it-waarde"><?php the_field('inuline'); ?></span></div>
                    </div>
                </li>
            <?php } ?>
            <?php if (get_field('d-ribose')) { ?>
                <li>
                    <div class="row">
                        <div class="col"><span class="it-title">d-Ribose</span><span class="it-waarde"><?php the_field('d-ribose'); ?></span></div>
                    </div>
                </li>
            <?php } ?>
            <?php if (get_field('fructo-oligosachariden_fos')) { ?>
                <li>
                    <div class="row">
                        <div class="col"><span class="it-title">Fructo-oligosachariden (FOS)</span><span class="it-waarde"><?php the_field('fructo-oligosachariden_fos'); ?></span></div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
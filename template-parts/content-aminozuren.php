<div class="ingredient junior">
    <div class="i-titel">Eiwitten
        <?php if (get_field('aminozuren_proteinen_enzymen_overig', 'option')) { ?>
            <div class="i">
                <div class="i-u">
                    <?php the_field('aminozuren_proteinen_enzymen_overig', 'option'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <ul>
        <?php if (get_field('acetyl-l-carnitine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Acetyl-l-carnitine </span><span class="it-waarde"><?php the_field('acetyl-l-carnitine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('l-alanine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">l-Alanine</span><span class="it-waarde"><?php the_field('l-alanine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('alfa_liponzuur')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Alfa Liponzuur</span><span class="it-waarde"><?php the_field('alfa_liponzuur'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('betaine_hcl')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Betaine HCl</span><span class="it-waarde"><?php the_field('betaine_hcl'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('co-enzym_q10')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Co-enzym Q10</span><span class="it-waarde"><?php the_field('co-enzym_q10'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('dmae_dimethylethanolamine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">DMAE (DiMethylEthanolAmine)</span><span class="it-waarde"><?php the_field('dmae_dimethylethanolamine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('enzymencomplex')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Enzymencomplex</span><span class="it-waarde"><?php the_field('enzymencomplex'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('l-glutaminezuur')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">l-Glutaminezuur</span><span class="it-waarde"><?php the_field('l-glutaminezuur'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('l-gluthation')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">l-Gluthation</span><span class="it-waarde"><?php the_field('l-gluthation'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('glycine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Glycine</span><span class="it-waarde"><?php the_field('glycine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('l-leucine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">l-Leucine</span><span class="it-waarde"><?php the_field('l-leucine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('l-lysine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">l-Lysine</span><span class="it-waarde"><?php the_field('l-lysine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('melathonine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Melathonine</span><span class="it-waarde"><?php the_field('melathonine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('msm_methyl_sulfonylmethaan')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">MSM: Methyl sulfonylmethaan</span><span class="it-waarde"><?php the_field('msm_methyl_sulfonylmethaan'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('n-acetyl-l-cysteine_nac')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">N-Acetyl-L-Cysteine (NAC)</span><span class="it-waarde"><?php the_field('n-acetyl-l-cysteine_nac'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('pectine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Pectine</span><span class="it-waarde"><?php the_field('pectine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('pterostilbeen')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Pterostilbeen</span><span class="it-waarde"><?php the_field('pterostilbeen'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('ss-sitosterol')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">ẞ-Sitosterol</span><span class="it-waarde"><?php the_field('ss-sitosterol'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('superoxide_dismutase')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Superoxide dismutase</span><span class="it-waarde"><?php the_field('superoxide_dismutase'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('l-taurine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">l-Taurine</span><span class="it-waarde"><?php the_field('l-taurine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('tryptofaan_of_5-htp')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Tryptofaan of 5-HTP</span><span class="it-waarde"><?php the_field('tryptofaan_of_5-htp'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('l-tyrosine')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">l-Tyrosine</span><span class="it-waarde"><?php the_field('l-tyrosine'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('vezels_zemelen')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Vezels, zemelen</span><span class="it-waarde"><?php the_field('vezels_zemelen'); ?></span></div>
                </div>
            </li>
        <?php } ?>
        <?php if (get_field('enzymen')) { ?>
            <li>
                <div class="row">
                    <div class="col"><span class="it-title">Enzymen </span><span class="it-waarde"><?php the_field('enzymen'); ?></span></div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
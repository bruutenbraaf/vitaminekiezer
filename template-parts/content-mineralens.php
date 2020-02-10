<div class="ingredient junior">
    <div class="i-titel">Mineralen
        <?php if (get_field('mineralen_uitleg', 'option')) { ?>
            <div class="i">
                <div class="i-u">
                    <?php the_field('mineralen_uitleg', 'option'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <ul>
        <?php if (get_field('borium_boron')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Borium (boron)</span><span class="it-waarde"><?php the_field('borium_boron'); ?></span></div>
                    <div class="col"><?php the_field('borium_boron_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('calcium')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Calcium</span><span class="it-waarde"><?php the_field('calcium'); ?></span></div>
                    <div class="col"><?php the_field('calcium_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('chloor')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Chloor</span><span class="it-waarde"><?php the_field('chloor'); ?></span></div>
                    <div class="col"><?php the_field('chloor_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('chroom')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Chroom</span><span class="it-waarde"><?php the_field('chroom'); ?></span></div>
                    <div class="col"><?php the_field('chroom_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('fosfor')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Fosfor</span><span class="it-waarde"><?php the_field('fosfor'); ?></span></div>
                    <div class="col"><?php the_field('fosfor_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('ijzer')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">IJzer</span><span class="it-waarde"><?php the_field('ijzer'); ?></span></div>
                    <div class="col"><?php the_field('ijzer_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('jodium')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Jodium</span><span class="it-waarde"><?php the_field('jodium'); ?></span></div>
                    <div class="col"><?php the_field('jodium_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('kalium')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Kalium</span><span class="it-waarde"><?php the_field('kalium'); ?></span></div>
                    <div class="col"><?php the_field('kalium_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('koper')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Koper</span><span class="it-waarde"><?php the_field('koper'); ?></span></div>
                    <div class="col"><?php the_field('koper_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('magnesium')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Magnesium</span><span class="it-waarde"><?php the_field('magnesium'); ?></span></div>
                    <div class="col"><?php the_field('magnesium_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('mangaan')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Mangaan</span><span class="it-waarde"><?php the_field('mangaan'); ?></span></div>
                    <div class="col"><?php the_field('mangaan_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('molybdeen_4_mcg')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Molybdeen</span><span class="it-waarde"><?php the_field('molybdeen_4_mcg'); ?></span></div>
                    <div class="col"><?php the_field('molybdeen_4_mcg_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('selenium')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Selenium</span><span class="it-waarde"><?php the_field('selenium'); ?></span></div>
                    <div class="col"><?php the_field('selenium_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('silicium')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Silicium</span><span class="it-waarde"><?php the_field('silicium'); ?></span></div>
                    <div class="col"><?php the_field('silicium_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('zink')) { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Zink</span><span class="it-waarde"><?php the_field('zink'); ?></span></div>
                    <div class="col"><?php the_field('zink_w'); ?></div>
                </div>
            </li><?php } ?>
    </ul>
</div>
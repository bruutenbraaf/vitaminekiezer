<div class="ingredient junior">
    <div class="i-titel">Vitaminen
        <?php if (get_field('vitamines', 'option')) { ?>
            <div class="i">
                <div class="i-u">
                    <?php the_field('vitamines', 'option'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <ul>
        <?php if (get_field('provitamine_a') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Provitamine A</span><span class="it-waarde"><?php the_field('provitamine_a'); ?></span></div>
                    <div class="col"><?php the_field('provitamine_a_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_a') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine A</span><span class="it-waarde"><?php the_field('vitamine_a'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_a_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_b1') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine B1</span><span class="it-waarde"><?php the_field('vitamine_b1'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_b1_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_b2') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine B2</span><span class="it-waarde"><?php the_field('vitamine_b2'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_b2_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_b3') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine B3</span><span class="it-waarde"><?php the_field('vitamine_b3'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_b3_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_b5') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine B5</span><span class="it-waarde"><?php the_field('vitamine_b5'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_b5_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_b6') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine B6</span><span class="it-waarde"><?php the_field('vitamine_b6'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_b6_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_b8') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine B8</span><span class="it-waarde"><?php the_field('vitamine_b8'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_b8_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_b11') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine B11</span><span class="it-waarde"><?php the_field('vitamine_b11'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_b11_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_b12') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine B12</span><span class="it-waarde"><?php the_field('vitamine_b12'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_b12_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_c') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine C</span><span class="it-waarde"><?php the_field('vitamine_c'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_c_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_d') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine D</span><span class="it-waarde"><?php the_field('vitamine_d'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_d_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_e') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine E</span><span class="it-waarde"><?php the_field('vitamine_e'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_e_w'); ?></div>
                </div>
            </li><?php } ?>
        <?php if (get_field('vitamine_k') != "-") { ?><li>
                <div class="row">
                    <div class="col"><span class="it-title">Vitamine K</span><span class="it-waarde"><?php the_field('vitamine_k'); ?></span></div>
                    <div class="col"><?php the_field('vitamine_k_w'); ?></div>
                </div>
            </li><?php } ?>
    </ul>
</div>
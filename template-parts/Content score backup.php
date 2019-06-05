<ul class="scores">

    <?php if (have_rows('header_vitamine')) : ?>
        <?php while (have_rows('header_vitamine')) : the_row(); ?>
            <?php if (get_sub_field('algemene_score')) { ?>
                <li class="overall">
                    <div class="row">
                        <div class="score--title">
                            <span class="score-title">Kwaliteitsscore</span>
                        </div>
                        <div class="score--bar">
                            <div class="the-bar">
                                <div class="bar-score" style="width:<?php
                                                                    $type = get_sub_field('algemene_score');
                                                                    $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                                    echo $type; ?>%;">
                                </div>
                            </div>
                        </div>
                        <div class="the--score">
                            <span class="x-score"><?php the_sub_field('algemene_score'); ?></span>
                        </div>
                    </div>
                </li>
            <?php } ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if (get_field('compleetheid')) { ?>
        <li>
            <div class="row scoresrow">
                <td><span class="score-title">Compleetheid</span></td>
                <td><div class="the-bar">
                    <div class="bar-score" style="width:<?php
                                                        $type = get_field('compleetheid');
                                                        $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                        echo $type; ?>%;">
                    </div>
                </div>
                </td>
                <td><span class="x-score"><?php the_field('compleetheid'); ?></span></td>
            </div>
        </li>
    <?php } ?>
    <?php if (get_field('dosering')) { ?>
        <li>
            <div class="row scoresrow">
                <span class="score-title">Dosering</span>
                <div class="the-bar">
                    <div class="bar-score" style="width:<?php
                                                        $type = get_field('dosering');
                                                        $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                        echo $type; ?>%;">
                    </div>
                </div>
                <span class="x-score"><?php the_field('dosering'); ?></span>
            </div>
        </li>
    <?php } ?>

    <?php if (get_field('effectiviteit')) { ?>
        <li>
            <div class="row scoresrow">
                <span class="score-title">Effectiviteit</span>
                <div class="the-bar">
                    <div class="bar-score" style="width:<?php
                                                        $type = get_field('effectiviteit');
                                                        $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                        echo $type; ?>%;">
                    </div>
                    <span class="x-score"><?php the_field('effectiviteit'); ?></span>
                </div>
            </div>
        </li>
    <?php } ?>

    <?php if (get_field('veiligheid')) { ?>
        <li>
            <div class="row scoresrow">
                <span class="score-title">Veiligheid</span>
                <div class="the-bar">
                    <div class="bar-score" style="width:<?php
                                                        $type = get_field('veiligheid');
                                                        $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                        echo $type; ?>%;">
                    </div>
                </div>
                <span class="x-score"><?php the_field('veiligheid'); ?></span>
            </div>
        </li>
    <?php } ?>

    <?php if (get_field('kwaliteit_productie_en_productinformatie_')) { ?>
        <li>
            <div class="row scoresrow">
                <span class="score-title">Kwaliteit Productie en Productinformatie </span>
                <div class="the-bar">
                    <div class="bar-score" style="width:<?php $type = get_field('kwaliteit_productie_en_productinformatie_');
                                                        $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                        echo $type; ?>%;">
                    </div>
                </div>
                <span class="x-score"><?php the_field('kwaliteit_productie_en_productinformatie_'); ?></span>
            </div>
        </li>
    <?php } ?>
</ul>
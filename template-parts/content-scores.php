<table class="scores-vergelijker">
    <tbody>
        <?php if (have_rows('header_vitamine')) : ?>
            <?php while (have_rows('header_vitamine')) : the_row(); ?>
                <?php if (get_sub_field('algemene_score')) { ?>
                    <tr class="main-score">
                        <td> <span class="score-title">Viki’s kwaliteitscore</span> </td>

                        <td class="bar">
                            <div class="the-bar">
                                <div class="bar-score" style="width:<?php $type = get_sub_field('algemene_score');
                                                                    $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                                    echo $type; ?>0%;">
                                </div>
                            </div>
                        </td>
                        <td class="main-score-item ">
                            <span class="x-score"><?php the_sub_field('algemene_score'); ?></span>
                        </td>
                    </tr>
                <?php } ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if (get_field('kwaliteit_score_header')) { ?>
            <tr class="overallscore">
                <td> <span class="score-title-overall">Viki’s kwaliteitsscore</span> </td>
                <td class="bar">
                    <div class="the-bar">
                        <div class="bar-score" style="width:<?php $type = get_field('kwaliteit_score_header');
                                                            $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                            echo $type; ?>0%;">
                        </div>
                    </div>
                </td>
                <td class="the-score">
                    <span class="x-score-overall"><?php the_field('kwaliteit_score_header'); ?></span>
                </td>
            </tr>
        <?php } ?>
        <?php if (get_field('compleetheid')) { ?>
            <tr>
                <td> <span class="score-title">Compleetheid</span> </td>

                <td class="bar">
                    <div class="the-bar">
                        <div class="bar-score" style="width:<?php $type = get_field('compleetheid');
                                                            $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                            echo $type; ?>0%;">
                        </div>
                    </div>
                </td>
                <td class="the-score">
                    <span class="x-score"><?php the_field('compleetheid'); ?></span>
                </td>
            </tr>
        <?php } ?>
        <?php if (get_field('dosering')) { ?>
            <tr>
                <td> <span class="score-title">Dosering</span> </td>

                <td class="bar">
                    <div class="the-bar">
                        <div class="bar-score" style="width:<?php $type = get_field('dosering');
                                                            $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                            echo $type; ?>0%;">
                        </div>
                    </div>
                </td>
                <td class="the-score">
                    <span class="x-score"><?php the_field('dosering'); ?></span>
                </td>
            </tr>
        <?php } ?>
        <?php if (get_field('effectiviteit')) { ?>
            <tr>
                <td> <span class="score-title">Effectiviteit</span> </td>

                <td class="bar">
                    <div class="the-bar">
                        <div class="bar-score" style="width:<?php $type = get_field('effectiviteit');
                                                            $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                            echo $type; ?>0%;">
                        </div>
                    </div>
                </td>
                <td class="the-score">
                    <span class="x-score"><?php the_field('effectiviteit'); ?></span>
                </td>
            </tr>
        <?php } ?>
        <?php if (get_field('veiligheid')) { ?>
            <tr>
                <td> <span class="score-title">Veiligheid</span> </td>

                <td class="bar">
                    <div class="the-bar">
                        <div class="bar-score" style="width:<?php $type = get_field('veiligheid');
                                                            $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                            echo $type; ?>0%;">
                        </div>
                    </div>
                </td>
                <td class="the-score">
                    <span class="x-score"><?php the_field('veiligheid'); ?></span>
                </td>
            </tr>
        <?php } ?>
        <?php if (get_field('kwaliteit_productie_en_productinformatie_')) { ?>
            <tr>
                <td> <span class="score-title">Productie en Productinformatie</span> </td>

                <td class="bar">
                    <div class="the-bar">
                        <div class="bar-score" style="width:<?php $type = get_field('kwaliteit_productie_en_productinformatie_');
                                                            $type = str_replace(str_split('\\/:*?"<>|.,'), '', $type);
                                                            echo $type; ?>0%;">
                        </div>
                    </div>
                </td>
                <td class="the-score">
                    <span class="x-score"><?php the_field('kwaliteit_productie_en_productinformatie_'); ?></span>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
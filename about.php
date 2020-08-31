<?php /* Template Name: Page about */ ?>

<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

    <div style="border-bottom: 1px solid #eee" class="uk-padding uk-background-afrikedge-2">
        <h1 class="uk-h3 uk-color-white uk-margin-remove"><?= get_the_title() ?></h1>
    </div>

    <div class="uk-section">
        <div class="uk-child-width-1-2@l uk-child-width-1-1 uk-padding uk-padding-remove-vertical" uk-grid>
            <div class="uk-flex uk-flex-center uk-flex-middle">
                <?= wp_get_attachment_image(tr_posts_field("present_image"), 'full', '', 'class="uk-height-medium"') ?>
            </div>
            <div class="uk-padding uk-padding-remove-vertical">
                <div class="uk-subtitle uk-h5  uk-color-primaire">
                    <?= tr_posts_field('present_subtitle') ?>
                </div>
                <div class="uk-title uk-h2 uk-color-primaire uk-margin-remove-top">
                    <?= tr_posts_field('present_title') ?>
                </div>
                <div class="">
                    <?= tr_posts_field('present_content') ?>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section uk-background-afrikedge-2">
        <div class="uk-container">
            <div class="uk-child-width-1-2@l uk-child-width-1-1 uk-grid-divider" uk-grid>
                <div class="uk-child-width-1-1">
                    <div class="uk-subtitle uk-h5  uk-color-white">
                        <?= tr_posts_field('choice_subtitle') ?>
                    </div>
                    <div class="uk-title uk-h2 uk-color-white uk-margin-remove-top">
                        <?= tr_posts_field('choice_title') ?>
                    </div>
                    <div class="uk-text-small uk-color-white">
                        <?= tr_posts_field('choice_content') ?>
                    </div>
                    <div class="uk-margin-medium-top uk-accordion">
                        <ul uk-accordion>
                            <?php foreach (tr_posts_field("choice_accordeon") as $choice) : ?>
                                <li>
                                    <a class="uk-accordion-title" href="#"><?= $choice['accordeon_title'] ?></a>
                                    <div class="uk-accordion-content uk-color-white">
                                        <?= $choice['accordeon_content'] ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="uk-child-width-1-1">
                    <div class="uk-subtitle uk-h5  uk-color-white">
                        <?= tr_posts_field('valeur_subtitle') ?>
                    </div>
                    <div class="uk-title uk-h2 uk-color-white uk-margin-remove-top">
                        <?= tr_posts_field('valeur_title') ?>
                    </div>
                    <div class="uk-text-small uk-color-white">
                        <?= tr_posts_field('valeur_content') ?>
                    </div>
                    <div class="uk-margin-medium-top uk-accordion">
                        <ul uk-accordion>
                            <?php foreach (tr_posts_field("valeur_accordeon") as $choice) : ?>
                                <li>
                                    <a class="uk-accordion-title" href="#"><?= $choice['accordeon_title'] ?></a>
                                    <div class="uk-accordion-content uk-color-white">
                                        <?= $choice['accordeon_content'] ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--    <div class="uk-margin-bottom">-->
<!--        <div class="uk-child-width-1-2@l uk-child-width-1-1 uk-padding uk-padding-remove-vertical" uk-grid>-->
<!---->
<!--            <div class="uk-flex uk-flex-center uk-flex-middle">-->
<!--                --><?//= wp_get_attachment_image(tr_posts_field("valeur_image"), 'full', '', 'class="uk-height-medium"') ?>
<!--            </div>-->
<!---->
<!--            <div class="uk-padding-large uk-background-afrikedge-2 uk-child-width-1-1">-->
<!--                <div class="uk-subtitle uk-h5  uk-color-white">-->
<!--                    --><?//= tr_posts_field('valeur_subtitle') ?>
<!--                </div>-->
<!--                <div class="uk-title uk-h2 uk-color-white uk-margin-remove-top">-->
<!--                    --><?//= tr_posts_field('valeur_title') ?>
<!--                </div>-->
<!--                <div class="uk-text-small uk-color-white">-->
<!--                    --><?//= tr_posts_field('valeur_content') ?>
<!--                </div>-->
<!--                <div class="uk-margin-medium-top uk-accordion">-->
<!--                    <ul uk-accordion>-->
<!--                        --><?php //foreach (tr_posts_field("valeur_accordeon") as $choice) : ?>
<!--                            <li>-->
<!--                                <a class="uk-accordion-title" href="#">--><?//= $choice['accordeon_title'] ?><!--</a>-->
<!--                                <div class="uk-accordion-content uk-color-white">-->
<!--                                    --><?//= $choice['accordeon_content'] ?>
<!--                                </div>-->
<!--                            </li>-->
<!--                        --><?php //endforeach; ?>
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->

    <?php get_template_part('partials/bloc_partenaire'); ?>
    <?php get_template_part('partials/bloc_footer_1'); ?>


<?php endwhile; ?>

<?php get_footer(); ?>
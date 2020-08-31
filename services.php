<?php /* Template Name: Page service */ ?>

<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

    <div style="border-bottom: 1px solid #eee" class="uk-padding uk-background-afrikedge-2">
        <h1 class="uk-h3 uk-color-white uk-margin-remove"><?= get_the_title() ?></h1>
    </div>

    <div class="uk-section uk-position-relative">

        <canvas id="canvas"></canvas>

        <div class="uk-flex uk-flex-center uk-margin-bottom uk-position-relative uk-padding-small uk-padding-remove-vertical">
            <div class="uk-width-5-6@l uk-width-1-1">
                <div class="uk-title uk-h2 uk-color-primaire uk-margin-remove-top uk-text-center">
                    <?= tr_posts_field('service_title') ?>
                </div>
                <div class="uk-text-small uk-color-primaire uk-text-center">
                    <?= tr_posts_field('service_content') ?>
                </div>
            </div>
        </div>

        <?php


        $args = array(
            'post_type' => 'service',
            'posts_per_page' => -1
        );

        $the_services = get_posts($args);




        ?>
        <div class="uk-container uk-container-small uk-section uk-section-small">

            <div class="uk-child-width-1-3@l uk-child-width-1-1 uk-flex uk-flex-center" uk-grid uk-height-match="target: > div > .uk-card; row: false">
                <?php foreach ($the_services as $service) : ?>
                <div>
                    <div class="uk-card uk-border-rounded uk-services uk-background-default">
                        <div class="uk-card-media-top">
                            <div class="uk-margin-medium uk-margin-left uk-margin-right uk-margin-medium-top uk-flex uk-flex-center">
                                <img src="<?= get_the_post_thumbnail_url($service->ID) ?>" alt="" class="uk-height-small">
                            </div>
                        </div>
                        <div class="uk-card-body uk-margin-medium uk-margin-bottom uk-margin-left uk-margin-right uk-padding-remove">
                            <h3 class="uk-card-title uk-text-center"><a href="<?= get_permalink($service->ID) ?>" class="uk-link-muted uk-color-primaire"><?= $service->post_title ?></a></h3>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </div>



    <?php get_template_part('partials/bloc_partenaire'); ?>
    <?php get_template_part('partials/bloc_footer_1'); ?>


<?php endwhile; ?>

<?php get_footer(); ?>
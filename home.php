<?php /* Template Name: Page accueil */ ?>

<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

    <div>
       <?php echo do_shortcode( tr_posts_field('content_slider') ); ?>
    </div>

    <div class="uk-margin-medium-top uk-flex uk-flex-right" style="min-height: 600px">

        <div class="uk-width-5-6@l uk-width-1-1 uk-background-afrikedge-2 uk-section-rounded-left uk-padding-large uk-position-relative uk-flex uk-flex-middle">

            <div class="uk-child-width-1-2@l uk-child-width-1-1" uk-grid>
                <div class="">
                    <div class="uk-subtitle uk-h5  uk-color-white">
                        <?= tr_posts_field('about_subtitle') ?>
                    </div>
                    <div class="uk-title uk-h2 uk-color-white uk-margin-remove-top">
                        <?= tr_posts_field('about_title') ?>
                    </div>
                    <div class="uk-color-white">

                        <?= tr_posts_field('about_content') ?>
                        <a href="<?= get_permalink(tr_options_field('options.page_about')) ?>" class="uk-button uk-button uk-background-afrikedge uk-color-white uk-border-rounded">En savoir plus</a>
                    </div>

                </div>
                <div class="uk-flex uk-flex-center uk-flex-middle uk-flex-first uk-flex-last@l">
                    <div class="" style="z-index: 1;">
                        <?= wp_get_attachment_image(tr_posts_field("about_image"), 'full') ?>
                        <hr class="uk-divider-icon uk-hidden@l">
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="uk-section uk-position-relative uk-section-large">

        <div class="uk-flex uk-flex-center uk-margin-bottom uk-padding-small uk-padding-remove-vertical">
            <div class="uk-width-5-6@l uk-width-1-1">
                <div class="uk-subtitle uk-h5  uk-color-primaire uk-text-center">
                    <?= tr_posts_field('solution_subtitle') ?>
                </div>
                <div class="uk-title uk-h3 uk-color-primaire uk-margin-remove-top uk-text-center">
                    <?= tr_posts_field('solution_title') ?>
                </div>
            </div>
        </div>

        <?php $myterms = get_terms( array( 'taxonomy' => 'rub_solution', 'parent' => 0 ) ); ?>

        <?php


        $args = array(
            'post_type'=> 'solution',
            'order'    => 'ASC',
            'posts_per_page' => -1
        );

        $the_solutions = get_posts( $args );

        ?>

        <div class="uk-padding-large uk-padding-remove-vertical">

            <div uk-filter="target: .js-filter" class="uk-solution">

                <div class="uk-flex uk-flex-center@l uk-margin-large-bottom">
                    <ul class="uk-subnav uk-subnav-pill uk-subnav-afrikedge uk-flex-center@l">
                        <?php $count = 1; foreach ($myterms as $myterm):  ?>
                            <li <?php if($count ==1) echo 'class="uk-active"'; ?> uk-filter-control="[data-solution*='<?= $myterm->slug ?>']"><a href="#" class="uk-border-rounded"><?= $myterm->name ?></a></li>
                        <?php $count++; endforeach; ?>
                    </ul>
                </div>

                <ul class="js-filter uk-child-width-1-3@l uk-child-width-1-1 uk-text-center uk-grid-divider uk-flex uk-flex-center" uk-grid uk-height-match="target: > li > .uk-card; row: false">
                    <?php foreach ($the_solutions as $solution):

                        $current_tax = get_the_terms($solution->ID, 'rub_solution');
                    ?>
                        <li data-solution="<?= $current_tax[0]->slug ?>">
                            <div class="uk-width-1-1 uk-card uk-card-small uk-card-default uk-background-default uk-inline-clip uk-transition-toggle uk-padding uk-border-rounded">
                                <div class="uk-card-media-top uk-height-medium">
                                    <img src="<?= get_the_post_thumbnail_url($solution->ID) ?>" class="uk-height-small">
                                </div>
                                <div class="uk-card-body uk-position-bottom uk-height-small">
                                    <h3 class="uk-card-title uk-color-primaire"><?= $solution->post_title ?></h3>
                                </div>
                                <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-bottom">

                                    <div class="uk-background-afrikedge uk-width-1-1 uk-border-rounded uk-color-white uk-padding-small uk-text-left">
                                        <div class="uk-text-small uk-margin-small-bottom"><a href="<?= get_permalink($solution->ID) ?>" class="uk-color-white">Plus de details</a></div>
                                        <div class="uk-h3 uk-margin-remove"><?= $solution->post_title ?></div>

                                    </div>

                                </div>
                            </div>
                        </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>

            </div>
        </div>

    </div>

    <div class="uk-section uk-position-relative">

<!--        <canvas id="canvas"></canvas>-->

        <div class="uk-flex uk-flex-center uk-margin-bottom uk-position-relative uk-padding-small uk-padding-remove-vertical">
            <div class="uk-width-5-6@l uk-width-1-1">
                <div class="uk-subtitle uk-h5  uk-color-primaire uk-text-center">
                    <?= tr_posts_field('service_subtitle') ?>
                </div>
                <div class="uk-title uk-h3 uk-color-primaire uk-margin-remove-top uk-text-center">
                    <?= tr_posts_field('service_title') ?>
                </div>
                <div class="uk-margin-top uk-margin-bottom uk-text-small uk-text-center">
                    <?= tr_posts_field('service_content') ?>
                </div>
            </div>
        </div>

        <?php


        $args = array(
            'post_type' => 'service',
            'orderby' => 'rand',
            'posts_per_page' => 5
        );

        $the_services = get_posts($args);




        ?>

        <div class="uk-padding-large uk-padding-remove-vertical">

            <div class="uk-service">

                <div class="uk-flex uk-flex-center@l uk-margin-bottom">
                    <ul class="uk-subnav uk-subnav-pill uk-subnav-afrikedge-2 uk-flex-center@l" uk-switcher="connect: #service; animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                       <?php foreach ($the_services as $service): ?>
                        <li><a href="#"><?= $service->post_title ?></a></li>
                        <?php endforeach; ?>

                    </ul>
                </div>

                <ul class="uk-switcher uk-position-relative" id="service">
                    <?php foreach ($the_services as $service): ?>
                    <li class="uk-background-default">
                        <div class="uk-child-width-1-2@l uk-child-width-1-1 uk-padding" uk-grid>
                            <div class="uk-flex uk-flex-center">
                                <img src="<?= get_the_post_thumbnail_url($service->ID) ?>" alt="" class="uk-height-medium">
                            </div>
                            <div>
                                <div class="uk-subtitle uk-h3 uk-color-primaire">
                                    <?= $service->post_title ?>
                                </div>
                                <div class="uk-height-small">
                                    <?= wp_trim_words($service->post_content, 60, '...') ?>
                                </div>
                                <div class="uk-margin-large-top">
                                    <a href="<?= get_permalink($service->ID) ?>" class="uk-button uk-background-afrikedge uk-color-white uk-border-rounded uk-margin-small-top">Demander un devis</a>
                                    <a href="<?= get_permalink(tr_options_field('options.page_service')) ?>" class="uk-button uk-background-afrikedge-3 uk-color-primaire uk-border-rounded uk-margin-small-top">Plus de services</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; wp_reset_postdata(); ?>
                </ul>

            </div>
        </div>

    </div>

    <?php get_template_part('partials/bloc_footer_1'); ?>
    <?php get_template_part('partials/bloc_blog'); ?>


<?php endwhile; ?>

<?php get_footer(); ?>
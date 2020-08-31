<?php /* Template Name: Page solution */ ?>

<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

    <div style="border-bottom: 1px solid #eee" class="uk-padding uk-background-afrikedge-2">
        <h1 class="uk-h3 uk-color-white uk-margin-remove"><?= get_the_title() ?></h1>
    </div>

    <div class="uk-section uk-position-relative">

        <div class="uk-flex uk-flex-center uk-margin-bottom uk-position-relative uk-padding-small uk-padding-remove-vertical">
            <div class="uk-width-5-6@l uk-width-1-1">
                <div class="uk-subtitle uk-h5  uk-color-primaire uk-text-center">
                    <?= tr_posts_field('solution_title') ?>
                </div>
                <div class="uk-title uk-h2 uk-color-primaire uk-margin-remove-top uk-text-center">
                    <?= tr_posts_field('solution_content') ?>
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



    <?php get_template_part('partials/bloc_partenaire'); ?>
    <?php get_template_part('partials/bloc_footer_1'); ?>


<?php endwhile; ?>

<?php get_footer(); ?>
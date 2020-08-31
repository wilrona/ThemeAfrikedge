<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

    <div style="border-bottom: 1px solid #eee" class="uk-padding uk-background-afrikedge-2">
        <h1 class="uk-h3 uk-color-white uk-margin-remove"><a href="<?= get_the_permalink(tr_options_field('options.page_solution')) ?>" class="uk-link-text uk-color-white">Solutions</a> - <?= get_the_title() ?></h1>
    </div>

    <div class="uk-section uk-position-relative uk-services-single">
        <div class="uk-container">
            <div class="" uk-grid>

                <div class="uk-width-1-3@l uk-width-1-1">

                    <div class="uk-flex" uk-grid>
                        <div class="uk-width-1-1 uk-margin-medium-bottom uk-flex-last@l">
                            <ul class="uk-nav uk-nav-default">
                                <li class="uk-active"><a href="<?= get_the_permalink(tr_options_field('options.page_solution')) ?>">Retour au solutions</a></li>
                            </ul>
                        </div>
                        <div class="uk-width-1-1">
                            <div class="uk-padding-small uk-flex uk-flex-center">
                                <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="uk-height-medium">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-2-3@l uk-width-1-1">

                    <div class="uk-card uk-card-default uk-border-rounded">
                        <div class="uk-card-body">
                            <div class="" uk-grid>
                                <div class="uk-width-1-1">
                                    <h1 class="uk-color-primaire uk-h2"><?= get_the_title() ?></h1>
                                </div>
                            </div>
                            <div class="uk-margin-medium-top">
                                <hr class="uk-divider-icon">
                                <?= get_the_content() ?>
                            </div>
                            <div class="uk-margin-medium-top">
                                <ul class="uk-pagination">

                                    <li><?php previous_post_link('%link', '<span class="uk-margin-small-right" uk-pagination-previous></span> %title') ?></li>
                                    <li class="uk-margin-auto-left"><?php next_post_link('%link', '%title <span class="uk-margin-small-left" uk-pagination-next></span>'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <?php get_template_part('partials/bloc_devis'); ?>
    <?php get_template_part('partials/bloc_footer_1'); ?>


<?php endwhile; ?>

<?php get_footer(); ?>
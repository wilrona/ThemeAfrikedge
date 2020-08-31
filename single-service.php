<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

    <div style="border-bottom: 1px solid #eee" class="uk-padding uk-background-afrikedge-2">
        <h1 class="uk-h3 uk-color-white uk-margin-remove"><a href="<?= get_the_permalink(tr_options_field('options.page_service')) ?>" class="uk-link-text uk-color-white">Services</a> - <?= get_the_title() ?></h1>
    </div>


    <div class="uk-section uk-position-relative uk-services-single">
        <div class="uk-container">
            <div class="" uk-grid>

                <div class="uk-width-1-3@l uk-width-1-1">

                    <?php


                        $args = array(
                        'post_type' => 'service',
                            'order'    => 'ASC',
                        'posts_per_page' => -1
                        );

                        $the_services = get_posts($args);


                    ?>

                    <div class="uk-flex" uk-grid>
                        <div class="uk-width-1-1 uk-margin-medium-bottom">
                            <ul class="uk-nav uk-nav-default">
                                <?php foreach ($the_services as $service) : ?>
                                    <li <?php if($service->ID == get_the_ID()): ?> class="uk-active" <?php endif ?>><a href="<?= get_the_permalink($service->ID) ?>"><?= $service->post_title ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-2-3@l uk-width-1-1">

                    <div class="uk-card uk-card-default uk-border-rounded">
                        <div class="uk-card-body">
                            <div class="" uk-grid>
                                <div class="uk-width-1-3@l uk-width-1-1">
                                    <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="uk-height-small">
                                </div>
                                <div class="uk-width-2-3@l uk-width-1-1 uk-flex uk-flex-middle">
                                    <h1 class="uk-color-primaire uk-h2"><?= get_the_title() ?></h1>
                                </div>
                            </div>
                            <div class="uk-margin-top">
                                <hr class="uk-divider-icon">
                                <?= get_the_content() ?>
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
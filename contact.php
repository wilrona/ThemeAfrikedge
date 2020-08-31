<?php /* Template Name: Page contact */ ?>

<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

    <div style="border-bottom: 1px solid #eee" class="uk-padding uk-background-afrikedge-2">
        <h1 class="uk-h3 uk-color-white uk-margin-remove"><?= get_the_title() ?></h1>
    </div>

    <div class="uk-section uk-position-relative">

        <div class="uk-flex uk-flex-center uk-margin-bottom uk-position-relative uk-padding-small uk-padding-remove-vertical">
            <div class="uk-width-5-6@l uk-width-1-1">
                <div class="uk-subtitle uk-h5  uk-color-primaire uk-text-center">
                    <?= tr_posts_field('contact_title') ?>
                </div>
                <div class="uk-title uk-h2 uk-color-primaire uk-margin-remove-top uk-text-center">
                    <?= tr_posts_field('contact_content') ?>
                </div>
            </div>
        </div>

        <div class="uk-padding-large uk-padding-remove-vertical">

            <div class="uk-child-width-1-3@l uk-child-width-1-1" uk-grid uk-height-match="target: > div > .uk-card; row: false">

                <div>
                    <div class="uk-card uk-border-rounded uk-services uk-background-default">
                        <div class="uk-card-body uk-card-small">
                            <h3 class="uk-card-title uk-text-center uk-color-primaire">Adresse</h3>
                            <div class="uk-text-center"><?= tr_options_field('options.adresse_company'); ?></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-border-rounded uk-services uk-background-default">
                        <div class="uk-card-body uk-card-small">
                            <h3 class="uk-card-title uk-text-center uk-color-primaire">Heure d'ouverture</h3>
                            <div class="uk-text-center"><?= tr_options_field('options.heure_company'); ?></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-border-rounded uk-services uk-background-default">
                        <div class="uk-card-body uk-card-small">
                            <h3 class="uk-card-title uk-text-center uk-color-primaire">Contact direct</h3>
                            <div class="uk-text-center"><?= tr_options_field('options.numero_company'); ?> <br> <?= tr_options_field('options.email_company'); ?></div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="uk-child-width-1-3@l uk-child-width-1-1" uk-grid uk-height-match="target: > div > .uk-card; row: false">

                <div>
                    <div class="uk-card uk-border-rounded uk-services uk-background-default">
                        <div class="uk-card-body uk-card-small">
                            <h3 class="uk-card-title uk-text-center uk-color-primaire">Adresse</h3>
                            <div class="uk-text-center"><?= tr_options_field('options.adresse_company_2'); ?></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-border-rounded uk-services uk-background-default">
                        <div class="uk-card-body uk-card-small">
                            <h3 class="uk-card-title uk-text-center uk-color-primaire">Heure d'ouverture</h3>
                            <div class="uk-text-center"><?= tr_options_field('options.heure_company_2'); ?></div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-border-rounded uk-services uk-background-default">
                        <div class="uk-card-body uk-card-small">
                            <h3 class="uk-card-title uk-text-center uk-color-primaire">Contact direct</h3>
                            <div class="uk-text-center"><?= tr_options_field('options.numero_company_2'); ?> <br> <?= tr_options_field('options.email_company_2'); ?></div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

    <div class="uk-section">
        <div class="uk-flex uk-flex-center uk-margin-medium-bottom uk-position-relative uk-padding-small uk-padding-remove-vertical">
            <div class="uk-width-3-5@l uk-width-1-1">
                <div class="uk-subtitle uk-h5  uk-color-primaire uk-text-center">
                    FORMULAIRE DE CONTACT
                </div>
                <div class="uk-title uk-h2 uk-color-primaire uk-margin-remove-top uk-text-center">
                    N’hésitez pas à nous contacter maintenant
                </div>
            </div>
        </div>

        <div class="uk-form-devis uk-container uk-container-small uk-form-stacked">
            <?php echo do_shortcode( tr_options_field('options.form_devis') ); ?>
        </div>
    </div>

    <?php echo do_shortcode( tr_options_field('options.carte_map') ); ?>
    <?php echo do_shortcode( tr_options_field('options.carte_marker') ); ?>


<?php endwhile; ?>

<?php get_footer(); ?>
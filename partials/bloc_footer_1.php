<div class="uk-background-afrikedge-2">
    <div class="uk-section uk-section-large uk-background-cover" style="background-image: url('<?= get_stylesheet_directory_uri() ?>/img/country.png');" >

        <div class="uk-flex uk-flex-center uk-margin-bottom">
            <div class="uk-width-4-5@l uk-width-1-1">
                <div class="uk-title uk-h1 uk-color-white uk-text-center">
                    Pour demander des informations complémentaires
                </div>
                <div class="uk-text-center uk-margin-medium-top">
                    <a href="<?= get_permalink(tr_options_field('options.page_contact')) ?>" class="uk-button uk-button-default uk-button-large uk-background-afrikedge-4 uk-color-primaire uk-border-rounded">Contactez-nous</a>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="uk-flex uk-flex-center uk-margin-bottom">
    <div class="uk-width-4-5@l uk-width-1-1">
        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-unmargin">
            <div uk-grid class="uk-child-width-1-3@l uk-child-width-1-1 uk-grid-divider">
                <div class="uk-text-center">
                    <span class="uk-display-block uk-h2">
                        <?= tr_options_field('options.nombre_pays') ?>
                    </span><span class="uk-display-block uk-h4 uk-margin-top">Pays</span>
                </div>
                <div class="uk-text-center">
                    <span class="uk-display-block uk-h2">
                        <?= tr_options_field('options.nombre_solution') ?>
                    </span><span class="uk-display-block uk-h4 uk-margin-top">References</span>
                </div>
                <div class="uk-text-center">
                    <span class="uk-display-block uk-h2">
                        <?= tr_options_field('options.nombre_partenaire') ?>
                    </span><span class="uk-display-block uk-h4 uk-margin-top">Solutions</span>
                </div>
            </div>
        </div>
    </div>
</div>
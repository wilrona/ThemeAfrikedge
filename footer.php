

<div class="uk-section uk-background-afrikedge-2">
    <div class="uk-container">
        <div class="uk-child-width-1-3@l uk-child-width-1-1" uk-grid>
            <div>
                <div class="uk-title uk-h2 uk-color-white uk-margin-remove-top uk-text-left">
                    A propos
                </div>
                <p class="uk-color-white">
                    <?= tr_options_field('options.apropo') ?>
                </p>
            </div>
            <div class="">
                <div class="uk-title uk-h2 uk-color-white uk-margin-remove-top uk-text-center@l">
                    Nous suivre
                </div>

                <ul class="uk-subnav uk-flex uk-flex-center@l" uk-margin>
                    <li><a href="<?= tr_options_field('options.lienfacebook') ?>" uk-icon="icon: facebook" class="uk-social-icon"></a></li>
                    <li><a href="<?= tr_options_field('options.lienlinkedin') ?>" uk-icon="icon: linkedin" class="uk-social-icon"></a></li>
                </ul>

            </div>
            <div class="">
                <div class="uk-title uk-h2 uk-color-white uk-margin-remove-top uk-text-left">
                    Notre adresse
                </div>
                <div class="uk-color-white">
                    <?= tr_options_field('options.adresse_company') ?>
                </div>
                <div class="uk-color-white uk-margin-top">
                    <span class="uk-color-white uk-text-left uk-text-bold uk-h4">Phone :</span> <?= tr_options_field('options.numero_company') ?>
                </div>
                <div class="uk-color-white uk-margin-small-top">
                    <span class="uk-color-white uk-text-left uk-text-bold uk-h4">Email :</span> <?= tr_options_field('options.email_company') ?>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="uk-width-1-1 uk-background-afrikedge-2 uk-text-center uk-color-white uk-padding-small uk-padding-remove-horizontal uk-copyright">
    &copy; <?= bloginfo('name'); ?> designed by <a href="https://aligodu.cm" class="uk-link-muted uk-color-white">Aligodu</a>
</div>

<?php wp_footer(); ?>


</body>

</html>
<div class="uk-section uk-section-small">

    <div class="uk-flex uk-flex-center uk-margin-medium-bottom uk-position-relative uk-padding-small uk-padding-remove-vertical">
        <div class="uk-width-5-6@l uk-width-1-1">
            <div class="uk-subtitle uk-h5  uk-color-primaire uk-text-center">
                Nos partenaires
            </div>
            <div class="uk-title uk-h3 uk-color-primaire uk-margin-remove-top uk-text-center">
                Une stratégie pérenne basée sur les partenariats gagnant - gagnant
            </div>
        </div>
    </div>

    <?php


        $args = array(
            'post_type'=> 'partenaire',
            'order'    => 'ASC',
            'posts_per_page' => -1
        );

        $the_partenaires = get_posts( $args );

    ?>

    <div class="uk-width-1-1 uk-padding uk-padding-remove-vertical">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true; finite: true">

            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-5@m uk-grid">
                <?php foreach ($the_partenaires as $partenaire): ?>
                <li class="uk-flex uk-flex-center uk-flex-middle">
                    <div class="uk-panel">
                        <img src="<?= get_the_post_thumbnail_url($partenaire->ID) ?>" alt="">
                    </div>
                </li>
                <?php endforeach; ?>

            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>
    </div>

</div>
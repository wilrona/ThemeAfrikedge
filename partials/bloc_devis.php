<div class="uk-section">
    <div class="uk-flex uk-flex-center uk-margin-medium-bottom uk-position-relative uk-padding-small uk-padding-remove-vertical">
        <div class="uk-width-3-5@l uk-width-1-1">
            <div class="uk-subtitle uk-h5  uk-color-primaire uk-text-center">
                Demandez un devis
            </div>
            <div class="uk-title uk-h2 uk-color-primaire uk-margin-remove-top uk-text-center">
                Obtenir une consultation gratuite
            </div>
        </div>
    </div>

    <div class="uk-form-devis uk-container uk-container-small uk-form-stacked">
        <?php echo do_shortcode( tr_options_field('options.form_devis') ); ?>
    </div>
</div>

<script type="text/javascript">
    document.getElementById('objet-id').value = 'Besoin de << <?= get_the_title(); ?> >>';
</script>
<div class="uk-section uk-section-default">

    <div class="uk-padding-large uk-padding-remove-vertical">
        <div class="" uk-grid>
            <div class="uk-width-2-3@l uk-width-1-1">
                <div class="uk-subtitle uk-h5  uk-color-primaire uk-text-left">
                    Derniers articles
                </div>
                <div class="uk-title uk-h2 uk-color-primaire uk-margin-remove-top uk-text-left">
                    Ce que nous partageons avec vous
                </div>
            </div>
            <div class="uk-width-1-3@l uk-width-1-1 uk-text-right@l">

                <a href="<?= get_permalink(tr_options_field('options.page_blog')) ?>" class="uk-button uk-button uk-background-afrikedge uk-color-white uk-border-rounded">En savoir plus</a>

            </div>
        </div>

        <?php


        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
        );

        $the_posts = get_posts($args);

        ?>

        <div class="uk-child-width-1-3@l uk-child-width-1-1 uk-margin-large-top uk-flex uk-flex-center" uk-grid uk-height-match>
            <?php foreach ($the_posts as $post): ?>
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top uk-cover-container">
                        <img src="<?= get_the_post_thumbnail_url($post->ID) ?>" alt="" uk-cover>
                        <canvas width="350" height="210"></canvas>
                    </div>
                    <div class="uk-card-body">
                        <div class="uk-text-left uk-text-small uk-text-capitalize"><?= get_the_date('F Y')?></div>
                        <h3 class="uk-card-title uk-truncate-overflow"><a href="<?= get_permalink($post->ID) ?>" class="uk-link-text"><?= $post->post_title ?></a></h3>
                    </div>
                </div>
            </div>
            <?php endforeach; wp_reset_postdata();?>

        </div>
    </div>

</div>
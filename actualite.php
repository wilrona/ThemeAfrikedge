<?php /* Template Name: Page actualite */ ?>

<?php get_header() ?>

<?php while (have_posts()) : the_post(); $ID_current = get_the_ID(); ?>

    <div style="border-bottom: 1px solid #eee" class="uk-padding uk-background-afrikedge-2">
        <h1 class="uk-h3 uk-color-white uk-margin-remove"><?= get_the_title() ?></h1>
    </div>

<?php endwhile; ?>
    <div class="uk-section uk-position-relative">

        <div class="uk-flex uk-flex-center uk-margin-bottom uk-position-relative uk-padding-small uk-padding-remove-vertical">
            <div class="uk-width-1-2@l uk-width-1-1">
                <div class="uk-subtitle uk-h5  uk-color-primaire uk-text-center">
                    <?= tr_posts_field('actu_title', $ID_current) ?>
                </div>
                <div class="uk-title uk-h2 uk-color-primaire uk-margin-remove-top uk-text-center">
                    <?= tr_posts_field('actu_content', $ID_current) ?>
                </div>
            </div>
        </div>


        <?php

        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';

        $args = array(
            'post_type' => 'post',
            'posts_per_page'         => '9',
            'paged'                  => $paged
        );

        $additional_loop = query_posts( $args );

        $the_posts= get_posts( $args );
        ?>

        <?php if($the_posts): ?>

    <div class="uk-padding-large uk-padding-remove-vertical">
        <div class="uk-child-width-1-3@l uk-child-width-1-1 uk-margin-large-top uk-margin-small-bottom uk-flex uk-flex-center" uk-grid uk-height-match>
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
            <?php endforeach;?>

        </div>

        <?php
            kriesi_pagination($additional_loop->max_num_pages)
        ?>
    </div>

        <?php else: ?>
            <div class="uk-flex uk-flex-center uk-flex-middle">
                <div class="uk-text-center">
                    <img src="<?= get_stylesheet_directory_uri() ?>/img/no_data_qbuo.png" alt="" class="uk-height-medium">
                    <h3>Aucune actualité a partager avec vous</h3>
                    <a href="<?= home_url() ?>" class="uk-button uk-button uk-background-afrikedge uk-color-white uk-border-rounded">Retour a l'accueil</a>
                </div>
            </div>
        <?php endif; ?>

    </div>






<?php get_footer(); ?>
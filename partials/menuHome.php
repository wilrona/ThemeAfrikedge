
<nav class="uk-nav-header uk-padding-small uk-padding-remove-vertical uk-navbar-transparent uk-visible@l" uk-navbar="">
    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="<?= home_url() ?>">
            <img src="<?= wp_get_attachment_image_src(tr_options_field('options.logo'), 'full')[0]; ?>" alt="">
        </a>

    </div>
    <div class="uk-navbar-right">

        <?php
        $defaults = array(
            'container'       => '',
            'container_class' => '',
            'menu_class' => 'uk-navbar-nav',
            'theme_location' => 'header-right',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'menu' => ''
        );
        wp_nav_menu($defaults);
        ?>

    </div>
</nav>

<?php get_template_part('partials/menuMobile'); ?>

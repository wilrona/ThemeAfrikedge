<nav class="uk-padding-small uk-padding-remove-vertical uk-nav-header uk-hidden@l uk-margin-remove uk-background-default uk-box-shadow-small" uk-sticky uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#" uk-toggle="target: #offcanvas-usage"></a>
    </div>
    <div class="uk-navbar-center">
        <a class="uk-navbar-item uk-logo" href="<?= home_url() ?>">
            <img src="<?= wp_get_attachment_image_src(tr_options_field('options.logo'), 'full')[0]; ?>" alt="">
        </a>
    </div>
</nav>

<div class="uk-position-relative">
    <div id="offcanvas-usage" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column">
            <a class="uk-navbar-item uk-logo" href="<?= home_url() ?>">
                <img src="<?= wp_get_attachment_image_src(tr_options_field('options.logo'), 'full')[0]; ?>" alt="">
            </a>

            <?php
            $defaults = array(
                'container'       => '',
                'container_class' => '',
                'menu_class' => 'uk-nav-primary uk-nav-default uk-nav-parent-icon uk-nav uk-margin-medium-top',
                'theme_location' => 'header-mobile',
                'items_wrap' => '<ul id="%1$s" class="%2$s" uk-nav>%3$s</ul>',
                'menu' => ''
            );
            wp_nav_menu($defaults);
            ?>
        </div>
    </div>
</div>
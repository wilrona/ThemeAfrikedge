<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 04/05/2018
 * Time: 21:12
 */


$boxPos = tr_meta_box('Liste des services');
$boxPos->addScreen('page'); // updated
$boxPos->setCallback(function () {
    $form = tr_form();

    echo $form->text('service_title')->setLabel('Titre du service');

    echo $form->text('service_content')->setLabel('Content service');
});


add_action('admin_head', function () use ($boxPos) {
    if (get_page_template_slug(get_the_ID()) === 'services.php') :
        remove_post_type_support('page', 'editor');
        remove_post_type_support('page', 'thumbnail');
    else :
        remove_meta_box($boxPos->getId(), 'page', 'normal');
    endif;
});

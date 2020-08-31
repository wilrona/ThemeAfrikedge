<?php

$boxPos = tr_meta_box('Information de la page');
$boxPos->addScreen('page'); // updated
$boxPos->setCallback(function () {
    $form = tr_form();

    echo $form->text('actu_title')->setLabel('Titre ');

    echo $form->text('actu_content')->setLabel('Content');
});


add_action('admin_head', function () use ($boxPos) {
    if (get_page_template_slug(get_the_ID()) === 'actualite.php') :
        remove_post_type_support('page', 'editor');
        remove_post_type_support('page', 'thumbnail');
    else :
        remove_meta_box($boxPos->getId(), 'page', 'normal');
    endif;
});

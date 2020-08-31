<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 01/05/2018
 * Time: 01:42
 */


$box1 = tr_meta_box('Presentation');
$box1->addScreen('page'); // updated
$box1->setCallback(function () {
    $form = tr_form();

    echo $form->text('present_subtitle')->setLabel('Sous titre presentation');

    echo $form->text('present_title')->setLabel('Titre presentation');
    echo $form->editor('present_content')->setLabel('Content presentation');
    echo $form->image('present_image')->setLabel('Image presentation');
});


$box2 = tr_meta_box('Pourquoi nous choisir');
$box2->addScreen('page'); // updated
$box2->setCallback(function () {
    $form = tr_form();

    echo $form->text('choice_subtitle')->setLabel('Sous titre');
    echo $form->text('choice_title')->setLabel('Titre');

    echo $form->editor('choice_content')->setLabel('Content');

    echo $form->image('choice_image')->setLabel('Image');

    $listing = $form->repeater('choice_accordeon')->setFields([
        $form->text('accordeon_title')->setLabel('Titre accordeon'),
        $form->editor('accordeon_content')->setLabel('Content accordeon')
    ])->setLabel('Listing accordeon');

    echo $listing;
});

$box3 = tr_meta_box('Nos valeurs');
$box3->addScreen('page');
$box3->setCallback(function () {
    $form = tr_form();

    echo $form->text('valeur_subtitle')->setLabel('Sous titre');
    echo $form->text('valeur_title')->setLabel('Titre');

    echo $form->editor('valeur_content')->setLabel('Content');

    echo $form->image('valeur_image')->setLabel('Image');

    $listing = $form->repeater('valeur_accordeon')->setFields([
        $form->text('accordeon_title')->setLabel('Titre accordeon'),
        $form->editor('accordeon_content')->setLabel('Content accordeon')
    ])->setLabel('Listing accordeon');

    echo $listing;
});


add_action('admin_head', function () use ($box1, $box2, $box3) {
    if (get_page_template_slug(get_the_ID()) === 'about.php') :
        remove_post_type_support('page', 'editor');
    else :
        remove_meta_box($box1->getId(), 'page', 'normal');
        remove_meta_box($box2->getId(), 'page', 'normal');
        remove_meta_box($box3->getId(), 'page', 'normal');
    endif;
});

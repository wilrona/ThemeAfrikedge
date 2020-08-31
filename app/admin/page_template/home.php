<?php

//$home = (int) get_option('page_on_front');

$bloc_slider = tr_meta_box('slider_home');
$bloc_slider->setLabel('Slider');
$bloc_slider->addScreen('page');
$bloc_slider->setCallback(function (){

    $form = tr_form();

    echo $form->text('content_slider')->setLabel('Code du slider');

});

$bloc_about = tr_meta_box('about_home');
$bloc_about->setLabel('Qui sommes nous ?');
$bloc_about->addScreen('page');
$bloc_about->setCallback(function (){

    $form = tr_form();

    echo $form->text('about_subtitle')->setLabel('Sur titre');
    echo $form->text('about_title')->setLabel('Titre');
    echo $form->editor('about_content')->setLabel('Contenu');
    echo $form->image('about_image')->setLabel('Image');

    echo $form->search('about_link')->setLabel('Lien vers la page')->setPostType('page');

});

$bloc_solution = tr_meta_box('solution_home');
$bloc_solution->setLabel('Nos solutions');
$bloc_solution->addScreen('page');
$bloc_solution->setCallback(function (){

    $form = tr_form();

    echo $form->text('solution_subtitle')->setLabel('Sur titre');
    echo $form->text('solution_title')->setLabel('Titre');

});

$bloc_service = tr_meta_box('service_home');
$bloc_service->setLabel('Nos Services');
$bloc_service->addScreen('page');
$bloc_service->setCallback(function (){

    $form = tr_form();

    echo $form->text('service_subtitle')->setLabel('Sur titre');
    echo $form->text('service_title')->setLabel('Titre');
    echo $form->editor('service_content')->setLabel('Contenu');

});

add_action('admin_head', function () use ($bloc_slider, $bloc_about, $bloc_solution, $bloc_service) {
    if (get_page_template_slug(get_the_ID()) === 'home.php') :
        remove_post_type_support('page', 'editor');
    else:
        remove_meta_box($bloc_slider->getId(), 'page', 'normal');
        remove_meta_box($bloc_about->getId(), 'page', 'normal');
        remove_meta_box($bloc_solution->getId(), 'page', 'normal');
        remove_meta_box($bloc_service->getId(), 'page', 'normal');
    endif;
});

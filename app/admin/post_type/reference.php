<?php
/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 01/05/2018
 * Time: 09:51
 */


$projet = tr_post_type('Reference', 'References');

$projet->setIcon('ticket');
$projet->setArgument('supports', ['title', 'thumbnail']);


$box = tr_meta_box('lien_reference')->setLabel('Information complementaire');

$box->addPostType($projet->getId());


$box->setCallback(function () {
    $form = tr_form();
    echo $form->text('reference_link')->setLabel('Lien de la reference');

});

$rub = tr_taxonomy('Rubrique', 'Rubriques');
$rub->setHierarchical();
$rub->setId('rub_reference');
$rub->apply($projet);


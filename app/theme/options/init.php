<?php
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

// Setup Form
$form = tr_form()->useJson()->setGroup($this->getName());
?>

<h1>Theme Options</h1>
<div class="typerocket-container">
    <?php
    echo $form->open();

    $company_infos = function () use ($form) {

        echo '<h2 class="uk-padding-remove-bottom uk-text-center uk-margin-top">Information de l\'entreprise</h2>';

        echo $form->image('icon')->setLabel('Icone du site')->setHelp('Visible dans le coin de l\'onglet du navigateur')->setSetting('button', 'Inserer l\'icone');
        echo $form->image('logo')->setLabel('Logo du site web')->setSetting('button', 'Inserer le logo');

        echo '<hr >';


        echo $form->textarea('apropo')->setLabel('A propos au pied de page');

        echo '<hr >';

        echo $form->text('lienfacebook')->setLabel('Lien facebook');
        echo $form->text('lienlinkedin')->setLabel('Lien linkedin');

        echo '<hr >';

        echo $form->editor('adresse_company')->setLabel('Adresse de l\'entreprise');
        echo $form->text('heure_company')->setLabel('Heure d\'ouverture');
        echo $form->text('numero_company')->setLabel('Numero de telephone');
        echo $form->text('email_company')->setLabel('Numero de telephone');


        echo '<hr >';

        echo $form->editor('adresse_company_2')->setLabel('Adresse de l\'entreprise');
        echo $form->text('heure_company_2')->setLabel('Heure d\'ouverture');
        echo $form->text('numero_company_2')->setLabel('Numero de telephone');
        echo $form->text('email_company_2')->setLabel('Numero de telephone');

        echo '<hr >';

        echo $form->text('nombre_pays')->setLabel('Nombre de pays');
        echo $form->text('nombre_solution')->setLabel('Nombre de solution');
        echo $form->text('nombre_partenaire')->setLabel('Nombre de partenaire');

        echo '<hr >';

        echo $form->text('form_devis')->setLabel('Shortcode Formulaire de devis');
        echo $form->text('carte_map')->setLabel('Shortcode Carte google');
        echo $form->text('carte_marker')->setLabel('Shortcode MArker');


    };

    $config_page = function () use ($form){
        
        echo '<h2 class="uk-padding-remove-bottom uk-text-center uk-margin-top">Configuration des pages</h2>';

        echo $form->search('page_about')->setLabel('Page about')->setPostType('page');
        echo $form->search('page_service')->setLabel('Page de service')->setPostType('page');
        echo $form->search('page_solution')->setLabel('Page de solution')->setPostType('page');
        echo $form->search('page_contact')->setLabel('Page de contact')->setPostType('page');
        echo $form->search('page_blog')->setLabel('Page de blog')->setPostType('page');

    };




    // Save
    $save = $form->submit('Enregistrement');

    // Layout
    tr_tabs()->setSidebar($save)
        ->addTab('Entreprise', $company_infos)
        ->addTab('Pages', $config_page)
        ->render();
    echo $form->close();
    ?>

</div>
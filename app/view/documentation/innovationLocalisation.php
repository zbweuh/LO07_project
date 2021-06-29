<?php
require($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <h3>Innovation 3</h3>
        
        <p>
            Cette dernière innovation consiste en une page construisant les adresses google maps des différents centres automatiquement.
            On a donc une liste de liens avec un foreach et grâce aux requêtes du ModelCentre où on récupère les données dont on a besoin pour écrire l'adresse c'est à dire l'id, l'adresse et le label. 
            Cela permet de pouvoir rapidement voir leur localisation et donc vérifier quel centre est le plus proche.
        </p>


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

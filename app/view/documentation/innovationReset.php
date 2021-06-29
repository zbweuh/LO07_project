<?php
require($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <h3>Innovation 1</h3>
        
        <p>
            Pour cette innovation, nous avons choisit de proposer de réinitialiser les données.
            Pour cela nous supprimons toutes les tables de la base de données, puis nous lancons directement les fichiers covid_create.sql et covid_insert.sql.
            Cela nous à appris à utiliser les fichier directement plutot que les requêtes, en plus d'être très utile pour le teste de fonctionnement du site.
        </p>


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

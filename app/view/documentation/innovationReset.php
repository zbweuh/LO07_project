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
            Pour cette innovation, nous avons choisi de proposer de réinitialiser les données.
            Pour cela nous supprimons toutes les tables de la base de données, puis nous lançons directement les fichiers covid_create.sql et covid_insert.sql.
            Cela nous a appris à utiliser les fichiers directement plutôt que les requêtes, en plus d'être très utile pour le test de fonctionnement du site.
        </p>


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

<?php
require($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <h3>Innovation 2:</h3>
        
        <p>
            Pour cette innovation, nous avons choisi de réaliser un diagramme circulaire. Cela permet une meilleure vision des stocks.
            En effet, on représente à l'intérieur les stocks de vaccins disponibles répertoriés. On somme les stocks présents dans les différents centres, le diagramme est donc bien dynamique.
            Pour cela, on utilise des fonctions déjà créées dans ModelVaccin et ModelStock ce qui permet de récupérer les valeurs qui nous intéressent (id, label, quantite...).
            Enfin on utilise la librairie rgraph pour réaliser le diagramme circulaire facilement.        </p>


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

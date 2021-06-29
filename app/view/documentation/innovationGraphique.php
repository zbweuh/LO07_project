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
            Pour cette innovation, nous avons choisit de réaliser un diagramme circulaire.
            On représente à l'intérieur les stocks de vaccins disponibles répertoriés. On somme les stocks présents dans les différents centres, le diagramme est donc bien dynamique.
            Enfin on utilise la librairie rgraph pour réaliser un diagramme circulaire facilement.
        </p>


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

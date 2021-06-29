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
            Il s'agit d'une page construisant les addresses google maps des différents centre automatiquement pour pouvoir rapidement voir leur localisation.
        </p>


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

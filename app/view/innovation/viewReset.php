<?php
require($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <h4>Vous venez de remettre à zéro les valeurs de la base Covid (valeurs intiiales).</h4>


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

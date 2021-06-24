
<!-- ----- début viewUpdated -->
<?php
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>
        <!-- ===================================================== -->
        <?php
        if ($result) {
            echo ("<h3>Le stock a bien été ajouté </h3>");
        } else {
            echo ("<h3>Problème d'ajout du stock</h3>");
        }
        echo("<ul>");
            echo ("<li>centre = " . $labelCentre . "</li>");
            echo ("<li>vaccin = " . $labelVaccin . "</li>");
            echo ("<li>doses = " . $doses . "</li>");
            echo("</ul>");

        echo("</div>");

        include $root . '/app/view/fragment/fragmentCovidFooter.html';
        ?>
        <!-- ----- fin viewInserted -->    



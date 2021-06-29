
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
        if ($results) {
            echo ("<h3>Le stock a bien été ajouté </h3>");
        } else {
            echo ("<h3>Problème d'ajout du stock</h3>");
        }
        echo ("<h4>Centre : $labelCentre</h4><br>");
        echo("<ul>");
        foreach ($results as $element) {
            echo ("<li>vaccin : " . $element[0]->getLabel() . ", stock ajouté : $element[1]</li>");
        }
        echo("</ul>");

        echo("</div>");

        include $root . '/app/view/fragment/fragmentCovidFooter.html';
        ?>
        <!-- ----- fin viewInserted -->    



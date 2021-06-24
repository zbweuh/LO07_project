
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
            echo ("<h3>Le vaccin a bien été ajouté </h3>");
            echo("<ul>");
            echo ("<li>centre : " . $vaccin->getId() . "</li>");
            echo ("<li>vaccin : " . $vaccin->getLabel() . "</li>");
            echo ("<li>doses : " . $vaccin->getDoses() . "</li>");
            echo("</ul>");
        } else {
            echo ("<h3>Problème de modification du vaccin</h3>");
            echo ("id = " . $_GET['id']);
        }

        echo("</div>");

        include $root . '/app/view/fragment/fragmentCovidFooter.html';
        ?>
        <!-- ----- fin viewInserted -->    




<!-- ----- début viewInserted -->
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
            echo ("<h3>Le nouveau patient a été ajouté </h3>");
            echo("<ul>");
            echo ("<li>id = " . $results . "</li>");
            echo ("<li>nom = " . $_GET['nom'] . "</li>");
            echo ("<li>prenom = " . $_GET['prenom'] . "</li>");
            echo ("<li>adresse = " . $_GET['adresse'] . "</li>");
            echo("</ul>");
        } else {
            echo ("<h3>Problème d'insertion du centre</h3>");
            echo ("id = " . $_GET['nom']);
        }

        echo("</div>");

        include $root . '/app/view/fragment/fragmentCovidFooter.html';
        ?>
        <!-- ----- fin viewInserted -->    



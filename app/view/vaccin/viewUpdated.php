
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
            echo ("<h3>Le vaccin a bien été modifié </h3>");
            echo("<ul>");
            echo ("<li>id = " . $results . "</li>");
            echo ("<li>label = " . $_GET['label'] . "</li>");
            echo ("<li>doses = " . $_GET['doses'] . "</li>");
            echo("</ul>");
        } else {
            echo ("<h3>Problème de modification du vaccin</h3>");
            echo ("label = " . $_GET['label']);
        }

        echo("</div>");

        include $root . '/app/view/fragment/fragmentCovidFooter.html';
        ?>
        <!-- ----- fin viewInserted -->    



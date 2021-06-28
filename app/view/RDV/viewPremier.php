
<!-- ----- début viewVaccins -->
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
        echo ("<h3>Votre premier rendez-vous est pris :</h3>");
        echo("<ul>");
        echo ("<li>centre : " . $centre->getLabel() . "</li>");
        echo ("<li>vaccin : " . $vaccin->getLabel() . "</li>");
        echo("</ul>");

        echo("</div>");

        include $root . '/app/view/fragment/fragmentCovidFooter.html';
        ?>
        <!-- ----- fin viewInserted -->    



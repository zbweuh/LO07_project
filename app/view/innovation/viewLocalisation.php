<?php
require($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <h1>Localisation :</h1>
        <div class="buttons">
            <ul>
            <?php foreach ($centres as $centre) {
                echo "<li id='".$centre->getId()."'><a href='https://maps.google.com/?q=".$centre->getAdresse()."' target='_blank'>".$centre->getLabel()."</a></li>";
            }?>
            </ul>
        </div>


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

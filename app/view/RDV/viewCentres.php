
<!-- ----- début viewCentres -->

<?php
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <form role="form" method='get' action='router.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='RDVPremier'>
                <input type="hidden" name='patient' value='<?=$patient?>'>
                <label for="centre">Veuillez selectionner un centre : </label> 
                <select class="form-control" name='centre' id='centre'  style="width: 100px">
                    <?php
                    foreach ($results as $centre) {
                        echo ("<option size='20' value='".$centre->getId()."'>".$centre->getLabel()." - ".$centre->getAdresse()."</option>");
                    }
                    ?>
                </select>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p/>
    </div>

    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewUpdate -->




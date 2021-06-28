
<!-- ----- début viewInjection -->

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
                <input type="hidden" name='action' value='RDVNouveau'>
                <input type="hidden" name='patient' value='<?=$patient?>'>
                <input type="hidden" name='vaccin' value='<?=$vaccin->getId()?>'>
                <label for="centre">Choix d'un centre: </label> 
                <select class="form-control" id='centre' name='centre' style="width: 100px">
                    <?php
                    foreach ($centres as $element) {
                        echo ("<option size='20' value='".$element->getId()."'>".$element->getLabel()."</option>");
                    }
                    ?>
                </select>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        <p/>
    </div>

    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewUpdate -->




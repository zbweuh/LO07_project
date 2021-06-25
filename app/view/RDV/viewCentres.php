
<!-- ----- début viewUpdate -->

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
                <input type="hidden" name='action' value='VaccinUpdated'>
                <label for="id">label : </label> 
                <select class="form-control" label='id' name='id' style="width: 100px">
                    <?php
                    foreach ($results as $centre) {
                        echo ("<option size='20' value='".$centre->getId()."'>".$element->getLabel()." - ".$centre->getAdresse()."</option>");
                    }
                    ?>
                </select>
                <br>
                <label for="id">doses : </label><input type="number" name='doses' value='2'>  
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        <p/>
    </div>

    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewUpdate -->




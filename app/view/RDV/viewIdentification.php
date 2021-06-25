
<!-- ----- début viewAdd -->

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
                <input type="hidden" name='action' value='RDVSituation'>        
                <label for="patient">Choix du patient : </label>
                <select name="patient" id="patient">
                    <?php foreach ($results as $patient) {
                        echo "<option value='".$patient->getId()."'>".$patient->getPrenom()." ".$patient->getNom()."</option>";
                    }?>
                </select>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p/>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewInsert -->


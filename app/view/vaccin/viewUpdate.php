
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
                <input type="hidden" name='action' value='VaccinUpdate'>
                <label for="id">label : </label> <select class="form-control" id='id' name='id' style="width: 100px">
                    <?php
                    foreach ($results as $label) {
                        echo ("<option>$label</option>");
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





<!-- ----- début viewInsert -->

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
                <input type="hidden" name='action' value='PatientCreated'>        
                <label for="id">nom : </label><input type="text" name='nom' size='50' value='Pierre'>
                <label for="id">prenom : </label><input type="text" name='prenom' size='50' value='Paul'>   
                <label for="id">adresse : </label><input type="text" name='adresse' size='50' value='Rue des Gayettes'>              
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p/>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewInsert -->




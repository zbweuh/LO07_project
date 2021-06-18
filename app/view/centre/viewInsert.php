
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
                <input type="hidden" name='action' value='CentreCreated'>        
                <label for="id">label : </label><input type="text" name='label' size='50' value='Nouveau centre'>                           
                <label for="id">adresse : </label><input type="text" name='adresse' size='50' value='3 boulevard du parc au lièvre'>              
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p/>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewInsert -->




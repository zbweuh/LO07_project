
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
                <input type="hidden" name='action' value='StockAdded'>        
                <label for="centre">Centre : </label>
                <select name="centre" id="centre">
                    <?php foreach ($centres as $element) {
                        echo "<option value='".$element->getId()."'>".$element->getLabel()."</option>";
                    }?>
                </select>
                <br>
                <?php foreach($vaccins as $element) {
                    echo "<label for='".$element->getLabel()."'>Dose de ".$element->getLabel()." : </label>";
                    echo "<input type='number' name='".$element->getId()."' id='".$element->getLabel()."' value='1'><br>";
                }?>
                <br>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p/>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewInsert -->





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
                <label for="vaccin">Vaccin : </label>
                <select name="vaccin" id="vaccin">
                    <?php foreach($vaccins as $element) {
                        echo "<option value='".$element->getId()."'>".$element->getLabel()."</option>";
                    }?>
                </select>
                <br>
                <label for="doses">Doses :</label>
                <input type="number" name='doses' id="doses" size='50' value='1'>       
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p/>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewInsert -->




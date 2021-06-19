
<!-- ----- debut ControllerStock -->
<?php
require_once '../model/ModelStock.php';

class ControllerStock {

    // --- Liste des stocks des centres
    public static function StockReadAll() {
        $results = ModelStock::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/stock/viewAll.php';
        if (DEBUG)
            echo ("ControllerStock : StockReadAll : vue = $vue");
        require ($vue);
    }
    
    //Liste des doses globales de chaque centre par ordre décroissant
    public static function StockGlobal() {
        $results = ModelStock::sum();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/stock/viewDoses.php';
        if (DEBUG)
            echo ("ControllerStock : StockGlobal: vue = $vue");
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerStock -->


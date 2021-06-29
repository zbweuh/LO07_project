
<!-- ----- debut ControllerStock -->
<?php
require_once '../model/ModelStock.php';
require_once '../model/ModelCentre.php';
require_once '../model/ModelVaccin.php';

class ControllerStock {

    // --- Liste des stocks des centres
    public static function StockReadAll() {
        foreach (ModelStock::getAll() as $element) {
            $centre = ModelCentre::getById($element->getCentre_id())->getLabel();
            $vaccin = ModelVaccin::getById($element->getVaccin_id())->getLabel();
            $quantite = $element->getQuantite();
            $stocks[] = array($centre,$vaccin,$quantite);
        }
        $results = $stocks;
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/stock/viewAll.php';
        if (DEBUG)
            echo ("ControllerStock : StockReadAll : vue = $vue");
        require ($vue);
    }
    
    //Liste des doses globales de chaque centre par ordre décroissant
    public static function StockGlobal() {
        foreach (ModelStock::sum() as $element) {
            $centre = ModelCentre::getById($element[0])->getLabel();
            $stocks[] = array($centre,$element[1]);
        }
        $results = $stocks;
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/stock/viewDoses.php';
        if (DEBUG)
            echo ("ControllerStock : StockGlobal: vue = $vue");
        require ($vue);
    }

    public static function StockAdd() {
        $centres = ModelCentre::getAll();
        $vaccins = ModelVaccin::getAll();
        include 'config.php';
        $vue = $root . '/app/view/stock/viewAdd.php';
        require ($vue);
    }
    
    public static function StockAdded() {
        $centre = $_GET['centre'];
        $vaccin = $_GET['vaccin'];
        $doses = $_GET['doses'];
        $result = ModelStock::add($centre,$vaccin,$doses);
        $labelCentre = ModelCentre::getById($centre)->getLabel();
        $labelVaccin = ModelVaccin::getById($vaccin)->getLabel();
        include 'config.php';
        $vue = $root . '/app/view/stock/viewAdded.php';
        require ($vue);
    }
    
}
?>
<!-- ----- fin ControllerStock -->


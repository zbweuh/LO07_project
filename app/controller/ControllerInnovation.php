
<!-- ----- debut ControllerInnovation -->
<?php
require_once '../model/ModelCentre.php';
require_once '../model/ModelInnovation.php';
require_once '../model/ModelStock.php';
require_once '../model/ModelVaccin.php';

class ControllerInnovation {

    public static function InnovationReset() {
        $results = ModelInnovation::Reset();
        include 'config.php';
        $vue = $root . '/app/view/innovation/viewReset.php';
        require ($vue);
    }
    
    public static function InnovationGraphique() {
        foreach (ModelVaccin::getAll() as $vaccin) {
            $stocks = ModelStock::getByVaccin($vaccin->getId());
            $values[] = array_reduce($stocks,function ($quantite,$stock) {return $quantite+$stock->getQuantite();});
            $labels[] = $vaccin->getLabel();
        }
        include 'config.php';
        $vue = $root . '/app/view/innovation/viewGraphique.php';
        require ($vue);
    }
    
    public static function InnovationLocalisation() {
        $centres = ModelCentre::getAll();
        include 'config.php';
        $vue = $root . '/app/view/innovation/viewLocalisation.php';
        require ($vue);
    }
}
?>
<!-- ----- fin ControllerInnovation -->


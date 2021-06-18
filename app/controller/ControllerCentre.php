
<!-- ----- debut ControllerCentre -->
<?php
require_once '../model/ModelCentre.php';

class ControllerCentre {

    // --- Liste des vaccins
    public static function CentreReadAll() {
        $results = ModelCentre::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/centre/viewAll.php';
        if (DEBUG)
            echo ("ControllerCentre : CentreReadAll : vue = $vue");
        require ($vue);
    }

    // Affiche le formulaire de creation d'un centre
    public static function CentreCreate() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/centre/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau centre.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function CentreCreated() {
        // ajouter une validation des informations du formulaire
        $results = ModelCentre::insert(
                        htmlspecialchars($_GET['label']), htmlspecialchars($_GET['adresse'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/centre/viewInserted.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerCentre -->


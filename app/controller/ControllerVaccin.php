
<!-- ----- debut ControllerVaccin -->
<?php
require_once '../model/ModelVaccin.php';

class ControllerVaccin {

    // --- Liste des vaccins
    public static function VaccinReadAll() {
        $results = ModelVaccin::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewAll.php';
        if (DEBUG)
            echo ("ControllerVaccin : VaccinReadAll : vue = $vue");
        require ($vue);
    }
        
    /* // Affiche un formulaire pour sélectionner un id qui existe
    public static function VaccinReadId($args) {
        if (DEBUG)
            echo ("ControllerVaccin:VaccinReadId:begin</br>");
        $results = ModelVaccin::getAllId();

        $target = $args['target'];
        if (DEBUG)
            echo ("ControllerVaccin:VaccinReadId : target = $target</br>");

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewId.php';
        require ($vue);
    }*/

    /*
    // Affiche un vaccin particulier (id)
    public static function VaccinReadOne() {
        $vaccin_id = $_GET['id'];
        $results = ModelVaccin::getOne($vaccin_id);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewAll.php';
        require ($vue);
    }*/

    // Affiche le formulaire de creation d'un vaccin
    public static function VaccinCreate() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau vaccin.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function VaccinCreated() {
        // ajouter une validation des informations du formulaire
        $results = ModelVaccin::insert(
                        htmlspecialchars($_GET['label']), htmlspecialchars($_GET['doses'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewInserted.php';
        require ($vue);
    }
    
    //Affiche formulaire pour mettre à jour l'atrtibut dose
        public static function VaccinUpdate() {
       
        $results = ModelVaccin::getAllLabel();

        
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewUpdate.php';
        require ($vue);
    }

    public static function VaccinUpdated() {
        $vaccin_label = $_GET['label'];
        $doses = $_GET['doses'];
        $results = ModelVaccin::getOne($vaccin_label);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/vaccin/viewAll.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerVaccin -->


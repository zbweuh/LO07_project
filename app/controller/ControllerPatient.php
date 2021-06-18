
<!-- ----- debut ControllerPatient -->
<?php
require_once '../model/ModelPatient.php';

class ControllerPatient {

    // --- Liste des patiens
    public static function PatientReadAll() {
        $results = ModelPatient::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/patient/viewAll.php';
        if (DEBUG)
            echo ("ControllerPatient : PatientReadAll : vue = $vue");
        require ($vue);
    }

    // Affiche le formulaire de creation d'un patient
    public static function PatientCreate() {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/patient/viewInsert.php';
        require ($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau patient.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function PatientCreated() {
        // ajouter une validation des informations du formulaire
        $results = ModelPatient::insert(
                        htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['adresse'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/patient/viewInserted.php';
        require ($vue);
    }

}
?>
<!-- ----- fin ControllerPatient -->


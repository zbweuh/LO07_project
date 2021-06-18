
<!-- ----- debut Router -->
<?php
require ('../controller/ControllerVaccin.php');
require ('../controller/ControllerCentre.php');
require ('../controller/ControllerCovid.php');
require ('../controller/ControllerPatient.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- On supprime l'élément action de la structure
unset($param['action']);

// --- Tout ce qui reste sont des arguments
$args = $param;

// --- Liste des méthodes autorisées
switch ($action) {
    case "VaccinReadAll" :
    /*case "VaccinReadOne" :
    case "VaccinReadId" :*/
    case "VaccinCreate" :
    case "VaccinCreated" :
    case "VaccinUpdate" :
        // --- passage des arguments au contrôleur
        ControllerVaccin::$action($args);
        break;
    
    case "CentreReadAll" :
    case "CentreCreate" :
    case "CentreCreated" :
        ControllerCentre::$action($args);
        break;
    
    case "PatientReadAll" :
    case "PatientCreate" :
    case "PatientCreated" :
        ControllerPatient::$action($args);
        break;

    case "#" :
        ControllerCovid::$action($args);
        break;

// Tache par défaut
    default:
        $action = "covidAccueil";
        ControllerCovid::$action($args);
}
?>
<!-- ----- Fin Router -->


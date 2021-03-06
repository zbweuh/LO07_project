
<!-- ----- debut Router -->
<?php
require ('../controller/ControllerVaccin.php');
require ('../controller/ControllerCentre.php');
require ('../controller/ControllerCovid.php');
require ('../controller/ControllerPatient.php');
require ('../controller/ControllerStock.php');
require ('../controller/ControllerRDV.php');
require ('../controller/ControllerInnovation.php');
require ('../controller/ControllerDocumentation.php');

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
    case "VaccinCreate" :
    case "VaccinCreated" :
    case "VaccinUpdate" :
    case "VaccinUpdated" :
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

    case "StockReadAll" :
    case "StockGlobal" :
    case "StockAdd" :
    case "StockAdded" :
        ControllerStock::$action($args);
        break;

    case "RDVIdentification" :
    case "RDVSituation" :
    case "RDVPremier" :
    case "RDVNouveau" :
        ControllerRDV::$action($args);
        break;
    
    case "InnovationReset" :
    case "InnovationGraphique" :
    case "InnovationLocalisation" :
        ControllerInnovation::$action($args);
        break;
    
    case "Documentation1" :
    case "Documentation2" :
    case "Documentation3" :
    case "DocumentationGlobal" :
        ControllerDocumentation::$action();
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


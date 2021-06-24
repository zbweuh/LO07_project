<?php
require_once '../model/ModelPatient.php';

class ControllerRDV {
    
    public static function RDVSelectionPatient() {
        $results = ModelPatient::getAll();
        include 'config.php';
        $vue = $root . '/app/view/RDV/viewSelectionPatient.php';
        if (DEBUG)
            echo ("ControllerRDV : SelectionPatient : vue = $vue");
        require ($vue);
    }
    
    public static function RDVSituation() {
        $patient = ModelPatient::getById($_GET['id']);
        include 'config.php';
        $vue = $root . '/app/view/RDV/viewSelectionPatient.php';
        if (DEBUG)
            echo ("ControllerRDV : SelectionPatient : vue = $vue");
        require ($vue);
    }
}

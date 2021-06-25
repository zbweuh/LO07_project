<?php
require_once '../model/ModelPatient.php';
require_once '../model/ModelRDV.php';
require_once '../model/ModelVaccin.php';
require_once '../model/ModelCentre.php';
require_once '../model/ModelStock.php';

class ControllerRDV {
    
    public static function RDVIdentification() {
        $results = ModelPatient::getAll();
        include 'config.php';
        $vue = $root . '/app/view/RDV/viewIdentification.php';
        if (DEBUG)
            echo ("ControllerRDV : SelectionPatient : vue = $vue");
        require ($vue);
    }
    
    public static function RDVSituation() {
        include 'config.php';
        $patient = ModelPatient::getById($_GET['id']); // pas obligatoire, peut-être utile plus tard
        $results = ModelRDV::getByPatient($patient->getId());
        if (empty($results)) {
            $results = ModelCentre::getAll();
            $vue = $root . '/app/view/RDV/viewCentres.php';
        } else {
            $vaccine = FALSE;
            foreach ($results as $rdv) {
                foreach (ModelVaccin::getAll() as $vaccin) {
                    if ($rdv->getVaccin_id()==$vaccin->getId()&&$rdv->getInjection()==$vaccin->getDoses()) {
                        $vue = $root . '/app/view/RDV/viewVaccins.php';
                        $vaccine = TRUE;
                    }
                }
            }
            if (!$vaccine) {
                $results = ModelStock::getByVaccin($results[0]->getVaccin_id());
                
            }
        }
        if (DEBUG)
            echo ("ControllerRDV : SelectionPatient : vue = $vue");
        require ($vue);
    }
}

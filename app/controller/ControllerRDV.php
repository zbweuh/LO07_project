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
            echo ("ControllerRDV : RDVIdentification : vue = $vue");
        require ($vue);
    }
    
    public static function RDVSituation() {
        $patient = $_GET['patient']; //retransmit dans les vues, besoin pour modifier les BD
        $results = ModelRDV::getByPatient($patient);
        include 'config.php';
        if (empty($results)) {
            //le patient n'a jamais recu de vaccin
            $centres = ModelCentre::getAll();
            //On filtre les centre disposant d'au moins une dose
            foreach ($centres as $centre) {
                $stocks = ModelStock::getByCentre($centre->getId());
                if (array_reduce($stocks,function ($notNull,$stock) {return $notNull || $stock->getQuantite()>0;})) {
                    $results[] = $centre;
                }
            }
            $vue = $root . '/app/view/RDV/viewCentres.php';
        } else {
            $vaccine = FALSE;
            //On récupère le vaccin qu'il a reçu, pour vérifier le nombre de doses requises
            $vaccin = ModelVaccin::getById($results[0]->getVaccin_id());
            
            foreach ($results as $rdv) {
                // on teste si l'un des rendez-vous correspond au nombre d'injection requis pour le vaccin.
                if ($rdv->getInjection()==$vaccin->getDoses()) {
                    //si oui : on affiche les informations concernant ce rdv.
                    $centre = ModelCentre::getById($rdv->getCentre_id());
                    $injection = $rdv->getInjection();
                    $vue = $root . '/app/view/RDV/viewVaccins.php';
                    $vaccine = TRUE;
                    }
                }
            if (!$vaccine) {
                //le patient a déjà recu une première injection, mais pas en dose suffisante.
                //On récupère les centre possédant le vaccin qu'il a reçu, puis on laisse le patient faire son choix.
                foreach (ModelStock::getByVaccin($results[0]->getVaccin_id()) as $stock) {
                    $centres[] = ModelCentre::getById($stock->getCentre_id());
                }
                $vue = $root . '/app/view/RDV/viewInjection.php';
            }
        }
        if (DEBUG)
            echo ("ControllerRDV : RDVSituation : vue = $vue");
        require ($vue);
    }
    
    public static function RDVPremier() {
        $patient = $_GET['patient'];
        $centre = $_GET['centre'];
        $stocks = ModelStock::getByCentre($centre);
        //on sélectionne le vaccin en plus grande quantitée :
        $vaccin_id = $stocks[0]->getVaccin_id();
        $quantite = $stocks[0]->getQuantite();
        unset($stocks[0]);
        foreach ($stocks as $stock) {
            if ($stock->getQuantite()>$quantite) {
                $vaccin_id = $stock->getVaccin_id();
                $quantite = $stock->getQuantite();
            }
        }
        //On ajoute le rendez-vous :
        ModelRDV::add($centre,$patient,1,$vaccin_id);
        //On supprime une dose :
        ModelStock::deleteOne($centre,$vaccin_id);
        
        $centre = ModelCentre::getById($centre);
        $vaccin = ModelVaccin::getById($vaccin_id);
        include 'config.php';
        $vue = $root . '/app/view/RDV/viewPremier.php';
        require ($vue);
    }
    
    public static function RDVNouveau() {
        $patient = $_GET['patient'];
        $centre = $_GET['centre'];
        $vaccin = $_GET['vaccin'];
        
        
        //On ajoute le rendez-vous :
        ModelRDV::add($centre,$patient,$vaccin);
        //On supprime une dose :
        ModelStock::deleteOne($centre,$vaccin);
        
        $centre = ModelCentre::getById($centre);
        $vaccin = ModelVaccin::getById($vaccin);
        include 'config.php';
        $vue = $root . '/app/view/RDV/viewNouveau.php';
        require ($vue);
    }
}

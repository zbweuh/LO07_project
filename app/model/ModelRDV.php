<?php
require_once 'Model.php';

class ModelRDV {
    private $centre_id,$patient_id,$injection,$vaccin_id;
    
    public function __construct($centre_id = NULL, $patient_id = NULL, $injection = NULL, $vaccin_id = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($centre_id)) {
            $this->centre_id = $centre_id;
            $this->patient_id = $patient_id;
            $this->injection = $injection;
            $this->vaccin_id = $vaccin_id;
        }
    }
    
    function getCentre_id() {
        return $this->centre_id;
    }

    function getPatient_id() {
        return $this->patient_id;
    }

    function getInjection() {
        return $this->injection;
    }

    function getVaccin_id() {
        return $this->vaccin_id;
    }

    function setCentre_id($centre_id): void {
        $this->centre_id = $centre_id;
    }

    function setPatient_id($patient_id): void {
        $this->patient_id = $patient_id;
    }

    function setInjection($injection): void {
        $this->injection = $injection;
    }

    function setVaccin_id($vaccin_id): void {
        $this->vaccin_id = $vaccin_id;
    }

    public static function getByPatient($id) {
        try {
            $database = Model::getInstance();
            $query = "select * from rendezvous where patient_id= :id";
            $statement = $database->prepare($query);
            $statement->execute(["id" => $id]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRDV");
            return $results;
        } catch (Exception $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


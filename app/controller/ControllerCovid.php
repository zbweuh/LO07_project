<?php

require_once '../model/Model.php';

class ControllerCovid {

    // --- page d'accueil
    public static function covidAccueil() {
        include 'config.php';
        $vue = $root . '/app/view/viewCovidAccueil.php';
        if (DEBUG)
            echo ("Controller : covidAccueil : vue = $vue");
        require ($vue);
    }

}

?>
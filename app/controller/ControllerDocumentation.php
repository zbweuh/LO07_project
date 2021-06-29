<?php

require_once '../model/Model.php';

class ControllerDocumentation {

    public static function Documentation1() {
        include 'config.php';
        $vue = $root . '/app/view/documentation/innovationReset.php';
        if (DEBUG)
            echo ("Controller : documentation : vue = $vue");
        require ($vue);
    }
    
    public static function Documentation2() {
        include 'config.php';
        $vue = $root . '/app/view/documentation/innovationGraphique.php';
        if (DEBUG)
            echo ("Controller : documentation : vue = $vue");
        require ($vue);
    }
    
    public static function Documentation3() {
        include 'config.php';
        $vue = $root . '/app/view/documentation/innovationLocalisation.php';
        if (DEBUG)
            echo ("Controller : documentation : vue = $vue");
        require ($vue);
    }
    
    public static function DocumentationGlobal() {
        include 'config.php';
        $vue = $root . '/app/view/documentation/viewGlobal.php';
        if (DEBUG)
            echo ("Controller : documentation : vue = $vue");
        require ($vue);
    }

}

?>
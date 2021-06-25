
<!-- ----- debut ControllerInnovation -->
<?php
require_once '../model/ModelInnovation.php';

class ControllerInnovation {

    public static function InnovationReset() {
        $results = ModelInnovation::Reset();
        include 'config.php';
        $vue = $root . '/app/view/innovation/viewReset.php';
        require ($vue);
    }
}
?>
<!-- ----- fin ControllerInnovation -->


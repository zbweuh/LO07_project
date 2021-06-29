
<!-- ----- debut ModelInnovation -->

<?php
require_once 'Model.php';

class ModelInnovation {
    private $id, $label;

    // pas possible d'avoir 2 constructeurs
    public function __construct($id = NULL, $label = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($id)) {
            $this->id = $id;
            $this->label = $label;
        }
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function getId() {
        return $this->id;
    }

    function getLabel() {
        return $this->label;
    }

    public static function Reset() {

        try {
            $database = Model::getInstance();
            $deletions = array("delete from rendezvous", "delete from stock", "delete from patient", "delete from vaccin", "delete from centre");

            foreach ($deletions as $deletion) {
                $statement = $database->prepare($deletion);
                $statement->execute();
            }

            $query = file_get_contents("../../outil/covid_insert.sql");
            $database->exec($query);
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }

}
?>
<!-- ----- fin ModelInnovation -->

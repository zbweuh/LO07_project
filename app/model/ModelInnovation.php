
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

            $insertions = array(
                "insert into vaccin values (1, 'Pfizer_BioNTech', 2)",
                "insert into vaccin values (2, 'Moderna', 2)",
                "insert into vaccin values (3, 'AstraZeneca', 2)",
                "insert into vaccin values (4, 'Janssen', 1)",
                "insert into centre values (1, 'UTT vaccination', '12 rue marie curie, 10000 Troyes')",
                "insert into centre values (2, 'Stade de France', '15-21 Avenue Jules Rimet, 93200 Saint-Denis')",
                "insert into centre values (3, 'Zénith de Dijon', 'rue de Colchide, 21000 Dijon')",
                "insert into centre values (4, 'Centre Bar-sur-Aube', '5 Rue du Jard, 10200 Bar sur Aube')",
                "insert into stock values (1, 1, 5)",
                "insert into stock values (1, 2, 3)",
                "insert into stock values (1, 3, 2)",
                "insert into stock values (2, 1, 5)",
                "insert into stock values (2, 2, 10)",
                "insert into stock values (2, 3, 20)",
                "insert into stock values (3, 1, 1)",
                "insert into stock values (3, 2, 1)",
                "insert into stock values (3, 3, 1)",
                "insert into stock values (3, 4, 1)",
                "insert into stock values (4, 1, 0)",
                "insert into patient values (1, 'Lemercier', 'Marc', 'Troyes')",
                "insert into patient values (2, 'Stiot', 'Ludovic', 'Marseille')",
                "insert into patient values (3, 'Najafi', 'Maryam', 'Paris')",
                "insert into rendezvous values (1, 1, 1, 1)",
                "insert into rendezvous values (1, 1, 2, 1)",
                "insert into rendezvous values (2, 2, 1, 1)"
            );

            foreach ($insertions as $insertion) {
                $statement = $database->prepare($insertion);
                $statement->execute();
            }
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }

}
?>
<!-- ----- fin ModelInnovation -->

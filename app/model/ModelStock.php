
<!-- ----- debut ModelStock -->

<?php
require_once 'Model.php';

class ModelStock {

    private $centre_id, $vaccin_id, $quantite;

    // pas possible d'avoir 2 constructeurs
    public function __construct($centre_id = NULL, $vaccin_id = NULL, $quantite = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($centre_id)) {
            $this->centre_id = $centre_id;
            $this->vaccin_id = $vaccin_id;
            $this->quantite = $quantite;
        }
    }

    function getCentre_id() {
        return $this->centre_id;
    }

    function getVaccin_id() {
        return $this->vaccin_id;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function setCentre_id($centre_id) {
        $this->centre_id = $centre_id;
    }

    function setVaccin_id($vaccin_id) {
        $this->vaccin_id = $vaccin_id;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

        /*
      // retourne une liste des id
      public static function getAllId() {
      try {
      $database = Model::getInstance();
      $query = "select id from stock";
      $statement = $database->prepare($query);
      $statement->execute();
      $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
      return $results;
      } catch (PDOException $e) {
      printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
      return NULL;
      }
      } */

    public static function getMany($query) {
        try {
            $database = Model::getInstance();
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelStock");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAll() {
        try {
            $database = Model::getInstance();
            $query = "select * from stock";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelStock");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function sum() {
        try {
            $database = Model::getInstance();
            $query = "SELECT centre_id, SUM(quantite) AS doses
            FROM stock
            GROUP BY centre_id
            ORDER BY doses DESC";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll();
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    
    public static function add($centre,$vaccin,$doses) {
        try {
            $database = Model::getInstance();
            
            $query = "insert into stock value (:centre, :vaccin, :doses)";
            $statement = $database->prepare($query);
            return $statement->execute([
                    'centre' => $centre,
                    'vaccin' => $vaccin,
                    'doses' => $doses
                ]);
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return FALSE;
        }
    }
    
    public static function getByVaccin($id) {
        try {
            $database = Model::getInstance();
            
            $query = "select * from stock where vaccin_id=:id";
            $statement = $database->prepare($query);
            $statement->execute(['id' => $id]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS,"ModelStock");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return FALSE;
        }
    }
    
    public static function getByCentre($id) {
        try {
            $database = Model::getInstance();
            
            $query = "select * from stock where centre_id=:id";
            $statement = $database->prepare($query);
            $statement->execute(['id' => $id]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS,"ModelStock");
            return $results;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return FALSE;
        }
    }
    
    public static function deleteOne($centre_id,$vaccin_id) {
        try {
            $database = Model::getInstance();
            
            $query = "select quantite from stock where centre_id=:centre_id and vaccin_id=:vaccin_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'centre_id' => $centre_id,
                'vaccin_id' => $vaccin_id
            ]);
            $quantite = $statement->fetchAll(PDO::FETCH_COLUMN,0)[0];
            $quantite--;
            
            $query = "update stock set quantite=:quantite where centre_id=:centre_id and vaccin_id=:vaccin_id";
            $statement = $database->prepare($query);
            return $statement->execute([
                    'quantite' => $quantite,
                    'centre_id' => $centre_id,
                    'vaccin_id' => $vaccin_id
                ]);
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return FALSE;
        }
    }
}
?>
<!-- ----- fin ModelStock -->
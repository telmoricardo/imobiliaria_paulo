<?php

require_once ('Banco.php');

class propertyDAO {

     private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    public function RetornarProperty($termo, $tipo) {
        try {
            $sql = "";

            switch ($tipo) {
                case 1:
                    $sql = "SELECT id, title, image, alias, description, full_description FROM d69nt_bt_properties WHERE title LIKE :termo ORDER BY title ASC";
                    break;
                case 2:
                    $sql = "SELECT id, title, image, alias, description, full_description FROM d69nt_bt_properties WHERE description LIKE :termo ORDER BY description ASC";
                    break;
                case 3:
                    $sql = "SELECT id, asset_id, cat_id, title, image, alias, description, full_description FROM d69nt_bt_properties WHERE full_description LIKE :termo ORDER BY full_description ASC";
                    break;
            }

            $param = array(
                ":termo" => "%{$termo}%"
            );

            $dataTable = $this->pdo->ExecuteQuery($sql, $param);

            $listaProperty = [];

            foreach ($dataTable as $resultado) {
                $property = new Property();
                $property->setId($resultado["id"]);
                $property->setTitle($resultado["title"]);
                $property->setDescription($resultado["description"]);
                $property->setFull_description($resultado["full_description"]);
                $property->setImage($resultado["image"]);

                $listaProperty[] = $property;
            }

            return $listaProperty;
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }

}

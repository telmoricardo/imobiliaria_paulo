<?php

require_once ('Banco.php');

class CidadeDAO {
    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }
    
    public function ListarCidade() {
        try {
            $sql = "SELECT * FROM cidade";
            $dt = $this->pdo->ExecuteQuery($sql);
            $listaCidades = [];

            foreach ($dt as $dr) {
                $cidade = new Cidade();
                $cidade->setCod($dr["cod"]);
                $cidade->setNome($dr["nome"]);

                $listaCidades[] = $cidade;
            }

            return $listaCidades;
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }
}

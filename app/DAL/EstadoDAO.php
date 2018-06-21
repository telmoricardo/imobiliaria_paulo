<?php

require_once ('Banco.php');

class EstadoDAO {

    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    public function ListarEstado() {
        try {
            $sql = "SELECT cod, nome FROM estado";
            $dt = $this->pdo->ExecuteQuery($sql);

            $listaEstado = [];
            foreach ($dt as $pts) {
                $estado = new Estado();
                $estado->setCod($pts['cod']);
                $estado->setNome($pts['nome']);
                $listaEstado[] = $estado;
            }
            return $listaEstado;
            
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

}

<?php

require_once ('Banco.php');

class CategoriaDAO {

    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    /*     * ******************** SITE ******************************* */

    public function ListarCategoria() {
        try {
            $sql = "SELECT cod_categoria, nome_categoria, url_categoria FROM categoria";
            $dt = $this->pdo->ExecuteQuery($sql);
            $listaCategoria = [];
            foreach ($dt as $pts) {
                $categoria = new Categoria();
                $categoria->setCod_categoria($pts['cod_categoria']);
                $categoria->setNome_categoria($pts['nome_categoria']);
                $categoria->setUrl_categoria($pts['url_categoria']);
                $listaCategoria[] = $categoria;
            }
            return $listaCategoria;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function retornarCategoria($url) {
        try {
            $sql = "SELECT * FROM categoria WHERE url_categoria = :url";
            $param = array(":url" => $url);
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $categoria = new Categoria();
            $categoria->setCod_categoria($dt['cod_categoria']);
            $categoria->setNome_categoria($dt['nome_categoria']);
            $categoria->setUrl_categoria($dt['url_categoria']);

            return $categoria;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

}

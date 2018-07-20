<?php

require_once ('Banco.php');

class CidadeDAO {
    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }
    
    public function Cadastrar(Cidade $cidade) {
        try {
            $sql = "INSERT INTO cidade (nome, url, status) VALUES (:nome, :url, :status)";
            $param = array(
                ":nome" => $cidade->getNome_cidade(),
                ":url" => $cidade->getUrl_cidade(),
                ":status" => $cidade->getStatus_cidade()
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function ListarCidadeLimite($inicio, $quantidade) {
        try {
            $sql = "SELECT * FROM cidade LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listaCidade = [];
            foreach ($dt as $pts) {
                $cidade = new Cidade();
                $cidade->setCod_cidade($pts['cod']);
                $cidade->setNome_cidade($pts['nome']);
                $cidade->setUrl_cidade($pts['url']);
                $cidade->setStatus_cidade($pts['status']);
                $listaCidade[] = $cidade;
            }
            return $listaCidade;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    /* retorna a quantidades de categorias */
    public function RetornaQtdCategoria() {
        try {
            $sql = "SELECT count(c.cod) as total FROM cidade c";
            $dr = $this->pdo->ExecuteQueryOneRow($sql);
            if ($dr["total"] != null):
                return $dr["total"];
            else:
                return 0;
            endif;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    //retornar o status da categoria
    public function retornaStatus($cod) {
        try {
            $sql = "SELECT cod, status FROM cidade WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $cidade = new Cidade();
            $cidade->setCod_cidade($pts['cod']);            
            $cidade->setUrl_cidade($pts['url']);
            return $cidade;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    //retornar alterar o status da categoria
    public function AlterarStatus($cod, $status) {
        try {
            $sql = "UPDATE cidade SET status = :status WHERE cod = :cod";
            $param = array(
                ":cod" => $cod,
                ":status" => $status
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }


    public function ListarCidade() {
        try {
            $sql = "SELECT * FROM cidade WHERE status = 1 ORDER BY nome ASC";
            $dt = $this->pdo->ExecuteQuery($sql);
            $listaCidades = [];
            foreach ($dt as $dr) {
                $cidade = new Cidade();
                $cidade->setCod_cidade($dr["cod"]);
                $cidade->setNome_cidade($dr["nome"]);
                $cidade->setStatus_cidade($dr["status"]);
                $cidade->setUrl_cidade($dr["url"]);
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

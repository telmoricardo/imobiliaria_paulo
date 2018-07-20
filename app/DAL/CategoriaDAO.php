<?php

require_once ('Banco.php');

class CategoriaDAO {

    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    /* PAINEL */
    public function Cadastrar(Categoria $categoria) {
        try {
            $sql = "INSERT INTO categoria (nome_categoria, url_categoria, status_categoria) VALUES (:nome, :url, :status)";
            $param = array(
                ":nome" => $categoria->getNome_categoria(),
                ":url" => $categoria->getUrl_categoria(),
                ":status" => $categoria->getStatus_categoria()
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
    
    //atualizar
    public function Atualizar(Categoria $categoria) {
        try {
            $sql = "UPDATE categoria SET nome_categoria = :nome, url_categoria = :url, status_categoria = :status WHERE cod_categoria = :cod";
            $param = array(
                ":nome" => $categoria->getNome_categoria(),
                ":url" => $categoria->getUrl_categoria(),
                ":status" => $categoria->getStatus_categoria(),
                ":cod" => $categoria->getCod_categoria()
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
    
    //excluir
    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM categoria WHERE cod_categoria = :cod";
            $param = array(":cod" => $cod);
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function ListarCatLimit($inicio, $quantidade) {
        try {
            $sql = "SELECT * FROM categoria ORDER BY cod_categoria DESC LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listaCategoria = [];
            foreach ($dt as $pts) {
                $categoria = new Categoria();
                $categoria->setCod_categoria($pts['cod_categoria']);
                $categoria->setNome_categoria($pts['nome_categoria']);
                $categoria->setUrl_categoria($pts['url_categoria']);
                $categoria->setStatus_categoria($pts['status_categoria']);
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

    /* retorna a quantidades de categorias */
    public function RetornaQtdCategoria() {
        try {
            $sql = "SELECT count(c.cod_categoria) as total FROM categoria c";
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
    public function retornaStatusCat($cod) {
        try {
            $sql = "SELECT cod_categoria, status_categoria FROM categoria WHERE cod_categoria = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $categoria = new Categoria();
            $categoria->setCod_categoria($pts['cod_categoria']);            
            $categoria->setUrl_categoria($pts['url_categoria']);
            return $categoria;
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
            $sql = "UPDATE categoria SET status_categoria = :status WHERE cod_categoria = :cod";
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

    /* PAINEL */

    /* SITE */

    public function ListarCategoria() {
        try {
            $sql = "SELECT cod_categoria, nome_categoria, url_categoria FROM categoria WHERE status_categoria = 1";
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
    //retorna categoria pelo cod
    public function retornoCodCategoria($cod) {
        try {
            $sql = "SELECT * FROM categoria WHERE cod_categoria = :cod";
            $param = array(":cod" => $cod);
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $categoria = new Categoria();
            $categoria->setCod_categoria($dt['cod_categoria']);
            $categoria->setNome_categoria($dt['nome_categoria']);
            $categoria->setUrl_categoria($dt['url_categoria']);
            $categoria->setStatus_categoria($dt['status_categoria']);

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

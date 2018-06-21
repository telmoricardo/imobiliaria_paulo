<?php

require_once ('Banco.php');

class ArtigoDAO {

    private $pdo;
    private $debug;

    public function __construct() {
    $this->pdo = new Banco();
    $this->debug = true;
    }
    
 public function Cadastrar(Artigo $artigo) {
        try {
            
            $sql = "INSERT INTO artigo (titulo, url, destaque, status, data, descricao, thumb) VALUES (:titulo,:url,:destaque, :status, NOW(), :descricao, :thumb)";
            $param = array(
                ":titulo" => $artigo->getTitulo(),
                ":url" => $artigo->getUrl(),
                ":destaque" => $artigo->getDestaque(),
                ":status" => $artigo->getStatus(),            
                ":descricao" => $artigo->getDescricao(),
                ":thumb" => $artigo->getThumb()
                
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
    
       public function retornaArtigolUrl($url) {
        try {
            /**/
            $sql = "SELECT * FROM artigo WHERE url = :url";
            $param = array(":url" => $url);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $artigo = new Artigo();
            
            $artigo->setTitulo($dt['titulo']);
            $artigo->setUrl($dt['url']);
            $artigo->setDescricao($dt['descricao']);
            
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
   
       }
       
      public function listarArtigoImoveis($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM artigo ORDER BY cod DESC LIMIT :inicio, :quantidade ";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);            
            
                    
            $listarImoveisBlog = [];
            foreach ($dt as $pts) {
                $artigo = new Artigo();
                $artigo->setCod($pts['cod']);
                $artigo->setTitulo($pts['titulo']); 
                $artigo->setUrl($pts['url']); 
                $artigo->setDescricao($pts['descricao']); 
                $artigo->setThumb($pts['thumb']);               
                $listarImoveisBlog[] = $artigo;
            }
            return $listarImoveisBlog;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function retornaArtgImg($cod) {
        try {
            $sql = "SELECT cod, thumb FROM imovel WHERE cod = :cod";
            $param = array(":cod" => $cod);

            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $post_atg = new Imovel();
            $post_atg->setCod($dt['cod']);
            $post_atg->setThumb($dt['thumb']);

            return $post_atg;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
      public function retornarArtigoUrl($url) {
        try {
            $sql = "SELECT * FROM artigo WHERE url = :url ";
            $param = array(":url" => $url);
            
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);            
                 
                $artigo = new Artigo();
                $artigo->setCod($dt['cod']);
                $artigo->setTitulo($dt['titulo']); 
                $artigo->setUrl($dt['url']); 
                $artigo->setThumb($dt['thumb']);               
                $artigo->setDescricao($dt['descricao']);               
                
            
            return $artigo;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
}

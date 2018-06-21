<?php

require_once ('Banco.php');

class MarkerDAO {
    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }
    
    public function Cadastrar(Marker $marker) {
        try {

            $sql = "INSERT INTO markers (name, address, lat, lng, type, imovel) "
                    . "VALUES (:name, :address, :lat, :lng, :type, :imovel)";
            $param = array(
                ":name" => $marker->getName(),
                ":address" => $marker->getAddress(),
                ":lat" => $marker->getLat(),
                ":lng" => $marker->getLng(),
                ":type" => $marker->getType(),
                ":imovel" => $marker->getImovel()                
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
    
    public function ListarMarker() {
        try {
            $sql = "SELECT * FROM markers ORDER BY id DESC";
            $dt = $this->pdo->ExecuteQuery($sql);

            $listaMarkers = [];
            foreach ($dt as $pts) {
                $marker = new Marker();
                $marker->setId($pts['id']);
                $marker->setName($pts['name']);
                $marker->setAddress($pts['address']);
                $marker->setLat($pts['lat']);
                $marker->setLng($pts['lng']);
                $marker->setType($pts['type']);
                $marker->setTexto($pts['descricao']);
                
                
                $listaMarkers[] = $marker;
            }
            return $listaMarkers;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function ListarMarkerImovel() {
        try {
            $sql = "SELECT m.id, m.name, m.address, m.lat, m.lng, m.type, m.imovel, i.cod, i.url, i.status, i.tipo, i.titulo, i.descricao, i.thumb 
                    FROM markers m INNER JOIN imovel i ON m.imovel = i.cod WHERE i.status=1";
            $dt = $this->pdo->ExecuteQuery($sql);

            $listaMarkers = [];
            foreach ($dt as $pts) {
                $marker = new Marker();
                $marker->setId($pts['id']);
                $marker->setName($pts['titulo']);
                $marker->setAddress($pts['address']);
                $marker->setLat($pts['lat']);
                $marker->setLng($pts['lng']);
                $marker->getImovel()->setThumb($pts['thumb']);
                $marker->getImovel()->setDescricao($pts['descricao']);              
                $marker->getImovel()->setUrl($pts['url']);              
                $marker->getImovel()->setTipo($pts['tipo']);              
                      
                
                $listaMarkers[] = $marker;
            }
            return $listaMarkers;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function retornaMarkerCod($cod) {
        try {
            $sql = "SELECT * FROM markers WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $marker = new Marker();
            $marker->setId($dt['id']);
            $marker->setName($dt['titulo']);
            $marker->setAddress($dt['address']);
            $marker->setLat($dt['lat']);
            $marker->setLng($dt['lng']);
            $marker->getImovel($dt['imovel']);                   
            
            return $marker;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    //retorna as duas tabelas imoveis e markers atraves do atributo imovel da tabela markers
    public function retornaMarkerImovel($imovelCod) {
        try {
            $sql = "SELECT m.id, m.name, m.address, m.lat, m.lng, m.type, m.imovel, i.cod, i.url, i.tipo, i.titulo, i.descricao, i.thumb "
                    . "FROM markers m INNER JOIN imovel i ON m.imovel = i.cod WHERE m.imovel = :imovel";
            
            $param = array(":imovel" => $imovelCod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $marker = new Marker();
            $marker->setId($dt['id']);
            $marker->setName($dt['titulo']);
            $marker->setAddress($dt['address']);
            $marker->setLat($dt['lat']);
            $marker->setLng($dt['lng']);
            $marker->getImovel()->setCod($dt['cod']);                  
            $marker->getImovel()->setTitulo($dt['titulo']);                  
            return $marker;
            
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM markers WHERE id = :id";
            $param = array(":id" => $cod);
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function VerificarArquivoExiste($imovelCod, $markerId) {
        try {
            $sql = "SELECT name FROM markers WHERE imovel = :imovelcod AND id = :markerid";
            $param = array(
                ":imovelcod" => $imovelCod,
                ":markerid" => $markerId
            );

            $dr = $this->pdo->ExecuteQueryOneRow($sql, $param);

            return $dr["name"];
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }
    
    public function RemoverMarker($imovelCod, $markerId) {
        try {
            $sql = "DELETE FROM markers WHERE imovel = :imovelcod AND id = :markerid";
            $param = array(
                ":imovelcod" => $imovelCod,
                ":markerid" => $markerId
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return false;
        }
    }
    
}

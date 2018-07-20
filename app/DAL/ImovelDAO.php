<?php

require_once ('Banco.php');

class ImovelDAO {

    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }
    
    /**********************************PAINEL ADMIN******************************************************/
    public function Cadastrar(Imovel $imovel) {
        try {
            $sql = "INSERT INTO imovel (thumb, titulo, url, categoria, status, descricao, condominio, obs_alugar, valor_aluguel, valor_condominio, iptu, seguro, destaque, agente, cep, endereco, cidade, area, quarto, suite, banheiro, andar, garagem, mapa, street, view, pet, parada) "
                    . "VALUES (:thumb, :titulo, :url, :categoria, :status, :descricao, :condominio, :obs_alugar, :v_aluguel, :v_condominio, :iptu, :seguro, :destaque, :agente, :cep, :endereco, :cidade, :area, :quarto, :suite, :banheiro, :andar, :garagem, :mapa, :street, :view, :pet, :parada)";
            $param = array(
                ":thumb" => $imovel->getThumb(),
                ":titulo" => $imovel->getTitulo(),
                ":url" => $imovel->getUrl(),
                ":categoria" => $imovel->getCategoria(),
                ":status" => $imovel->getStatus(),
                ":descricao" => $imovel->getDescricao(),
                ":condominio" => $imovel->getObs_condiminio(),
                ":obs_alugar" => $imovel->getObs_alugar(),
                ":v_aluguel" => $imovel->getValor(),
                ":v_condominio" => $imovel->getCondominio(),
                ":iptu" => $imovel->getIptu(),
                ":seguro" => $imovel->getSeguro(),
                ":destaque" => $imovel->getDestaque(),
                ":agente" => $imovel->getAgente(),
                ":cep" => $imovel->getCep(),
                ":endereco" => $imovel->getEndereco(),
                ":cidade" => $imovel->getCidade(),
                ":area" => $imovel->getArea(),
                ":quarto" => $imovel->getQuartos(),
                ":suite" => $imovel->getSuite(),
                ":banheiro" => $imovel->getBanheiro(),
                ":andar" => $imovel->getAndar(),
                ":garagem" => $imovel->getGaragem(),
                ":mapa" => $imovel->getMapa(),
                ":street" => $imovel->getStreet(),
                ":view" => $imovel->getView(),              
                ":pet" => $imovel->getPet(),              
                ":parada" => $imovel->getParada(),              
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

    public function Atualizar(Imovel $imovel) {
        try {
            $sql = "UPDATE imovel SET titulo = :titulo, url = :url, categoria = :categoria, status = :status, descricao = :descricao, condominio = :condominio,
                obs_alugar = :obs_alugar, valor_aluguel = :v_aluguel, valor_condominio = :v_condominio, iptu = :iptu, seguro = :seguro, destaque = :destaque, 
                agente = :agente, cep = :cep, endereco = :endereco, cidade = :cidade, area = :area, quarto = :quarto, suite = :suite, banheiro = :banheiro, 
                andar = :andar, garagem = :garagem, mapa = :mapa, street = :street, view = :view, pet = :pet, parada = :parada WHERE cod = :cod";
            $param = array(
                ":titulo" => $imovel->getTitulo(),
                ":url" => $imovel->getUrl(),
                ":categoria" => $imovel->getCategoria(),
                ":status" => $imovel->getStatus(),
                ":descricao" => $imovel->getDescricao(),
                ":condominio" => $imovel->getObs_condiminio(),
                ":obs_alugar" => $imovel->getObs_alugar(),
                ":v_aluguel" => $imovel->getValor(),
                ":v_condominio" => $imovel->getCondominio(),
                ":iptu" => $imovel->getIptu(),
                ":seguro" => $imovel->getSeguro(),
                ":destaque" => $imovel->getDestaque(),
                ":agente" => $imovel->getAgente(),
                ":cep" => $imovel->getCep(),
                ":endereco" => $imovel->getEndereco(),
                ":cidade" => $imovel->getCidade(),
                ":area" => $imovel->getArea(),
                ":quarto" => $imovel->getQuartos(),
                ":suite" => $imovel->getSuite(),
                ":banheiro" => $imovel->getBanheiro(),
                ":andar" => $imovel->getAndar(),
                ":garagem" => $imovel->getGaragem(),
                ":mapa" => $imovel->getMapa(),
                ":street" => $imovel->getStreet(),
                ":view" => $imovel->getView(),              
                ":pet" => $imovel->getPet(),              
                ":parada" => $imovel->getParada(),
                ":cod" => $imovel->getCod()
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
    /*CARREGANDO IMOVEIS*/
    public function ListarImovelLimite($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM imovel ORDER BY cod DESC LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCod($pts['cod']);
                $imovel->setTitulo($pts['titulo']);
                $imovel->setUrl($pts['url']);
                $imovel->setValor($pts['valor_aluguel']);
                $imovel->setEndereco($pts['endereco']);
                $imovel->setCidade($pts['cidade']);
                $imovel->setCategoria($pts['categoria']);
                $imovel->setCep($pts['cep']);
                $imovel->setThumb($pts['thumb']);
                $imovel->setStatus($pts['status']);
                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    //retornad dados atraves do cod
    public function retornaImovelCod($cod) {
        try {
            $sql = "SELECT c.cod_categoria, c.nome_categoria, a.cod_agente, a.nome_agente, cd.cod as codCidade, cd.nome,
                    i.cod, i.thumb, i.titulo, i.url, i.categoria, i.status, i.descricao, i.condominio, i.obs_alugar, i.valor_aluguel, i.valor_condominio, 
                    i.iptu, i.seguro, i.destaque, i.agente, i.cep, i.endereco, i.cidade, i.area, i.quarto, i.suite, i.banheiro, 
                    i.andar, i.garagem, i.mapa, i.street, i.pet, i.parada FROM imovel i
                    INNER JOIN categoria c ON i.categoria = c.cod_categoria
                    INNER JOIN cidade cd ON i.cidade = cd.cod
                    INNER JOIN agente a ON a.cod_agente = i.agente WHERE i.cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $imovel = new Imovel();
            $imovel->setCod($dt['cod']);
            $imovel->setTitulo($dt['titulo']);
            $imovel->setThumb($dt['thumb']);
            $imovel->setUrl($dt['url']);
            $imovel->setStatus($dt['status']);
            $imovel->setDescricao($dt['descricao']);
            $imovel->setObs_condiminio($dt['condominio']);
            $imovel->setObs_alugar($dt['obs_alugar']);
            $imovel->setValor($dt['valor_aluguel']);
            $imovel->setCondominio($dt['valor_condominio']);
            $imovel->setIptu($dt['iptu']);
            $imovel->setSeguro($dt['seguro']);
            $imovel->setDestaque($dt['destaque']);
            $imovel->setCep($dt['cep']);
            $imovel->setEndereco($dt['endereco']);            
            $imovel->setArea($dt['area']);            
            $imovel->setQuartos($dt['quarto']);
            $imovel->setSuite($dt['suite']);
            $imovel->setBanheiro($dt['banheiro']);
            $imovel->setAndar($dt['andar']);
            $imovel->setGaragem($dt['garagem']);
            $imovel->setMapa($dt['mapa']);
            $imovel->setStreet($dt['street']);
            $imovel->setPet($dt['pet']);
            $imovel->setParada($dt['parada']);      
            $imovel->getAgente()->setCod($dt['cod_agente']);
            $imovel->getAgente()->setNome($dt['nome_agente']);
            $imovel->getCategoria()->setCod_categoria($dt['cod_categoria']);
            $imovel->getCategoria()->setNome_categoria($dt['nome_categoria']);
            $imovel->getCidade()->setCod_cidade($dt['codCidade']);
            $imovel->getCidade()->setNome_cidade($dt['nome']);
           return $imovel;
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
            $sql = "DELETE FROM imovel WHERE cod = :cod";
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
    //RETORNA IMAGEM NA PAGINA DE ATUALIZAÇÃO DOS POSTS
    public function RetornaPostImg($cod) {
        try {
            $sql = "SELECT cod, titulo, thumb FROM imovel WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $post = new Imovel();
            $post->setCod($dt['cod']);
            $post->setTitulo($dt['titulo']);
            $post->setThumb($dt['thumb']);
            return $post;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    //ALTERAR IMAGEM NA PAGINA DE ATUALIZAÇÃO DOS POSTS
    public function AlterarImagem($cod, $thumb) {
        try {
            $sql = "UPDATE imovel SET thumb = :thumb WHERE cod = :cod";
            $param = array(
                ":cod" => $cod,
                ":thumb" => $thumb
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
    
    public function retornaStatusImov($cod) {
        try {
            $sql = "SELECT cod, status FROM imovel WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $imovel = new Imovel();
            $imovel->setCod($dt['cod']);
            $imovel->setStatus($dt['status']);
            return $imovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function AlterarStatus($cod, $status) {
        try {
            $sql = "UPDATE imovel SET status = :status WHERE cod = :cod";
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

    
    /**********************************PAINEL ADMIN******************************************************/
   
    /********************************** SITE ******************************************************/
    public function ListarImovel() {
        try {
            $sql = "SELECT * FROM imovel ORDER BY cod DESC";
            $dt = $this->pdo->ExecuteQuery($sql);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCod($pts['cod']);
                $imovel->setTitulo($pts['titulo']);
                $imovel->setUrl($pts['url']);
                $imovel->setValor($pts['valor']);
                $imovel->setEndereco($pts['endereco']);
                $imovel->setCidade($pts['cidade']);
                $imovel->setTipo($pts['tipo']);
                $imovel->setQuartos($pts['quartos']);
                $imovel->setCep($pts['cep']);
                $imovel->setThumb($pts['thumb']);
                $imovel->setArea($pts['area']);
                $imovel->setQuartos($pts['quartos']);
                $imovel->setBanheiro($pts['banheiro']);
                $imovel->setArea($pts['area']);
                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    public function ListarImovelDestaque($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM imovel WHERE destaque = 1 AND status = 1 ORDER BY cod DESC LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCod($pts['cod']);
                $imovel->setTitulo($pts['titulo']);
                $imovel->setUrl($pts['url']);
                $imovel->setValor($pts['valor']);
                $imovel->setEndereco($pts['endereco']);
                $imovel->setCidade($pts['cidade']);
                $imovel->setCategoria($pts['categoria']);
                $imovel->setQuartos($pts['quartos']);
                $imovel->setBanheiro($pts['banheiro']);
                $imovel->setGaragem($pts['garagem']);
                $imovel->setCep($pts['cep']);
                $imovel->setThumb($pts['thumb']);
                $imovel->setArea($pts['area']);
                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    

    public function ListarImovelNaoDestk() {
        try {
            $sql = "SELECT * FROM imovel WHERE destaque = 1 AND status=1 ORDER BY cod DESC";
            $dt = $this->pdo->ExecuteQuery($sql);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCod($pts['cod']);
                $imovel->setTitulo($pts['titulo']);
                $imovel->setUrl($pts['url']);
                $imovel->setValor($pts['valor']);
                $imovel->setEndereco($pts['endereco']);
                $imovel->setCidade($pts['cidade']);
                $imovel->setTipo($pts['tipo']);
                $imovel->setQuartos($pts['quartos']);
                $imovel->setBanheiro($pts['banheiro']);
                $imovel->setGaragem($pts['garagem']);
                $imovel->setCep($pts['cep']);
                $imovel->setThumb($pts['thumb']);
                $imovel->setArea($pts['area']);
                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    /*pagina single*/
    public function retornaImovelUrl($url) {
        try {
            $sql = "SELECT a.cod_agente, a.nome_agente, a.regiao_agente, a.telefone_agente, a.email_agente, i.cod, i.titulo, i.url, i.valor_aluguel, 
                i.valor_condominio, i.iptu, i.seguro, i.descricao, i.endereco, i.cidade, i.categoria, i.quarto, i.suite, i.banheiro, i.garagem, i.andar, 
                i.cep, i.thumb, i.destaque, i.area, i.agente, i.condominio, i.obs_alugar, i.pet, i.parada, i.mapa, i.street FROM agente a 
                INNER JOIN imovel i ON a.cod_agente = i.agente WHERE i.url = :url AND i.status = 1";
            $param = array(":url" => $url);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $imovel = new Imovel();
            $imovel->setCod($dt['cod']);
            $imovel->setTitulo($dt['titulo']);
            $imovel->setUrl($dt['url']);
            $imovel->setValor($dt['valor_aluguel']);
            $imovel->setCondominio($dt['valor_condominio']);
            $imovel->setIptu($dt['iptu']);
            $imovel->setSeguro($dt['seguro']);            
            $imovel->setDescricao($dt['descricao']);
            $imovel->setEndereco($dt['endereco']);
            $imovel->setCidade($dt['cidade']);//           
            $imovel->setCategoria($dt['categoria']);
            $imovel->setArea($dt['area']);
            $imovel->setQuartos($dt['quarto']);
            $imovel->setSuite($dt['suite']);
            $imovel->setBanheiro($dt['banheiro']);
            $imovel->setGaragem($dt['garagem']);
            $imovel->setAndar($dt['andar']);
            $imovel->setPet($dt['pet']);
            $imovel->setParada($dt['parada']);
            $imovel->setCep($dt['cep']);
            $imovel->setThumb($dt['thumb']);
            $imovel->setMapa($dt['mapa']);
            $imovel->setDestaque($dt['destaque']);                       
            $imovel->setStreet($dt['street']);            
            $imovel->setObs_condiminio($dt['condominio']);            
            $imovel->setObs_alugar($dt['obs_alugar']);            
            $imovel->getAgente()->setCod($dt['cod_agente']);
            $imovel->getAgente()->setNome($dt['nome_agente']);
            $imovel->getAgente()->setEmail($dt['email_agente']);
            $imovel->getAgente()->setRegiao($dt['regiao_agente']);
            $imovel->getAgente()->setTelefone($dt['telefone_agente']);

            return $imovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    

    

    //retorna a cidade através com filtro por estado
    public function retornaImovelCidade($estado) {
        try {
            $sql = "SELECT cidade FROM imovel WHERE estado = :estado GROUP BY cidade";
            $param = array(":estado" => $estado);
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCidade($pts['cidade']);



                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorna o tipo de imovel com filtro pela cidade
    public function retornaImovelTipo($cidade) {
        try {
            $sql = "SELECT tipo FROM imovel WHERE cidade = :cidade GROUP BY tipo";
            $param = array(":cidade" => $cidade);
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setTipo($pts['tipo']);

                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorna o tipo de imovel com filtro pela cidade
    public function retornaImovelQuarto($tipo) {
        try {
            $sql = "SELECT quartos FROM imovel WHERE tipo = :tipo GROUP BY quartos";
            $param = array(":tipo" => $tipo);
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setQuartos($pts['quartos']);

                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorna o tipo de imovel com filtro pela cidade
    public function listarImovelTipo($tipo) {
        try {
            $sql = "SELECT * FROM imovel WHERE tipo = :tipo";
            $param = array(":tipo" => $tipo);
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCod($pts['cod']);
                $imovel->setTipo($pts['tipo']);
                $imovel->setTitulo($pts['titulo']);
                $imovel->setValor($pts['valor']);
                $imovel->setUrl($pts['url']);
                $imovel->setThumb($pts['thumb']);
                $imovel->setQuartos($pts['quartos']);
                $imovel->setBanheiro($pts['banheiro']);
                $imovel->setArea($pts['area']);

                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorna o tipo de imovel
    public function listarTipo() {
        try {
            $sql = "SELECT tipo FROM imovel GROUP BY tipo";
            $dt = $this->pdo->ExecuteQuery($sql);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setTipo($pts['tipo']);
                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorna o tipo de imovel
    public function listarCidade() {
        try {
            $sql = "SELECT cidade FROM imovel GROUP BY cidade";
            $dt = $this->pdo->ExecuteQuery($sql);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCidade($pts['cidade']);
                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function RetornaQtdImovel() {
        try {
            $sql = "SELECT count(im.cod) as total FROM imovel im";
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

    //trazer todos os imoveis para o SEO
    public function seoImovelUrl($url) {
        try {
            $sql = "SELECT * FROM imovel ORDER BY cod DESC WHERE url = :url ";
            $param = array(":url" => $url);
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCod($pts['cod']);
                $imovel->setTitulo($pts['titulo']);
                $imovel->setUrl($pts['url']);
                $imovel->setValor($pts['valor']);
                $imovel->setEndereco($pts['endereco']);
                $imovel->setCidade($pts['cidade']);
                $imovel->setTipo($pts['tipo']);
                $imovel->setCep($pts['cep']);
                $imovel->setThumb($pts['thumb']);
                $imovel->setStatus($pts['status']);
                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function BuscarImovel($termo) {
        try {
            $sql = "SELECT * FROM imovel WHERE titulo LIKE :termo ORDER BY titulo ASC";

            $param = array(
                ":termo" => "%{$termo}%"
            );

            $dataTable = $this->pdo->ExecuteQuery($sql, $param);

            $listaImovel = [];

            foreach ($dataTable as $resultado) {
                $imovel = new imovel();
                $imovel->setCod($resultado["cod"]);
                $imovel->setTitulo($resultado["titulo"]);
                $imovel->setStatus($resultado["status"]);
                $imovel->setValor($resultado["valor_aluguel"]);
                $imovel->setThumb($resultado["thumb"]);
                $imovel->setEndereco($resultado["endereco"]);

                $listaImovel[] = $imovel;
            }

            return $listaImovel;
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }

    public function verificarImovel($url) {

        try {
            $sql = "SELECT url, status FROM imovel WHERE url = :url AND status = 1";
            $param = array(":url" => $url);

            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            if ($dt):
                $imovel = new Imovel();
                $imovel->setUrl($dt['url']);
                $imovel->setStatus($dt['status']);
                return $imovel;
            else:
                return null;
            endif;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    /*     * *******************************SITE ********************************************************* */

    /*     * **** FILTRAGEM DE IMOVEIS PESQUISA*********** */

    public function RetornarFiltro($sql) {
        try {
            $stm = "SELECT cod, titulo, url, thumb FROM imovel WHERE status = 1 AND 1=1 $sql";

            $dataTable = $this->pdo->ExecuteQuery($stm);
            $listaProperty = [];

            foreach ($dataTable as $resultado) {
                $imovel = new Imovel();
                $imovel->setCod($resultado["cod"]);
                $imovel->setTitulo($resultado["titulo"]);
                $imovel->setUrl($resultado["url"]);
                $imovel->setThumb($resultado["thumb"]);
                $listaProperty[] = $imovel;
            }

            return $listaProperty;
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }

    /*     * **** PAGINA INDEX RESULTADO POR CATEGORIA COM SLIDER ************** */

    public function listarImovelCategory($categoria, $inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM imovel WHERE categoria = :categoria  ORDER BY cod DESC LIMIT :inicio, :quantidade";
            $param = array(
                ":categoria" => $categoria,
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCod($pts['cod']);
                $imovel->setTitulo($pts['titulo']);
                $imovel->setUrl($pts['url']);
                $imovel->setValor($pts['valor']);
                $imovel->setEndereco($pts['endereco']);
                $imovel->setCidade($pts['cidade']);
                $imovel->setCategoria($pts['categoria']);
                $imovel->setCep($pts['cep']);
                $imovel->setThumb($pts['thumb']);
                $imovel->setStatus($pts['status']);
                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    
    
    
    /*Altera quantidades de Views*/
    public function AlterarViews($url) {
        try {
            $sql = "UPDATE imovel SET view = view + 1 WHERE url = :url";
            $param = array(
                ":url" => $url
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
    
    public function listarViews($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM imovel WHERE view > 2 LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);


            $listaImovel = [];
            foreach ($dt as $pts) {
                $imovel = new Imovel();
                $imovel->setCod($pts['cod']);
                $imovel->setTitulo($pts['titulo']);
                $imovel->setUrl($pts['url']);
                $imovel->setValor($pts['valor']);
                $imovel->setEndereco($pts['endereco']);
                $imovel->setCidade($pts['cidade']);
                $imovel->setCategoria($pts['categoria']);
                $imovel->setCep($pts['cep']);
                $imovel->setThumb($pts['thumb']);
                $imovel->setStatus($pts['status']);
                $listaImovel[] = $imovel;
            }
            return $listaImovel;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    

}

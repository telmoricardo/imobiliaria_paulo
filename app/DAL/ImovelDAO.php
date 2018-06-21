<?php

require_once ('Banco.php');

class ImovelDAO {

    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    public function Cadastrar(Imovel $imovel) {
        try {

            $sql = "INSERT INTO imovel (titulo, url, descricao, valor, condominio, endereco, agente, cidade, estado, tipo, quartos, suite, banheiro, andar, garagem, cep, thumb, destaque, area) "
                    . "VALUES (:titulo, :url, :descricao, :valor, :condominio, :endereco, :agente, :cidade, :estado, :tipo, :quartos, :suite, :banheiro, :andar, :garagem, :cep, :thumb, :destaque, :area)";
            $param = array(
                ":titulo" => $imovel->getTitulo(),
                ":url" => $imovel->getUrl(),
                ":descricao" => $imovel->getDescricao(),
                ":valor" => $imovel->getValor(),
                ":condominio" => $imovel->getCondominio(),
                ":endereco" => $imovel->getEndereco(),
                ":agente" => $imovel->getAgente(),
                ":cidade" => $imovel->getCidade(),
                ":estado" => $imovel->getEstado(),
                ":tipo" => $imovel->getTipo(),
                ":quartos" => $imovel->getQuartos(),
                ":suite" => $imovel->getSuite(),
                ":banheiro" => $imovel->getBanheiro(),
                ":andar" => $imovel->getAndar(),
                ":garagem" => $imovel->getGaragem(),
                ":cep" => $imovel->getCep(),
                ":thumb" => $imovel->getThumb(),
                ":destaque" => $imovel->getDestaque(),
                ":area" => $imovel->getArea()
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
            $sql = "UPDATE imovel SET titulo = :titulo, url = :url, descricao = :descricao, valor = :valor, condominio = :condominio, endereco = :endereco, "
                    . "cidade = :cidade, estado = :estado, tipo = :tipo, quartos = :quartos, suite = :suite, banheiro = :banheiro, andar = :andar,"
                    . "garagem = :garagem, cep = :cep, destaque = :destaque, area = :area, agente = :agente WHERE cod = :cod";
            $param = array(
                ":titulo" => $imovel->getTitulo(),
                ":url" => $imovel->getUrl(),
                ":descricao" => $imovel->getDescricao(),
                ":valor" => $imovel->getValor(),
                ":condominio" => $imovel->getCondominio(),
                ":endereco" => $imovel->getEndereco(),
                ":cidade" => $imovel->getCidade(),
                ":estado" => $imovel->getEstado(),
                ":tipo" => $imovel->getTipo(),
                ":quartos" => $imovel->getQuartos(),
                ":suite" => $imovel->getSuite(),
                ":banheiro" => $imovel->getBanheiro(),
                ":andar" => $imovel->getAndar(),
                ":garagem" => $imovel->getGaragem(),
                ":cep" => $imovel->getCep(),
                ":destaque" => $imovel->getDestaque(),
                ":area" => $imovel->getArea(),
                ":agente" => $imovel->getAgente(),
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
            $sql = "SELECT * FROM imovel WHERE destaque = 2 AND status = 1 ORDER BY cod DESC LIMIT :inicio, :quantidade";
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

    

    public function retornaImovelCod($cod) {
        try {
            /* SELECT a.codAgente, a.nome, i.cod, i.titulo, i.url, i.valor, i.condominio, i.descricao, i.endereco, i.cidade, i.estado, i.tipo, i.quartos, i.suite, i.banheiro, i.garagem, i.andar, i.cep, i.thumb, i.destaque, i.area, i.agente FROM agente a INNER JOIN imovel i ON a.codAgente = i.agente WHERE i.cod = 26 */
            $sql = "SELECT a.codAgente, a.nome, a.telefone, a.email, a.regiao, i.cod, i.titulo, i.url, i.valor, i.condominio, i.descricao, i.endereco, i.cidade, i.estado, i.tipo, i.quartos, i.suite, i.banheiro, i.garagem, i.andar, i.cep, i.thumb, i.destaque, i.area, i.agente FROM agente a INNER JOIN imovel i ON a.codAgente = i.agente WHERE i.cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $imovel = new Imovel();
            $imovel->setCod($dt['cod']);
            $imovel->setTitulo($dt['titulo']);
            $imovel->setUrl($dt['url']);
            $imovel->setValor($dt['valor']);
            $imovel->setCondominio($dt['condominio']);
            $imovel->setDescricao($dt['descricao']);
            $imovel->setEndereco($dt['endereco']);
            $imovel->setCidade($dt['cidade']);
            $imovel->setEstado($dt['estado']);
            $imovel->setTipo($dt['tipo']);
            $imovel->setQuartos($dt['quartos']);
            $imovel->setSuite($dt['suite']);
            $imovel->setBanheiro($dt['banheiro']);
            $imovel->setGaragem($dt['garagem']);
            $imovel->setAndar($dt['andar']);
            $imovel->setCep($dt['cep']);
            $imovel->setThumb($dt['thumb']);
            $imovel->setDestaque($dt['destaque']);
            $imovel->setArea($dt['area']);
            $imovel->getAgente()->setCod($dt['codAgente']);
            $imovel->getAgente()->setNome($dt['nome']);
            $imovel->getAgente()->setEmail($dt['email']);
            $imovel->getAgente()->setRegiao($dt['regiao']);
            $imovel->getAgente()->setTelefone($dt['telefone']);

            return $imovel;
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

    public function AlterarMapa($cod, $mapa) {
        try {
            $sql = "UPDATE imovel SET mapa = :mapa WHERE cod = :cod";
            $param = array(
                ":cod" => $cod,
                ":mapa" => $mapa
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

    public function RetornaMapa($cod) {
        try {
            $sql = "SELECT cod, mapa FROM imovel WHERE cod = :cod";
            $param = array(":cod" => $cod);

            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $post = new Imovel();
            $post->setCod($dt['cod']);
            $post->setMapa($dt['mapa']);

            return $post;
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
                $imovel->setValor($resultado["valor"]);
                $imovel->setThumb($resultado["thumb"]);

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
    
    /*pagina single*/
    public function retornaImovelUrl($url) {
        try {
            $sql = "SELECT a.codAgente, a.nome, a.telefone, a.email, a.regiao, i.cod, i.titulo, i.url, i.valor, i.condominio, i.descricao, i.endereco, i.cidade, i.estado, i.categoria, i.quartos, i.suite, i.banheiro, i.garagem, i.andar, i.cep, i.thumb, i.destaque, i.area, i.agente, i.mapa FROM agente a INNER JOIN imovel i ON a.codAgente = i.agente WHERE i.url = :url AND i.status = 1";
            $param = array(":url" => $url);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $imovel = new Imovel();
            $imovel->setCod($dt['cod']);
            $imovel->setTitulo($dt['titulo']);
            $imovel->setUrl($dt['url']);
            $imovel->setValor($dt['valor']);
            $imovel->setCondominio($dt['condominio']);
            $imovel->setDescricao($dt['descricao']);
            $imovel->setEndereco($dt['endereco']);
            $imovel->setCidade($dt['cidade']);
            $imovel->setEstado($dt['estado']);
            $imovel->setCategoria($dt['categoria']);
            $imovel->setQuartos($dt['quartos']);
            $imovel->setSuite($dt['suite']);
            $imovel->setBanheiro($dt['banheiro']);
            $imovel->setGaragem($dt['garagem']);
            $imovel->setAndar($dt['andar']);
            $imovel->setCep($dt['cep']);
            $imovel->setThumb($dt['thumb']);
            $imovel->setDestaque($dt['destaque']);
            $imovel->setArea($dt['area']);
            $imovel->setMapa($dt['mapa']);
            $imovel->getAgente()->setCod($dt['codAgente']);
            $imovel->getAgente()->setNome($dt['nome']);
            $imovel->getAgente()->setEmail($dt['email']);
            $imovel->getAgente()->setRegiao($dt['regiao']);
            $imovel->getAgente()->setTelefone($dt['telefone']);

            return $imovel;
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

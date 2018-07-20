<?php
//intanciando os objetos
$imovelController = new ImovelController();
$agenteController = new AgenteController();
$categoriaController = new CategoriaController();
$cidadeController = new CidadeController();
$helper = new Helper();
$upload = new Upload();


$resultado = "";
$cod = filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT);

if (filter_input(INPUT_POST, "btnAlterarImg", FILTER_SANITIZE_STRING)):    
    $codImg = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_NUMBER_INT);   
    $retornaImagem = $imovelController->RetornaPostImg($codImg);
    $capa = $retornaImagem->getThumb();
    
    $retornaNomeImovel = $imovelController->retornaImovelCod($codImg);
    $tituloImovel = $retornaNomeImovel->getTitulo();
    if ($retornaImagem):
        $capa = "../upload/" . $retornaImagem->getThumb();
        if (file_exists($capa) && !is_dir($capa)):
            unlink($capa);
        endif;
        $postImg = new Imovel();
        //upload da imagem
        $imagem = $_FILES['imagem'];
        $upload->Image($imagem, $tituloImovel, 1000, 'imovel');
        $nomeImagem = $upload->getResult();
        //recebendo o nome da imagem
        $postImg->setThumb($nomeImagem);
        if ($imovelController->AlterarImagem($codImg, $nomeImagem)):
            $resultado = "<div class=\"alert alert-success\">A imagem <b>{$nomeImagem} </b> foi alterado com sucesso</div>";
        else:
            $resultado = "<div class=\"alert alert-danger\">Erro ao cadastrar </div>";
        endif;
    endif;
endif;



$btnAlterar = filter_input(INPUT_POST, 'btnAtualizar', FILTER_SANITIZE_STRING);
if ($btnAlterar):   
    $imovel = new Imovel();
   
    $imovel->setCod(filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT));
    $imovel->setTitulo(filter_input(INPUT_POST, 'txtTitulo', FILTER_SANITIZE_STRING));
    //convertendo a url
    $urlImv = $helper->Name($imovel->getTitulo());
    $imovel->setUrl($urlImv);
    $imovel->setCategoria(filter_input(INPUT_POST, 'slCategoria', FILTER_SANITIZE_NUMBER_INT));
    $imovel->setStatus(filter_input(INPUT_POST, 'slStatus', FILTER_SANITIZE_NUMBER_INT));
    $imovel->setDescricao(filter_input(INPUT_POST, 'txtDescricao', FILTER_SANITIZE_SPECIAL_CHARS));
    $imovel->setObs_condiminio(filter_input(INPUT_POST, 'txtObsCondominio', FILTER_SANITIZE_SPECIAL_CHARS));
    $imovel->setObs_alugar(filter_input(INPUT_POST, 'txtObsAlugar', FILTER_SANITIZE_SPECIAL_CHARS));
    $imovel->setDestaque(filter_input(INPUT_POST, 'slDestaque', FILTER_SANITIZE_NUMBER_INT));
    $imovel->setAgente(filter_input(INPUT_POST, 'slAgente', FILTER_SANITIZE_NUMBER_INT));
    $imovel->setCep(filter_input(INPUT_POST, 'endereco_cep', FILTER_SANITIZE_NUMBER_INT));
    $imovel->setEndereco(filter_input(INPUT_POST, 'endereco_endereco', FILTER_SANITIZE_STRING));
    $imovel->setCidade(filter_input(INPUT_POST, 'slCidade', FILTER_SANITIZE_NUMBER_INT));
    
    //formatando o valor do aluguel e do condominio  
    $imovel->setValor($helper->Valor(filter_input(INPUT_POST, 'txtPreco', FILTER_SANITIZE_STRING)));
    $imovel->setCondominio($helper->Valor(filter_input(INPUT_POST, 'txtCondominio', FILTER_SANITIZE_STRING)));
    $imovel->setIptu($helper->Valor(filter_input(INPUT_POST, 'txtIptu', FILTER_SANITIZE_STRING)));    
    $imovel->setSeguro($helper->Valor(filter_input(INPUT_POST, 'txtSeguro', FILTER_SANITIZE_STRING)));   
   
    $imovel->setArea(filter_input(INPUT_POST, 'txtArea', FILTER_SANITIZE_STRING));
    //setar os valores senão tiver valor colocar valor 0
    (filter_input(INPUT_POST, 'txtQuarto', FILTER_SANITIZE_NUMBER_INT)) ? $imovel->setQuartos(filter_input(INPUT_POST, 'txtQuarto', FILTER_SANITIZE_NUMBER_INT)) : $imovel->setQuartos(0);
    (filter_input(INPUT_POST, 'txtSuite', FILTER_SANITIZE_NUMBER_INT)) ? $imovel->setSuite(filter_input(INPUT_POST, 'txtSuite', FILTER_SANITIZE_NUMBER_INT)) : $imovel->setSuite(0);
    (filter_input(INPUT_POST, 'txtBanheiro', FILTER_SANITIZE_NUMBER_INT)) ? $imovel->setBanheiro(filter_input(INPUT_POST, 'txtBanheiro', FILTER_SANITIZE_NUMBER_INT)) : $imovel->setBanheiro(0);
    (filter_input(INPUT_POST, 'txtAndar', FILTER_SANITIZE_NUMBER_INT)) ? $imovel->setAndar(filter_input(INPUT_POST, 'txtAndar', FILTER_SANITIZE_NUMBER_INT)) : $imovel->setAndar(0);
    (filter_input(INPUT_POST, 'txtGarage', FILTER_SANITIZE_NUMBER_INT)) ? $imovel->setGaragem(filter_input(INPUT_POST, 'txtGarage', FILTER_SANITIZE_NUMBER_INT)) : $imovel->setGaragem(0);

    $imovel->setMapa(filter_input(INPUT_POST, 'txtMapa', FILTER_SANITIZE_STRING));
    $imovel->setMapa(filter_input(INPUT_POST, 'txtStreet', FILTER_SANITIZE_STRING));
    $imovel->setView(1);
    $imovel->setPet(filter_input(INPUT_POST, 'slPet', FILTER_SANITIZE_NUMBER_INT));
    $imovel->setParada(filter_input(INPUT_POST, 'slParada', FILTER_SANITIZE_NUMBER_INT));

    
    if ($imovelController->Atualizar($imovel)):
    $resultado = '<div class="alert alert-success">
                    <button type="button" aria-hidden="true" class="close"></button>
                    <span><b> Sucesso - </b> Imóvel atualizado com sucesso!"</span>
                </div>';
    else:
       $resultado = ' <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close"></button>
            <span><b> "Error - </b> Todos os campos são obrigatórios."</span>
        </div>';
    endif;
    
endif;

$retornaImovel = $imovelController->retornaImovelCod($cod);

if($retornaImovel == null):
    echo '';
else:
    $titulo = $retornaImovel->getTitulo();
    $thumb = $retornaImovel->getThumb();
    $codCat = $retornaImovel->getCategoria()->getCod_categoria();
    $nomeCat = $retornaImovel->getCategoria()->getNome_categoria();
    $statusImv = $retornaImovel->getStatus();
    $descricao = $retornaImovel->getDescricao();
    $condominio = $retornaImovel->getObs_condiminio();
    $observacao = $retornaImovel->getObs_alugar();
    
    $valor = $retornaImovel->getValor();
    $valorAluguel = number_format($valor, 2, ",", ".");    
    $valor_condominio = $retornaImovel->getCondominio();
    $vCond = number_format($valor_condominio, 2, ",", ".");   
    $iptu =$retornaImovel->getIptu();
    $vIptu = number_format($iptu, 2, ",", ".");     
    $seguro = $retornaImovel->getSeguro();
    $vseguro = number_format($seguro, 2, ",", ".");  
    $destaqueImv = $retornaImovel->getDestaque();
    $codAg = $retornaImovel->getAgente()->getCod();
    $nomeAg = $retornaImovel->getAgente()->getNome();
    $cep = $retornaImovel->getCep();
    $endereco = $retornaImovel->getEndereco();
    
    $codCidade = $retornaImovel->getCidade()->getCod_cidade();
    $nomeCidade = $retornaImovel->getCidade()->getNome_cidade();
    
    $area = $retornaImovel->getArea();  
    $quarto = $retornaImovel->getQuartos();
    $suite = $retornaImovel->getSuite();
    $banheiro = $retornaImovel->getBanheiro();
    $andar = $retornaImovel->getAndar();
    $garagem = $retornaImovel->getGaragem();  
    
    $mapa = $retornaImovel->getMapa();
    $street = $retornaImovel->getStreet();
    $petImv = $retornaImovel->getPet();
    $paradaImv = $retornaImovel->getParada();
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <form method="post" enctype="multipart/form-data" id="frmProduto" name="frmProduto" onSubmit="return validaCadastro();">
                <div class="col-lg-8 col-md-7">
                    <div class="card">
                        <div class="header">

                            <div class="row">
                                <div class="col-md-9">
                                    <h4 class="title">Atualizar Imóvel</h4> 
                                </div>                                    
                                <div class="col-md-3">
                                    <a href="?pagina=listar" class="btn btn-fill">Listar Imóveis</a>
                                </div>                                    
                            </div>
                        </div>
                        <div class="content">
                            <form>                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>*Titulo do Imóvel</label>
                                            <input type="text" class="form-control border-input" id="txtTitulo" name="txtTitulo" placeholder="Titulo do Imovel" value="<?= $titulo;?>">
                                            <span class="msg-error msg-titulo"></span>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="row">                                 
                                    <div class="col-md-3">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="slCategoria">*Categoria</label>
                                            <select id="slCategoria" name="slCategoria" class="form-control border-input">
                                                <option selected="selected" value="<?= $codCat; ?>"><?= $nomeCat; ?></option>
                                                <?php                                                
                                                $listaCategoria = $categoriaController->ListarCategoria();                                             
                                                foreach ($listaCategoria as $t):                                                    
                                                    if($t->getNome_categoria() == $nomeCat):
                                                    else:
                                                ?>
                                                <option  value="<?= $t->getCod_categoria(); ?>"><?= $t->getNome_categoria(); ?></option>";
                                                <?php
                                                    endif;
                                                    endforeach;                                               
                                                ?>
                                            </select>
                                            <span class="msg-error msg-categoria"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Status</label>
                                            <select id="slStatus" name="slStatus" class="form-control border-input">                                                    
                                            <?php
                                                $status = array('1' => 'Ativo', '2' => 'Bloqueado');
                                                foreach ($status as $key => $value):
                                                    $esseEhOStatus = $statusImv == $key;
                                                    $selecao = $esseEhOStatus ? "selected='selected'" : '';
//                                                    ?>
                                                    <option value="<?= $key; ?>" <?= $selecao ?>><?= $value ?></option>
                                                    <?php
                                                endforeach;
                                            ?>
                                            </select>
                                            <span class="msg-error msg-status"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descrição do Imóvel</label>
                                            <textarea rows="3" name="txtDescricao" class="form-control border-input" placeholder="Descrição do Imóvel">
                                                <?=$descricao?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Condomínio</label>
                                            <input type="text" class="form-control border-input" id="txtObsCondominio" placeholder="Observação do Condominio" name="txtObsCondominio" value="<?=  $condominio;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Observação do Imóvel</label>
                                            <input type="text" class="form-control border-input" id="txtObsAlugar" placeholder="Observação do Imóvel" name="txtObsAlugar" value="<?=  $observacao;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Valor (Aluguel) R$ 1000,00</label>
                                            <input type="text" class="form-control border-input" id="txtPreco" name="txtPreco" placeholder="1000,00" value="<?=  $valorAluguel;?>">
                                            <span class="msg-error msg-preco"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Valor (Condomínio) R$ 1000,00</label>
                                            <input type="text" class="form-control border-input" id="txtCondominio" name="txtCondominio" placeholder="1000,00" value="<?= $vCond; ?>">
                                            <span class="msg-error msg-preco"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>IPTU R$ 1000,00</label>
                                            <input type="text" class="form-control border-input" id="txtIptu" name="txtIptu" placeholder="1000,00" value="<?= $vIptu; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Seguro Incêndio R$ 1000,00</label>
                                            <input type="text" class="form-control border-input" id="txtSeguro" name="txtSeguro" placeholder="1000,00" value="<?= $vseguro; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>*Destaque</label>
                                        <select id="slDestaque" name="slDestaque" class="form-control border-input">                                                    
                                            <?php
                                                $destaque = array('1' => 'Sim', '2' => 'Não');
                                                foreach ($destaque as $key => $value):
                                                    $esseEhODestaque = $destaqueImv == $key;
                                                    $selecao = $esseEhODestaque ? "selected='selected'" : '';
                                            ?>
                                               <option value="<?= $key; ?>" <?= $selecao ?>><?= $value ?></option>
                                            <?php
                                                endforeach;
                                            ?>
                                        </select>
                                        <span class="msg-error msg-status"></span>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Agente</label>
                                        <select id="slAgente" name="slAgente" class="form-control border-input">                                                    
                                            <option selected="selected" value="<?= $codAg; ?>"><?= $nomeAg; ?></option>
                                            <?php                                                
                                                $listaAgente = $agenteController->ListarAgente(); 
                                               
                                                foreach ($listaAgente as $agente):                                                    
                                                    if($agente->getNome() == $nomeAg):
                                                    else:
                                                ?>
                                                <option  value="<?= $agente->getCod()?>"><?= $agente->getNome()?></option>";
                                                <?php
                                                    endif;
                                                    endforeach;                                               
                                                ?>  
                                            
                                        </select>
                                        <span class="msg-error msg-status"></span>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 15px;">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>CEP:</label>
                                            <input type="text" id="endereco_cep" name="endereco_cep" maxlength="8" class="form-control border-input" placeholder="Sem traços" value="<?= $cep?>">
                                        </div>
                                    </div>                                    
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Endereço:</label>
                                            <input type="text" id="endereco_endereco" name="endereco_endereco"  class="form-control border-input" value="<?= $endereco?>">
                                            <span class="msg-error msg-titulo"></span>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <select class="form-control border-input"  id="slCidade" name="slCidade">
                                            <option selected="selected" value="<?= $codCidade; ?>"><?= $nomeCidade; ?></option>
                                            <?php                                                
                                                $listaCidade = $cidadeController->ListarCidade();                                           
                                                foreach ($listaCidade as $cidade):                                                
                                                    if($cidade->getNome_cidade() == $nomeCidade):
                                                    else:
                                                ?>
                                                <option value="<?= $cidade->getCod_cidade();?>"><?= $cidade->getNome_cidade();?></option>
                                                <?php
                                                    endif;
                                                endforeach;                                               
                                            ?>
                                            </select>
                                            <span class="msg-error msg-status"></span>
                                        </div>
                                    </div>                                    

                                </div>  

                                <div class="row">
                                    <div class="col-md-12">
                                        <?php echo $resultado; ?>
                                    </div>                                    
                                </div>  

                                <div class="text-center">
                                    <input type="submit" class="btn btn-info btn-fill btn-wd" name="btnAtualizar" value="Atualizar">
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-user">
                                <div class="image" style="height: 250px;">
                                    <img id="img-uploaded" src="../../../tim.php?src=upload/<?= $thumb?>&w=600&h=400&zc=0" alt="Sua imagem">
                                </div> 
                                <input type="file" class="form-control border-input uploader" id="imagemArtigo"  name="imagem">
                                <input class="btn btn-info btn-fill btn-wd" type="submit" value="Alterar Imagem" name="btnAlterarImg" style="position: absolute; bottom: 60px; left: 50%; margin-left: -80px;">
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="title">CARACTERÍSTICA DO IMÓVEL:</h4>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>ÁREA M²</label>
                                <input type="number" min="0" class="form-control border-input" id="txtArea" name="txtArea" placeholder="96" value="<?= $area?>">
                                <span class="msg-error msg-altura"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>QUARTO(S)</label>
                                <input type="number" min="0" class="form-control border-input" id="txtQuarto" name="txtQuarto" placeholder="1" value="<?= $quarto?>">
                                <span class="msg-error msg-altura"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>SUITE(S):</label>
                                <input type="number" min="0" class="form-control border-input" id="txtSuite" name="txtSuite" placeholder="1" value="<?= $suite?>">
                                <span class="msg-error msg-largura"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>BANHEIRO(S)</label>
                                <input type="number" min="0" class="form-control border-input" id="txtBanheiro" name="txtBanheiro" placeholder="1" value="<?= $banheiro?>">
                                <span class="msg-error msg-altura"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>ANDAR(S):</label>
                                <input type="number" min="0" class="form-control border-input" id="txtAndar" name="txtAndar" placeholder="1" value="<?= $andar?>">
                                <span class="msg-error msg-largura"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>GARAGEM:</label>
                                <input type="number" min="0" class="form-control border-input" id="txtGarage" name="txtGarage" placeholder="1" value="<?= $garagem?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Aceita Pet</label>
                                <select class="form-control border-input"  id="slPet" name="slPet">
                                <?php
                                    $pet = array('1' => 'Não', '2' => 'Sim');
                                    foreach ($pet as $key => $value):
                                        $esseEhOPet = $petImv == $key;
                                        $selecao = $esseEhOPet ? "selected='selected'" : '';
                                ?>
                                   <option value="<?= $key; ?>" <?= $selecao ?>><?= $value ?></option>
                                <?php
                                    endforeach;
                                ?>
                                </select>                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Parada Próxima</label>
                                <select class="form-control border-input"  id="slParada" name="slParada">
                                <?php
                                    $parada = array('1' => 'Não', '2' => 'Sim');
                                    foreach ($parada as $key => $value):
                                        $esseEhParada = $paradaImv == $key;
                                        $selecao = $esseEhParada ? "selected='selected'" : '';
                                ?>
                                   <option value="<?= $key; ?>" <?= $selecao ?>><?= $value ?></option>
                                <?php
                                    endforeach;
                                ?>
                                </select>                                
                            </div>
                        </div>                                             
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>MAPA</label>
                                <input type="text" class="form-control border-input" id="txtMapa" name="txtMapa" placeholder="" value="<?= $mapa;?>">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>STREET VIEW</label>
                                <input type="text" class="form-control border-input" id="txtStreet" name="txtStreet" placeholder="" value="<?= $street;?>">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>        
    </div>
</div>

<?php
endif;
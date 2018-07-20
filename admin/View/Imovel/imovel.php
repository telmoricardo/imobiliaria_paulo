<?php
$categoriaController = new CategoriaController();
$cidadeController = new CidadeController();
$imovelController = new ImovelController();
$agenteController = new AgenteController();
$helper = new Helper();
$upload = new Upload();

$resultado = "";

//listando as categorias
$listaCategoria = $categoriaController->ListarCategoria();
//listando os agentes
$listaAgentes = $agenteController->ListarAgente();

$btnCadastrar = filter_input(INPUT_POST, "btnCadastrar", FILTER_SANITIZE_STRING);
if ($btnCadastrar):
    $imovel = new Imovel();

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

    //upload da imagem
    $imagem = $_FILES['imagem'];
    $tituloImg = $imovel->getTitulo();
    //recebendo os dados da imagem
    $upload->Image($imagem, $tituloImg, 1000, 'imovel');
    $nomeImagem = $upload->getResult();
    if ($upload->getResult()):
        $resultado = '<div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close"></button>
            <span><b> "Sucesso - </b> Imagem Cadastrado com sucesso!"</span>
        </div>';
    else:
        $resultado = ' <div class="alert alert-warning">
            <button type="button" aria-hidden="true" class="close"></button>
            <span><b> "Erro - </b> Não foi possivel cadastrar imagem tamanho ou formato é inválido!"</span>
        </div>';
    endif;
    $imovel->setThumb($nomeImagem);

    if ($imovelController->Cadastrar($imovel)):
        $resultado = '<div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close"></button>
            <span><b> "Sucesso - </b> Imóvel Cadastrado com sucesso!"</span>
        </div>';
        $insertGoTo = '?pagina=imovel';
        header("refresh:2;url={$insertGoTo}");
    else:
        $resultado = ' <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close"></button>
            <span><b> "Erro - </b> Os campos que possuem * são obrigatórios!"</span>
        </div>';
    endif;

endif;
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
                                    <h4 class="title">Cadastrar Novo Imóvel</h4> 
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
                                            <label>*CAPA (JPG 1000X1000PX):</label>
                                            <input type="file" class="form-control border-input uploader" id="imagemArtigo"  name="imagem">
                                            <span class="msg-error msg-thumb"></span>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>*Titulo do Imóvel</label>
                                            <input type="text" class="form-control border-input" id="txtTitulo" name="txtTitulo" placeholder="Titulo do Imovel">
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
                                                <?php
                                                if ($listaCategoria == NULL):
                                                    echo '<option value="">Não existem categoria cadastradas</option>';
                                                else:
                                                    echo '<option value="">Selecione a categoria</option>';
                                                    foreach ($listaCategoria as $cat):
                                                        echo "<option value={$cat->getCod_categoria()}>{$cat->getNome_categoria()}</option>";
                                                    endforeach;
                                                endif;
                                                ?>
                                            </select>
                                            <span class="msg-error msg-categoria"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Status</label>
                                            <select id="slStatus" name="slStatus" class="form-control border-input">                                                    
                                                <option value="">Selecione o Status</option>
                                                <option value="1">Ativo</option>
                                                <option value="2">Bloqueado</option>
                                            </select>
                                            <span class="msg-error msg-status"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descrição do Imóvel</label>
                                            <textarea rows="3" name="txtDescricao" class="form-control border-input" placeholder="Descrição do Imóvel" value="">
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Condomínio</label>
                                            <input type="text" class="form-control border-input" id="txtObsCondominio" placeholder="Observação do Condominio" name="txtObsCondominio">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Observação do Imóvel</label>
                                            <input type="text" class="form-control border-input" id="txtObsAlugar" placeholder="Observação do Imóvel" name="txtObsAlugar">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>*Valor (Aluguel) R$ 1000,00</label>
                                            <input type="text" class="form-control border-input" id="txtPreco" name="txtPreco" placeholder="" value="00,00">
                                            <span class="msg-error msg-preco"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Valor (Condomínio) R$ 1000,00</label>
                                            <input type="text" class="form-control border-input" id="txtCondominio" name="txtCondominio" placeholder="1.000,00" value="00,00">
                                            <span class="msg-error msg-preco"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>IPTU R$ 1000,00</label>
                                            <input type="text" class="form-control border-input" id="txtIptu" name="txtIptu" placeholder="1.000,00" value="00,00">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Seguro Incêndio R$ 1000,00</label>
                                            <input type="text" class="form-control border-input" id="txtSeguro" name="txtSeguro" placeholder="1.000,00" value="00,00">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>*Destaque</label>
                                        <select id="slDestaque" name="slDestaque" class="form-control border-input">                                                    
                                            <option value="">O imóvel é destaque?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                        <span class="msg-error msg-status"></span>
                                    </div>

                                    <div class="col-md-6">
                                        <label>Agente</label>
                                        <select id="slAgente" name="slAgente" class="form-control border-input">                                                    
                                            <?php
                                            if ($listaAgentes == NULL):
                                                echo '<option value="">Não existem categoria cadastradas</option>';
                                            else:
                                                echo '<option value="">Qual o agente é responsavel?</option>';
                                                foreach ($listaAgentes as $agente):
                                                    echo "<option value={$agente->getCod()}>{$agente->getNome()}</option>";
                                                endforeach;
                                            endif;
                                            ?>
                                        </select>
                                        <span class="msg-error msg-status"></span>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 15px;">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>CEP:</label>
                                            <input type="text" id="endereco_cep" name="endereco_cep" maxlength="8" class="form-control border-input" placeholder="Sem traços" value="">
                                            <span class="msg-error msg-titulo"></span>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Endereço:</label>
                                            <input type="text" id="endereco_endereco" name="endereco_endereco"  class="form-control border-input" value="">
                                            <span class="msg-error msg-titulo"></span>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <select class="form-control border-input"  id="slCidade" name="slCidade">
                                                <?php
                                                    $listaCidade = $cidadeController->ListarCidade();
                                                    if($listaCidade == null):
                                                        echo '<option value="">Não cidade cadastrada no momento</option>';
                                                    else: 
                                                        echo '<option value="">Selecione a Cidade</option>';
                                                    foreach ($listaCidade as $cidade):                                                        
                                                ?>
                                                <option value="<?= $cidade->getCod_cidade();?>"><?= $cidade->getNome_cidade();?></option>
                                                <?php
                                                   endforeach;
                                                   endif;
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
                                    <input type="submit" class="btn btn-success btn-fill btn-wd" name="btnCadastrar" value="Cadastrar">
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-user">
                                <div class="image" style="height: 400px;">
                                    <img id="img-uploaded" src="tim.php?src=assets/img/no_image.jpg&w=600&h=600&zc=0" alt="Sua imagem">                               
                                </div>                        
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
                                <input type="number" min="0" class="form-control border-input" id="txtArea" name="txtArea" placeholder="96" value="0">
                                <span class="msg-error msg-altura"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>QUARTO(S)</label>
                                <input type="number" min="0" class="form-control border-input" id="txtQuarto" name="txtQuarto" placeholder="1" value="0">
                                <span class="msg-error msg-altura"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>SUITE(S):</label>
                                <input type="number" min="0" class="form-control border-input" id="txtSuite" name="txtSuite" placeholder="1" value="0">
                                <span class="msg-error msg-largura"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>BANHEIRO(S)</label>
                                <input type="number" min="0" class="form-control border-input" id="txtBanheiro" name="txtBanheiro" placeholder="1" value="0">
                                <span class="msg-error msg-altura"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>ANDAR(S):</label>
                                <input type="number" min="0" class="form-control border-input" id="txtAndar" name="txtAndar" placeholder="1" value="0">
                                <span class="msg-error msg-largura"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>GARAGEM:</label>
                                <input type="number" min="0" class="form-control border-input" id="txtGarage" name="txtGarage" placeholder="1" value="0">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Aceita Pet</label>
                                <select class="form-control border-input"  id="slPet" name="slPet">
                                    <option value="1">Não</option>
                                    <option value="2">Sim</option> 
                                </select>                                
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Parada Próxima</label>
                                <select class="form-control border-input"  id="slParada" name="slParada">
                                    <option value="1">Não</option>
                                    <option value="2">Sim</option> 
                                </select>                                
                            </div>
                        </div>                                             
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>MAPA</label>
                                <input type="text" class="form-control border-input" id="txtMapa" name="txtMapa" placeholder="Colocar a Url" value="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>STREET VIEW</label>
                                <input type="text" class="form-control border-input" id="txtStreet" name="txtStreet" placeholder="Colocar a Url" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>        
    </div>
</div>




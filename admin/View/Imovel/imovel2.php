<?php
$imovelController = new ImovelController();
$agenteController = new AgenteController();
$categoriaController = new CategoriaController();
$helper = new Helper();
$upload = new Upload();

/*Listando as categorias*/
$lstCat = $categoriaController->ListarCategoria();

$novaImagem = "";
$titulo = "";
$valor = "";
$endereco = "";
$condominio = "";
$cidade = "";
$pais = "";
$cep = "";
$resultado = "";

$btnCadastrar = filter_input(INPUT_POST, 'btnCadastrar', FILTER_SANITIZE_STRING);
if ($btnCadastrar):
    $imovel = new Imovel();
    
    //dados dos imoveis
    $imovel->setCod(filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT));
    $imovel->setTitulo(filter_input(INPUT_POST, 'txtTitulo', FILTER_SANITIZE_STRING));
    
    //criando o titulo e transforma em url amigavel
    $urlImv = $helper->Name($imovel->getTitulo());
    $imovel->setUrl($urlImv);    
    
    $imovel->setDescricao(filter_input(INPUT_POST, 'txtDescricao', FILTER_SANITIZE_STRING));
    
    //setar os valores senão tiver valor colocar NULL
    if(filter_input(INPUT_POST, 'txtValor', FILTER_SANITIZE_NUMBER_FLOAT)){
        $imovel->setValor(filter_input(INPUT_POST, 'txtValor', FILTER_SANITIZE_NUMBER_FLOAT));    
    }else{
        $imovel->setValor(NULL);
    }
    
    if(filter_input(INPUT_POST, 'txtCondominio', FILTER_SANITIZE_NUMBER_FLOAT)){
        $imovel->setCondominio(filter_input(INPUT_POST, 'txtCondominio', FILTER_SANITIZE_NUMBER_FLOAT)); 
    }else{
        $imovel->setCondominio(NULL);
    }  
       
    //SETANDO OS DADOS
    $imovel->setEndereco(strip_tags(filter_input(INPUT_POST, 'txtEndereco', FILTER_SANITIZE_STRING)));
    $imovel->setAgente(strip_tags(filter_input(INPUT_POST, 'slAgente', FILTER_SANITIZE_STRING)));
    $imovel->setCidade(strip_tags(filter_input(INPUT_POST, 'slTipoCidade', FILTER_SANITIZE_STRING)));    
    $imovel->setEstado(strip_tags(filter_input(INPUT_POST, 'slEstado', FILTER_SANITIZE_STRING)));    
    $imovel->setTipo(strip_tags(filter_input(INPUT_POST, 'slTipo', FILTER_SANITIZE_STRING)));   
    
    //setar os valores senão tiver valor colocar NULL
    if(filter_input(INPUT_POST, 'slQuarto', FILTER_SANITIZE_STRING)){
        $imovel->setQuartos(strip_tags(filter_input(INPUT_POST, 'slQuarto', FILTER_SANITIZE_STRING)));
    }else{
        $imovel->setQuartos(NULL);
    } 
    
    if(filter_input(INPUT_POST, 'slSuite', FILTER_SANITIZE_STRING)){
        $imovel->setSuite(strip_tags(filter_input(INPUT_POST, 'slSuite', FILTER_SANITIZE_STRING)));
    }else{
        $imovel->setSuite(NULL);
    }
    
    if(filter_input(INPUT_POST, 'slBanheiro', FILTER_SANITIZE_STRING)){
        $imovel->setBanheiro(strip_tags(filter_input(INPUT_POST, 'slBanheiro', FILTER_SANITIZE_STRING)));
    }else{
        $imovel->setBanheiro(NULL);
    } 
    
    if(filter_input(INPUT_POST, 'slAndar', FILTER_SANITIZE_STRING)){
        $imovel->setAndar(strip_tags(filter_input(INPUT_POST, 'slAndar', FILTER_SANITIZE_STRING)));
    }else{
        $imovel->setAndar(NULL);
    } 
    
    if(filter_input(INPUT_POST, 'slGaragem', FILTER_SANITIZE_STRING)){
        $imovel->setGaragem(strip_tags(filter_input(INPUT_POST, 'slGaragem', FILTER_SANITIZE_STRING)));
    }else{
        $imovel->setAndar(NULL);
    } 
    
    
    $imovel->setCep(strip_tags(filter_input(INPUT_POST, 'txtCep', FILTER_SANITIZE_STRING)));    
    $imovel->setDestaque(strip_tags(filter_input(INPUT_POST, 'slDestaque', FILTER_SANITIZE_NUMBER_INT)));    
    $imovel->setArea(strip_tags(filter_input(INPUT_POST, 'txtArea', FILTER_SANITIZE_NUMBER_INT)));    
    
    
    //upload da imagem
    $imagem = $_FILES['imagem'];   
    
    //recebendo os dados da imagem
    $upload->Image($imagem);
    $nomeImagem = $upload->getResult();
    //receber os valores da $nomeImagem
    $imovel->setThumb($nomeImagem);  
   
    if ($imovelController->Cadastrar($imovel)):
    $resultado = '<div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span><b> Sucesso - </b> Imóvel Cadastrado com sucesso!"</span>
        </div>';
    else:
        $resultado = ' <div class="alert alert-warning">
            <button type="button" aria-hidden="true" class="close">×</button>
            <span><b> Warning - </b> This is a regular notification made with ".alert-warning"</span>
        </div>';
    endif;
    
endif;
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-7">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cadastrar Imóvel</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="" enctype="multipart/form-data" id="frmImovel" name="frmImovel" onSubmit="return validaCadastro();">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Titulo</label>
                                        <input type="text" name="txtTitulo" id="txtTitulo" class="form-control border-input" placeholder="Titulo" value="<?= $titulo; ?>">
                                        <span class="msg-error msg-titulo"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">                                        
                                        <label>Imóvel em Destaque:</label>
                                        <select name="slDestaque" class="form-control border-input">
                                            <option value="1">Não</option>
                                            <option value="2">Sim</option>
                                        </select>
                                    </div>
                                </div>   
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Aluguel R$:</label>
                                        <input type="text" name="txtValor" id="txtValor" class="form-control border-input" placeholder="Valor" value="<?= $valor; ?>">
                                        <span class="msg-error msg-aluguel"></span>
                                    </div>
                                </div>                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Condomínio R$:</label>
                                        <input type="text" name="txtCondominio" class="form-control border-input" placeholder="Valor" value="<?= $condominio; ?>">
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descrição:</label>                                        
                                        <textarea name="txtDescricao" id="txtDescricao" class="form-control border-input" rows="5"></textarea>
                                        <span class="msg-error msg-descricao"></span>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>CEP</label>
                                        <input type="type" name="txtCep" id="txtCep" class="form-control border-input" placeholder="Cep" value="<?= $cep; ?>">
                                        <span class="msg-error msg-cep"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" name="txtEndereco" id="txtEndereco" class="form-control border-input" placeholder="Endereço" value="<?= $endereco; ?>">
                                        <span class="msg-error msg-endereco"></span>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <select class="form-control border-input"  id="slTipoCidade" name="slTipoCidade">
                                            <option value="Águas Claras">Águas Claras</option>
                                            <option value="Asa Sul">Asa Sul</option> 
                                            <option value="Asa Norte">Asa Norte</option> 
                                            <option value="Ceilândia">Ceilândia</option>
                                            <option value="Cruzeiro">Cruzeiro</option>
                                            <option value="SIG">SIG</option>                      
                                            <option value="SIA">SIA</option>                      
                                            <option value="Sudoeste">Sudoeste</option> 
                                            <option value="Taguatinga">Taguatinga</option> 
                                            <option value="Lago Sul">Lago Sul</option> 
                                        </select>
                                    </div>
                                </div>                              
                            </div>

                            
                            <div class="row">
                                 
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Agente</label>
                                        <select class="form-control border-input"  id="slAgente" name="slAgente">
                                            <?php
                                                $listaAgente = $agenteController->listarAgente();
                                                foreach ($listaAgente as $agente):
                                            ?>
                                            <option value="<?= $agente->getCod(); ?>"><?= $agente->getNome(); ?></option>
                                            <?php
                                                endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tipo</label>
                                        <select name="slTipo" id="slTipo" class="form-control border-input">
                                            <?php
                                                if($lstCat == null):  
                                                   echo '<option value="">Não existe categoria cadastrada</option>';
                                                else:
                                                    echo '<option value="">Selecione o Tipo</option>';
                                                foreach ($lstCat as $cat):
                                            ?>                                            
                                            <option value="<?= $cat->getCod_categoria(); ?>"><?= $cat->getNome_categoria(); ?></option>
                                            <?php
                                                endforeach;
                                                endif;
                                            ?>
                                        </select>
                                        <span class="msg-error msg-tipo"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Quartos</label>
                                        <select name="slQuarto" class="form-control border-input">
                                            <option value="">Não possui Quartos</option>
                                            <option value="1">1 Quarto</option>
                                            <option value="2">2 Quartos</option>
                                            <option value="3">3 Quartos</option>
                                            <option value="4">4 Quartos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Suites</label>
                                        <select name="slSuite" class="form-control border-input">
                                            <option value="">Não possui Suites</option>
                                            <option value="1">1 Suite</option>
                                            <option value="2">2 Suites</option>
                                            <option value="3">3 Suites</option>                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Banheiros:</label>
                                        <select name="slBanheiro" class="form-control border-input">
                                            <option value="">Não possui Banheiros</option>
                                            <option value="1">1 Banheiro</option>
                                            <option value="2">2 Banheiros</option>
                                            <option value="3">3 Banheiros</option>                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Andares:</label>
                                        <select name="slAndar" class="form-control border-input">
                                            <option value="">Não possui Andares</option>
                                            <option value="1">1 Andares</option>
                                            <option value="2">2 Andares</option>
                                            <option value="3">3 Andares</option>                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Garagem:</label>
                                        <select name="slGaragem" class="form-control border-input">
                                            <option value="">Não possui Garagens</option>
                                            <option value="1">1 Garagem</option>
                                            <option value="2">2 Garagens</option>
                                            <option value="3">3 Garagens</option>                                            
                                        </select>
                                    </div>
                                </div>                               
                                 <div class="col-md-3">
                                     <div class="form-group">
                                        <label>Area:</label>
                                        <input type="text" name="txtArea" id="txtArea" class="form-control border-input" placeholder="Area" value="">
                                        <span class="msg-error msg-area"></span>
                                    </div>
                                </div>   
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Capa:</label>
                                        <input type="file" name="imagem" id="txtThumb" class="form-control border-input">
                                        <span class="msg-error msg-thumb"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?= $resultado; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-info btn-fill btn-wd" name="btnCadastrar" value="Cadastrar Imóvel">
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

<script>
    //pegando o formulario pelo id
    var form = document.getElementById('frmImovel');

    //verificando os browsers
    if (form.addEventListener) {
        form.addEventListener("submit", validaCadastro);
    } else if (form.attachEvent) {
        form.attachEvent("onsubmit", validaCadastro);
    }

    //validando os elementos titulo e descrição
    function validaCadastro(evt) {
        var titulo = document.getElementById('txtTitulo');
        var aluguel = document.getElementById('txtValor');
        var texto = document.getElementById('txtDescricao');
        var endereco = document.getElementById('txtEndereco');
        var tipo = document.getElementById('slTipo');
        var thumb = document.getElementById('txtThumb');
        var area = document.getElementById('txtArea');


        var contErro = 0;

        caixa_titulo = document.querySelector('.msg-titulo');
        if (titulo.value == "" || titulo.value.length < 5) {
            caixa_titulo.innerHTML = "Favor preencher o titulo";
            caixa_titulo.style.display = 'block';
            contErro += 1;
        } else {
            caixa_titulo.style.display = 'none';
        }
        
        caixa_valor = document.querySelector('.msg-aluguel');
        if (aluguel.value == "") {
            caixa_valor.innerHTML = "Favor preencher o valor do Aluguel";
            caixa_valor.style.display = 'block';
            contErro += 1;
        } else {
            caixa_valor.style.display = 'none';
        }
        
        caixa_texto = document.querySelector('.msg-descricao');
        if (texto.value == "") {
            caixa_texto.innerHTML = "Favor preencher a Descricão do Imóvel";
            caixa_texto.style.display = 'block';
            contErro += 1;
        } else {
            caixa_texto.style.display = 'none';
        }
        
        caixa_endereco = document.querySelector('.msg-endereco');
        if (endereco.value == "") {
            caixa_endereco.innerHTML = "Favor preencher o endereço";
            caixa_endereco.style.display = 'block';
            contErro += 1;
        } else {
            caixa_endereco.style.display = 'none';
        }
        
        caixa_tipo = document.querySelector('.msg-tipo');
        if (tipo.value == "") {
            caixa_tipo.innerHTML = "Favor Selecione o tipo de Imóvel";
            caixa_tipo.style.display = 'block';
            contErro += 1;
        } else {
            caixa_tipo.style.display = 'none';
        }
        
        caixa_thumb = document.querySelector('.msg-thumb');
        if (thumb.value == "") {
            caixa_thumb.innerHTML = "Favor Selecione o tipo de Imóvel";
            caixa_thumb.style.display = 'block';
            contErro += 1;
        } else {
            caixa_thumb.style.display = 'none';
        }
        
        caixa_area = document.querySelector('.msg-area');
        if (area.value == "") {
            caixa_area.innerHTML = "Favor Selecione o tipo de Imóvel";
            caixa_area.style.display = 'block';
            contErro += 1;
        } else {
            caixa_area.style.display = 'none';
        }

        
        if (contErro > 0) {
            evt.preventDefault();
        }
    }
</script> 
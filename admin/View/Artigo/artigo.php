<?php
$artigoController = new ArtigoController();
$helper = new Helper();
$upload = new Upload();


$novaImagem = "";
$titulo = "";
$subtitulo = "";
$destaque = "";
$status = "";
$data_artigo;
$descricao = "";
$thumb = "";

$resultadoArtigo = "";

$btnCadastrarArt = filter_input(INPUT_POST, 'btnCadastrarArt', FILTER_SANITIZE_STRING);
if ($btnCadastrarArt):
    $artigoCad = new Artigo();
    
    $artigoCad->setTitulo(filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING));
    $artigoCad->setUrl(filter_input(INPUT_POST, 'url', FILTER_SANITIZE_STRING));    
    
    $artigoCad->setDestaque(filter_input(INPUT_POST, 'destaque', FILTER_SANITIZE_STRING));
    $artigoCad->setStatus(filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING));
    $artigoCad->setData(filter_input(INPUT_POST, 'data_artigo', FILTER_SANITIZE_STRING));   
    $artigoCad->setDescricao(filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING));
   
    
    $urlArtg = $helper->Name($artigoCad->getTitulo());
    $artigoCad->setUrl($urlArtg);  
    
    
     //upload da imagem
    $imagem = $_FILES['imagem'];
    $upload->Image($imagem);
    $nomeImagem = $upload->getResult();
    //recebendo o nome da imagem
    $artigoCad->setThumb($nomeImagem);
    
     if ($artigoController->Cadastrar($artigoCad)):
    $resultadoArtigo = '<div class="alert alert-success">
                    <button type="button" aria-hidden="true" class="close">×</button>
                    <span><b> Sucesso - </b> Artigo Cadastrado com sucesso!"</span>
                </div>';
    else:
    $resultadoArtigo = ' <div class="alert alert-warning">
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
                        <h4 class="title">Cadastra Artigos</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="" enctype="multipart/form-data" id="frmArtigo" name="frmArtigo" onSubmit="return validaCadastro();">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Titulo</label>
                                        <input type="text" name="titulo" id="titulo" class="form-control border-input" placeholder="Titulo">
                                        <span class="msg-error msg-titulo"></span>
                                    </div>
                                </div>
                            </div>
                            
                           
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">                                        
                                        <label>Artigos em Destaque:</label>
                                        <select name="destaque" class="form-control border-input">
                                            <option value="1">Não</option>
                                            <option value="2">Sim</option>
                                        </select>
                                    </div>
                                </div>  
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Status:</label>
                                        <select name="status" class="form-control border-input">
                                            <option value="1">Desativado</option>
                                            <option value="2">Ativado</option>
                                        </select>
                                    </div>
                                </div>                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data:<?php $data_artigo; ?></label>
                                        <input type="text" name="data_artigo" class="form-control border-input" placeholder="">
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descrição:</label>                                        
                                        <textarea name="descricao" id="descricao" class="form-control border-input" rows="5"></textarea>
                                        <span class="msg-error msg-descricao"></span>
                                    </div>
                                    
                                </div>
                            </div>
                                                     
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Capa:</label>
                                        <input type="file" name="imagem" id="artThumb" class="form-control border-input">
                                        <span class="msg-error msg-thumb"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?= $resultadoArtigo; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-info btn-fill btn-wd" name="btnCadastrarArt" value="Cadastrar Artigo">
                            </div>
                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <script>tinymce.init({ selector:'textarea' });</script>
  
  <script>
    
    
    //pegando o formulario pelo id
    var form = document.getElementById('frmArtigo');

    //verificando os browsers
    if (form.addEventListener) {
        form.addEventListener("submit", validaCadastro);
    } else if (form.attachEvent) {
        form.attachEvent("onsubmit", validaCadastro);
    }

    //validando os elementos titulo e descrição
    function validaCadastro(evt) {
        var titulo = document.getElementById('titulo');
        var texto = document.getElementById('descricao');
        
         var contErro = 0;
         
          caixa_titulo = document.querySelector('.msg-titulo');
        if (titulo.value == "" || titulo.value.length < 5) {
            caixa_titulo.innerHTML = "Favor preencher o titulo";
            caixa_titulo.style.display = 'block';
            contErro += 1;
        } else {
            caixa_titulo.style.display = 'none';
        }

    }
</script> 
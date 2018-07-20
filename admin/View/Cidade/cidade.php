<?php
$cidadeController = new CidadeController();
$helper = new Helper();
$resultado = "";
$titulo = "";

$btnCadastrar = filter_input(INPUT_POST, 'btnCadastrar', FILTER_SANITIZE_STRING);
if ($btnCadastrar):
    $cidade = new Cidade();    
//    //dados da categoria
    $cidade->setNome_cidade(filter_input(INPUT_POST, 'txtTitulo', FILTER_SANITIZE_STRING));    
    $urlCidade = $helper->Name($cidade->getNome_cidade());
    $cidade->setUrl_cidade($urlCidade);
    $cidade->setStatus_cidade(filter_input(INPUT_POST, 'slStatus', FILTER_SANITIZE_NUMBER_INT));
    if ($cidadeController->Cadastrar($cidade)):
    $resultado = '<div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close"></button>
            <span><b> "Sucesso - </b> Cidade cadastrada com sucesso!"</span>
        </div>';
        $insertGoTo = '?pagina=cidade';
        header("refresh:2;url={$insertGoTo}");
    else:
        $resultado = ' <div class="alert alert-warning">
            <button type="button" aria-hidden="true" class="close"></button>
            <span><b> "Error - </b> Todos os campos são obrigatórios."</span>
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
                        <h4 class="title">Cadastrar Categoria</h4>
                    </div>
                    
                    <div class="content">
                        <form method="post" action="" enctype="multipart/form-data" id="frmImovel" name="frmImovel" onSubmit="return validaCadastro();">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Titulo</label>
                                        <input type="text" name="txtTitulo" id="txtTitulo" class="form-control border-input" placeholder="Titulo">
                                        <span class="msg-error msg-titulo"></span>
                                    </div>
                                </div>                                
                                <div class="col-md-4">
                                    <div class="form-group">                                        
                                        <label>Status:</label>
                                        <select name="slStatus" id="slStatus" class="form-control border-input">
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
                                        <?= $resultado; ?>
                                    </div>
                                </div>
                            </div>                            
                            <div class="text-center">
                                <input type="submit" class="btn btn-success btn-fill btn-wd" name="btnCadastrar" value="Cadastrar">
                                <a href="?pagina=listarCidade" class="btn btn-info btn-fill btn-wd">Listar</a>
                            </div>
                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
        var status = document.getElementById('slStatus'); 
        
        var contErro = 0;

        caixa_titulo = document.querySelector('.msg-titulo');
        if (titulo.value == "" || titulo.value.length < 2) {
            caixa_titulo.innerHTML = "Favor preencher o titulo";
            caixa_titulo.style.display = 'block';
            contErro += 1;
        } else {
            caixa_titulo.style.display = 'none';
        }
        
        caixa_status = document.querySelector('.msg-status');
        if (status.value == "") {
            caixa_status.innerHTML = "Selecione o Status";
            caixa_status.style.display = 'block';
            contErro += 1;
        } else {
            caixa_status.style.display = 'none';
        }   
        
        if (contErro > 0) {
            evt.preventDefault();
        }
    }
</script> 
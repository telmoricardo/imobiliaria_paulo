<?php
$categoriaController = new CategoriaController();
$helper = new Helper();
$resultado = "";
$titulo = "";

$cod = filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT);

$btnCadastrar = filter_input(INPUT_POST, 'btnCadastrar', FILTER_SANITIZE_STRING);
if ($btnCadastrar):
    $categoria = new Categoria();    
    //dados da categoria
    $categoria->setCod_categoria(filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT));
    $categoria->setNome_categoria(filter_input(INPUT_POST, 'txtTitulo', FILTER_SANITIZE_STRING));    
    $urlCat = $helper->Name($categoria->getNome_categoria());
    $categoria->setUrl_categoria($urlCat);
    $categoria->setStatus_categoria(filter_input(INPUT_POST, 'slStatus', FILTER_SANITIZE_STRING));    
    
    if ($categoriaController->Atualizar($categoria)):
    $resultado = '<div class="alert alert-info">
                    <button type="button" aria-hidden="true" class="close"></button>
                <span><b> "Sucesso - </b> Categoria atualizada com sucesso!"</span>
        </div>';
        $insertGoTo = '?pagina=listarCategoria';
        header("refresh:2;url={$insertGoTo}");
    else:
        $resultado = ' <div class="alert alert-warning">
            <button type="button" aria-hidden="true" class="close"></button>
            <span><b> "Error - </b> Todos os campos são obrigatórios."</span>
        </div>';
    endif;    
    
     
endif;

$retornoCodCategoria = $categoriaController->retornoCodCategoria($cod);
if($retornoCodCategoria == nulll):
else:
    $titulo = $retornoCodCategoria->getNome_categoria();
    $statusCat = $retornoCodCategoria->getStatus_categoria();
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
                                        <input type="text" name="txtTitulo" id="txtTitulo" class="form-control border-input" placeholder="Titulo" value="<?= $titulo; ?>">
                                        <span class="msg-error msg-titulo"></span>
                                    </div>
                                </div>                                
                                <div class="col-md-4">
                                    <div class="form-group">                                        
                                        <label>Status:</label>
                                        <select name="slStatus" id="slStatus" class="form-control border-input">
                                            <?php
                                                $status = array('1' => 'Ativo', '2' => 'Bloqueado');                                                    
                                                foreach ($status as $key => $value):                                                      
                                                    $esseEhOStatus = $statusCat == $key;
                                                    $selecao = $esseEhOStatus ? "selected='selected'" : ''; 
                                            ?>
                                                <option value="<?= $key; ?>" <?= $selecao?>><?= $value ?></option>
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
                                        <?= $resultado; ?>
                                    </div>
                                </div>
                            </div>                            
                            <div class="text-center">
                                <input type="submit" class="btn btn-info btn-fill btn-wd" name="btnCadastrar" value="Atualizar">
                                <a href="?pagina=listarCategoria" class="btn btn-warning btn-fill btn-wd">Listar</a>
                            </div>
                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
endif;
?>
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
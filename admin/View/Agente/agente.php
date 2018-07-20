<?php
$agenteController = new AgenteController();

$nome = "";
$email = "";
$celular = "";
$telefone = "";

$resultado = "";

/* se tem btncadastrar insira os dados na classe agente */
$btnCadastrar = filter_input(INPUT_POST, 'btnCadastrar', FILTER_SANITIZE_STRING);
if ($btnCadastrar):

//instanciando o objeto
    $agente = new Agente();

    $agente->setCod(filter_input(INPUT_GET, 'cod', FILTER_SANITIZE_NUMBER_INT));
    $agente->setNome(strip_tags(filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING)));
    $agente->setEmail(strip_tags(filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_STRING)));
    $agente->setRegiao(strip_tags(filter_input(INPUT_POST, 'slRegiao', FILTER_SANITIZE_STRING)));


    if (filter_input(INPUT_POST, 'txtCelular', FILTER_SANITIZE_STRING)) {
        $agente->setCelular(strip_tags(filter_input(INPUT_POST, 'txtCelular', FILTER_SANITIZE_STRING)));
    } else {
        $agente->setCelular(NULL);
    }
    if (filter_input(INPUT_POST, 'txtTelefone', FILTER_SANITIZE_STRING)) {
        $agente->setTelefone(strip_tags(filter_input(INPUT_POST, 'txtTelefone', FILTER_SANITIZE_STRING)));
    } else {
        $agente->setTelefone(NULL);
    }
    var_dump($agente);


    if ($agenteController->Cadastrar($agente)):
        $resultado = '<div class="alert alert-success">
                    <button type="button" aria-hidden="true" class="close">×</button>
                    <span><b> Sucesso - </b> Agente Cadastrado com sucesso!"</span>
                    </div>';
    else:
        $resultado = ' <div class="alert alert-warning">
                <button type="button" aria-hidden="true" class="close">×</button>
                <span><b> Warning - </b> Erro ao cadastrar ".alert-warning"</span>
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
                        <h4 class="title">Cadastrar Agente</h4>
                    </div>
                    <div class="content">
                        <form method="post" action="" enctype="multipart/form-data" id="frmAgente" name="frmAgente" onSubmit="return validaCadastro();">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" name="txtNome" id="txtNome" class="form-control border-input" placeholder="Nome" value="<?= $nome; ?>">
                                        <span class="msg-error msg-titulo"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="txtEmail" id="txtEmail" class="form-control border-input" placeholder="E-mail" value="<?= $email; ?>">
                                        <span class="msg-error msg-email"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">                                        
                                        <label>Região:</label>
                                        <select name="slRegiao" class="form-control border-input">
                                            <option value="Águas Claras e Taguatinga">Águas Claras e Taguatinga</option>
                                            <option value="Asa Norte e demais regiões"> Asa Norte e demais regiões</option>
                                        </select>
                                    </div>
                                </div>   
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Celular:</label>
                                        <input type="text" name="txtCelular" id="txtCelular" class="form-control border-input" placeholder="Celular" value="<?= $celular; ?>">
                                        <span class="msg-error msg-aluguel"></span>
                                    </div>
                                </div>                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Telefone:</label>
                                        <input type="text" name="txtTelefone" class="form-control border-input" placeholder="Telefone" value="<?= $telefone; ?>">
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
                                <input type="submit" class="btn btn-info btn-fill btn-wd" name="btnCadastrar" value="Cadastrar Agente">
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
    var form = document.getElementById('frmAgente');

    //verificando os browsers
    if (form.addEventListener) {
        form.addEventListener("submit", validaCadastro);
    } else if (form.attachEvent) {
        form.attachEvent("onsubmit", validaCadastro);
    }

    //validando os elementos titulo e descrição
    function validaCadastro(evt) {
        var nome = document.getElementById('txtNome');
        var email = document.getElementById('txtEmail');



        var contErro = 0;

        caixa_titulo = document.querySelector('.msg-titulo');
        if (nome.value == "" || nome.value.length < 5) {
            caixa_titulo.innerHTML = "Favor preencher o Nome";
            caixa_titulo.style.display = 'block';
            contErro += 1;
        } else {
            caixa_titulo.style.display = 'none';
        }

        caixa_email = document.querySelector('.msg-email');
        if (email.value == "") {
            caixa_email.innerHTML = "Favor preencher o email";
            caixa_email.style.display = 'block';
            contErro += 1;
        } else {
            caixa_email.style.display = 'none';
        }
        if (contErro > 0) {
            evt.preventDefault();
        }
    }



</script> 
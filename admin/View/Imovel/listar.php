<?php
$imovelController = new ImovelController();
$markerController = new MarkerController();

//deletando o imovel
$del = filter_input(INPUT_GET, "del", FILTER_SANITIZE_NUMBER_INT);
if ($del):    
    $retornaImovel = $imovelController->retornaImovelCod($del);      
    //removendo as imagens na pasta upload
    $capa = "../upload/" . $retornaImovel->getThumb();
    if (file_exists($capa) && !is_dir($capa)):
        unlink($capa);
    endif;
    if ($imovelController->Excluir($del)):
        $resultado = "<div class=\"alert alert-success\">O Post </b> foi removido com sucesso</div>";
    else:
        $resultado = "<div class=\"alert alert-danger\">Erro ao remover </div>";
    endif;
endif;

/*
* Pegando o cod que esta vindo através da url active = 1
* o status vai receber o valor 2 = que é inativo
*/
$active = filter_input(INPUT_GET, "active", FILTER_SANITIZE_NUMBER_INT);
if ($active):
    //retorna o slider 
    $retornaStatus = $imovelController->retornaStatusImov($active);
    $status = 2;
    if ($imovelController->AlterarStatus($active, $status)):
        echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                alert ("O produto esta inativo!")
                </SCRIPT>';
    endif;
endif;

$inactive = filter_input(INPUT_GET, "inactive", FILTER_SANITIZE_NUMBER_INT);
if ($inactive):
    //retorna o slider 
    $retornaStatus = $imovelController->retornaStatusImov($inactive);
    $status = 1;
    if ($imovelController->AlterarStatus($inactive, $status)):
        echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
            alert ("O produto esta Ativo!")
            </SCRIPT>';
    endif;
endif;

//iniciando as paginação
if (empty($_GET['pg'])):
else:
    $pg = $_GET['pg'];
endif;
if (isset($pg)):
    $pg = $_GET['pg'];
else:
    $pg = 1;
endif;
//quantidade de postagem para visualizar por pagina
$quantidade = 10;
$inicio = ($pg * $quantidade) - $quantidade;
$listaImovel = $imovelController->ListarImovelLimite($inicio, $quantidade);

    
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Listagem de Imóveis</h4>
                    </div>
                    
                    <div class="col-md-12" style="margin: 15px 0;">
                        <form class="form-inline" method="post">
                            <div class="form-group">                                
                                <input type="text" name="txtBuscar" class="form-control" id="buscarPost" placeholder="Pesquise aqui" style="border: 2px solid #333;">
                            </div>                            
                            <input type="submit" name="btnPesquisar" class="btn btn-default" value="Clique Aqui">
                        </form>
                    </div>
                    
                    <?php
                        $pesquisar = filter_input(INPUT_POST, "txtBuscar", FILTER_SANITIZE_STRING);
                        if($pesquisar == null):
                        ?>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Capa</th>
                                <th>Titulo</th>
                                <th>Valor</th>
                                <th>Endereço</th>                           
                                <th>Status</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                                <th>Galeria</th>                                    
                                </thead>
                                <tbody>
                                    <?php
                                    if($listaImovel == null):
                                        echo 'Nesse momento não temos imoveis cadastrado';
                                    else:
                                        foreach ($listaImovel as $imov):
                                    ?>
                                    <tr>
                                        <td><?= $imov->getCod()?></td>
                                        <td> <img src="../upload/<?= $imov->getThumb()?>" width="100" alt=""/></td>
                                        <td><?= $imov->getTitulo()?></td>
                                        <td>R$ <?= number_format($imov->getValor(), 2, ',', '.')?></td>
                                        <td><?= $imov->getEndereco()?></td>                                                                  
                                        <td>
                                            <?php
                                            if ($imov->getStatus() == 2):
                                                echo "<a class='btn btn-danger' href='?pagina=listar&inactive={$imov->getCod()}'><i class='ti-na'></i></a>";

                                            else:
                                                echo "<a class='btn btn-success' href='?pagina=listar&active={$imov->getCod()}'><i class='ti-check-box'></i>";
                                            endif;
                                            ?>
                                        </td>
                                        <td>
                                            <a href="painel.php?pagina=atualizar&cod=<?= $imov->getCod()?>" class="btn btn-icon btn-primary" title="Editar Imóvel"><i class="ti-pencil-alt2"></i></a>
                                        </td>
                                        <td>
                                            <a href="painel.php?pagina=listar&del=<?= $imov->getCod()?>" class="btn btn-icon btn-danger" onclick="return confirm('Deseja realmente excluir o cliente <?= $imov->getTitulo(); ?>');" title="Excluir Imóvel"><i class="ti-close"></i></a>
                                        </td>
                                        <td>
                                            <a href="painel.php?pagina=galeria&cod=<?= $imov->getCod()?>" class="btn btn-icon btn-warning" title="Galeria Imóvel"><i class="ti-camera"></i></a>
                                        </td>                                            

                                    </tr>

                                    <?php
                                        endforeach;
                                        endif;
                                    ?>
                                </tbody>

                            </table>

                        </div>
                    
                    <nav aria-label="Page navigation">
                            <?php
                            $totalRegistros = $imovelController->RetornaQtdImovel();
                            $totalRegistros;
                            if ($totalRegistros <= $quantidade):

                            else:
                                $paginas = ceil($totalRegistros / $quantidade);
                                $links = 5;

                                if (isset($i)):
                                else:
                                    $i = '1';
                                endif;
                                ?>
                                <!-- ativação da paginação-->
                                <style>
                                <?php
                                if (isset($_GET['pg'])):
                                    $num_pg = $_GET['pg'];
                                endif;
                                ?>
                                    .pagination a.active<?php echo $num_pg; ?>{background-color: #eb5e28; color: #fff; }
                                </style>
                                <ul class="pagination">
                                    <li><a href="painel.php?pagina=listar&pg=1" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                    <?php
                                    if (isset($_GET['pg'])):
                                        $num_pg = $_GET['pg'];
                                    endif;

                                    for ($i = $pg - $links; $i <= $pg - 1; $i++):
                                        if ($i <= 0):
                                        else:
                                            ?>                            
                                            <li class="active<?= $i; ?>"><a href="painel.php?pagina=listar&pg=<?= $i; ?>"><?= $i; ?> <span class="sr-only">(current)</span></a></li>
                                        <?php
                                        endif;
                                    endfor;
                                    ?>       
                                    <li><a class="active<?= $i; ?>" href="painel.php?pagina=listar&pg=<?= $i; ?>"><?= $pg; ?></a></li>
                                    <?php
                                    for ($i = $pg + 1; $i <= $pg = $links; $i++):
                                        if ($i > $paginas):
                                        else:
                                            ?>
                                            <li><a class="active<?= $i; ?>" href="painel.php?pagina=listar&pg=<?= $i; ?>"><?= $i; ?></a></li>
                                        <?php
                                        endif;
                                    endfor;
                                    ?>                    
                                    <li>
                                        <a href="painel.php?pagina=listar&pg=<?= $paginas; ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            <?php
                            endif;
                        ?>

                    </nav>                            
                            
                    <?php
                        else:
                            $imoveisPesquisado = $imovelController->BuscarImovel($pesquisar);                            
                                ?>
                                <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <th>ID</th>
                                    <th>Capa</th>
                                    <th>Titulo</th>
                                    <th>Valor</th>
                                    <th>Endereço</th>                           
                                    <th>Status</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                    <th>Galeria</th>                                    
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($imoveisPesquisado == null):
                                            echo '<th colspan="10">Não existe imovel cadastrado</th>';                            
                                        else:
                                            foreach ($imoveisPesquisado as $imov):
                                        ?>
                                        <tr>
                                            <td><?= $imov->getCod()?></td>
                                            <td> <img src="../upload/<?= $imov->getThumb()?>" width="100" alt=""/></td>
                                            <td><?= $imov->getTitulo()?></td>
                                            <td>R$ <?= number_format($imov->getValor(), 2, ',', '.')?></td>
                                            <td><?= $imov->getEndereco()?></td>                                                                  
                                            <td>
                                                <?php
                                                if ($imov->getStatus() == 1):
                                                    echo "<a class='btn btn-success' href='?pagina=listar&active={$imov->getCod()}'><i class='ti-check-box'></i>";
                                                else:
                                                    echo "<a class='btn btn-danger' href='?pagina=listar&inactive={$imov->getCod()}'><i class='ti-na'></i></a>";
                                                endif;
                                                ?>
                                            </td>
                                            <td>
                                                <a href="painel.php?pagina=atualizar&cod=<?= $imov->getCod()?>" class="btn btn-icon btn-primary" title="Editar Imóvel"><i class="ti-pencil-alt2"></i></a>
                                            </td>
                                            <td>
                                                <a href="painel.php?pagina=listar&del=<?= $imov->getCod()?>" class="btn btn-icon btn-danger" onclick="return confirm('Deseja realmente excluir o cliente <?= $imov->getTitulo(); ?>');" title="Excluir Imóvel"><i class="ti-close"></i></a>
                                            </td>
                                            <td>
                                                <a href="painel.php?pagina=galeria&cod=<?= $imov->getCod()?>" class="btn btn-icon btn-warning" title="Galeria Imóvel"><i class="ti-camera"></i></a>
                                            </td>                                            
                                        </tr>

                                        <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        <?php
                            endif;
                        ?>
                </div>
            </div>            
        </div>
    </div>
    
    
</div>


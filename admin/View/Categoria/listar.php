<?php
$categoriaController = new CategoriaController();

//deletando a categoria
$del = filter_input(INPUT_GET, "del", FILTER_SANITIZE_NUMBER_INT);
if ($del):
    if ($categoriaController->Excluir($del)):
        $resultado = "<div class=\"alert alert-success\">A categoria </b> foi removida com sucesso</div>";
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
    //retorna a categoria 
    $retornaStatus = $categoriaController->retornaStatusCat($active);
    $status = 2;
    if ($categoriaController->AlterarStatus($active, $status)):
        echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                alert ("A categoria está inativa!")
                </SCRIPT>';
    endif;
endif;
$inactive = filter_input(INPUT_GET, "inactive", FILTER_SANITIZE_NUMBER_INT);
if ($inactive):
    //retorna categoria
    $retornaStatus = $categoriaController->retornaStatusCat($inactive);
    $status = 1;
    if ($categoriaController->AlterarStatus($inactive, $status)):
        echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
            alert ("A categoria está Ativa!")
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
$listarCategorias = $categoriaController->ListarCatLimit($inicio, $quantidade);    
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Listagem de Categoria</h4>
                    </div>                    
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                    <th>Cod</th>
                                    <th>Nome</th>
                                    <th>Status</th>                                   
                                    <th>Editar</th>
                                    <th>Excluir</th>                                    
                                </thead>
                                <tbody>
                                    <?php
                                    if($listarCategorias == null):
                                        echo 'Nesse momento não temos categorias cadastrado';
                                    else:
                                        foreach ($listarCategorias as $cat):
                                    ?>
                                    <tr>
                                        <td><?= $cat->getCod_categoria(); ?></td>                                            
                                        <td><?= $cat->getNome_categoria(); ?></td>                                                                                                        
                                        <td>
                                            <?php
                                            if ($cat->getStatus_categoria() == 2):
                                                echo "<a class='btn btn-danger' title='Bloquear' href='?pagina=listarCategoria&inactive={$cat->getCod_categoria()}'><i class='ti-na'></i></a>";
                                            else:
                                                echo "<a class='btn btn-success' title='Ativar' href='?pagina=listarCategoria&active={$cat->getCod_categoria()}'><i class='ti-check-box'></i>";
                                            endif;
                                            ?>
                                        </td>
                                        <td>
                                            <a href="painel.php?pagina=updateCategoria&cod=<?= $cat->getCod_categoria() ?>" class="btn btn-icon btn-primary" title="Editar"><i class="ti-pencil-alt2"></i></a>
                                        </td>
                                        <td>
                                            <a href="painel.php?pagina=listarCategoria&del=<?= $cat->getCod_categoria() ?>" class="btn btn-icon btn-danger" onclick="return confirm('Deseja realmente excluir a categoria <?= $cat->getNome_categoria(); ?>');" title="Excluir"><i class="ti-close"></i></a>
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
                        $totalRegistros = $categoriaController->RetornaQtdCategoria();
                        $totalRegistros;
                        if ($totalRegistros <= $quantidade):
                        else:
                            $paginas = ceil($totalRegistros / $quantidade);
                            $links = 3;
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
                    .pagination a.active <?php echo $num_pg; ?>{background-color: #eb5e28; color: #fff; }
                    </style>
                    
                    <ul class="pagination">
                        <li><a href="painel.php?pagina=listarCategoria&pg=1" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                        <?php
                            if (isset($_GET['pg'])):
                                $num_pg = $_GET['pg'];
                            endif;

                            for ($i = $pg - $links; $i <= $pg - 1; $i++):
                                if ($i <= 0):
                                else:
                        ?>                            
                        <li class="active<?= $i; ?>"><a href="painel.php?pagina=listarCategoria&pg=<?= $i; ?>"><?= $i; ?> <span class="sr-only">(current)</span></a></li>
                        <?php
                                endif;
                            endfor;
                        ?>       
                        <li><a class="active<?= $i; ?>" href="painel.php?pagina=listarCategoria&pg=<?= $i; ?>"><?= $pg; ?></a></li>
                        <?php
                            for ($i = $pg + 1; $i <= $pg = $links; $i++):
                                if ($i > $paginas):
                                else:
                        ?>
                        <li><a class="active<?= $i; ?>" href="painel.php?pagina=listarCategoria&pg=<?= $i; ?>"><?= $i; ?></a></li>
                            <?php
                                endif;
                            endfor;
                        ?>                    
                        <li>
                            <a href="painel.php?pagina=listarCategoria&pg=<?= $paginas; ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                    <?php
                        endif;
                    ?>

                    </nav>
                    
                </div>
            </div>


            
        </div>
    </div>
    
    
</div>


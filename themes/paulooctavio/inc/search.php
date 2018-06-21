<header class="pesquisa container">

    <div class="box_pesquisa content">             
        <form class="form_search_imovel" name="cadastro" method="post" action="<?= HOME?>/imovel">
            <div class="column column-3">
                <label>QUAL TIPO DE IMÓVEL DESEJA ALUGAR?</label>

                <?php
                $tipoController = new TipoController();
                $listarTipos = $tipoController->ListarTipo();

                if (isset($_POST['slTipo'])):
                    $_SESSION['tipo'] = filter_input(INPUT_POST, 'slTipo', FILTER_SANITIZE_NUMBER_INT);
                endif;

                $s = ' selected="selected" ';
                $tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : '';
                ?>
                <select id="slTipo" name="slTipo" class="selecao" id="slTipo">
                    <option value="">Selecione o Tipo de Imóvel</option> <i class="fa fa-caret-down"></i>
                    <?php
                    foreach ($listarTipos as $tipos):
                        ?>
                        <option <?php echo $tipo == $tipos->getCod_tipo() ? $s : ''; ?>value="<?= $tipos->getCod_tipo(); ?>"><?= $tipos->getNome_tipo(); ?></option>
                        <?php
                    endforeach;
                    ?>
                </select>  
            </div>

            <div class="column column-2">
                <label>LOCAL ?</label>
                <?php
                $cidadeController = new CidadeController();
                $listarCidades = $cidadeController->ListarCidade();

                if (isset($_POST['slLocal'])):
                    $_SESSION['local'] = filter_input(INPUT_POST, 'slLocal', FILTER_SANITIZE_STRING);
                endif;

                $s = ' selected="selected" ';
                $local = isset($_SESSION['local']) ? $_SESSION['local'] : '';
                ?>
                <select id="slLocal" name="slLocal">
                    <option value="">Selecione o Local</option> <i class="fa fa-caret-down"></i>
                    <?php
                    foreach ($listarCidades as $cidade):
                        ?>
                        <option <?php echo $local == $cidade->getCod() ? $s : ''; ?>value="<?= $cidade->getCod(); ?>"><?= $cidade->getNome(); ?></option>
                        <?php
                    endforeach;
                    ?>
                </select>
            </div>

            <div class="column column-2">
                <label>QUANTOS QUARTOS ?</label>
                <?php
                if (isset($_POST['slQuarto'])):
                    $_SESSION['quarto'] = filter_input(INPUT_POST, 'slQuarto', FILTER_SANITIZE_STRING);
                endif;

                $s = ' selected="selected" ';
                $quarto = isset($_SESSION['quarto']) ? $_SESSION['quarto'] : '';
                ?>
                <select id="slQuarto" name="slQuarto" id="slQuarto">
                    <option value="">Quartos...</option>   
                    <option <?php echo $quarto == '1' ? $s : ''; ?>value="1">1 Quarto</option>
                    <option <?php echo $quarto == '2' ? $s : ''; ?>value="2">2 Quartos</option>
                    <option <?php echo $quarto == '3' ? $s : ''; ?>value="3">3 Quartos</option>
                    <option <?php echo $quarto == '4' ? $s : ''; ?>value="4">4 Quartos</option>
                </select>
            </div>
            <div class="column column-2">
                <label>VAGAS DE GARAGEM ?</label>                        

                <?php
                if (isset($_POST['slVaga'])):
                    $_SESSION['vagas'] = filter_input(INPUT_POST, 'slVaga', FILTER_SANITIZE_STRING);
                endif;

                $s = ' selected="selected" ';
                $vagas = isset($_SESSION['vagas']) ? $_SESSION['vagas'] : '';
                ?>
                <select id="slVaga" name="slVaga">
                    <option value="">Vagas...</option>   
                    <option <?php echo $vagas == '1' ? $s : ''; ?>value="1">1 Vaga</option>
                    <option <?php echo $vagas == '2' ? $s : ''; ?>value="2">2 Vagas</option>
                    <option <?php echo $vagas == '3' ? $s : ''; ?>value="3">3 Vagas</option>

                </select>
            </div>
            <div class="column column-2">                           
                <input type="submit" class="btn_search_imovel" name="submit" value="BUSCAR">
            </div>

        </form>
    </div>
</header>
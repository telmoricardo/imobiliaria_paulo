<?php
$carrinho = new Carrinho();
$imovelController = new ImovelController();
$helper = new Helper();
//session_destroy();

//adicionando no carrinho
if (isset($Url[1]) && $Url[1] == 'add' && isset($Url[2]) && $Url[2] != '0'):
    $id = (int) $Url[2];
    $carrinho->adicionarAoCarrinho($id);
    header("Location: " . HOME . "/favoritos");
endif;
//limpando um item do carrinho
if (isset($Url[1]) && $Url[1] == 'del' && isset($Url[2]) && $Url[2] != '0'):
    $id = (int) $Url[2];
    $carrinho->removerDoCarrinho($id);
    header("Location: " . HOME . "/favoritos");
endif;

//LIMPAR SESSÃO SE APARCER CARRINHO COM VALOR 0
if (isset($_SESSION['carrinho'][0])):
    unset($_SESSION['carrinho'][0]);
endif;

$produtosNoCarrinho = $carrinho->pegarProdutosDoCarrinho();
?>

<div class="container bg-body">
    <section class="content meus_favoritos">
        <h1>Meus Favoritos</h1>
        <?php
        if ($produtosNoCarrinho == null):
            echo '<article class="imoveis_favorites">';
            echo '<h1 class="txt_imoveis_favoritos">Nenhum imóvel foi favoritado.</h1>';
            echo '';
            echo '</article>';
        else:
            foreach ($produtosNoCarrinho as $produtoId => $quantidade):
                $produtoCarrinho = $imovelController->retornaImovelCod($produtoId);
                ?>                    
                <article class="imoveis_favoritos">
                    <a href="<?= HOME;?>/single/<?= $produtoCarrinho->getUrl(); ?>">
                        <div class="thumb_favoritos">
                            <img alt="<?= $produtoCarrinho->getTitulo();?>" alt="<?= $produtoCarrinho->getTitulo();?>" src="<?= HOME; ?>/upload/<?= $produtoCarrinho->getThumb(); ?>" alt=""/> 
                        </div>            
                        <h1 class="txt_imoveis_favoritos"><?= $helper->limitarTexto($produtoCarrinho->getTitulo(), 25); ?></h1>
                    </a>  

                    <div class="icon_favorites">
                        <a href="<?= HOME; ?>/favoritos/del/<?= $produtoCarrinho->getCod(); ?>" title="Excluir Favorito"><i class="fas fa-minus-circle"></i></a>
                    </div>
                </article>

                <?php
            endforeach;
        endif;
        ?>
    </section>
    <div class="clear"></div>
</div>
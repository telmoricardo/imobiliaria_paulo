$(document).ready(function () {

    var urlpost = 'filtro/carregarImoveis.php';

    $.ajaxSetup({
        url: urlpost,
        type: 'POST',
        beforeSend: '',
        error: ''
    });

    var loadler = $('.lendoArtigos');
    var listler = $('#box_thumb_destaques');
    var loadmore = $('.j_read');

    //limpando a lista de imoveis
    listler.empty();
    loadmore.hide();

    function carregarImoveis(instrucoes) {
        $.ajax({
            data: instrucoes,
            beforeSend: '',
            error: '',
            success: function (leitura) {
                if (leitura != '3') {
                    listler.append(leitura);
                    loadler.delay(300).fadeOut("slow");
                    loadmore.delay(1000).fadeIn("slow");
                } else {
                    loadmore.text("Não existe mais imóveis. Recarregar página").click(function () {
                        location.reload();
                    });
                    loadler.delay(300).fadeOut("slow");
                }
            }
        });
    }//finaliza a funçao
    
    carregarImoveis('acao=ler&offset=0&limit=6');
    
    var offset = 6;
    
    loadmore.click(function(){
        loadler.fadeIn("fast");
        carregarImoveis('acao=ler&offset='+offset+'&limit=6');
        offset += 6;
    });
});
$(document).ready(function () {

    var urlpost = '../filtro/carregarCategorias.php';

    $.ajaxSetup({
        url: urlpost,
        type: 'POST',
        beforeSend: '',
        error: ''
    });

//    var loadler = $('.lendoImoveis');
    var listler = $('#box_imoveis_category');
    var loadmore = $('.j_load_mais');

    //limpando a lista de imoveis
    listler.empty();
    loadmore.hide();
    
   
    $.ajax({
        data: 'acao=ler&offset=0&limit=2',
        beforeSend: '',
        error: '',
        success: function (leitura) {
            alert(leitura);
        }
    });

});
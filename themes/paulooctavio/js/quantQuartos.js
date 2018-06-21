$(document).ready(function () {
    $('#slTipo').on('click', function () {
        //pegando o valor do tipo do imovel
        var dados = $('#slTipo option:selected').val();
        
        //se valor do tipo for igual 1
        if (dados == 1) {
            $("#slQuarto").html('<option value="0">Aguarde Carregando...</option>');
            
            //variavel tipo receber o valor do #slTipo
            var tipo = $("#slTipo").val();    
            
            $.post("filtro/quarto.php", {tipo: tipo}, function ($pegar_tipo) {
                complete: $("#slQuarto").html($pegar_tipo);
            });

        } else {
            $("#slQuarto").html('<option value="0">Quartos...</option>');
        }
    });
});

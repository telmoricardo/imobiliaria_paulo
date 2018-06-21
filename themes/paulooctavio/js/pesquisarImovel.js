$(function () {
    
    debuga = $('.resposta');
    enviar = $('form[name="cadastro"]');
    action = 'filtro/processa.php';
    
//    enviar.submit(function(){
//        var tipo = $('input[name="slTipo"]').val();
//        var cidade = $('input[name="slLocal"]').val();
//        
//        $.post(action,{tipo:tipo,cidade:cidade}, function(valores){
//           alert(valores); 
//        });
//    });
    
    enviar.submit(function(){       
        
        var dados = $(this).serialize();
        
        $.ajax({
            
            url: action,
            type: 'POST',
            dataType: 'html',
            data: dados,
            success: function(data){
//                $('.destaque').show();
                $('#resultado').html(data);
                window.location.href('imovel');
               
            }
            
        });
        
        //não faz reload
        return false;
        
    });
    
//    ///disparar o formulario
////    $('form').trigger('submit');
});



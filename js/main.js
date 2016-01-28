/*$(function()){

});*/

//minha função de div expansível
function toggleDiv(divid){
    var h = (window.innerHeight / 2) + "px";
  if(document.getElementById(divid).style.height == h){
    document.getElementById(divid).style.height = '0px';
  }else{
    document.getElementById(divid).style.height = h;
  }
}

function refleshIMG(){
    //alert('acerto viadooooooo');
     $.ajax({
                        type: "GET",
                    // url para o arquivo json.php
                        url : "src/Pages/listarFotos.php",
                    // dataType json
                        data: {ativ: 1},
                    // função para de sucesso
                        success : function(data){
                            $('#uploads').html(data);
                            /*var results = jQuery.parseJSON(data);
                        // executo este laço para ecessar os itens do objeto javaScript
                            for($i=0; $i < results.length; $i++){
                                $('#uploads').append('<span>' + results[$i] + '</span>');
                            }//fim do laço*/
                        }
                    });//termina o ajax
}
// preenche o campo marcas com consulta mysql

//quantidade de caracteres que dispara
var MIN_LENGTH = 1;

$( document ).ready(function() {
    //evento keyup dentro do target
	$("#keyword").keyup(function() {
        //poe o valor do target num variavel
		var keyword = $("#keyword").val();
        //if vefifica quantidade de caracteres
		if (keyword.length >= MIN_LENGTH) {
            //aqui o arquivo php é acessado passando valores via get
			$.get( "pluguins/autocomplete/autocomplete.php", { keyword: keyword } )
            //aqui os valores são recuperados do php
			.done(function( data ) {
                //os valores são zerados
				$('#results').html('');
                //desencripta o formato json
				var results = jQuery.parseJSON(data);
                //lopping para inserir novos valores
				$(results).each(function(key, value) {
                    //novos valores sendo impressos
					$('#results').append('<div class="item">' + value + '</div>');
				})

                //verifica que clicou em um valor
			    $('.item').click(function() {
                    //insere o valor clicado em uma variavel
			    	var text = $(this).html();
                    //insere o valor da variavle no input
			    	$('#keyword').val(text);
                    //envia esse valor para o php
			        //$.get( "includes/autocomplete.php", { modelo: text } )
                    //aqui os valores são recuperados do php
                    /*
                    .done(function ( data ) {
                        //desencripta o formato json
                        var results = jQuery.parseJSON(data);
                        //lopping para inserir novos valores
                        $(results).each(function(key, value) {
                            //novos valores sendo impressos
                            $('#modelo').append('<option>' + value + '</option>');
                        })
                    })*/
                    $.ajax({
                        type: "GET",
                    // url para o arquivo json.php
                        url : "pluguins/autocomplete/autocomplete.php",
                    // dataType json
                        data: {modelo: text},
                    // função para de sucesso
                        success : function(data){
                            $('#modelo').html('');
                            var results = jQuery.parseJSON(data);
                        // executo este laço para ecessar os itens do objeto javaScript
                            for($i=0; $i < results.length; $i++){
                                $('#model').append('<option value="' + results[$i] + '">' + results[$i] + '</option>');
                            }//fim do laço
                        }
                    });//termina o ajax
			    })

			});
		} else {
            //aqui um valor em branco é
            //enviado para o html porque
            //não disparou o if
			$('#results').html('');
		}
	});

    //aqui ele some com o autocomplete todo
    //utiliza blur quando perde o foco
    $("#keyword").blur(function(){
    		$("#results").fadeOut(500);
    	})
        .focus(function() {		
    	    $("#results").show();
    	});

});

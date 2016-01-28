/*
 * Date: 07/09/15
 * Time: 19:17
 * Created by

 #######                            ####### #     #
 #     #                            #     # #     #
 #     # ###### ####    #### ####   #     # #     #
 #     # #   ## #  ##      # #  ##  #     # #     #
 ####### ###### #   ## ##### #   ## ####### #     #
 #    #  #      #   ## #   # #   ## #        #   ##
 #     # ###    #   ## ##### #   ## #         #### 

https://github.com/renanpantoja
*/

//pega um numero aleatório entre 0 e 15
aleat = Math.floor(Math.random() * 15 )
	
//pega o tamanho da tela e armazena na variavel
var width = window.innerWidth;

		function muda() {
			
			if (width <= 657){ 
			document.getElementById("back").style.backgroundImage = "url('images/wall/bgmobile.jpg')";
			} else {
			document.getElementById("back").style.backgroundImage = "url('images/wall/bg"+aleat+".jpg')";
			}
		}
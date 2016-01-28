function focusButtom(){
				 
var idm = window.location;
	idm = idm.toString()
	idm = idm.substr(50,3);
					
	if (idm != "ind") {
							
        document.getElementById(idm).className = "current_page_item";
        document.getElementById("ind").className = "fora";
		//alert(idm);
   	} else {
		document.getElementById("ind").className = "current_page_item";
	}
}
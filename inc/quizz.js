	function checkq1(reponse){
			//var ans = $('input:radio[name=q]:checked').val();
			var radios = document.getElementsByName("q");
	for(var i = 0; i < radios.length; i++) {
			if(radios[i].checked) ans = radios[i].value;   
			}

			
		console.log("BN: " + bonneReponse);
			if (ans == reponse) {
			console.log("true");
			$('#check').attr("href", "#correct"); 
			} else {
			$('#check').attr("href", "#incorrect"); 
			}
			}
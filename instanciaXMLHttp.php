<?php



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<input type="text" name="" id="campoNome" placeholder="nome aqui">
	<button onclick="mostrarNome()">click</button>
	<input type="text" name="" id="recebeCampo" placeholder="aqui vai mudar">



	<script type="text/javascript">
		

	function mostrarNome(){
		let nome = document.getElementById('campoNome').value;
		
		document.getElementById("recebeCampo").value = nome; 

	}
		

		/* retorna arquivo txt
		function reqListener(){
			console.log(this.responseText);
		}	

		var oReq = new XMLHttpRequest();
		oReq.onload = reqListener;
		oReq.open("get", "arquivo.txt", true);
		oReq.send();

		*/
	</script>

</body>
</html>
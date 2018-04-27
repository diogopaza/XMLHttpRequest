<?php



?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<script type="text/javascript">
		
		function reqListener(){
			console.log(this.responseText);
		}	

		var oReq = new XMLHttpRequest();
		oReq.onload = reqListener;
		oReq.open("get", "arquivo.txt", true);
		oReq.send();


	</script>

</body>
</html>
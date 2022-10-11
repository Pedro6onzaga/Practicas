<html>
<body>
<?php
	$diametro = $_GET['diam'];
	$altura = $_GET['altu'];
	$radio = $diametro/2;
	$Pi = 3.141593;
	$volumen = $Pi*$radio*$altura;
	echo"<br/>  El volumen del cilindro es de". $volumen. "metros cubicos";
?>

</body>
</html>
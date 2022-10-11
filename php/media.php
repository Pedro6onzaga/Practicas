<html>
<body>
<?php
	$precio1 = $_GET['precio1'];
	$precio2 = $_GET['precio2'];
	$precio3 = $_GET['precio3'];
$media = ($precio1+$precio2+$precio3)/3;
echo"<br/> DATOS RECIBIDOS";
echo"<br/> Precio producto establecimiento 1:".$precio1. " euros";
echo"<br/> Precio producto establecimiento 1:".$precio2. " euros";
echo"<br/> Precio producto establecimiento 1:".$precio3. " euros <br/>";
echo"<br/> El precio medio del producto es de". $media. " euros";

?>

</body>
</html>

<html>
    <body>
    <?php
        $nombre = $_GET['nombre'];
        $primerape= $_GET['papellido'];
        $segundoape= $_GET['sapellido'];
        $dia= $_GET['dia'];
        $mes= $_GET['mes'];
        $ano= $_GET['ano'];
        $sexo= $_GET['sexo'];
        $estado= $_GET['estado'];
        echo"DATOS RECIBIDOS </br>";
        echo "Tu CURP ES: </br>";
        echo "Nombre: $nombre </br>";
        echo "Primer apellido: $primerape </br>";
        echo "Segundo apellido: $segundoape </br>";
        echo "Día de nacimiento: $dia </br>";
        echo "Mes de nacimiento: $mes </br>";
        echo "Año de nacimiento: $ano </br>";
        echo "Sexo: $sexo </br>";
        echo "Estado: $estado </br>";
    ?>
</body>
</html>
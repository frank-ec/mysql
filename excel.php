<?php 

// Base  autos
// Tabla iventario
// require("config/datos_conexion.php");

$servidor = 'localhost';
$usuario = 'root';
$clave = '';
$base = 'autos';

// Instanciar la clase PDO
try{
    $dsn = "mysql:host=$servidor;dbname=$base";
    $pdo = new PDO($dsn, $usuario, $clave );
    $pdo->exec("SET CHARACTER SET UTF8");
}catch(PDOException $error){
    exit ($error->getMessage());
}


// $consulta = "SET lc_time_names = 'es_ES'";
$consulta = "SELECT
                nombre_auto, id_marca,  modelo, km_auto, descripcion_auto, precio, fecha, marca, pais
             FROM 
                inventario, marcas
             WHERE
                inventario.id_marca = id";
			 
$declaracion = $pdo->prepare($consulta);
$declaracion->execute() or die (implode('>>', $declaracion->errorInfo()));

$autos = $declaracion->fetchAll(PDO::FETCH_ASSOC);
 header('Content-type: application/vnd.ms-excel;  charset="UTF-8"');
 header('Content-Disposition: attachment; filename=Expedientes_Ingresados.xls');
 $encabezado = false;

 $filaInicio = 3;
 $filaUltima = $declaracion->rowCount()+2;

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>


<?php 	if($declaracion->rowCount() >0): ?>
	<table border="1">
		<?php foreach($autos as $auto): ?> 
			<?php if(!$encabezado): ?>	
			<tr>
            <th colspan="9">Mi inventario</th>
            </tr>
            <tr>
            	<th><?= implode('</th><th>',array_keys($auto)) ?></th>
				<?php $encabezado = true; ?>
			</tr>
			<?php endif ?>
			<tr>
                <td><?= $auto['nombre_auto']?> </td>
                <td><?= $auto['id_marca']?> </td>
               	<td><?= $auto['modelo']?> </td>
                <td><?= $auto['km_auto']?> </td>
                <td><?= $auto['descripcion_auto']?> </td>
                <td><?= $auto['precio']?> </td>
                <td><?= $auto['fecha']?> </td>
                <td><?= $auto['marca']?> </td>
                <td><?= $auto['pais']?> </td>
			</tr>
		<?php endforeach ?> 
			<tr>	
				<th> Total </th>
				<td><?= "=SUMA(F$filaInicio:F$filaUltima)" ?></td>
			</tr>
<?php 	endif?>





<?php  $base = null; ?>
</body>
</html>

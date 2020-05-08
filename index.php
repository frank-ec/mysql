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

// Insertando usando variables 
$consulta = "INSERT INTO 
                inventario (nombre_auto, modelo, km_auto, descripcion_auto, precio, fecha)
                VALUES
                (:nombre_auto, :modelo, :km_auto, :descripcion_auto, :precio, NOW())";

$declaracion = $pdo->prepare($consulta);

$auto_id = 30;
$nombre_auto = 'Pikanto Ñandú';
$modelo = 2019;
$km_auto = 100000; 
$descripcion_auto = ' Update Comodo,  poco combustible';
$precio = 20000; 

$declaracion->bindParam(':nombre_auto', $nombre_auto);
$declaracion->bindParam(':modelo', $modelo);
$declaracion->bindParam(':km_auto', $km_auto);
$declaracion->bindParam(':descripcion_auto', $descripcion_auto);
$declaracion->bindParam(':precio', $precio);

$declaracion->execute();
// exit('Datos insertados .. ');


echo '<hr>';

// Extrayendo datos 

$consulta = "SELECT
            nombre_auto, id_marca,  modelo, km_auto, descripcion_auto, precio, fecha, marca, pais
            FROM 
            inventario, marcas
            WHERE
            inventario.id_marca = id";

$declaracion = $pdo->prepare($consulta);
$declaracion->execute();
// Modo objeto FETCH_OBJ
echo $declaracion->rowCount();

if($declaracion->rowCount() >0){
    // $todos  = $declaracion->fetchAll(PDO::FETCH_OBJ);

    while($fila = $declaracion->fetch(PDO::FETCH_OBJ)){
        echo $fila->nombre_auto.'<br>';
        echo $fila->marca.'<br>';
        echo $fila->modelo.'<br>';
        echo $fila->fecha.'<br>';
        echo '<hr>';
    }

}else {

    exit('No existen datos en la consulta ');
}

// Cerrar y liberar datos

$pdo = null;
// unset($pdo);


/* Array asociativo FETCH_ASSOC
if($declaracion->rowCount() >0){
    while($fila = $declaracion->fetch(PDO::FETCH_ASSOC)){
        echo $fila['nombre_auto'].'<br>';
        echo $fila['marca'].'<br>';
        echo $fila['modelo'].'<br>';
        echo $fila['fecha'].'<br>';
        echo '<hr>';
    }
}else {

    exit('No existen datos en la consulta ');
}
*/ 


/* Array numerico FETCH_NUM
if($declaracion->rowCount() >0){
    while($fila = $declaracion->fetch(PDO::FETCH_NUM)){
        echo $fila[0].'<br>';
        echo $fila[1].'<br>';
        echo $fila[2].'<br>';
        echo $fila[3].'<br>';
        echo '<hr>';
    }
}else {

    exit('No existen datos en la consulta ');
}
*/



// Ya no es necesario limpiar los datos con bindParam



/* Insertar utilizando el numero de posición 
$consulta = "INSERT INTO 
                inventario (nombre_auto, modelo, km_auto, descripcion_auto, precio, fecha)
                VALUES
                (?, ?, ?, ?, ?, NOW())";

$declaracion = $pdo->prepare($consulta);

$auto_id = 30;
$nombre_auto = 'Pikanto Ñandú';
$modelo = 2019;
$km_auto = 100000; 
$descripcion_auto = ' Update Comodo,  poco combustible';
$precio = 2000; 

$declaracion->bindParam(1, $nombre_auto);
$declaracion->bindParam(2, $modelo);
$declaracion->bindParam(3, $km_auto);
$declaracion->bindParam(4, $descripcion_auto);
$declaracion->bindParam(5, $precio);

$declaracion->execute();
exit('Datos insertados .. ');

*/

?>

<pre>
<?php // print_r($todos); ?>
</pre>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 
// Base  autos
// Tabla iventario
// require("config/datos_conexion.php");
/* mysqli forma 1
$servidor = 'localhost';
$usuario = 'root';
$clave = '';
$base = 'autos';

if (mysqli_connect ($servidor, $usuario, $clave, $base)){
    exit ('Conexion exitosa a dB >>>' . $base);
}else {
    exit ('Falló al intentar conectar a la DB >>>' . $base);
}; 
*/ 

// mysqli forma 2
$servidor = 'localhost';
$usuario = 'root';
$clave = '';
$base = 'autos';
$conexion = mysqli_connect ($servidor, $usuario, $clave, $base) or die(mysqli_connect_error());
mysqli_set_charset($conexion,"utf8");  

$auto_id = 30;
$nombre_auto = 'Pikanto Sport GLS';
$marca_auto = 'FORD ñandú';
$modelo = 2019;
$km_auto = 100000; 
$descripcion_auto = ' Update Comodo,  poco combustible';
$precio = 2000; 

// Evitar iyección SQL
$limpio_auto_id = mysqli_real_escape_string($conexion, $auto_id );
$limpio_nombre_auto = mysqli_real_escape_string($conexion, $nombre_auto ) ;

/* Plantilla para insersión 
$consulta = "INSERT INTO 
              inventario (nombre_auto, marca_auto, modelo, km_auto, descripcion_auto, precio, fecha)
             VALUES
              ('$limpio_nombre_auto', '$marca_auto', $modelo, $km_auto, '$descripcion_auto', $precio, NOW())";
*/

/*Plantilla para actualización
$consulta = "UPDATE  
             inventario
             SET
             nombre_auto = '$limpio_nombre_auto', 
             marca_auto = '$marca_auto',
             modelo = $modelo,
             km_auto = $km_auto, 
             descripcion_auto = '$descripcion_auto',
             precio = $precio,
             fecha = NOW()
             WHERE
             auto_id = $limpio_auto_id";
 */            

/* Plantilla para borrado
$consulta = "DELETE FROM   
             inventario
             WHERE
             auto_id = $limpio_auto_id";             

// mysqli_query($conexion,"SET CHARACTER SET 'utf8'"); 
mysqli_query($conexion, $consulta) or die( mysqli_error($conexion)) ;
exit ('Datos insertados, actualizados o borrados correctamente');
*/

// Plantilla para consulta 
$consulta = "SELECT
                nombre_auto, id_marca,  modelo, km_auto, descripcion_auto, precio, fecha, marca, pais
             FROM 
              inventario, marcas
             WHERE
             inventario.id_marca = id ";
$resultado = mysqli_query($conexion, $consulta) or die (mysqli_error($conexion));

echo mysqli_num_rows($resultado).'->Registros en la tabla <br>';

        // Como objeto
        if(mysqli_num_rows($resultado) > 0){
         while($fila = mysqli_fetch_object($resultado) ){
                    echo '<div>' . $fila->nombre_auto. '<br>'. $fila->pais.'</div><hr>';
                    echo '<div>' . $fila->modelo. '<br>'. $fila->marca.'</div><hr>';
                }
            }else {
                exit ('No existen registros');
            }        

            mysqli_free_result($resultado);
mysqli_close($conexion);


        /* Como array asociativo
        if(mysqli_num_rows($resultado) > 0){
         while($fila = mysqli_fetch_assoc($resultado) ){
                    echo '<div>' . $fila['marca_auto']. '</div>';
                }
            }else {
                exit ('No existen registros');
            }        
        */
        
        /* Como array numerico
        if(mysqli_num_rows($resultado) > 0){
            while($fila = mysqli_fetch_array($resultado) ){
                echo '<div>' . $fila[0]. '</div>';
            }
        }else {
            exit ('No existen registros');
        }
        */

/////////////////////////////////////////////////////////////////////////////////////////////////
/*
$servidor = 'localhost';
$usuario = 'root';
$clave = '';
$base = 'autos';

$conexion = mysqli_connect($servidor, $usuario, $clave, $base);
    if ($conexion){
        mysqli_query($conexion,"SET CHARACTER SET 'utf8'");
        mysqli_query($conexion,"SET SESSION collation_connection ='utf8_unicode_ci'");
        exit ('Conexión exitosa a dB >>>' . $base);
    }else {
        exit ('Falló al intentar conectar a la DB >>>' . $base);
    }; 
*/


?>



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

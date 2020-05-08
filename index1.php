<?php 
// Base  autos
// Tabla iventario
// require("config/datos_conexion.php");


$servidor = 'localhost';
$usuario = 'root';
$clave = '';
$base = 'autos';

// $conexion = new mysqli($servidor, $usuario, $clave, $base );  Instanciando la clase mysqli o
$conexion = mysqli_connect($servidor, $usuario, $clave, $base ); 
$conexion->set_charset("utf8");

// echo $conexion->mysqli_connect_error;

$auto_id = 30;
$nombre_auto = 'Pikanto Ñandú';
$modelo = 2019;
$km_auto = 100000; 
$descripcion_auto = ' Update Comodo,  poco combustible';
$precio = 2000; 

// Limpiar datos
$limpio_auto_id = $conexion->escape_string($auto_id );
$limpio_nombre_auto =  $conexion->escape_string($nombre_auto ) ;

$consulta = "SELECT
                nombre_auto, id_marca,  modelo, km_auto, descripcion_auto, precio, fecha, marca, pais
             FROM 
              inventario, marcas
             WHERE
             inventario.id_marca = id ";
$resultado = $conexion->query($consulta) or die ($conexion->error);

echo $resultado->num_rows.'->Registros en la tabla <br>';
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_object()){
                        echo '<div>' . $fila->nombre_auto. '<br>'. $fila->modelo.'</div><hr>';
                    }
                }else {
                    exit ('No existen registros');
                }   
$resultado->free();
$conexion->close();

        /* Array asociativo         
           if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                        echo '<div>' . $fila['nombre_auto']. '<br>'. $fila['modelo'].'</div><hr>';
                        
                    }
                }else {
                    exit ('No existen registros');
                }   

        /* Array numerico
        if($resultado->num_rows > 0){
         while($fila = $resultado->fetch_array()){
                    echo '<div>' . $fila[0]. '<br>'. $fila[3].'</div><hr>';
                    
                }
            }else {
                exit ('No existen registros');
            }   
        */        

// Plantilla para insertar
/*
$consulta = "INSERT INTO 
            inventario (nombre_auto, modelo, km_auto, descripcion_auto, precio, fecha)
            VALUES
            ('$limpio_nombre_auto', $modelo, $km_auto, '$descripcion_auto', $precio, NOW())";
            $conexion->query($consulta) or die ($conexion->error);
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

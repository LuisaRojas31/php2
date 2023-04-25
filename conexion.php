<?php
// para crear variables en PHP se declara con $
$host="localhost";
$user="root"; // nombre del usuario
$pass=""; //sin espacio
$Db_name="Ejercicio";// nombre de la base de datos o el proyecto a crear
$con=mysqli_connect($host,$user,$pass,$Db_name); // variable que se utiliza para hacer consultas, 
// se invocan las variable en el orden que se declaran 

mysqli_set_charset($con,'utf8'); // muy importante esta linea

//si hay un error en la conexion de msqli
if(mysqli_connect_errno()){
    echo"Error en la conexcion"; // mostar un mensaje en PHP (ECO)
}
?>
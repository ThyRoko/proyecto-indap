<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$nombre = $_POST["nombre"]; 
$id = $_POST["id"];
$region = $_POST["region"];
$nacionalidad = $_POST["nacionalidad"];
$comuna = $_POST["comuna"];
$genero = $_POST["genero"];
$date = $_POST["date"];

$sql = "INSERT INTO public.personal (nombre,rut)
VALUES ('$nombre',$rut);

INSERT INTO public.usuario (id, region, nacionalidad, comuna, sexo,fecha_de_nacimiento, rut)
VALUES ($id, '$region', '$nacionalidad', '$comuna', '$genero', '$date',$rut);
";

$insercion = pg_query($coneccion,$sql);

if($insercion){
   echo "bienvenido a indap, esperamos poder seguir trabajando con usted";
}else{
    echo "los valores que ah ingresado ya existen en la base de datos";
}
echo "<br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>
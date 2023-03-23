<?php
@include 'config.php';

session_start();


if(!$conn)
{
  die("No hay conexion".mysqli_connect_error());
}
$username=$_POST["username"];
$password=$_POST["password"];

$query= mysqli_query($conn," SELECT * FROM user_form WHERE username = '".$username."' and password = '".$password."'");
$nr= mysqli_num_rows($query);

if($nr==1)
{
  header("Location: menu.php");

}

else if ($nr==0)
{
  echo "Usuario o contraseña incorrectas";
}

?>
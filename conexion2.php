<?php
header('Content-Type: text/html; charset=UTF-8');

function Conectar()
{
  $Servidor = "localhost";
  $Based = "precios";
  $Usuario = "root";
  $Clave = "";

  $conn = new mysqli($Servidor, $Usuario, $Clave, $Based);
  if ($conn->connect_errno)
  {
    var_dump($conn);
    exit;
  }
  return $conn;
}
?>
<?php

  $host="172.17.0.3";
  $usuario="root";
  $password="mysql";
  $base="multi_form";
  $conection= new mysqli($host, $usuario, $password, $base);
  $conection->set_charset("utf8");
  if ($conection -> connect_errno)
  {
  	die("Fallo la conexion:(".$conection -> mysqli_connect_errno().")".$conection-> mysqli_connect_error());
  }

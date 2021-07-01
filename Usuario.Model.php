<?php
class Usuario
{
  public function BuscarUsuario($use, $pass)
  {
    $con = new Conexion();
    $consulta=$con->query("SELECT * FROM `usuario` WHERE `Nombre`='$user' AND `pasword`='$pass');
    $con->close();
    return $consulta;
  }
}

?>

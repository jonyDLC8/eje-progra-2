<?php
include('Load.php');


if(isset($_GET['u']) && isset($_GET['m']))
{
    $User = $_GET['u'];
    $Metodo = $_GET['m'];
 echo "Hola";
}
else
{
 echo "Carga";
}


if(class_exists($User) && method_exists($User, $Metodo))
{
    $Ob = new $class();

    $Ob -> $Metodo;
}
else
{
echo "Erro 404 no found";
}
?>
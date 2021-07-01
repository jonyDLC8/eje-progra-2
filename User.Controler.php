<?php
  class User
    public function Login()
  {
    $personar=new Usuario();
    $user=$_POST['nombre'];
    $pass=$_POST['pass'];
    
    $dato=$persona->BuscarUsuario($user,$pass);
    var_dump($dato);
    $vec=mysqli_fetch_assoc($dato);
    echo"<br />";
    var_dump($vec);
    
    if($dato->num_rows==1)
    {
       $smarty->assing('$nombre','Inventario');
      $smarty->display('Inventario.tpl');
      }
    else
    {
      $smarty->display('Home.tpl');
    }
        
    }
  }
public function Update()
{
  echo"en update";
}

public function Delet()
{
  echo"en delet";
}
}
?>


?>

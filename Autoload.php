<?php
   function casgadorClase($class)
   {
     if(is_file('Controler/'.$class.'.Controller.php'))
     {
       include('Controler/'.$class.'.Controller.php');
     }
     else if(is_file('Model/'.$class.'.Model.php'))
     {
        include('Model/'.$class.'.Model.php');
     }
     else if(is_file('Framework/Smarty/'.$class.'.Class.php'))
     {
        include('Framework/Smarty/'.$class.'.Class.php');
     }
   }
spl_autoload_register('CargadorClase');
?>

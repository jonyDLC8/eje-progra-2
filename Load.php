<?php

function Cargador($User)
{
    
    if(is_file('Controller/'.$User.'.php'));
    {
        include('Controller/'.$User.'.php');

    
    }

    if (is_file('Model/'.$User.'.php'))
    {
        include('Model/'.$User.'.php');
    }

    else if (is_file('Smarty/'.$User.'.class.php'))
    {
        include('Smarty/'.$User.'class.php');
    }

}
spl_autoload_register("Cargador");


?>
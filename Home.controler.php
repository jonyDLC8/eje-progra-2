<?php
   Class Home
   {
     public fuction Inicio()
     {
       $marty=new Smarty();
      
       $smarty->assiogn('nombre','Home');
       $smarty->display('Home.tpl');
     }
   }
?>

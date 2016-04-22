<?php
// "Mainos" sessiomuuttujien mukaan
if (isset($_SESSION['valikko']))
{
   foreach ($_SESSION['valikko'] as $arvo)
   {
      echo $arvo["sisalto"];
  
   }
}   
?>  
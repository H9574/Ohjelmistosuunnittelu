<?php
// "Mainos" sessiomuuttujien mukaan
if (isset($_SESSION['valikko']))
{
    echo "<strong>{$_SESSION['kokonimi']}!</strong><br>";
   foreach ($_SESSION['valikko'] as $arvo)
   {
      echo $arvo["sisalto"];

   }
}
?>

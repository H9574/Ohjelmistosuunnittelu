<?php
require_once ("/home/H9574/php-dbconfig/db-init.php");
 
//Elli kirjoitti alla olevan regular expression rivin
$malli = "^[a-zA-Z-0-9-åäöÅÖÄ]+$";
 
 
$kauttaja = $_POST['kauttaja'];
$salasana = $_POST['salasana'];
$mainos = $_POST['mainos'];
 
//Eka rivitarkistus
$s = <<< EOSSPAN
<span style="color:black;background-color:#ffff00">
EOSSPAN;
$e = "</span>";
 
if (isset($malli) AND isset($_POST['kauttaja']))
{
   $n_malli = htmlspecialchars($malli);
   echo " <br>Käyttäjänimi : $kauttaja\n";
   echo " <br>Salasana : $salasana\n";
   echo " <br>Kiinnostus : $mainos\n";
  
   $pattern = "/{$malli}/";
   if (preg_match($pattern, $_POST['kauttaja'], $matches) | preg_match($pattern, $_POST['salasana'], $matches))
   {
    $db->exec("INSERT INTO users VALUES ('$kauttaja', PASSWORD('$salasana'), '$mainos');");
    echo "<br><br>Lisääminen onnistui!<a href='login.php'>[Kirjaudu sisään tunnuksillasi]</a> ";
     
   }
   else
   {
      echo "<br><br><strong>Ei kelpaa! Laittomia merkkejä!</strong>";
   }
}
?>
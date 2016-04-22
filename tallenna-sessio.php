<?php
session_start();
  
// Mainoksia :
$ekologinen = <<<EOD1
Hautausurakoitsija mainos<ul>
<li><a href="http://www.ekohautaus.fi/">Ekohautaus</a>
EOD1;
 
$Jalkapallo = <<<EOD2
Urheilumainoksia<ul>
<li><a href="http://www.tul.fi/">Jalkapallo</a></ul>
EOD2;
  
$lemmikki = <<<EOD3
Eläinmainos<ul>
<li><a href="http://elaintentaytto.fi/">Eläimentäyttö</a></ul>
EOD3;
  
$hautaus = <<<EOD4
Hautausurakoitsija mainos<ul>
<li><a href="http://www.hautaus.fi/">Hautaus</a></ul>
EOD4;
 
$urheilu = <<<EOD5
urheilu mainos<ul>
<li><a href="http://www.sul.fi/">SUL</a>
EOD5;
 
$Elaimet = <<<EOD6
lemmikki mainos<ul>
<li><a href="http://www.elainlaakariasemalemmikki.fi/?lang=fi">Eläinlääkäriasema</a>
EOD6;
  
$linkit  = array("ekologinen" => $ekologinen,
                 "Jalkapallo" => $Jalkapallo,
                 "lemmikki" => $lemmikki,
                 "hautaus" => $hautaus,
                 "urheilu" => $urheilu,
                 "Elaimet" => $Elaimet); 
  
// Uudet profiiliasetukset syötetty:
if (isset($_GET['nappi']) and isset($_GET['harrastus'])) {
  // Nollataan aiemmat valinnat:
  $_SESSION['valikko']  = array("ekologinen"   => array("sisalto" => "","rasti" => ""),
                                "Jalkapallo" => array("sisalto" => "","rasti" => ""),
                                "lemmikki"  => array("sisalto" => "","rasti" => ""),
                                "hautaus"   => array("sisalto" => "","rasti" => ""),
                                "urheilu" => array("sisalto" => "","rasti" => ""),
                                "Elaimet"  => array("sisalto" => "","rasti" => ""));    
      
   foreach ($_GET['harrastus'] as $arvo)
   {
      $_SESSION['valikko']["$arvo"]['sisalto'] = $linkit["$arvo"];
      $_SESSION['valikko']["$arvo"]['rasti'] = " selected";
   }
     
} 
/*
if ($_GET['nappi'] == "Tyhjennä profiili") {
   unset($_SESSION['valikko']);
}
 */
  
header("Location: http://".$_SERVER['HTTP_HOST']
                       ."/".dirname($_SERVER['PHP_SELF'])
                       ."/Etusivu.php");
 
?>
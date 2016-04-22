<?php
//Ellin tekemä!!!
 
//Kysymysten lukumäärä kiinteä
$kysymyslkm = 6;
 
// Pisteet lasketaan vain, jos lomakkeen painiketta on painettu
if (!isset($_POST['painike'])){
   lomake();
} else {
   $pisteet = anna_pisteet($kysymyslkm);
    
   echo "Kokonaispistemäärä: <em>$pisteet pistettä</em>";
    echo '<br><span style="border-top: solid black thin; background-color:#eee"> Sinun sielun kumppanisi olisi:</span><br>';
    if ($pisteet > 20){
        echo '<h3> Hevonen </h3><br>';
        }
    if ($pisteet > 10 && $pisteet <= 20){
        echo '<h3> Doge </h3><br>';
    }
    if ($pisteet > 5 && $pisteet <= 10){
        echo '<h3> Kissa </h3><br>';
    }
    if ($pisteet >= 0 && $pisteet <= 5){
        echo '<h3> Kultakala </h3><br>';
    }
    if ($pisteet < 0) {
        echo '<h3> Sinulla ei pitäisi olla lemmikkiä </h3><br>';
    }
}
function lomake()
{
?>
   <h3 style="border-top: solid thin black;
  color:#000;background-color:#eee">
  Mikä lemmikki on kuin luotu sinulle?</h3>
  <em>Muista vastata harkiten verrattuna keskiverto ihmiseen <3</em><br><br>
<fieldset>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
 
   <span style="border-top: solid black thin;
   background-color:#eee">
   1. Pelkäätkö kuolleita hiiriä?</span><br>
  <input type="radio" name="kysymys1" value="1">
  Kyllä<br>
  <input type="radio" name="kysymys1" value="3">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   2. Oletko urheilullinen?</span><br>
  <input type="radio" name="kysymys2" value="5">
  Kyllä<br>
  <input type="radio" name="kysymys2" value="-2">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   3. Pelkäätkö isoja eläimiä?</span><br>
  <input type="radio" name="kysymys3" value="0">
  Kyllä<br>
  <input type="radio" name="kysymys3" value="5">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   4. Oletko rikas?</span><br>
  <input type="radio" name="kysymys4" value="10">
  Kyllä<br>
  <input type="radio" name="kysymys4" value="0">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   5. Onko hajuaistisi hyvä?</span><br>
  <input type="radio" name="kysymys5" value="1">
  Kyllä<br>
  <input type="radio" name="kysymys5" value="5">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   6. Pidätkö eläimistä?</span><br>
  <input type="radio" name="kysymys6" value="0">
  Kyllä<br>
  <input type="radio" name="kysymys6" value="-50">
  Ei<br>
 
  <input type="submit" name="painike" value="Lähetä">
</form>
</fieldset>
<?php
} //lomake()
function anna_pisteet($kysymyslkm)
{
  $oikea_lkm = 0;
  for($i = 1; $i <= $kysymyslkm; $i++) {
     $kohta = "kysymys$i";
     if (isset($_POST[$kohta])) { // Onko käyttäjä vastannut
           echo ("$$kohta: $_POST[$kohta]<br>\n");
           $oikea_lkm += $_POST[$kohta];
     }
  }
  return $oikea_lkm;
}
?>
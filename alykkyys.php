<?php
//Ellin tekemä!!!
 
//Kysymysten lukumäärä kiinteä
$kysymyslkm = 7;
 
// Pisteet lasketaan vain, jos lomakkeen painiketta on painettu
if (!isset($_POST['painike'])){
   lomake();
} else {
    $pisteet = anna_pisteet($kysymyslkm);
    echo "Kokonaispistemäärä: <em>$pisteet pistettä</em>";
    echo '<br><span style="border-top: solid black thin; background-color:#eee"> Älykkyytesi on luokkaa:</span><br>';
    if ($pisteet == 7){
        echo '<h3> Olet älykäs lapsi </h3><br>';
        }
    if ($pisteet < 7 && $pisteet >= 5){
        echo '<h3> Olet aika keskiverto. MEH </h3><br>';
    }
    if ($pisteet < 5 && $pisteet >= 3){
        echo '<h3> Hiton älykääpiö </h3><br>';
    }
     
    if ($pisteet < 3) {
        echo '<h3> Olet tyhnä kuin saapas ja rumaku kissan kakka </h3><br>';
    }
}
function lomake()
{
?>
   <h3 style="border-top: solid thin black;
  color:#000;background-color:#eee">
 Kuinka älykäs oikeasti olet?</h3>
  <em>Valitse vastauksesi tarkoin.</em><br><br>
 
<fieldset>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
 
   <span style="border-top: solid black thin;
   background-color:#eee">
   1. Mikä ei kuulu joukkoon?</span><br>
  <input type="radio" name="kysymys1" value="0">
 Kissa<br>
  <input type="radio" name="kysymys1" value="0">
  Leijona<br>
<input type="radio" name="kysymys1" value="0">
  Tiikeri<br>
  <input type="radio" name="kysymys1" value="1">
  Susi<br>
  <input type="radio" name="kysymys1" value="0">
  Pantteri<br>
  <input type="radio" name="kysymys1" value="0">
  Puuma<br>
   
   
  <span style="border-top: solid black thin;
   background-color:#eee">
   2. Mikä ei kuulu joukkoon?</span><br>
  <input type="radio" name="kysymys2" value="1">
  Kaali<br>
  <input type="radio" name="kysymys2" value="0">
  Omena<br>
   <input type="radio" name="kysymys2" value="0">
  Päärynä<br>
   <input type="radio" name="kysymys2" value="0">
 Mandariini<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   3. Sanooko kissa mau?</span><br>
  <input type="radio" name="kysymys3" value="1">
  Kyllä<br>
  <input type="radio" name="kysymys3" value="0">
  Ei<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   4. Mikä on seuraava luku: 3,6,9,12,15...</span><br>
  <input type="radio" name="kysymys4" value="1">
  18<br>
  <input type="radio" name="kysymys4" value="0">
  22<br>
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   5. Pyöreässä talossa tapahtui murha. Asukkaita kuulusteltiin: isäntä sanoi että hän oli tietokoneella, lapset vastasivat että he leikkivät, emäntä sanoi tekevänsä ruokaa ja siivooja vastasi: siivosin nurkkia. Kuka heistä teki murhan?</span><br>
  <input type="radio" name="kysymys5" value="0">
  Lapset<br>
  <input type="radio" name="kysymys5" value="1">
  Siivooja<br>
  <input type="radio" name="kysymys5" value="0">
  Äiti<br>
<input type="radio" name="kysymys5" value="0">
  Ketään ei murhattu<br>
 
 
  <span style="border-top: solid black thin;
   background-color:#eee">
   6. Miksi kettu metsästäjää paetessaan aina juoksee tien yli?</span><br>
  <input type="radio" name="kysymys6" value="1">
  Koska ei pääse alikaan.<br>
  <input type="radio" name="kysymys6" value="0">
  Kettu yrittää saada metsästäjän jäämään auton alle<br>
   <input type="radio" name="kysymys6" value="0">
  Kettu juoksee nopeammin tiellä.<br>
 
    <span style="border-top: solid black thin;
   background-color:#eee">
   7. Lotta ja hiili-- mitä kummaa niillä on yhteistä?</span><br>
  <input type="radio" name="kysymys7" value="1">
  Ne ovat kummatkin jylsijöitä. <br>
  <input type="radio" name="kysymys7" value="0">
 Yhtä monta kirjainta<br>
   <input type="radio" name="kysymys7" value="0">
  Ei mitään.<br>
   
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
     if (isset($_POST[$kohta])) {
           echo ("$$kohta: $_POST[$kohta]<br>\n");
           $oikea_lkm += $_POST[$kohta];
     }
  }
  return $oikea_lkm;
}
?>